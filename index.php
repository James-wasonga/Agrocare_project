<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrocare</title>
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet" href="./styles/footer.css">

    <!-- <style>
        /* Add CSS animation for moving the element between leftmost and rightmost ends of the header */
        @keyframes moveLeftRight {
            0% { left: 0; }
            50% { left: calc(100% - 650px); } /* Move to the rightmost end */
            100% { left: -30%; } /* Move back to the leftmost end */
        }

        /* Apply animation to the welcome text */
        .moving-text {
            position: absolute;
            animation: moveLeftRight 15s linear infinite alternate; /* Adjust animation duration and timing function as needed */
        }

        /* Limit the movement of the text within the header area */
        header.page-header {
            position: relative; /* Ensure header is a positioned element */
            overflow: hidden; /* Hide any overflow outside the header */
        }
    </style> -->
    <style>
        /* Add CSS animation for moving the element */
        @keyframes moveZigzag {
            0% { left: 0; top: 0; }
            25% { left: calc(100% - 650px); top: 0; }
            50% { left: -30%; top: calc(100% - 50px); }
            75% { left: calc(100% - 650px); top: calc(100% - 50px); }
            100% { left: -30%; top: 0; }
        }

        /* Apply animation to the welcome text */
        .moving-text {
            position: absolute;
            animation: moveZigzag 15s linear infinite; /* Adjust animation duration and timing function as needed */
        }

        /* Limit the movement of the text within the header area */
        header.page-header {
            position: relative; /* Ensure header is a positioned element */
            overflow: hidden; /* Hide any overflow outside the header */
        }
    </style>

    

</head>
<body>
    <header class="page-header">
        <div class="brand">
            <h1>Agrocare</h1>
        </div>
        <nav>
            <ul class="nav">
                
                <li><a href="#">Home</a></li>
                <li><a href="aboutuspage.php">About Us</a></li>
                <li class="dropdown">
                    <a href="products.php">Product &#9662;</a>
                    <div class="dropdown-content">
                        <a href="fertilizers.php">Fertilizers</a>
                        <a href="seeds.php">Seeds</a>
                        <a href="agrochemicals.php">Agrochemicals</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">Service &#9662;</a>
                    <div class="dropdown-content">
                        <a href="service.php">Crop Care</a>
                        <a href="Livestock-management.php">Animal Care</a>
                    </div>
                </li>
                <li><a href="contactus.php">Contact Us</a></li>

                <?php
                if(isset($_SESSION['email'])){
                  ?>
                  <!-- <div id="username-display" class="displayusername"></div> -->
                    <a href="#" class="login moving-text"><?php echo "Welcome&nbsp;".$_SESSION['uname'] ?></a>
                  
                <li><a href="./logout.php">logout</a></li>

                <?php
                }else{
                  ?>
                <li ><a href="./login.php" class="login">Login</a></li>

                  <?php
                }
                 ?>



            </ul>
             
        </nav>
    </header>


<img src="./images/top image.png" alt="" class="top-image"/>
<div class="homeparag">
    <p>Welcome To Agrocare</p>
</div>

<div class="input-display">
    <div id="par-align">
    <p >Use farm inputs from Agrocare to boost your farm productivity</p>
</div>

<p id="supp-text">Agrocare becomes the best site for Agricultural growth</p>
<a href="products.php"><button class="show-btn">Explore Farm inputs</button></a>
<p id="price">View Prices</p>


<div class="product-imgs">
    <img src="./images/fertilizer.png" alt="" class="green-img">
    <img src="./images/seeds.png" alt="" class="best-img">
</div>
</div>

<div class="farmcare-display">
    <div id="par-align">
    <p >Protect your farm and increase your crop yeids with Agrocare</p>
</div>

<p id="supp-text">Agrocare provides skilled labor personnels who helps in animal and crop management</p>
<a href="service.php"><button class="show-btn">Skilled Experts Labor</button></a>
<p id="price">View Prices</p>


<div class="product-imgs">
    <img src="./images/farmcare.png" alt="" class="green-img">
    <img src="./images/animalcare.png" alt="" class="best-img">
</div>
</div>

<!-- <script src="./script/animate.js"></script> -->



<!--The footer code-->

<footer>
  <div class="container">
      <div>
        <h3>Contact Us</h3>
        <ul>
          <li><p>Landline No</p></li>
          <li><p>+254793758686</p></li>
          <li><p>Email</p></li>
          <li><p>agrocare@gmail.com</p></li>
          
        </ul>
      </div>
      
      <div>
        <h3>Services</h3>
        <ul>
          <li><a href="service.php">Crop Care</a></li>
          <li><a href="livestock-management.php">Animal care</a></li>
          <li><a href="#"></a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>
      
      <div>
        <h3>About Us</h3>
        <ul>
          <li><a href="aboutuspage.php">Providing Farmers with abundant</a></li>
          <li><a href="aboutuspage.php">Farm Inputs</a></li>
          <li><a href="aboutuspage.php">Skilled Labor</a></li>
          <li><a href="aboutuspage.php">Farm Management</a></li>
          
        </ul>
      </div>
      
      <div>
        <h3>Products</h3>
        <ul>
          <li><a href="#">Agrochemicals</a></li>
          <li><a href="#">Fertilizers</a></li>
          <li><a href="#">seeds</a></li>
          <li><a href="#">Animal Meals</a></li>
        </ul>
      </div>
    </div>
  </footer>

</html>

</body>
