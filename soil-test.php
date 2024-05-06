
<?php 

session_start();
include("./php/crud.php");
$crud = new Crud("localhost", "root", "", "AgroCare");
$fetch = $crud->fetch_data("select * from service_upload where id = '".$_GET['id']."'");
// echo $fetch[0]["heading"];
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
                    <a href="products.php">Product &#9662;</a>
                    <div class="dropdown-content">
                        <a href="fertilizers.php">Fertilizers</a>
                        <a href="seeds.php">Seeds</a>
                        <a href="agrochemicals">Agrochemicals</a>
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
                <li >
                    <a href="#" class="login">
                        <?php
                        if (isset($_SESSION["email"])){
                        echo $_SESSION["uname"];
                        }else{
                        echo "login";
                        } ?>
                    </a>
                </li>
            </ul>
             
        </nav>
    </header>
    <div class="soil-body">
        <img src="./images/soil.png" alt="" class="soil-img">
    </div>
    <div>
        <img src="<?php echo $fetch[0]["image2"]; ?>" alt="" class="soil1-img">
    </div>
    <div class="stmt">
        <?php echo $fetch[0]["description"]; ?>
        
    </div>
    <div class="order">
        <?php
        if(isset($_SESSION["email"])){
            ?>
        <button class="order-btn" onclick="displayPaymentForm()">Order for a soil test Today</button>

            <?php
        }else{
            ?>
        <button class="order-btn" onclick="alert('You need to log in First')">Order Today</button>

            <?php
        }
        ?>
    </div>
    <div>
        <img src="/images/soil2img.png" alt="">
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
        
     <!--importing payment form code-->
        <div id="imported-content"></div>

        <script>
            fetch('paymentform.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('imported-content').innerHTML = data;
            });
        </script>
        <script src="./paymentform.js"></script>>
</body>
</html>