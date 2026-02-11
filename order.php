<?php
include 'components/connection.php';
session_start();

// Verificar la sesión y obtener el ID del usuario si está conectado
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Consulta para obtener los pedidos del usuario
    $stmt = $conn->prepare("SELECT * FROM orders WHERE user_id = ?");
    $stmt->execute([$user_id]);
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

} else {
    // Si el usuario no está conectado, redirigir a la página de inicio de sesión
    header("location: login.php");
    exit();
}

// Aquí puedes agregar más lógica según tus necesidades

?>

<!-- Aquí irá tu código HTML y contenido específico de la página order.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="/Greem/image/favicon.ico">
    <link rel="shortcut icon" href="/Green/image/green.png">
    <title>Tus Pedidos</title>
    <style type="text/css">
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>Tus Pedidos</h1>
        </div>

        <!-- Mostrar la lista de pedidos del usuario -->
        <div class="order-list">
            <?php if (!empty($orders)): ?>
                <table>
                    <tr>
                        <th>ID del Pedido</th>
                        <th>Fecha</th>
                        <th>Total</th>
                    </tr>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?php echo $order['order_id']; ?></td>
                            <td><?php echo $order['order_date']; ?></td>
                            <td><?php echo $order['total_amount']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else: ?>
                <p>No tienes pedidos realizados.</p>
            <?php endif; ?>
        </div>

        <!-- Aquí puedes agregar más contenido según tus necesidades -->

    </div>
    <?php include 'components/footer.php'; ?>
</body>
</html>
