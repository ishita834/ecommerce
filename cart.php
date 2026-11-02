
<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Remove product from cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_id'])) {
    $removeId = (int)$_POST['remove_id'];
    unset($_SESSION['cart'][$removeId]);

    header("Location: cart.php");
    exit;
}

$cart = $_SESSION['cart'];
$total = 0;
$count = array_sum(array_column($cart, 'quantity'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart - ShopEase</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            padding: 30px;
            background: #f7f7f7;
            color: #222;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            margin-bottom: 25px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 18px 0;
            border-bottom: 1px solid #ddd;
        }

        .cart-item img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-info {
            flex: 1;
        }

        .remove-btn {
            background: #e63946;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .total {
            text-align: right;
            margin-top: 25px;
            font-size: 23px;
            font-weight: bold;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            background: #222;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .empty {
            text-align: center;
            padding: 35px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>My Shopping Cart 🛒</h1>

    <?php if (empty($cart)): ?>

        <div class="empty">
            <h2>Your cart is empty!</h2>
            <p>Add some products to continue shopping.</p>
            <a href="index0.php" class="back-btn">Continue Shopping</a>
        </div>

    <?php else: ?>

        <?php foreach ($cart as $item): ?>

            <?php
            $subtotal = $item['price'] * $item['quantity'];
            $total += $subtotal;
            ?>

            <div class="cart-item">

                <?php if (!empty($item['image'])): ?>
                    <img
                        src="<?php echo htmlspecialchars($item['image']); ?>"
                        alt="Product">
                <?php endif; ?>

                <div class="product-info">

                    <h3>
                        <?php echo htmlspecialchars($item['name']); ?>
                    </h3>

                    <p>
                        Price: ₹<?php echo number_format($item['price'], 2); ?>
                    </p>

                    <p>
                        Quantity: <?php echo (int)$item['quantity']; ?>
                    </p>

                    <p>
                        Subtotal: ₹<?php echo number_format($subtotal, 2); ?>
                    </p>

                </div>

                <form method="POST">
                    <input
                        type="hidden"
                        name="remove_id"
                        value="<?php echo (int)$item['id']; ?>">

                    <button class="remove-btn" type="submit">
                        Remove
                    </button>
                </form>

            </div>

        <?php endforeach; ?>

        <div class="total">
            Total: ₹<?php echo number_format($total, 2); ?>
        </div>

        <a href="index0.php" class="back-btn">
            Continue Shopping
        </a>

    <?php endif; ?>

</div>

</body>
</html>
