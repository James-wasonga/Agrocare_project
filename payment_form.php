<?php
  include("process_form.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Form</title>
  <link rel="stylesheet" href="./styles/payment_form.css">
</head>
<body>  
  <form class="purchase_form" action="process_form.php" method="post">
    
     <label>Provide your personal details</label></br></br>
    <div class="farmer_name">
      <input class="name" type="text" placeholder="First name" name="first_name" required>
      <input class="name" type="text" placeholder="Last name" name="last_name" required>
    </div>
    <input class="name" type="text" placeholder="Id number" name="id_number" required>
    <div class="contact_info">
      <input class="name" type="text" placeholder="0757056101" name="phone_number" required>
      <input class="name" type="text" placeholder="email" name="email_address" required>
    </div></br></br>
  
    <label>Where do you come from?</label></br></br>
    <div class="farmer_location">
      <input class="name" type="text" name="county" placeholder="County" required>
      <input class="name" type="text" name="subcounty" placeholder="Sub-county" required>
    </div></br></br>

    <label>Which is your nearest agrovet?</label></br></br>
    <input class="name" type="text" name="nearest_agrovet" placeholder="Neraest agrovet" required>

    <button class="submit_details js_submit_details" name="submit" value="SUBMIT">SUBMIT</button> 
  </form>

  <!--Card Info for payment-->
  <div class="payment js_payment">
    <h1 class="payTitle">Personal Information</h1>

    <label>Name and Surname</label>
    <input type="text" placeholder="Your name" class="payInput">

    <label>Phone number</label>
    <input type="text" placeholder="+254 747 094 022" class="payInput">
    
    <label>Address</label>
    <input type="text" placeholder="152-Karungu" class="payInput">

    <h1 class="payTitle">Card Information</h1>
    <div class="cardIcons">
      <img src="" alt="" width="40" class="cardIcons">
      <img src="" alt="" width="40" class="cardIcons">
    </div>
    <input type="password" class="payInput" placeholder="Card Number">
    <button class="payButton">Checkout!</button>
    <span class="close js_close">X</span>
  </div>

  <!-- <script src="../scripts/paymentForm.js"></script> -->
</body>
</html>