
<?php
require_once "db.php";

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
    exit;
}

$name = trim($_POST["name"] ?? "");
$description = trim($_POST["description"] ?? "");
$price = $_POST["price"] ?? "";
$categoryId = $_POST["category_id"] ?? "";
$image = trim($_POST["image"] ?? "");

if ($name === "" || $description === "" ||
    !is_numeric($price) || (float)$price < 0 ||
    !ctype_digit((string)$categoryId) || (int)$categoryId < 1) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Please enter valid product details."]);
    exit;
}

try {
    $check = $pdo->prepare("SELECT id FROM categories WHERE id = ?");
    $check->execute([(int)$categoryId]);

    if (!$check->fetch()) {
        http_response_code(400);
        echo json_encode(["success" => false, "message" => "Selected category does not exist."]);
        exit;
    }

    $stmt = $pdo->prepare(
        "INSERT INTO products (name, description, price, category_id, image)
         VALUES (?, ?, ?, ?, ?)"
    );

    $stmt->execute([
        $name,
        $description,
        (float)$price,
        (int)$categoryId,
        $image
    ]);

    echo json_encode([
        "success" => true,
        "message" => "Product saved successfully.",
        "id" => $pdo->lastInsertId()
    ]);

} catch (PDOException $e) {
    error_log($e->getMessage());
    http_response_code(500);
    echo json_encode(["success" => false, "message" => "Could not save the product."]);
}
