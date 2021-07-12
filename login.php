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
                .container { 
                    height: 200px;
                    position: relative;

                    }

                .center {
                    margin: 0;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    -ms-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
                    }
            </style>
        </head>

        <body>
            <h1 align="center">Kap’s Pizzeria</h1>
            <h2 align="center">Log In</h2>
            <table border="1" align="center">
                <tr>
                    <th>
                        Username:
                    </th>
                    <td>
                        <input type="text" id="username">
                    </td>
                </tr>
                <tr>
                    <th>
                        Password:
                    </th>
                    <td>
                        <input type="password" id="password">
                    </td>
                </tr>
            </table>
            <div class="container">
                <div class="center">
                    <button type="button" onclick="validate()">Log in</button>
                </div>
            </div>

            <script>
                function validate(){
                    var username=document.getElementById("username").value;
                    var password=document.getElementById("password").value;
                    
                    if(username=="admin"&&password=="1234"){
                        alert("login succesfully");
                        return false;
                    }
                    else{
                        alert("login failed")
                    }
                }
            </script>
        </body>
    
    
    </html>