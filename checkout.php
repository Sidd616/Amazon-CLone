<?php

include_once("classes/login.php");
include_once("classes/user.php");


session_start();

if (true) {
      $id = $_SESSION['amazon_userid'];
      $login = new Login();

      $result = $login->check_login($id);

      if ($result) {
            $user = new User();
            $user_data = $user->get_data($id);

            if (!$user_data) {
                  header("Location:login.php");
                  die;
            }

      } else {
            header("Location:login.php");
            die;
      }
} else {
      header("Location:login.php");
      die;
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="./style.css">
        <style>
        * {
  box-sizing: border-box;
}
 
.check {
  font-family: 'Montserrat', sans-serif;
  display: flex;
  margin: 0 auto;
  background: #f4f4f4;
  justify-content: center;
  align-items: center;
}
.checkout-panel {
  margin: 100px;
  display: flex;
  flex-direction: column;
  width: 90%;
  height: 740px;
  background-color: rgb(255, 255, 255);
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .2);
}
.panel-body {
  padding: 45px 80px 0;
  flex: 1;
}
 
.title {
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 40px;
  color: #2e2e2e;
}
.progress-bar {
  display: flex;
  margin-bottom: 50px;
  justify-content: space-between;
}
.step {
  box-sizing: border-box;
  position: relative;
  z-index: 1;
  display: block;
  width: 25px;
  height: 25px;
  margin-bottom: 30px;
  border: 4px solid #fff;
  border-radius: 50%;
  background-color: #efefef;
}
.step:after {
  position: absolute;
  z-index: -1;
  top: 5px;
  left: 22px;
  width: 325px;
  height: 6px;
  content: '';
  background-color: #efefef;
}
.step:before {
  color: #2e2e2e;
  position: absolute;
  top: 40px;
}
.step:last-child:after {
  content: none;
}
 
.step.active {
  background-color: #eab300;
}
.step.active:after {
  background-color: #eab300;
}
.step.active:before {
  color: #eab300;
}
.step.active + .step {
  background-color: #eab300;
}
.step.active + .step:before {
  color: #eab300;
}
 
.step:nth-child(1):before {
  content: 'Delivery';
}
.step:nth-child(2):before {
  right: -40px;
  content: 'Confirmation';
}
.step:nth-child(3):before {
  right: -30px;
  content: 'Payment';
}
.step:nth-child(4):before {
  right: 0;
  content: 'Finish';
}
.payment-method {
  display: flex;
  margin-bottom: 60px;
  justify-content: space-between;
}
 
.method {
  display: flex;
  flex-direction: column;
  width: 382px;
  height: 122px;
  padding-top: 20px;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 2px;
  background-color: rgb(249, 249, 249);
  justify-content: center;
  align-items: center;
}
 
.card-logos {
  display: flex;
  width: 150px;
  justify-content: space-between;
  align-items: center;
}
 
.radio-input {
  margin-top: 20px;
}
 
input[type='radio'] {
  display: inline-block;
}
.input-fields {
  display: flex;
  justify-content: space-between;
}
 
.input-fields label {
  display: block;
  margin-bottom: 10px;
  color: #b4b4b4;
}
 
.info {
  font-size: 12px;
  font-weight: 300;
  display: block;
  margin-top: 50px;
  opacity: .5;
  color: #2e2e2e;
}
 
div[class*='column'] {
  width: 382px;
}
 
.field {
  font-size: 16px;
  width: 100%;
  height: 50px;
  padding-right: 40px;
  padding-left: 16px;
  color: rgba(46, 46, 46, .8);
  border: 1px solid rgb(225, 225, 225);
  border-radius: 4px;
  outline: none;
}
 
.field:focus{
  border-color: rgb(119, 219, 119);
}
 
#date { background: url(img/icons_calendar_black.png) no-repeat 95%; }
#cardholder { background: url(img/icons_person_black.png) no-repeat 95%; }
#cardnumber { background: url(img/icons_card_black.png) no-repeat 95%; }
#verification { background: url(img/icons_lock_black.png) no-repeat 95%; }
 
.small-inputs {
  display: flex;
  margin-top: 20px;
  justify-content: space-between;
}
 
.small-inputs div {
  width: 182px;
}
.panel-footer {
  display: flex;
  width: 100%;
  height: 96px;
  padding: 0 80px;
  background-color: rgb(239, 239, 239);
  justify-content: space-between;
  align-items: center;
}
.btn {
  font-size: 16px;
  width: 163px;
  height: 48px;
  cursor: pointer;
  transition: all .2s ease-in-out;
  letter-spacing: 1px;
  border: none;
  border-radius: 23px;
}
 
.back-btn {
  color: #eab300;
  background: #fff;
}
 
