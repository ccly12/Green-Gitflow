<?php
include 'components/connection.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}
?>

<style type="text/css">
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="/Greem/image/favicon.ico">
    <link rel="shortcut icon" href="/Green/image/green.png">
    <title>Checkout</title>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <div class="main">
        <div class="checkout-details">
            <h2>Detalles de Envío</h2>

            <form action="confirm_order.php" method="post">
                <label for="fullname">Nombre Completo:</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="address">Dirección de Envío:</label>
                <textarea id="address" name="address" required></textarea>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <h2>Detalles de Pago</h2>

                <label for="cardholder">Nombre del Titular de la Tarjeta:</label>
                <input type="text" id="cardholder" name="cardholder" required>

                <label for="cardnumber">Número de Tarjeta:</label>
                <input type="text" id="cardnumber" name="cardnumber" required>

                <label for="expiration">Fecha de Expiración:</label>
                <input type="text" id="expiration" name="expiration" placeholder="MM/YY" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>

                <button type="submit" class="btn">Confirmar Orden</button>
            </form>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>

</body>

</html>
