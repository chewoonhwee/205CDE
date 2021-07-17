<?php 
session_start();

// if (isset($_GET['logout'])) {
//     session_destroy();
//     unset($_SESSION['user_id']);
//     header("location: login.php");
// }
?>
<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Kap’s Pizzeria</title>
            <!-- bootstrap CDN -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- fontAwesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
            <!-- owl carousel -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
            <!-- css -->
            <link rel="stylesheet" href="style.css">
<!-- 
            <style>
                .login{
                    float: right;
                }
            </style> -->
        </head>

        <body>
            <h1 align="center">Kap’s Pizzeria</h1>
            <section id="main-home">
                <header>
                    <div class="container">
                        <!-- topnav -->
                        <div class="header-top d-flex justify-content-between pt-2">
                            <div class="d-flex justify-content-between">
                                <div class="item px-2">
                                    <p>Follow us: </p>
                                </div>  
                                <div class="item px-2">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </div>
                                <div class="item px-2">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="item px-3">
                                        <p><i class="fas fa-phone-alt"></i>012-1234567</p>
                                </div>
                                <div class="item px-3">
                                    <p><i class="fas fa-map-marker-alt"></i>Penang,Malaysia</p>
                                </div>
                            </div>
                        </div>
                        <!-- navbar -->
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <div class="container-fluid">
                                <img src="img/logo.jpg" width="150px"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                    <a class="nav-link active" href="home.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="menu.php">Menu</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="aboutus.php">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="faq.php" >FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="login.php" >Login</a>
                                    </li>
                                    <div class="cart-icon my-auto">
                                        <a href="cart.php">
                                        <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </div>
                                </ul>
                                </div>
                            </div>
                            <?php
                                if($_SESSION["user_id"]) {
                                ?>
                                <h5>Hi, <?php echo $_SESSION["user_id"]; ?><a href="logout.php">  Logout </a></h5>
                                <?php
                                    }else echo "<p>Please login first .<p>";
                            ?>
                        </nav>
                    </div>
                </header>

                <div id="bannerSlider" class="pt-5">
                    <div class="container">
                        <div class="myCarousel">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6 my-auto">
                                        <div>
                                            <h4>Best Seller</h4>
                                            <h1>Magherita Pizza</h1>
                                            <p class="py-2">Magherita Pizza is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt and extra-virgin olive oil.</p>
                                            <a href="cart.php" class="btn btn-theme">Order Now</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="img/magherita.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
              
            <footer id="footer">
              <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h4 class="h4"> About Us </h4>
                        <p>About us</p>
                        <ul class="social-icon">
                            <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h4 class="h4">Links</h4>
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h4 class="h4">Introduction</h4>
                            <p>Kap's amazing pizzas are known throughout the city. It is delicious beyond words. Come order now!</p>
                    </div>
                </div>
            </footer>
        </body>
    </html>