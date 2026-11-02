
<?php
session_start();

if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    http_response_code(401);
    exit("Unauthorized access");
}
require_once "db.php";

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode([
        "success" => false,
        "message" => "Invalid request method."
    ]);
    exit;
}

$name = trim($_POST["name"] ?? "");
$description = trim($_POST["description"] ?? "");
$price = $_POST["price"] ?? "";
$categoryId = $_POST["category_id"] ?? "";

if (
    $name === "" ||
    $description === "" ||
    !is_numeric($price) ||
    (float)$price < 0 ||
    !ctype_digit((string)$categoryId) ||
    (int)$categoryId < 1
) {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "message" => "Please enter valid product details."
    ]);
    exit;
}

try {
    // Check category
    $check = $pdo->prepare(
        "SELECT id FROM categories WHERE id = ?"
    );

    $check->execute([(int)$categoryId]);

    if (!$check->fetch()) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" => "Selected category does not exist."
        ]);
        exit;
    }

    $imagePath = null;

    // Upload image if selected
    if (isset($_FILES["image"]) &&
        $_FILES["image"]["error"] !== UPLOAD_ERR_NO_FILE) {

        if ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
            throw new Exception("Image upload failed.");
        }

        if ($_FILES["image"]["size"] > 5 * 1024 * 1024) {
            throw new Exception("Image must be smaller than 5 MB.");
        }

        $allowedTypes = [
            "image/jpeg" => "jpg",
            "image/png" => "png",
            "image/webp" => "webp"
        ];

        $mimeType = mime_content_type($_FILES["image"]["tmp_name"]);

        if (!isset($allowedTypes[$mimeType])) {
            throw new Exception("Only JPG, PNG and WEBP images are allowed.");
        }

        $uploadDirectory = __DIR__ . "/uploads/";

        if (!is_dir($uploadDirectory)) {
            throw new Exception("Uploads folder does not exist.");
        }

        $fileName = bin2hex(random_bytes(16)) . "." . $allowedTypes[$mimeType];

        if (!move_uploaded_file(
            $_FILES["image"]["tmp_name"],
            $uploadDirectory . $fileName
        )) {
            throw new Exception("Could not save image.");
        }

        $imagePath = "uploads/" . $fileName;
    }

    // Insert product into MySQL
    $stmt = $pdo->prepare(
        "INSERT INTO products
        (name, description, price, category_id, image)
        VALUES (?, ?, ?, ?, ?)"
    );

    $stmt->execute([
        $name,
        $description,
        (float)$price,
        (int)$categoryId,
        $imagePath
    ]);

    echo json_encode([
        "success" => true,
        "message" => "Product added successfully."
    ]);

} catch (Exception $e) {
    if (!empty($imagePath)) {
        $file = __DIR__ . "/" . $imagePath;

        if (is_file($file)) {
            unlink($file);
        }
    }

    error_log($e->getMessage());

    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => $e->getMessage()
    ]);
}
?>
