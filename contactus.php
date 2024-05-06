<?php
session_start();
include("./php/process.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta name="view port" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="./styles/contactus.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/header.css">




    </head>
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
                <li><a href="#">Contact Us</a></li>

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
        <div class="contact">
            <h2>Get In Touch!</h2>
            <h6>with Agrocare</h6>
        </div>
        
    <div class="page">
               <div class="contact-info">
                <h3>Thanks for 
                </h3><h3>Reaching us</h3>
               <br> <p>fill up the form and our team</p>
                <p>will get back to you within</p>
                <p>24hrs</p>
                <br/><br/><br/>
                   <p class="info">maseno-kisumu, Kenya<br/><br/>
                    +254793758686<br/><br/>
                   agrocare@gmail.com</p>
               </div> 
                
        
           
        
        <form class="contact-form" action="cont.php" method="POST">
            <label>Name</label><br/>
            <input type="text" name="Name" placeholder="Enter Your Full name and Surname" class="contact-inputs" pattern="[a-z A-Z]{3,}"  title="Invalid Name"><br/>
            <label>Email</label><br/>
             <input type="email" name="email" placeholder="Enter Your email" class="contact-inputs" required><br/>
             <label>Message</label><br/>
            <textarea name="message" placeholder="Enter Your Message" class="contact-inputs" required></textarea>
            
            <button id="btn"name="submit">Submit</button> 
        </form>
     </div>
     <div class="loc">
        <p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8182953696128!2d34.5948050758213!3d-0.006410635568170777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa9f1efed77e9%3A0xb9c8a555cc010ad6!2sMaseno%20University-Kisumu%20Campus!5e0!3m2!1sen!2ske!4v1710683931334!5m2!1sen!2ske" width="864" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
     
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