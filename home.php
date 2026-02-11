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

    <title>Green Tea </title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <?php include 'components/footer.php'; ?>
        <section class="home-section">
        <div class="slider">
            <div class="slider_slider slide1"><div>
                <div class=overlay></div>
                <div class="slide-datal1">
                    <h1>lorem ipsum dolor sit </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, cum? Corrupti placeat ex</p>
                    <a href="view_products.php" class="btn" > shop now </a> 
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!--LIST-->
            <div class="slider_slider slide2"><div>
                <div class=overlay></div>
                <div class="slide-datal1">
                    <h1>Bienvenido a tu compra </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, cum? Corrupti placeat ex</p>
                    <a href="view_products.php" class="btn" > shop now </a> 
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!--LIST-->
            <div class="slider_slider slide3"><div>
                <div class=overlay></div>
                <div class="slide-datal1">
                    <h1>lorem ipsum dolor sit </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, cum? Corrupti placeat ex</p>
                    <a href="view_products.php" class="btn" > shop now </a> 
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!--LIST-->
            <div class="slider_slider slide4"><div>
                <div class=overlay></div>
                <div class="slide-datal1">
                    <h1>lorem ipsum dolor sit </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, cum? Corrupti placeat ex</p>
                    <a href="view_products.php" class="btn" > shop now </a> 
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!--LIST-->
            <div class="slider_slider slide5"><div>
                <div class=overlay></div>
                <div class="slide-datal1">
                    <h1>lorem ipsum dolor sit </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, cum? Corrupti placeat ex</p>
                    <a href="view_products.php" class="btn" > shop now </a> 
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!--LIST-->
            <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
            <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
        </div>
    </section>
    <!--Home slider end-->
    <section class="thumb">
        <div class="box-container">
            <div class="box">
                <img src="img/thumb2.jpg">
                <h3>green tea</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="box">
                <img src="img/thumb0.jpg">
                <h3>green tea</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="box">
                <img src="img/thumb1.jpg">
                <h3>green tea</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="box">
                <img src="img/thumb.jpg">
                <h3>green tea</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                <i class="bx bx-chevron-right"></i>
            </div>
         </div>
        </section>
        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="img/about-us.jpg">
                </div>
                <div class="box">
                    <img src="img/download.png">
                    <span>healthy tea</span>
                    <h1>save up to 50% off</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adialiquip </p>
                </div>
            </div>
        </section>
        <section class="shop">
            <div class="title">
                <img src="img/download.png">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="img/about.jpg">
                <div class="row-detail">
                    <img src="img/basil.jpg">
                    <div class="top-footer">
                        <h1>a cup of green tea makes you healthy</h1>
                    </div>
                </div>
            </div>
            <div class="box-container"> 
                <div class="box">
                    <img src="img/card.jpg">
                    <a href="view_products.php" class="btn">shop nowk</a>
                </div>
            </div>
            <div class="box">
                    <img src="img/card0.jpg">
                    <a href="view_products.php"class="btn">shop nowk</a>
                </div>
                <div class="box">
                    <img src="img/card1.jpg">
                    <a href="view_products.php"class="btn">shop nowk</a>
                </div>
                <div class="box">
                    <img src="img/card2.jpg">
                    <a href="view_products.php"class="btn">shop nowk</a>
                </div>
                <div class="box">
                    <img src="img/10.jpg">
                    <a href="view_products.php"class="btn">shop nowk</a>
                </div>
                <div class="box">
                    <img src="img/6.webp">
                    <a href="view_products.php"class="btn">shop nowk</a>
                </div>
        </section>
        <section class="shop-category">
            <div class="box-container">
                <div class="box">
                    <img src="img/6.jpg">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% off </h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="img/7.jpg">
                    <div class="detail">
                        <span>new in taste</span>
                        <h1>coffee house</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </section>
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
        <section class="brand">
            <div class="box-container">
                <div class="box">
                    <img src="img/brand (1).jpg">
                </div>
                <div class="box">
                    <img src="img/brand (2).jpg">
                </div>
                <div class="box">
                    <img src="img/brand (3).jpg">
                </div>
                <div class="box">
                    <img src="img/brand (4).jpg">
                </div>
                <div class="box">
                    <img src="img/brand (5).jpg">
                </div>
            </div>
        </section>
        <!---->
        <?php include'components/footer.php';?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>