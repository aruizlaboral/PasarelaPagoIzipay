<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tienda de Zapatillas</title>
</head>
<body>
    <h1>Tienda de Zapatillas</h1>
    <div class="product-list">
        <?php
        include 'db.php';
        $result = mysqli_query($conn, "SELECT * FROM products");
        while ($product = mysqli_fetch_assoc($result)) {
        ?>
            <div class="product">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h3><?php echo $product['name']; ?></h3>
                <p>$<?php echo $product['price']; ?></p>
                <button onclick="addToCart(<?php echo $product['id']; ?>)">Agregar al Carrito</button>
            </div>
        <?php } ?>
    </div>
    <a href="cart.php">Ver Carrito</a>
    <script src="script.js"></script>
</body>
</html>