.next-btn {
  color: #fff;
  background: #eab300;
}
 
.btn:focus {
  outline: none;
}
 
.btn:hover {
  transform: scale(1.1);
}
.blue-border {
  border: 1px solid rgb(110, 178, 251);
}
.warning {
  border-color: #eab300;
}


    </style>

</head>

<body>
        <nav>
        <a href="./home.php"><img src="./assets/amazon_logo.png" width="100" alt=""></a>
        <div class="nav-country">
            <img src="./assets/location_icon.png" height="20" alt="">
            <div>
                <p>Deliver to</p>
                <h1>India</h1>
            </div>
        </div>
        <div class="nav-search">
            <div class="nav-search-category">
                <p>All</p>
                <img src="./assets/dropdown_icon.png" height="12" alt="">
            </div>
            <input type="text" class="nav-search-input" placeholder="Search Amazon">
            <img src="./assets/search_icon.png" class="nav-search-icon" alt="">
        </div>
       
        <div class="nav-texts">
            <h1><a href="#" id="userLink">Hello, <?php echo $user_data['first_name'] ?></a></h1>
            <ul id="logoutMenu" style="display: none;">
                <li><a href="./logout.php">Logout</a></li>
    </ul>        </div>
        <div class="nav-texts">
            <p><a href="./orders.php">Returns</a></p>
            <h1><a href="./orders.php">& Orders</a></h1>
        </div>
        <a href="./login.php" class="mobile-user-icon" style="display: none;">
            <img src="./assets/user.png">
        </a>
        <a href="./cart.php" class="nav-cart">
            <img src="./assets/cart_icon.png" width="35px" alt="">
            <h4>Cart</h4>
        </a>
    </nav>
    <div class="nav-bottom">
        <div class="nav-lists">
            <img src="./assets/menu_icon.png" width="25px" alt="">
            <p class="nav-lists">All</p>
        </div>
        <p class="nav-lists">Today's Deals</p>
        <p class="nav-lists">Trending</p>
        <p class="nav-lists">Gift Cards</p>
    
    </div>

<section class="check">
<div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">Checkout</h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>
 
    <div class="payment-method">
      <label for="card" class="method card">
        <div class="card-logos">
          <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
          <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
        </div>
 
        <div class="radio-input">
          <input id="card" type="radio" name="payment">
          Pay 34,748.00 with credit card
        </div>
      </label>
 
      <label for="paypal" class="method paypal">
        <img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png"/>
        <div class="radio-input">
          <input id="paypal" type="radio" name="payment">
          Pay 34,748.00 with PayPal
        </div>
      </label>
    </div>
 
    <div class="input-fields">
      <div class="column-1">
        <label for="cardholder">Cardholder's Name</label>
        <input class="field" type="text" id="cardholder" />
 
        <div class="small-inputs">
          <div>
            <label for="date">Valid thru</label>
            <input class="field" type="text" id="date"/>
          </div>
 
          <div>
            <label for="verification">CVV / CVC *</label>
            <input class="field" type="password" id="verification"/>
          </div>
        </div>
 
      </div>
      <div class="column-2">
        <label for="cardnumber">Card Number</label>
        <input class="field" type="password" id="cardnumber"/>
 
        <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
      </div>
    </div>
  </div>
 
  <div class="panel-footer">
    <button class="btn back-btn"><a href="cart.php">Back</a></button>
    <button class="btn next-btn">Next Step</button>
  </div>
</div>

</section>



    <footer>
        <img src="./assets/amazon_logo.png" width="100" alt="">
        <div>
        <p>© 2024 Amazon</p>
        <div>
        <p>22102A0050</p>
        <p>22102A0042</p>
        <p>22102A0009</p>
        <p>22102B0069</p>
        </div>
        </div>
    </footer>


<script>
    const scrollContainer = document.querySelectorAll(".products");
        for (const item of scrollContainer) {
            item.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            item.scrollLeft += evt.deltaY;
        });
    }

    $(document).ready(function() {

  // Radio box border
  $('.method').on('click', function() {
    $('.method').removeClass('blue-border');
    $(this).addClass('blue-border');
  });

  // Validation
  var $cardInput = $('.input-fields input');

  $('.next-btn').on('click', function(e) {

    $cardInput.removeClass('warning');

    $cardInput.each(function() {
       var $this = $(this);

       if (!$this.val()) {
         $this.addClass('warning');
       }
    });

  });

});

</script>
 <script>
   document.getElementById("userLink").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent the default action of following the link
    if(document.getElementById("logoutMenu").style.display === "none"){
        document.getElementById("logoutMenu").style.display = "block"; // Show the logout menu
    }
    else{
        document.getElementById("logoutMenu").style.display = "none"; // hide the logout menu
    }
});

</script>
</body>

</html>