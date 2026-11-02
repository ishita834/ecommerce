
<?php
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

$id = $_POST["id"] ?? "";
$name = trim($_POST["name"] ?? "");
$description = trim($_POST["description"] ?? "");
$price = $_POST["price"] ?? "";
$categoryId = $_POST["category_id"] ?? "";
$image = trim($_POST["image"] ?? "");

if (
    !ctype_digit((string)$id) || (int)$id < 1 ||
    $name === "" ||
    $description === "" ||
    !is_numeric($price) || (float)$price < 0 ||
    !ctype_digit((string)$categoryId) || (int)$categoryId < 1
) {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "message" => "Please enter valid product details."
    ]);
    exit;
}

try {
    // Check whether the product exists
    $checkProduct = $pdo->prepare(
        "SELECT id FROM products WHERE id = ?"
    );
    $checkProduct->execute([(int)$id]);

    if (!$checkProduct->fetch()) {
        http_response_code(404);
        echo json_encode([
            "success" => false,
            "message" => "Product not found."
        ]);
        exit;
    }

    // Check whether the selected category exists
    $checkCategory = $pdo->prepare(
        "SELECT id FROM categories WHERE id = ?"
    );
    $checkCategory->execute([(int)$categoryId]);

    if (!$checkCategory->fetch()) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" => "Selected category does not exist."
        ]);
        exit;
    }

    // Update the existing product
    // If image is empty, keep the old image.
    $stmt = $pdo->prepare(
        "UPDATE products
         SET name = ?,
             description = ?,
             price = ?,
             category_id = ?,
             image = CASE WHEN ? = '' THEN image ELSE ? END
         WHERE id = ?"
    );

    $stmt->execute([
        $name,
        $description,
        (float)$price,
        (int)$categoryId,
        $image,
        $image,
        (int)$id
    ]);

    echo json_encode([
        "success" => true,
        "message" => "Product updated successfully."
    ]);

} catch (PDOException $e) {
    error_log($e->getMessage());

    http_response_code(500);
    echo json_encode([
        "success" => false,
        "message" => "Could not update product."
    ]);
}
?>
