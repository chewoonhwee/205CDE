<html>
<head>
    <title>Login/Register</title>
<style>
    .bg{
        height:100%;
        width:100%;
        background: #f2f2f2 ;
        background-position: center;
        background-size:cover;
        position:absolute;
    }
    .form-box{
        width: 380px;
        height: 480px;
        position: relative;
        margin: 6% auto;
        background: #ffffff;
        padding:5px;
        overflow: hidden;
    }

    .button-box{
        width: 220px;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 9px #ff61241f;
        border-radius: 30px;
    }

    .toggle-btn{
        padding: 10px 30px;
        cursor:pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
    }

    #btn{
        top:0;
        left:0;
        position: absolute;
        width: 110px;
        height:100%;
        background: linear-gradient(to right, #ff105f,#ffad06);
        border-radius:30px;
        transition: .5s;
    }

    .input-group{
        top:180px;
        position:absolute;
        width:280px;
        transition:.5s;
    }

    .input-field{
        width:100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline:none;
        background: transparent;
    }

    .submit-btn{
        width:85%;
        padding:10px 30px;
        cursor:pointer;
        display:block;
        margin:auto;
        background: linear-gradient(to right, #ff105f,#ffad06);
        border: 0;
        outline: none;
        border-radius: 30px;
    }

    #login{
        left:50px;
    }

    #register{
        left:450px;
    }
    
    #logo{
        margin:auto;
        width:30px;
        height:30px;
    }
    h1{
        text-align:center;
    }
    }
</style>

</head>

<body>
    <div class="bg">
    <h1>Kap's Pizzeria</h1>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="User ID"required>
                <input type="text" class="input-field" placeholder="Password"required>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="User ID"required>
                <input type="email" class="input-field" placeholder="Email"required>
                <input type="text" class="input-field" placeholder="Password"required>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }

        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    </script>
</body>

</html>