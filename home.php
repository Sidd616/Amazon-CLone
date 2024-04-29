<?php

include_once("classes/login.php");
include_once("classes/user.php");

session_start();


// Check if user is logged in
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
    <title>Amazon Clone</title>
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

    <div class="header-slider" id="slider">
        <a href="#" class="control_prev">&#129144</a>
        <a href="#" class="control_next">&#129146</a>
        <ul>
            <img class="header-img" src="./assets/header1.jpg" alt="">
            <img class="header-img" src="./assets/header2.jpg" alt="">
            <img class="header-img" src="./assets/header3.jpg" alt="">
            <img class="header-img" src="./assets/header4.jpg" alt="">
            <img class="header-img" src="./assets/header5.jpg" alt="">
            <img class="header-img" src="./assets/header6.jpg" alt="">
        </ul>
    </div>

    <div class="header-box box-row">
        <div class="box-col">
            <h3>Free international returns</h3>
            <img src="./assets/box1-1.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Lunar New Year</h3>
            <img src="./assets/box1-2.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Toy under &#8377 500</h3>
            <img src="./assets/box1-3.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Deals in PCs</h3>
            <img src="./assets/box1-4.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
    </div>

    <div class="box-row">
        <div class="box-col">
            <h3>Grooming Products</h3>
            <img src="./assets/box2-1.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Latest Devices</h3>
            <img src="./assets/box2-2.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Pets Food</h3>
            <img src="./assets/box2-3.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Fashion Mart</h3>
            <img src="./assets/box2-4.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
    </div>




    <div class="products-slider">
        <h2>Best Sellers in Sports & Outdoors</h2>
        <div class="products">
            <a href="./product.html"><img src="./assets/product_img.jpg" alt=""></a>
            <img src="./assets/product1-1.jpg" alt="">
            <img src="./assets/product1-2.jpg" alt="">
            <img src="./assets/product1-3.jpg" alt="">
            <img src="./assets/product1-4.jpg" alt="">
            <img src="./assets/product1-5.jpg" alt="">
            <img src="./assets/product1-6.jpg" alt="">
            <img src="./assets/product1-7.jpg" alt="">
            <img src="./assets/product1-8.jpg" alt="">
            <img src="./assets/product1-9.jpg" alt="">
            <img src="./assets/product1-10.jpg" alt="">
        </div>
    </div>



    <div class="box-row">
        <div class="box-col">
            <h3>Stationery</h3>
            <img src="./assets/box3-1.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Laptops for study</h3>
            <img src="./assets/box3-2.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Office chairs</h3>
            <img src="./assets/box3-3.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Gaming Monitor</h3>
            <img src="./assets/box3-4.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
    </div>



    <div class="products-slider-with-price">
        <h2>Deals Under &#8377 1500</h2>
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



    <div class="products-slider">
        <h2>Best Sellers in Sports & Outdoors</h2>
        <div class="products">
            <img src="./assets/product1-1.jpg" alt="">
            <img src="./assets/product1-2.jpg" alt="">
            <img src="./assets/product1-3.jpg" alt="">
            <img src="./assets/product1-4.jpg" alt="">
            <img src="./assets/product1-5.jpg" alt="">
            <img src="./assets/product1-6.jpg" alt="">
            <img src="./assets/product1-7.jpg" alt="">
            <img src="./assets/product1-8.jpg" alt="">
            <img src="./assets/product1-9.jpg" alt="">
            <img src="./assets/product1-10.jpg" alt="">
        </div>
    </div>



    <div class="box-row">
        <div class="box-col">
            <h3>Grooming Products</h3>
            <img src="./assets/box2-1.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Latest Devices</h3>
            <img src="./assets/box2-2.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Pets Food</h3>
            <img src="./assets/box2-3.jpg" alt="">
            <a href="#">Shop More</a>
        </div>
        <div class="box-col">
            <h3>Fashion Mart</h3>
            <img src="./assets/box2-4.jpg" alt="">
            <a href="#">Shop More</a>
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
    <script src="./script.js"></script>
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