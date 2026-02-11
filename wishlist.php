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
</head>

<body>
    <?php include 'components/header.php'; ?>

    <div class="main">
        <h2>Lista de Deseos</h2>

        <?php
    
        $wishlistedProducts = array(); 

        foreach ($wishlistedProducts as $product) {
            echo '<div class="product">';
            echo '<img src="' . $product['image_url'] . '" alt="' . $product['name'] . '">';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>Precio: $' . $product['price'] . '</p>';
            echo '<a href="view_product.php?id=' . $product['id'] . '" class="btn">Ver Detalles</a>';
            echo '</div>';
        }
        ?>

    </div>

    <?php include 'components/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>

</body>

</html>
