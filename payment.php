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
                
                .payment{
                    margin: auto;
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
            <div class="payment">
            <form action="" align="center">
                <label for="payment">Payment Type:</label>
                <select id="payment" name="carpayments">
                  <option value="Credit/Debit Card">Credit/Debit Card</option>
                  <option value="TnG">TnG</option>
                  <option value="Grab">Grab</option>
                  <option value="Cash On Delivery">Cash On Delivery</option>
                </select><br>
                <p>Total: RM 80</p>
                <input type="submit">
              </form>
            </div>
            <div class="footer">
                <footer>
                    <p>FACEBOOK</p>
                    <p>INSTAGRAM</p>
                  </footer>
                </div>
        </body>
    </html>