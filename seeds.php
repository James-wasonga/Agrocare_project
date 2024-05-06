<?php
session_start();
include("./php/process.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seeds</title>

  <link rel="stylesheet" href="./styles/seeds.css">
  <link rel="stylesheet" href="./styles/header.css">
  <link rel="stylesheet" href="./styles/footer.css">

</head>
<!-- <a href="./products.php" class="back-link">&lt; Back</a> -->

<body>

<header class="page-header">
        <div class="brand">
            <h1>Agrocare</h1>
        </div>
        <nav>
            <ul class="nav">
                
                <li><a href="index.php">Home</a></li>
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
              <a href="#" class="login"><?php echo "Welcome&nbsp;".$_SESSION['uname'] ?></a>
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



  <div class="top_contents">
    <h2 class="seeds_title">Seeds</h2>
    <!-- <input class="search_bar" type="text" placeholder="Search for your product"> -->
  </div>
  <div class="products_seeds">
    <div class="seeds_background_image">
    </div>

    <p class="browse_seeds">
      Browse our seeds
    </p>

    <div class="bottom_elements">
      <div class="cereals_background_image">
        <a href="./seeds/cereals.php" >Cereals</a>

        <button class="view_more_btn js_cereals">View more</button>
      
    </div>

    <div class="legumes_background_image">
      <a href="./seeds/legumes.php">Legumes</a>

      <button class="view_more_btn js_legumes">View more</button>
    </div>
    </div>

    <div class="vegetables_background_image">
        <a href="./seeds/vegetables.php">Vegetables</a>

        <button class="view_more_btn js_vegetables">View more</button>
    </div>
  </div>

<script src="./scripts/seeds.js"></script>





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
          <li><a href="agrochemicals.php">Agrochemicals</a></li>
          <li><a href="fertilizers.php">Fertilizers</a></li>
          <li><a href="seeds.php">seeds</a></li>
          <li><a href="#">Animal Meals</a></li>
        </ul>
      </div>
    </div>
  </footer>

</html>

</body>
</html>