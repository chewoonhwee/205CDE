<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Kap’s Pizzeria</title>

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
                    float: left;
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

                .cart{
                    float:right;
                    width : 400px;
                    height: 500px;
                    background-color: rgb(52, 37, 37);
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
            <div class="cart">
                <table>
                    <tr>
                        <th>Pepperoni</th>
                        <th>RM19.00</th>
                        <th>X 2</th>
                    </tr>
                    <tr>
                        <th>Mega Cheese</th>
                        <th>RM21.00</th>
                        <th>X 3</th>
                    </tr>
                    <tr>
                        <th>Magherita</th>
                        <th>RM15.00</th>
                        <th>X 2</th>
                    </tr>
                </table>
                <p>Total : RM131</p>
                <button> proceed to payment</button>
            </div>
        </html>