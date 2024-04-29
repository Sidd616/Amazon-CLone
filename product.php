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
    <title>Product</title>
    <link rel="stylesheet" href="./product.css">
    <link rel="stylesheet" href="./style.css">
        

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

    <div class="product-display">
        <div class="product-d-image">
            <div class="product-list-image">
                <img src="./assets/product_img.jpg" width="60" alt="">
                <img src="./assets/product_img.jpg" width="60" alt="">
                <img src="./assets/product_img.jpg" width="60" alt="">
                <img src="./assets/product_img.jpg" width="60" alt="">
                <img src="./assets/product_img.jpg" width="60" alt="">
            </div>
            <div class="product-main-image">
                <img src="./assets/product_img.jpg" width="400" alt="">
            </div>
        </div>
        <div class="product-d-details">
            <p class="product-title">
                BENGOO G9000 Stereo Gaming Headset for PS4 PC Xbox One PS5 Controller, Noise Cancelling Over Ear
                Headphones with Mic, LED Light, Bass Surround, Soft Memory Earmuffs (Blue)
            </p>
            <p class="product-store">
                Visit the BENGOO Store
            </p>
            <div class="product-rating">
                <div>
                    <div>4.3 <img src="./assets/rating_img.png" height="20px" alt=""></div>
                    <p>104,185 ratings | Search this page</p>
                </div>
                <p><span>#1 Best Seller</span> in PC Game Headsets</p>
                <h5>10K+ bought in past month</h5>
                <hr>
            </div>
            <div class="product-prices">
                <div>
                    <p>-35%</p>
                    <h1><span>&#8377</span>2,499.00</h1>
                </div>
                <h5>List Price: <b><span>&#8377</span>4,049.00</b></h5>
                <p>Get <b>Fast, Free Shipping</b> with <span>Amazon Prime</span></p>
                <p><span>FREE Returns</span></p>
                <p><span>Join Prime to buy this item at <b><span>&#8377</span>399</b></span></p>
                <p>Available at a lower price from <span>other sellers</span> that may not offer free Prime shipping.
                </p>
            </div>
            <div class="product-color-selection">
                <p>Color: <b>Blue</b></p>
                <div class="product-color-options">
                    <div class="option">
                        <img src="./assets/product_img.jpg" width="30px" alt="">
                        <p>Black</p>
                    </div>
                    <div class="option">
                        <img src="./assets/product_img.jpg" width="30px" alt="">
                        <p>Blue</p>
                    </div>
                    <div class="option">
                        <img src="./assets/product_img.jpg" width="30px" alt="">
                        <p>Green</p>
                    </div>
                    <div class="option">
                        <img src="./assets/product_img.jpg" width="30px" alt="">
                        <p>Pink</p>
                    </div>
                    <div class="option">
                        <img src="./assets/product_img.jpg" width="30px" alt="">
                        <p>Purple</p>
                    </div>
                    <div class="option">
                        <img src="./assets/product_img.jpg" width="30px" alt="">
                        <p>Red</p>
                    </div>
                </div>
            </div>
            <div class="product-info">
                <p><b>Brand</b></p>
                <p>BENGOO</p>
                <p><b>Model Name</b></p>
                <p>G9000</p>
                <p><b>Color</b></p>
                <p>Blue</p>
                <p><b>Form Factor</b></p>
                <p>Over Ear</p>
                <p><b>Connectivity Technology</b></p>
                <p>Wired</p>
            </div>
            <hr>
            <div class="product-description">
                <h1>About this item</h1>
                <ul>
                    <li>【Multi-Platform Compatible】Support PlayStation 4, New Xbox One, PC, Nintendo 3DS, Laptop, PSP, Tablet, iPad, Computer, Mobile Phone. Please note you need an extra Microsoft Adapter (Not Included) when connect with an old version Xbox One controller.</li>
                    <li>【Surrounding Stereo Subwoofer】Clear sound operating strong brass, splendid ambient noise isolation and high precision 40mm magnetic neodymium driver, acoustic positioning precision enhance the sensitivity of the speaker unit, bringing you vivid sound field, sound clarity, shock feeling sound. Perfect for various games like Halo 5 Guardians, Metal Gear Solid, Call of Duty, Star Wars Battlefront, Overwatch, World of Warcraft Legion, etc.</li>
                    <li>【Noise Isolating Microphone】Headset integrated onmi-directional microphone can transmits high quality communication with its premium noise-concellng feature, can pick up sounds with great sensitivity and remove the noise, which enables you clearly deliver or receive messages while you are in a game. Long flexible mic design very convenient to adjust angle of the microphone.</li>
                    <li>【Great Humanized Design】Superior comfortable and good air permeability protein over-ear pads, muti-points headbeam, acord with human body engineering specification can reduce hearing impairment and heat sweat.Skin friendly leather material for a longer period of wearing. Glaring LED lights desigend on the earcups to highlight game atmosphere.</li>
                    <li>【Effortlessly Volume Control】High tensile strength, anti-winding braided USB cable with rotary volume controller and key microphone mute effectively prevents the 49-inches long cable from twining and allows you to control the volume easily and mute the mic as effortless volume control one key mute.</li>
                </ul>
            </div>
        </div>
        <div class="product-d-purchase">
            <div class="title">
                <h3>Buy new:</h3><img src="./assets/circle_icon.png" width="20" alt="">
            </div>
            <h1 class="price"><span>&#8377</span>2,499.00</h1>
            <div class="gap">
                <p>Get <b>Fast, Free Shipping</b> with <span>Amazon Prime</span></p>
                <p><span>FREE Returns</span></p>
            </div>
            <div class="gap">
                <p><span>FREE delivery</span> <b>Saturday</b>,</p>
                <p><b>April 27</b> on orders shipped by Amazon over <b><span>&#8377</span>999</b></p>
            </div>
            <div class="gap">
                <p>Or fastest delivery <b>Tomorrow</b>, <b>January 23</b>. Order within <span>10 hrs 56 mins</span></p>
            </div>
            <div class="pincode-section">
                <img src="/assets/location_icon_dark.png" width="20" alt="">
                <p><span>Deliver to Mumbai</span></p>
            </div>
            <h2 class="product-stock">In Stock</h2>
            <select class="product-quantity">
                <option value="1">Quantity: 1</option>
                <option value="2">Quantity: 2</option>
                <option value="3">Quantity: 3</option>
            </select>
            <button class="btn">
                Add to Cart
            </button>
            <button class="btn product-buy">
                Buy Now
            </button>
            <div class="product-seller-info">
                <p>Ships from</p>
                <p class="product-info-value">Amazon</p>
                <p>Sold by</p>
                <p class="product-info-value">Bengoo Inc.</p>
                <p>Returns</p>
                <p class="product-info-value">Eligible for Return, Refund or Replacement within 30 days of receipt</p>
                <p>Payment</p>
                <p class="product-info-value">Secure transaction</p>
            </div>
            <hr>
            <button class="product-addtolist">Add to List</button>
        </div>
    </div>


    <div class="products-slider-with-price">
        <h2>Deals Under <b><span>&#8377</span>1000</b></h2>
        <div class="products">
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-1.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-2.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-3.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-4.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-5.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-6.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b> Price:$19.95</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-7.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-8.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-9.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-10.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-11.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-12.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price"><b><span>&#8377</span>999</b></p>
                <h4>This product is the best for you</h4>
            </div>
        </div>
    </div>


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