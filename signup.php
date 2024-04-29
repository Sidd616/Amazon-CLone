<?php

include("classes/signup.php");

$first_name = "";
$last_name = "";
$user_id = "";
$password = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


      $signup = new Signup();
      $result = $signup->evaluate($_POST);

      if ($result != "") {
            echo "<script>alert('Invalid data submitted');</script>";
      } else {
            header("Location:login.php");
            die;
      }


      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
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
        <form method="post">
        <h1 class="login-title">Sign up</h1>
        <h5 class="input-lable">First name</h5>
        <input type="text" placeholder="First name" name="first_name">
         <h5 class="input-lable">Last name</h5>
        <input type="text" placeholder="Last name" name="last_name">
        <h5 class="input-lable">Mobile number or email</h5>
        <input type="text" placeholder="example@domain.com" name="user_id">
        <h5 class="input-lable">Password</h5>
        <input type="password" placeholder="At least 6 characters" name="password">
        
        <button type="submit">Continue</button>
        </form>
        <p class="login-condition">By continuing, you agree to Amazon's Privacy Notice.</p>
        
    </div>
    <div class="login-section-text">
        <hr><p>Have a account?</p><hr>
    </div>
    <a href="./login.php"><button class="login-signup-btn">Login with Amazon account</button></a>
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