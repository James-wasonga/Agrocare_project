<?php 

session_start();
include("./php/crud.php");
$crud = new Crud("localhost", "root", "", "AgroCare");
// if(isset($_GET["paymentform"])){
//   $insert = $crud->insert_data("users", ["username" => "james"])
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Agrocare</title>
     <link href="./styles/service.css" type="text/css" rel="stylesheet">
     <link href="./styles/header.css" type="text/css" rel="stylesheet">
     <link href="./styles/footer.css" type="text/css" rel="stylesheet">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


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
                <!-- <li><a href="upload.php" class="add-service">Add Service</a></li> -->

                <?php
                if(isset($_SESSION['email'])){
                  ?>
                <a href="#" class="login"><?php echo "Welcome&nbsp;".$_SESSION['uname'] ?></a>
                <li><a href="./logout.php">logout</a></li>

                <?php
                }else{
                  ?>
                <li><a href="./login.php" class="login">Login</a></li>

                  <?php
                }
                 ?>
            </ul>
             
        </nav>
    </header>


    <div class="top">
        <h1 class="tophead">
            Notable Services in Agrocare
        </h1>
        <p class="topgraph">
           <span> We partner with farmers to provide them with</span> 
           <span>affordable modern farming solutions to </span>
           <span>increase efficiency and improve production.</span>
        </p>
        
        

    </div>
    <div class="iconimg">
        <img src="./images/icon.png" alt=""/>
    </div>
    <br>
    <br>
    <br>
    <div class="servicebody w3-row-padding">
        <?php
        $fetch = $crud->fetch_data("select * from service_upload");
        foreach($fetch as $row){
            ?>
            <div class="w3-half">
            <img src="<?php echo $row["image1"] ?>" alt="" class="soiltestimg">
            <p class="paragraph"><?php echo $row["heading"]; ?></p>
            <a href="soil-test.php?id=<?php echo $row["id"]; ?>"> <button class="viewbtn">View Skills</button></a>
        </div>
            <?php
        }
        ?>
        

        <!-- <div class="pestcontrol">
            <img src="./images/pest control.png" alt="" class="pestcontrolimg">
            <p class="paragraph">Pest and Disease control</p>
            <a href="pest control.html"><button class="viewbtn">View Skills</button></a>
            
        </div>

        <div class="livestockmang">
            <img src="./images/livestock mang.png" alt="" class="livestockimg">
            <p class="paragraph">livestock Management </p>
            <a href="Livestock-management.html"><button class="viewbtn">View Skills</button></a>
            
        </div>

        <div class="farmequip">
            <img src="./images/farm equip.png" alt="" class="farmequipimg">
            <p class="paragraph">Farm Equipment Rentals</p>
            <a href="farm equipment.html"></a><button class="viewbtn">View Skills</button></a>
            
        </div>

        <div class="weatherforcast">
            <img src="./images/weather forcast.png" alt="" class="weatherimg">
            <p class="paragraph">Farm Weather Forcasting</p>
            <a href="weatherforcast.html"> <button class="viewbtn">View Skills</button></a>
            
        </div>

        <div class="farmresearch">
            <img src="./images/farm research.png" alt="" class="farmresearchimg">
            <p class="paragraph">Farm Research and Development</p>
            <a href="farmresearch.html"> <button class="viewbtn">View Skills</button></a>
            
        </div> -->
        

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
                <li><a href="service.php">Crop Care</a></li>
                <li><a href="Livestock-management.php">Animal care</a></li>
                <li><a href="#"></a></li>
                <li><a href="#">Support</a></li>
              </ul>
            </div>
            
            <div>
              <h3>About Us</h3>
              <ul>
                <li><a href="#">Providing Farmers with abundant</a></li>
                <li><a href="service.php">Farm Inputs</a></li>
                <li><a href="service.php">Skilled Labor</a></li>
                <li><a href="service.php">Farm Management</a></li>
                
              </ul>
            </div>
            
            <div>
              <h3>Products</h3>
              <ul>
                <li><a href="agrochemicals.php">Agrochemicals</a></li>
                <li><a href="fertilizers.php">Fertilizers</a></li>
                <li><a href="seeds.php">seeds</a></li>
                <li><a href="Livestock-management.php">Animal Meals</a></li>
              </ul>
            </div>
          </div>
        </footer>
       
</body>
</html>