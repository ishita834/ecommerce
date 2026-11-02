
<?php
session_start();
require_once "db.php";

header("Content-Type: application/json");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$data = json_decode(file_get_contents("php://input"), true);

$productId = (int)($data['id'] ?? 0);

$stmt = $pdo->prepare(
    "SELECT id, name, price, image FROM products WHERE id = ?"
);

$stmt->execute([$productId]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    http_response_code(404);
    echo json_encode([
        "success" => false,
        "message" => "Product not found."
    ]);
    exit;
}

if (isset($_SESSION['cart'][$productId])) {
    $_SESSION['cart'][$productId]['quantity']++;
} else {
    $_SESSION['cart'][$productId] = [
        "id" => (int)$product['id'],
        "name" => $product['name'],
        "price" => (float)$product['price'],
        "image" => $product['image'],
        "quantity" => 1
    ];
}

$count = array_sum(
    array_column($_SESSION['cart'], 'quantity')
);

echo json_encode([
    "success" => true,
    "cartCount" => $count
]);
