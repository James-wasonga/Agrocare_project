<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/pest.css">
    <link rel="stylesheet" href="./styles/paymentform.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/header.css">




</head>
<body>

  <header class="page-header">
    <div class="brand">
        <h1>Agrocare</h1>
    </div>
    <nav>
        <ul>
            
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutuspage.html">About Us</a></li>
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
            <li><a href="#">Contact Us</a></li>
            <li ><a href="#" class="login">Login</a></li>
        </ul>
         
    </nav>
</header>


    <div class="body">
<div>
<h1 class="pest-head">Pest and Diseases control</h1>
<p class="span-par"><span>We strive hard to provide farmers with skilled labourers who provide them with skilled labor in terms of control of pests and diseases within
    their farms. When it comes to pest control, safety is our</span> 
    <span> number one priority. We understand that whether you’re protecting your home or running a business, you want to ensure the health and wellbeing of those around you.
     That's why we're committed</span>
      <span> to ensuring pesticide safety in all operations.</span>
</p>
<div class="pest1">
<p class="spray">Pest Spray</p>
<img src="/images/pest.png" alt="">
</div>
<div class="pest2">
    <p class="spray"> Disease control</p>
    <img src="/images/pest2.png" alt="" class="pest2-img">
    </div>
<div>
<h1 class="head">Understanding Pesticides: What Are They?</h1>
<p class="span-par"><span>Pesticides are substances used to control pests, including insects, rodents, and more. While they can be highly effective, they can also pose risks to human health and the environment if not handled </span>
    <span>correctly. That’s why it’s crucial to work with a pest control company that prioritizes safety.Pesticides typically fall into several categories and use signal words to indicate the level of toxicity </span>
    </p>
</div>
<div>
    <h1 class="head">Let’s Work Together for Safer Pest and Disease Control</h1>
    <p class="span-par"><span>Pesticide safety is too important to leave to chance. If you’re looking for a reliable pest control service, look no further than Gecko Pest Control Services. We provide quality services that use the latest </span>
        <span>technology and techniques to manage pests in commercialresidential, agricultural, and other settings. Whether you need general pest management or something more specific, we have you covered. </span>
        </p>
    </div>

    <div>
        <p class="span-paragraph">Feel free to reach us to enable us skilled labor</p>
        <p class="supp-graph">We are the center of all the all pest and disease control </p>
        <button class="hire-btn" onclick="displayPaymentForm()">Hire Labor</button>
        </div>
</div>
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

  <div id="imported-content"></div>
  <script>
   fetch('paymentform.html').then(response => response.text()).then(data =>{
    document.getElementById('imported-content').innerHTML = data;
   });
  </script>
<script src="./paymentform.js"></script>>

</body>
    
</body>
</html>