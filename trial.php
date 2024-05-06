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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                        <a href="#">Fertilizers</a>
                        <a href="#">Seeds</a>
                        <a href="#">Agrochemicals</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">Service &#9662;</a>
                    <div class="dropdown-content">
                        <a href="service.php">Crop Care</a>
                        <a href="Livestock-management.php">Animal Care</a>
                    </div>
                </li>
                <li><a href="#">Contact Us</a></li>

                <li ><a href="#" class="login"><?php
                 if (isset($_SESSION["email"])){
                  echo $_SESSION["email"];
                }else{
                  echo "login";
                } ?></a></li>
            </ul>
             
        </nav>
    </header>
    <div class="soil-body">
        <img src="./images/livestock4.png" alt="" class="livestock-img">
    </div>
    <div>
        <img src="<?php echo $fetch[0]["image2"]; ?>" alt="" class="soil1-img">
    </div>
    <div class="stmt">
    <?php echo $fetch[0]["description"]; ?>
     </div>
    <div class="order">
        <button class="order-btn" id="hire-expert">Hire Livestock Expert</button>
    </div>
    
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
    
    <!--importing payment form here-->
    <div id="imported-content"></div>
    <script>
        $(document).ready(function(){
            $("#hire-expert").click(function(){
                <?php if(!isset($_SESSION["email"])) { ?>
                    alert("You need to log in to hire a livestock expert.");
                <?php } else { ?>
                    $("#imported-content").load("paymentform.html");
                <?php } ?>
            });
        });
    </script>
</body>
</html>
