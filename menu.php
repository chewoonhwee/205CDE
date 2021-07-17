<!DOCTYPE html>
<html lang="en">
<head>
<title>Kap’s Pizzeria</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- fontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <!-- css -->
  <link rel="stylesheet" href="style.css">

  <style>
    #slides{
      width:50%;
      margin:auto;
    }
    </style>
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
                          <i class="fas fa-shopping-cart"></i></a>
                      </div>
                  </ul>
                  </div>
              </div>
          </nav>
      </div>
  </header>

<div class="container">
  <h2>Menu</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img id="slides" src="img/magherita.jpg" alt="" style="width:600px;">
      </div>

      <div class="item">
        <img id="slides" src="img/mega cheese.jpg" alt="" style="width:600px;">
      </div>
    
      <div class="item">
        <img id="slides" src="img/pepperoni.jpg" alt="" style="width:600px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
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
    <div class="item">
      <div class="row">
          <div class="col-md-6 my-auto">
              <div>
                  <h4>New</h4>
                  <h1>Mega Cheese Pizza</h1>
                  <p class="py-2">All new Mega Cheese pizza that includes 4 types of cheese</p>
                  <a href="cart.php" class="btn btn-theme">Order Now</a>
              </div>
          </div>
          <div class="col-md-6">
              <img src="img/mega cheese.jpg">
          </div>
      </div>
    </div>
    <div class="item">
      <div class="row">
          <div class="col-md-6 my-auto">
              <div>
                  <h4>All Time Favourite</h4>
                  <h1>Pepperoni Pizza</h1>
                  <p class="py-2">Pepperoni pizza is loved by all ages, perfect for any time on the day.</p>
                  <a href="cart.php" class="btn btn-theme">Order Now</a>
              </div>
          </div>
          <div class="col-md-6">
              <img src="img/pepperoni.jpg">
          </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
