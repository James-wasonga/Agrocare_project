

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
                <li ><a href="#" class="login">Login</a></li>
            </ul>
             
        </nav>
    </header>
    <div class="soil-body">
        <img src="/images/weatherforcast1.png" alt="" class="soil-img">
    </div>
    <div>
        <img src="/images/weatherforcast2.png" alt="" class="soil1-img">
    </div>
    <div class="stmt">
        <p class="soil-head">Manage Your Farm Conditions</p>
        <p><span>This is an essential part of profitable farm management for all field crops.</span>
            <span> Based on the weather problems identified in the weather test,werecommend </span>
            <span>livestock health and crop best production program, meaning</span>
            <span> farmers are always advised to invest wisely basing their mind on the variuos</span>
                <span>weather quantity,to increase yields and profitability.</span></p>

                <p class="soil-head">Why is it important to have weather Analysis</p>  
                <ul>
                    <li>Weather check allows us to identify and calculate the requirements necessary</li>
                    <li>weather forcusing helps to determine the essential nutrients in the soil</li>
                    <li>Proper checking of weather helps us to know the nice crops to grow at a given time</li>
                    <li>Appropriate knowlege of weather helps in smart farm descision making</li>

                </ul> 
                <p class="soil-head">Get an Intuitive report that is easy to interpret</p>
        <p><span>Agrocare has designed an intuitive report format that visualizes the recommendations</span>
            <span> and clearly delivers the various weather experts for your farm. This will enable</span>
            <span>you save money by giving you the exact weather predictions for your farm hence</span>
            <span>minimizing wastage.</span></p>
    </div>

    <div class="stmts">
        <p class="soil-head">Access to Weather Tools</p>
        <p><span>We ensure Farmers get to hire specialists or if possible hire some of the weather</span>
            <span> tools and use by himself provided he has some knowledge on the use</span>
            <span>Agrocare aims at ensuring that all the farmers get access to actual weather checks</span>
            <span> for the quality of their farm produuces</span>
                <span> and drugs at the right quantity,to increase their yields and productivity.</span></p>

                <p class="soil-head">Collaborate with Experts</p>  
                <ul>
                    <li> Work with agricultural experts, meteorologists, and local agricultural extension</li>
                    <li>services to enhance the quality and relevance of the advice provided </li>
                    <li>Soil moisture, type, and quality are crucial factors affecting crop.</li>

                </ul> 
                <p class="soil-head">Provide Timely Advice</p>
        <p><span>Agrocare ensures that the farmers are well advised befor the actual time of weather change</span>
            <span>to enable them plan in advanced for the type of operation they are planning to carry out</span>
            <span>Through the Help of Agrocare, several farmers have been able to maximize their farm productions</span>
            <span>with very little wastage</span></p>
    </div>
    <div class="tractor">
        <img src="/images/weatherforcast3.png" alt="" class="img">
    </div>
    <div class="order">
        <button class="order-btn" onclick="displayPaymentForm()">Hire Weather Researcher</button>
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
        
     <!--importing payment form code-->
        <div id="imported-content"></div>

        <script src="/payform-link.js"></script>
        <script src="/paymentform.js"></script>
</body>
</html>