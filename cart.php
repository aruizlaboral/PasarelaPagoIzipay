<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <div class="cart-items">
        <?php
        foreach ($_SESSION['cart'] as $id => $quantity) {
            $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
            $product = mysqli_fetch_assoc($result);
            echo "<div class='cart-item'>";
            echo "<h3>{$product['name']}</h3>";
            echo "<p>Cantidad: $quantity</p>";
            echo "<p>Total: " . ($product['price'] * $quantity) . "</p>";
            echo "</div>";
        }
        ?>
    </div>
    <a href="checkout.php">Ir al Pago</a>
</body>
</html>