<?php
session_start();
include("./php/process.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link rel="stylesheet" type="text/css" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/about.css">
    <link rel="stylesheet" href="./styles/footer.css">

</head>
<body>
    <header class="page-header">
        <div class="brand">
            <h1>Agrocare</h1>
        </div>
        <nav>

            <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
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

   <div class="aboutparagraph">
    <P>Our Agrocare Website</P><br> <p id="alignparag">Gives a best relax site for farmers </P>
   </div>
   
   <div class="btn-about">
      <a href="products.php"><button id="btn">View Our Products</button></a>
   </div>

  <div class="location">
    <img src="./images/location.png" alt="" id="imglocation">
  </div>
<div class="aboutlocation">
    <h1>We are the center of Agriculture</h1>
    <h1>to offer you the best</h1>
    <P class="para">We offer all diverse and well refined and proved inputs and skill services At Agrocare, we are passionate 
      about supporting farmers and enhancing agricultural productivity. With a commitment to quality and innovation, 
      we provide a wide range of top-grade farm inputs, including seeds, fertilizers, pesticides, and equipment.</P>
</div>


<div class="mission">
    <h2>Mission</h2>
    <p class="mission-paragraph">Our mission at Agrocare is to revolutionize the 
        agricultural industry by providing a comprehensive platform that seamlessly 
        connects farmers, suppliers of agricultural inputs, and skilled labor, fostering sustainable 
        farming practices and prosperity in rural communities. We understand the pivotal role agriculture plays
         in global food security and economic development, and we are committed to empowering farmers with access 
         to high-quality agricultural inputs, cutting-edge technology, and expert labor services.
           </p>
</div>

<div class="vision">
    <h2>Vision</h2>
    <p class="vision-paragraph">
        By continuously advancing our technology, our aim is to make our solutions even more accessible and affordable.
         Together with our value-based services, we provide solutions through our global partner network and clients, 
         thereby making crop and livestock management services available to millions of farmers countrywide.
           </p>
</div>

<footer>
<div class="container">
    <div>
      <h3>Contact Us</h3>
      <ul>
        <li><p>Landline No</p></li>
        <li><a href="#">+254793758686</a></li>
        <li><a href="#">Email</a></li>
        <li><a href="#">agrocare@gmail.com</a></li>
        
      </ul>
    </div>
    
    <div>
      <h3>Services</h3>
      <ul>
        <li><a href="#">Crop Care</a></li>
        <li><a href="#">Animal care</a></li>
        <li><a href="#"></a></li>
        <li><a href="#">Support</a></li>
      </ul>
    </div>
    
    <div>
      <h3>About Us</h3>
      <ul>
        <li><a href="#">Providing Farmers with abundant</a></li>
        <li><a href="#">Farm Inputs</a></li>
        <li><a href="#">Skilled Labor</a></li>
        <li><a href="#">Farm Management</a></li>
        
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


</body>
</html>