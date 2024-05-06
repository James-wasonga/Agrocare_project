<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planting Fertilizers</title>

  <?php

  include_once("../php/crud.php");
  $crud = new Crud("localhost", "root", "", "agrocare");
  $fetch = $crud->fetch_data("select * from product");


  ?>

  <link rel="stylesheet" href="../styles/products.css">
</head>
<body>
  <!-- <a href="./fertilizers.php" onclick="history.back()" class="back-link">&lt; Back</a> -->

  <div>
    <p>Planting Fertilizers</p>

    <!-- Search bar -->
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search planting fertilizers...">
    </div>
  </div>

  <div class="inputs_grid">
  <?php

  foreach($fetch as $row){
    ?>
     <div class="input_varieties">
        <p class="input_title"></p>
        <div class="input_image">
          <img class="image js_input_image" src="<?php echo "http://localhost/admin_panel". substr($row['product_image'], 1); ?>" alt="">
        </div>
        
        <p class="name js_input_name"><?php echo $row['product_name']; ?></p>
        <p class="price js_input_price">Ksh.<?php echo number_format($row['price'], 2); ?></p>
  
        <button class="select_button js_input_btn" data-name="<?php echo $row['product_name']?>" data-price= "<?php echo $row['price']; ?>" data-image="<?php echo "http://localhost/admin_panel". substr($row['product_image'], 1); ?>">Select</button>
      </div>
    <?php
  }
  ?>
  
<!-- 
    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Planting Fertilizers/163-Baraka Potato Planting.png" alt="">
      </div>
      <p class="name js_input_name">Baraka Potato Planting</p>
      <p class="price js_input_price">Ksh.1600</p>

      <button class="select_button js_input_btn" data-name="Baraka Potato Planting" data-price="1600" data-image="FertilizersImages/Planting Fertilizers/163-Baraka Potato Planting.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Planting Fertilizers/692-YARA Mila- Power 50kg.png" alt="">
      </div>
      <p class="name js_input_name">YARA Mila</p>
      <p class="price js_input_price">Ksh.850</p>

      <button class="select_button js_input_btn" data-name="YARA Mila- Power" data-price="850" data-image="FertilizersImages/Planting Fertilizers/692-YARA Mila- Power 50kg.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Planting Fertilizers/796-DAP10KGS.png" alt="">
      </div>
      <p class="name js_input_name">DAP 10KGS</p>
      <p class="price js_input_price">Ksh.500</p>

      <button class="select_button js_input_btn" data-name="DAP10KGS" data-price="500" data-image="FertilizersImages/Planting Fertilizers/796-DAP10KGS.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Planting Fertilizers/797-CAN10KGS.png" alt="">
      </div>
      <p class="name js_input_name">CAN 10KGS</p>
      <p class="price js_input_price">Ksh.300</p>

      <button class="select_button js_input_btn" data-name="CAN10KGS" data-price="300" data-image="FertilizersImages/Planting Fertilizers/797-CAN10KGS.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Planting Fertilizers/83-Baraka Legume.png" alt="">
      </div> 
      <p class="name js_input_name">Baraka Legume</p>
      <p class="price js_input_price">Ksh.1200</p>

      <button class="select_button js_input_btn" data-name="Baraka Legume" data-price="300" data-image="FertilizersImages/Planting Fertilizers/83-Baraka Legume.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Planting Fertilizers/94-YaraMicropPlanting.png" alt="">
      </div>

      <p class="name js_input_name">Yara Micro-planting</p>
      <p class="price js_input_price">Ksh.1250</p>

      <button class="select_button js_input_btn" data-name="YaraMicropPlanting" data-price="1250" data-image="FertilizersImages/Planting Fertilizers/94-YaraMicropPlanting.png">Select</button>
    </div>-->
  </div> 
</div>

<a id="payment-anchor"></a>

<!--input display area-->

<!-- <div class="payment_form js_payment_form">
  <div class="exit_tab">
    <p class="exit js_exit_tab">X</p>
  </div>

  <div class="display_input js_input_display">
    <div class="input_img">
      <img class="disp_img" id="selected_image" src="" alt="">
    </div>

    <div class="input_details js_input_details">
      <p class="input_name" id="selected_name"></p>
      <p class="input_price" id="selected_price"></p>
    
      <div class="purchase_quantity">
        <p class="dec_quantity">-</p>
        <p class="show_quantity">0</p>
        <p class="inc_quantity">+</p>
      </div>
      <button class="add_to_bskt_btn">Add to basket</button>
    </div>
  </div>
</div> -->

<!-- Basket display area -->
<div id="basket" class="basketDisplay js_basketDisplay">
  <div class="exit_tab">
      <p class="exit js_exit_tab">X</p>
    </div>
  <h2>Your Basket</h2>
  <div id="basket-items"></div>
  <p class="total_price" id="total-price"></p>
  <button class="add_more_items js_add_more_items">Add More Items</button>
  <button class="buy_now_btn js_buy_now_btn">Buy Now</button>
</div>

<script src="../scripts/products.js"></script>

</body>
</html>