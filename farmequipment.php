

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/soil.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/farm.css">
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
                <li><a href="contactus.php">Contact Us</a></li>
                <li ><a href="#" class="login">Login</a></li>
            </ul>
             
        </nav>
    </header>
    <div class="soil-body">
        <img src="/images/farmequip3.png" alt="" class="livestock-img">
    </div>
    <div>
        <img src="<?php echo $fetch[0]["image2"];?>" alt="" class="soil1-img">
    </div>
    <div class="stmt">
        <?php echo $fetch[0]["description"];?>
        <p class="soil-head">Manage Farm By use of Best Machineries</p>
        <p><span>This is an essential part of profitable farm management for all farmers </span>
            <span> Based on the livestocks, there are several tools that farmers may need  out</span>
            <span> farm practises such as milking, administering drugs,management of livestock health</span>
            <span> farmers are therefore adviced to investing wisely by applying neccessary farm machines</span>
                <span> in most areas including crop farming to increase farm productivity </span></p>

                <p class="soil-head">Why is it important to use machinery?</p>  
                <ul>
                    <li>Allows farmers to complete tasks in a shorter time frame,nabling them multiple operations</li>
                    <li> Reduces the need for manual labor, allowing farmers to accomplish more with fewer workers.</li>

                </ul> 
                <p class="soil-head">Get an Intuitive report that is easy to interpret</p>
        <p><span>Agrocare has designed an intuitive report format that visualizes the recommendations</span>
            <span> and clearly highlights the various soil correction measures for your farm. This will enable</span>
            <span>you save money by giving you the exact soil correction quantities for your farm hence</span>
            <span>minimizing wastage.</span></p>
    </div>

    <div class="stmts">
        <p class="soil-head">Precision Agriculture</p>
        <p><span>The use of farm machineries enables the farmers to Precision the Agriculturre</span>
            <span> Based on the current advanced machineries in the agriculture, the production </span>
            <span>of the agriculuture is increasing with alot of advancement </span>
            <span> farmers are therefore adviced to implement farm machinery to increase their produce</span>
                <span>and also improve soil nutrients as far as heavy turning tractors </span></p>

                <p class="soil-head">Technological Innovation</p>  
                <ul>
                    <li>Ongoing advancements in farm machinery technology drive continuous farm improvements</li>
                    <li>Machinery can help mitigate risks associated with weather during farm practices </li>
                 

                </ul> 
                <p class="soil-head">Stand a chance to get the best Machine</p>
        <p><span> In a world with a growing population and increasing demand for food, farm machinery plays </span>
            <span> a crucial role in meeting the challenges of feeding billions of people</span>
            <span>Agrocare help save money by giving you the exact farm machines that help reduce loses </span>
            <span>for your farm hence minimizing wastage.</span></p>
    </div>
    
    
    <div class="order">
        <?php
        if(isset($_SESSION["email"])){
            ?>
        <button class="order-btn" onclick="displayPaymentForm()">Order for a soil test Today</button>

            <?php
        }else{
            ?>
        <button class="order-btn" onclick="alert('you need to log in')">Order for a soil test Today</button>

            <?php
        }
        ?>
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
    <!--importing payment form-->
  <div id="imported-content"></div>
  <script src="payform-link.js"></script>
  <script src="paymentform.js"></script>

</body>
</html>