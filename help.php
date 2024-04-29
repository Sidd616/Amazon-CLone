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
    <title>Complain</title>
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href="./style.css">
            <style>
        .main {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, textarea, input[type="file"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="radio"], input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="reset"], input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="reset"]:hover, input[type="submit"]:hover {
            background-color: #45a049;
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
    <form id="returnForm" onsubmit="return submitForm()">
        <h2>Return Product</h2>
        <label for="Product">Select the product</label>
        <div>
            <select name="myproduct" id="Product">
                <option value="a" selected>Select</option>
                <option value="One plus nord">One plus Nord 2 5G</option>
                <option value="Lg fridge">LG Refrigerator</option>
                <option value="Hp pendrive">Hp pendrive 3.1</option>
                <option value="Titan watch">Titan Casual 364K5G watch for men</option>
            </select>
        </div>
        <label for="Reason">Select the reason:</label>
        <div>
            <select name="myReason" id="Reason">
                <option value="A" selected>Select</option>
                <option value="1">Received Damaged product</option>
                <option value="2">Poor Quality</option>
                <option value="3">Received different color/size/model</option>
                <option value="4">Other, please specify below</option>
            </select>
        </div>
        <label for="description">Describe your reason to return product:</label>
        <div>
            <textarea name="mydescrition" id="description" cols="40" rows="10"></textarea>
        </div>
        <div>
            What do you wish? <br>
            <input type="radio" name="myaction" id="Refund">Refund
            <input type="radio" name="myaction" id="Replace">Replace
        </div>
        <label for="Image">Upload the image file:</label>
        <div>
            <input type="file" name="myfile" id="Image">
        </div>
        <label for="Date">When should we schedule the pickup:</label>
        <div>
            <input type="date" name="mydate" id="Date">
        </div>
        <div>
            <input type="checkbox" id="Policy">
            <label for="Policy">I understand and agree to return Policy</label>
        </div>
        <label for="reset"></label>
        <input type="reset" value="Reset now" id="reset">
        &nbsp;&nbsp;&nbsp;
        <label for="submit"></label>
        <input type="submit" value="Submit now" id="submit">
    </form>
</section>

    <script>
        function submitForm() {
            // Display a confirmation alert
            var isConfirmed = confirm("Are you sure you want to submit the return request?");
            
            // If user clicks "OK" on the confirmation alert
            if (isConfirmed) {
                // Display a success message
                alert("Return request submitted successfully!");
                
                // You can submit the form to the backend here if needed
                // document.getElementById("returnForm").submit();
            }

            // Return false to prevent the form from actually submitting
            return false;
        }
    </script>


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