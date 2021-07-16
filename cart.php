<?php
session_start();
require('db.php');

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
                    </nav>
                </div>
            </header>

            <div class="container" style="width:700px;">
                <h3 align="center">Cart</h3><br/>
                <?php
                $query="SELECT * FROM images ORDER BY id ASC";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="img/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
                    <tfoot>
                        <tr>
                            <td colspan="5" align="right"><button onclick="location.href = 'payment.php';" class="btn btn-success pull-right">Pay</button></td>
                        </tr>
                    </tfoot>
                    
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
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
                        <p>hello world</p>
                </div>
            </div>
        </footer>
    </body>
</html>