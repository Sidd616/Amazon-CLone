<?php

include_once("classes/login.php");

session_start();


$user_id = "";
$password = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


      $login = new Login();
      $result = $login->evaluate($_POST);

      if ($result != "") {
           echo "<script>alert('Invalid details');</script>";
      } else {
        

            // Retrieve user data after successful login
            $userData = $login->check_login($_SESSION['amazon_userid'], false);

                  header("Location: home.php");
                  die;
           
      }


      $user_id = $_POST['user_id'];
      $password = $_POST['password'];
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <a href="./home.php"><img class="logo" src="./assets/amazon_logo_dark.png" width="100px" alt=""></a>
    <div class="login-container">
        <h1 class="login-title">Sign in</h1>
        <form method="post">
        <h5 class="input-lable">Email or mobile phone number</h5>
        <input type="text" name="user_id">
        <h5 class="input-lable">Password</h5>
        <input type="password" placeholder="Enter your password" name="password">
        <button type="submit">Continue</button>
        </form>
        <p class="login-condition">By continuing, you agree to Amazon's Privacy Notice.</p>
        
    </div>
    <div class="login-section-text">
        <hr><p>New to Amazon?</p><hr>
    </div>
    <a href="./signup.php"><button class="login-signup-btn">Create your Amazon account</button></a>
    <footer>
        <div class="footer-links">
            <a href="#"> Conditions of Use </a>
            <a href="#"> Privacy Notice </a>
            <a href="#"> Help </a>
        </div>
        <p class="footer-copyright">
            © 2024 Amazon
        </p>
    </footer>
</body>
</html>