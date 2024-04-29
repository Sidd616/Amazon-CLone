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
    <title>Orders</title>
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="./style.css">
        <style>
        .main {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .dark-mode .main {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #333;
        }

        .hed {
            text-align: center;
            color: #333;
            margin-bottom: 15px;
        }

        .order {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .dark-mode .order {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .product-details {
            width: 60%;
        }

        .product-details h3 {
            margin-top: 0;
        }

        .product {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
        }

        .product img {
            max-width: 100px;
            max-height: 100px;
            margin-left: 20px;
        }

        
        .button-container {
            display: flex;
            justify-content: space-between;
            width: 80%; /* Adjust as needed */
            margin: 20px auto;
        }

        .button {
            flex: 1;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            margin: 0 10px; /* Adjust spacing between buttons */
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

    <section class="main">
<h1 class="hed">My Orders</h1>

<div class="order">
    <div class="product-details">
        <div class="product">
            <div>
                <h3>OnePlus Nord 2 5G</h3>
                <p>Date of Purchase: January 15, 2024</p>
                <p>Date of Delivery: January 20, 2024</p>
                <p>Seller: XYZ Electronics</p>
                <p>Cost: <b><span>&#8377</span>34,999.00</b></p>
            </div>
        </div>
    </div>
    <img src="./assets/oneplus_nord_2.jpg" alt="OnePlus Nord 2 5G" width="160px" height="160px">
</div>

<div class="order">
    <div class="product-details">
        <div class="product">
            <div>
                <h3>LG Refrigerator</h3>
                <p>Date of Purchase: January 10, 2024</p>
                <p>Date of Delivery: January 18, 2024</p>
                <p>Seller: Appliance Mart</p>
                <p>Cost: <b><span>&#8377</span>58,249.00</b></p>
            </div>
        </div>
    </div>
    <img src="./assets/lg_refrigerator.jpg" alt="LG Refrigerator" width="160px" height="160px">
</div>

<div class="order">
    <div class="product-details">
        <div class="product">
            <div>
                <h3>HP Pendrive 3.1</h3>
                <p>Date of Purchase: January 5, 2024</p>
                <p>Date of Delivery: January 12, 2024</p>
                <p>Seller: Tech Superstore</p>
                <p>Cost: <b><span>&#8377</span>1,049.00</b></p>
            </div>
        </div>
    </div>
    <img src="./assets/hp_pendrive.png" alt="HP Pendrive 3.1" width="160px" height="160px">
</div>

<div class="order">
    <div class="product-details">
        <div class="product">
            <div>
                <h3>Titan Casual 364K5G Watch</h3>
                <p>Date of Purchase: January 3, 2024</p>
                <p>Date of Delivery: January 8, 2024</p>
                <p>Seller: Time Trends</p>
                <p>Cost: <b><span>&#8377</span>3,499.00</b></p>
            </div>
        </div>
    </div>
    <img src="./assets/titan_watch.jpg" alt="Titan Casual 364K5G Watch" width="160px" height="160px">
</div>
<div class="button-container">
    <a href="help.php" class="button">Need Help!</a>
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