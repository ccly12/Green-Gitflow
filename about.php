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
    <title>CAFETERIA  about us </title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>Conocenos</h1>
        </div>
        <div class="title2">
            <a href="home.php">home </a><span>/ about</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="img/3.webp">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.webp">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/about.png">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/1.webp">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <section class="services">
            <div class="title">
                <img src="img/download.png" class="logo">
                <h1>POR QUE ELEGIRNOS</h1>
                <p>Elige Green coffee, tenemos mucha variedad en productos</p>
            <div class="box-container">
                <div class="box">
                    <img src="img/icon2.png">
                    <div class="detail">
                        <h3>Ahorra</h3>
                        <p>En tus ordenes</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon1.png">
                    <div class="detail">
                        <h3>Atencion </h3>
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
                        <p>a domicilio</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="about">
            <div class="row">
                <div class="img-box">
                    <img src="img/3.png">
                </div>
                <div class="detail">
                    <h1>visite nuestro hermoso showroom!</h1>
                    <p>Nuestro showroom es una expresión de lo que nos gusta hacer; ser creativos con los arreglos 
                        y plantas.
        
                        Si usted está buscando un florista para su boda perfecta, o simplemente quiere elevar 
                        cualquier habitación
                        con una decoración única, Blossom With Love puede ayudarle.</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <div class="testimonial-container">
            <div class="title">
                <img src="img/download.png" class="logo">
                <h1>what people say about us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Architecto dolorum deserunt minus
                    veniam tenetur
                </p>
            </div>
                <div class="container">
                    <div class="testimonial-item active">
                        <img src="img/01.jpg">
                        <h1>sara smith</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                             ex ea commodo consequat.</p>
                    </div>
                    <div class="testimonial-item ">
                        <img src="img/02.jpg">
                        <h1>Yony smith</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                             ex ea commodo consequat.</p>
                    </div>
                    <div class="testimonial-item ">
                        <img src="img/03.jpg">
                        <h1>Jeny  smith</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                             ex ea commodo consequat.</p>
                    </div>
                    <div class="left-arrow" onclick="nextSlide()"><1 class="bx bxs-left-arrow-alt"></i></div>
                    <div class="right-arrow" onclick="prevtSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                </div> 
            </div>
        </div>
        <!---->
        <?php include 'components/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>