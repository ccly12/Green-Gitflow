<?php
include 'components/connection.php';
session_start();
if (isset($_SESSION['user_id'])) { 
    $user_id = $_SESSION['user_id'];
    }else{ 
        $user_id = '';
    }

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
    <title>Green</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>Contacto</h1>
        </div>
        <div class="title2">
            <a href="home.php">home </a><span>/ Contacto</span>
        </div>
        <section class="services">
            <div class="box-container">
                <div class="box">
                    <img src="img/icon2.png">
                    <div class="detail">
                        <h3>AHORRA</h3>
                        <p>En tus ordenes</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon1.png">
                    <div class="detail">
                        <h3>Atencion</h3>
                        <p>24/7</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon0.png">
                    <div class="detail">
                        <h3>Sorpresas</h3>
                        <p>En tus compras</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon.png">
                    <div class="detail">
                        <h3>Entregas</h3>
                        <p>A domicilio</p>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="form-container">
            <form method="post">
                <div class="title">
                    <img src="img/download.png" class="logo">
                    <h1>leave a message</h1>
                </div>
                <div class="input-field">
                    <p>your name <sup>*</sup></p>
                    <input type="text" name="name">
                </div>
                <div class="input-field">
                    <p>your email <sup>*</sup></p>
                    <input type="email" name="email">
                </div>
                <div class="input-field">
                    <p>your number <sup>*</sup></p> <input type="text" name="number">
                </div>
                <div class="input-field">
                    <p>your message <sup>*</sup></p>
                    <textarea name="message"></textarea>
                </div>
                <button type="submit" name="submit-btn" class="btn">send message</button>
            </form>
            
        </div>
        <div class="address">
                <div class="title">
                    <img src="img/download.png" class="logo">
                    <h1>contact detail</h1> 
                    <p>"Vive el sabor en nuestra cafetería verde. ¡Tu oasis de café fresco te espera!"</p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>DIRECCION</h4>
                            <p>7av 1-41  Guatemala</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="bx bxs-phone-call"></i>
                        <div>
                            <h4>phone number</h4>
                            <p>+50245122245</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>email</h4>
                            <p>Lisa@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        <!----->
        <?php include'components/footer.php';?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>