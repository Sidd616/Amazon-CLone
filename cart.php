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

    <div class="cart">
        <div class="cart-left">
            <h1>Shopping Cart</h1>
            <hr>
            <div class="product-cart-list">
                <img src="./assets/ipad_img.jpg" alt="">
                <div>
                    <div class="product-cart-titleprice">
                        <p>Apple iPad (9th Generation): with A13 Bionic chip, 10.2-inch Retina Display, 64GB, Wi-Fi,
                            12MP front/8MP Back Camera, Touch ID, All-Day Battery Life – Space Gray</p>
                        <p><b><span>&#8377</span>32,249.00</b></p>
                    </div>
                    <p class="product-cart-bestseller"><span>#1 Best Seller</span> in Computer Tablets</p>
                    <p class="product-cart-stock">In Stock</p>
                    <p class="product-cart-delivery">FREE delivery <b>Mon, Apr 29</b> available at checkout</p>
                    <p class="product-cart-returns">FREE Returns &#11191</p>
                    <p class="product-cart-giftoption">Gift options not available. <span>Learn more</span></p>
                    <div class="product-cart-specs">
                        <p><b>Style:</b></p>
                        <p>WiFi</p>
                        <p><b>Size:</b></p>
                        <p>64GB</p>
                        <p><b>Color:</b></p>
                        <p>Space Gray</p>
                    </div>
                    <div class="product-cart-list-action">
                        <select>
                            <option value="Qty: 1">Qty: 1</option>
                            <option value="Qty: 2">Qty: 2</option>
                            <option value="Qty: 3">Qty: 3</option>
                            <option value="Qty: 4">Qty: 4</option>
                            <option value="Qty: 5">Qty: 5</option>
                        </select>
                        <hr>
                        <p class="action-btn">Delete</p>
                        <hr>
                        <p class="action-btn">Save for later</p>
                        <hr>
                        <p class="action-btn">Compare with similar items</p>
                        <hr>
                        <p class="action-btn">Share</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="product-cart-list">
                <a href="product.php"><img src="./assets/product_img.jpg" width="180px" alt=""></a>
                <div>
                    <div class="product-cart-titleprice">
                        <a href="product.php"><p>BENGOO G9000 Stereo Gaming Headset for PS4 PC Xbox One PS5 Controller, Noise Cancelling Over
                            Ear Headphones with Mic, LED Light, Bass Surround</p></a>
                        <p><b><span>&#8377</span>2499</b></p>
                    </div>
                    <p class="product-cart-bestseller"><span>#1 Best Seller</span> in PC Game Headsets</p>
                    <p class="product-cart-stock">In Stock</p>
                    <p class="product-cart-delivery">FREE delivery <b>Mon, Apr 29</b> on &#8377 1000 of items shipped by Amazon
                    </p>
                    <p class="product-cart-returns">FREE Returns &#11191</p>
                    <p class="product-cart-giftoption"><input type="checkbox"> This is a gift <span>Learn more</span>
                    </p>
                    <div class="product-cart-specs">
                        <p><b>Style:</b></p>
                        <p>Wired</p>
                        <p><b>Size:</b></p>
                        <p>Free</p>
                        <p><b>Color:</b></p>
                        <p>Blue</p>
                    </div>
                    <div class="product-cart-list-action">
                        <select>
                            <option value="Qty: 1">Qty: 1</option>
                            <option value="Qty: 2">Qty: 2</option>
                            <option value="Qty: 3">Qty: 3</option>
                            <option value="Qty: 4">Qty: 4</option>
                            <option value="Qty: 5">Qty: 5</option>
                        </select>
                        <hr>
                        <p class="action-btn">Delete</p>
                        <hr>
                        <p class="action-btn">Save for later</p>
                        <hr>
                        <p class="action-btn">Compare with similar items</p>
                        <hr>
                        <p class="action-btn">Share</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="cart-list-subtotal">
                Subtotal (2 items): <b>&#8377 34,748</b>
            </div>
        </div>
        <div class="cart-right">
            <div class="cart-free-delivery">
                <p>&#x2705</p>
                <p>Your order qualifies for FREE Shipping. <br> Choose this option at checkout. <br> See details</p>
            </div>
            <p class="cart-subtotal">Subtotal (2 items): <b>&#8377 34,748</b></p>
            <p class="cart-right-gift"><input type="checkbox"> This order contains a gift</p>
            <button><a href="checkout.php">Proceed to checkout</a></button>
        </div>
    </div>



      <div class="products-slider-with-price">
        <h2>You might also like</h2>
        <div class="products">
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-1.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-2.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-3.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-4.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-5.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-6.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-7.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-8.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-9.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-10.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
                <h4>This product is the best for you</h4>
            </div>
            <div class="product-card">
                <div class="product-img-container">
                    <img src="./assets/product2-11.jpg" alt="">
                </div>
                <div class="product-offer">
                    <p>27% off</p> <span>Deal</span>
                </div>
                <p class="product-price">&#8377 <span>1499</span> List Price:&#8377 1999</p>
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