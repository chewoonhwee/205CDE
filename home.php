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
            <style>

                html{
                    height: 100%;
                }

                body{
                    height:100%;
                    margin:0;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    font-family: latha;
                    color:white;
                    background: linear-gradient(
                         rgba(0,0,0,0.95), rgba(0,0,0,0.65), rgba(0,0,0,0.38), rgba(0,0,0,0)
                         )
                            ,url(./img/pizza.jpg)no-repeat;
                    background-size: cover;

                }

                .topnav
                {
                    width: 60%;
                    float: right;
                    border:1px solid white;
                }

                .topnav ul li{
                    width: 120px;
                    float:left;
                    margin: 10px auto;
                    text-align: center;
                }

                .topnav ul li a{
                    
                    text-decoration: none;
                    color: white;

                }

                .topnav ul li:hover{
                    background-color: green;
                }

                .topnav ul li a:hover{
                    color:white;
                }

                .favourite{
                    width :300px;
                    height: 532px;
                    background-color: black;
                    padding:55px;
                
                }
                .footer {
                position: static;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: darkgray;
                color: white;
                text-align: center;
              }
            </style>
        </head>

        <body>
            <h1 align="center">Kap’s Pizzeria</h1>
            <section id="main-home">
                <header>
                    <div class="container">
                        <div class="header-top d-flex justify-content-between">
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
                    </div>
                </header>
            </section>

                <div class="topnav">
                    <ul type="none">
                        <li><a class="active" href="home.html"><b>Home</b></a></li>
                        <li><a href="menu.html"><b>Menu</b></a></li>
                        <li><a href="payment.html"><b>Payment</b></a></li>
                        <li><a href="aboutus.html"><b>About Us</b></a></li>
                        <li><a href="FAQ.html"><b>FAQ</b></a></li>
                        <li><a href="cart.html" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-shopping-cart"></span><b>Cart</b>
                          </a></li>
                        <li><a href="login.html"><b>Login</b></a></li>
                    </ul>
                </div>
    
            <div class="favourite">
                <h2><b>ALL TIME FAVOURITE</b></h2>
                <img src="./img/magherita.jpg">
                <p align="center">Magherita Pizza</p>
                <img src="./img/pepperoni.jpg" width="282px" height="179px">
                <p align="center">Pepperoni Pizza </p>
            </div>
            <div class="footer">
                <footer>
                    <p>FACEBOOK</p>
                    <p>INSTAGRAM</p>
                  </footer>
                </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        </body>
    </html>