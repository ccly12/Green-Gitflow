<?php
include 'components/connection.php';
session_start();

// Verificar la sesión y obtener el ID del usuario si está conectado
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Verificar si se proporciona el ID del pedido
    if (isset($_GET['order_id'])) {
        $order_id = $_GET['order_id'];

        // Consulta para obtener los detalles del pedido
        $stmt = $conn->prepare("SELECT * FROM orders WHERE order_id = ? AND user_id = ?");
        $stmt->execute([$order_id, $user_id]);
        $order = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$order) {
  
            header("location: order.php");
            exit();
        }

    } else {
   
        header("location: order.php");
        exit();
    }

} else {

    header("location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="/Greem/image/favicon.ico">
    <link rel="shortcut icon" href="/Green/image/green.png">
    <title>Detalles del Pedido</title>
    <style type="text/css">
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>Detalles del Pedido</h1>
        </div
    
        <div class="order-details">
            <h2>ID del Pedido: <?php echo $order['order_id']; ?></h2>
            <p>Fecha del Pedido: <?php echo $order['order_date']; ?></p>
            <p>Total: <?php echo $order['total_amount']; ?></p>
           
        </div>

    </div>
    <?php include 'components/footer.php'; ?>
</body>
</html>
