<!DOCTYPE html>
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

    #register{
        left:50px;
    }
    
    #logo{
        margin:auto;
        width:30px;
        height:30px;
    }
    h1{
        text-align:center;
    }
    #register{
        font-size:50px;
        text-align:center;
    }
    .login-link{
        font-size:13px;
    }
    }
</style>

</head>

<body>
    <div class="bg">
    <h1>Kap's Pizzeria</h1>
        <div class="form-box">
            <div id="register">
                <p>Register</p>
            </div>
            <form action="" method="post" id="register" class="input-group">
                <input name="user_id" type="text" class="input-field" placeholder="User ID"required>
                <input name="email" type="email" class="input-field" placeholder="Email"required>
                <input name="password" type="password" class="input-field" placeholder="Password"required>
                <button type="submit" class="submit-btn">Register</button>
            <p class='login-link'>Click here to <a href='login.php'>Login</a>.</p>
            </form>
            
        </div>
    </div>

    <?php
        require('db.php');
        if (isset($_REQUEST['user_id'])) {
            // removes backslashes
            $user_id = stripslashes($_REQUEST['user_id']);
            //escapes special characters in a string
            $user_id = mysqli_real_escape_string($conn, $user_id);
            $email    = stripslashes($_REQUEST['email']);
            $email    = mysqli_real_escape_string($conn, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($conn, $password);
            $query    = "INSERT into `users` (user_id, email, password)
                         VALUES ('$user_id', '$email', '$password')";
            $result   = mysqli_query($conn, $query);
        }
    ?>
</body>

</html>