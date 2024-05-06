<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Topdressing Fertilizers</title>
  <link rel="stylesheet" href="../styles/products.css">
</head>
<body>
  <!-- <a href="./fertilizers.html" onclick="history.back()" class="back-link">&lt; Back</a> -->

  <div>
    <p>Topdressing Fertilizers</p>

    <!-- Search bar -->
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search topdressing fertilizers...">
    </div>
  </div>
  <div class="inputs_grid">

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Topdresser/164-Baraka Potato Topdress.png" alt="">
      </div>
      <p class="name js_input_name">Baraka Potato Topdress</p>
      <p class="price js_input_price">Ksh.1200</p>

      <button class="select_button js_input_btn" data-name="Baraka Potato Topdress" data-price="1200" data-image="FertilizersImages/Topdresser/164-Baraka Potato Topdress.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Topdresser/2-ApolloCAN.png" alt="">
      </div>
      <p class="name js_input_name">CAN</p>
      <p class="price js_input_price">Ksh.2225</p>

      <button class="select_button js_input_btn" data-name="CAN" data-price="2225" data-image="FertilizersImages/Topdresser/2-ApolloCAN.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Topdresser/573-YARA Mila - JAVA.png" alt="">
      </div>
      <p class="name js_input_namee">YARA Mila - JAVA</p>
      <p class="price js_input_price">Ksh.1000</p>

      <button class="select_button js_input_btn" data-name="YARA Mila - JAVA" data-price="1000" data-image="FertilizersImages/Topdresser/573-YARA Mila - JAVA.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Topdresser/691-BARAKA Sugar cane Top dressing.png" alt="">
      </div>
      <p class="name js_input_name">BARAKA Sugar cane Top dressing</p>
      <p class="price js_input_price">Ksh.1450</p>

      <button class="select_button js_input_btn" data-name="BARAKA Sugar cane Top dressing" data-price="1450" data-image="FertilizersImages/Topdresser/691-BARAKA Sugar cane Top dressing.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Topdresser/692-YARA Mila- Power 50k.png" alt="">
      </div>
      <p class="name js_input_namee">YARA Mila- Power</p>
      <p class="price js_input_price">Ksh.999</p>

      <button class="select_button js_input_btn" data-name="YARA Mila- Power" data-price="999" data-image="FertilizersImages/Topdresser/692-YARA Mila- Power 50k.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Topdresser/83-Baraka Legume.png" alt="">
      </div>
      <p class="name js_input_name">Baraka Legume</p>
      <p class="price js_input_price">Ksh.780</p>

      <button class="select_button js_input_btn" data-name="Baraka Legume" data-price="780" data-image="FertilizersImages/Topdresser/83-Baraka Legume.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image js_input_image" src="FertilizersImages/Topdresser/95-Yara Microp Topdressing.png" alt="">
      </div>
      <p class="name js_input_namee">Yara Microp Topdressing</p>
      <p class="price js_input_price">Ksh.1100</p>

      <button class="select_button js_input_btn" data-name="Yara Microp Topdressing" data-price="780" data-image="FertilizersImages/Topdresser/95-Yara Microp Topdressing.png">Select</button>
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