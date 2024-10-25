<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Página de Pago</title>
</head>
<body>
    <h1>Pagar</h1>
    <iframe name="paymentFrame" src="https://secure.micuentaweb.pe/vads-payment/form.php" width="600" height="550" scrolling="no"></iframe>
    <form method="POST" action="https://secure.micuentaweb.pe/vads-payment/" target="paymentFrame">
        <input type="hidden" name="vads_action_mode" value="IFRAME">
        <input type="hidden" name="vads_amount" value="<?php echo $_SESSION['cart_total'] * 100; ?>">
        <input type="hidden" name="vads_currency" value="USD">
        <input type="hidden" name="vads_cust_email" value="customer@example.com">
        <button type="submit">Pagar Ahora</button>
    </form>
</body>
</html>