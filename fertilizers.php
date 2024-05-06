<?php
session_start();
include("./php/process.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fertilizers</title>
  <link rel="stylesheet" href="./styles/fertilizers.css">
  <link rel="stylesheet" href="./styles/header.css">
  <link rel="stylesheet" href="./styles/footer.css">

 </head>
<body>
  <!-- <a href="./products.php" onclick="history.back()" class="back-link">&lt; Back</a> -->

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
    <h2 class="fertilizers_title">Fertilizers</h2>
    <!-- <input class="search_bar" type="text" placeholder="Search for your fertilizers"> -->
  </div>
  
  <div class="products_fertilizers">
    <div class="fertilier_background_image">
    </div>

    <p class="browse_fertilizers">
      Browse our fertilizers
    </p>

    <div class="bottom_elements">
      <div class="planting_fert_bg_img">
        <a href="./fertilizers/planting_fert.php">Planting Fertilizers</a>

        <button class="view_more_btn js_planting_fert">View more</button>
      
      </div>

      <div class="topdressing_fert_bg_img">
        <a href="./fertilizers/topdresser.php" >Topdressing fertilizers</a>

        <button class="view_more_btn js_topdresser">View more</button>
      
      </div>
    </div>

    <div class="foliar_fert_bg_img">
        <a href="./fertilizers/foliar_fert.php">Foliar fertilizers</a>

        <button class="view_more_btn js_foliar">View more</button>
    </div>

  </div>
  <script src="./scripts/fertilizers.js"></script>

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