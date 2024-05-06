<?php 

session_start();
include("./php/crud.php");
$crud = new Crud("localhost", "root", "", "AgroCare");
// $fetch = $crud->fetch_data("select * from service_upload where id = '".$_GET['id']."'");
// if(isset($_GET["paymentform"])){
//   $insert = $crud->insert_data("users", ["username" => "james"])
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/soil.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/paymentform.css">



</head>
<body>
    <header class="page-header">
        <div class="brand">
            <h1>Agrocare</h1>
        </div>
        <nav>
            <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutuspage.php">About Us</a></li>
                <li class="dropdown">
                    <a href="#">Product &#9662;</a>
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
    <div class="soil-body">
        <img src="./images/livestock4.png" alt="" class="livestock-img">
    </div>
    <div>
        <img src="./images/livestock3.png" alt="" class="soil1-img">
    </div>
    <div class="stmt">
        <p class="soil-head">Manage Your Livestocks' health</p>
        <p><span>This is an essential part of profitable farm management for all farm animals.</span>
            <span> Based on the livestock health problems identified in the soil test,we recommend </span>
            <span>a good health correction program and proper management of livestock health</span>
            <span> farmers are therefore adviced to investing wisely by applying the livestocks feeds</span>
                <span> and drugs at the right quantity,to increase their yields and productivity.</span></p>

                <p class="soil-head">Why is it important to do a Livestock Management?</p>  
                <ul>
                    <li>Livestock feed tests allows us to identify and calculate the requirements necessary</li>
                    <li>Livestock management helps to determine levels of the essential profits from them</li>
                    <li>Proper Care of livestocks helps to determine the best livestocks within an area</li>

                </ul> 
                <p class="soil-head">Get an Intuitive report that is easy to interpret</p>
        <p><span>Agrocare has designed an intuitive report format that visualizes the recommendations</span>
            <span> and clearly highlights the various soil correction measures for your farm. This will enable</span>
            <span>you save money by giving you the exact soil correction quantities for your farm hence</span>
            <span>minimizing wastage.</span></p>
     </div>
    <div class="order">
        <?php
        if(isset($_SESSION["email"])){
            ?>
        <button class="order-btn" onclick="displayPaymentForm()">Hire Livestock Expert</button>

            <?php
        }else{
            ?>
        <button class="order-btn" onclick="alert('You need to log in First')">Hire Livestock Expert</button>

            <?php
        }
        ?>
    </div>
    
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>    

    
<footer>
    <div class="container">
        <div>
          <h3>Contact Us</h3>
          <ul>
            <li><p>Landline No</p></li>
            <li>+254793758686</li>
            <li>Email</li>
            <li>agrocare@gmail.com</li>
            
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
    
    <!--importing payment form here-->
    <div id="imported-content"></div>
    <script>
     fetch('paymentform.html').then(response => response.text()).then(data => {
      document.getElementById('imported-content').innerHTML=data;
     });
    </script>


    <script src="paymentform.js"></script>
</body>
</html>