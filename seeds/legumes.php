<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<link rel="stylesheet" href="../styles/products.css">
<body>
  
  <!-- <a href="./seeds.php" onclick="history.back()" class="back-link">&lt; Back</a> -->

  <div>
    <p>Legumes</p>

    <!-- Search bar -->
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search legumes...">
    </div>
  </div>
  <div class="inputs_grid">

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image" src="SeedsImages/Legumes/138-Soya Bean Seed (SC Salama).png" alt="">
      </div>
      <p class="name js_input_name">Soya Bean Seed (SC Salama)</p>
      <p class="price" id="input_price">Ksh.800</p>
      <button class="select_button js_input_btn" data-name="oya Bean Seed (SC Salama)" data-price="800" data-image="SeedsImages/Legumes/138-Soya Bean Seed (SC Salama).png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image" src="SeedsImages/Legumes/147-Rosecoco (Glp 2).png" alt="">
      </div>
      <p class="name" id="input_name">Rosecoco (Glp 2)</p>
      <p class="price" id="input_price">Ksh.500</p>
      <button class="select_button js_input_btn" data-name="Rosecoco (Glp 2)" data-price="500" data-image="SeedsImages/Legumes/147-Rosecoco (Glp 2).png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image" src="SeedsImages/Legumes/162-Mwitemania Bean Seed.png" alt="">
      </div>
      
      <p class="name" id="input_name">Mwitemania Bean Seed.</p>
      <p class="price" id="input_price">Ksh.650</p>
      <button class="select_button js_input_btn" data-name="Mwitemania Bean Seed." data-price="650" data-image="SeedsImages/Legumes/162-Mwitemania Bean Seed.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image" src="SeedsImages/Legumes/561-Cowpeas (Kunde) .png" alt="">

      </div>
      
      <p class="name" id="input_name">Cowpeas (Kunde)</p>
      <p class="price" id="input_price">Ksh.720</p>

      <button class="select_button js_input_btn" data-name="Cowpeas (Kunde)." data-price="650" data-image="SeedsImages/Legumes/561-Cowpeas (Kunde) .png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image" src="SeedsImages/Legumes/564-Somerwood seed.png" alt="">

      </div>
      
      <p class="name" id="input_name">Somerwood seed</p>
      <p class="price" id="input_price">Ksh.550</p>

      <button class="select_button js_input_btn" data-name="Somerwood seed" data-price="550" data-image="SeedsImages/Legumes/564-Somerwood seed.png">Select</button>
    </div>

    <div class="input_varieties">
      <p class="input_title"></p>
      <div class="input_image">
        <img class="image" src="SeedsImages/Legumes/565-Green feast.png" alt="">
      </div>
      
      <p class="name" id="input_name">-Green feast</p>
      <p class="price" id="input_price">Ksh.450</p>

      <button class="select_button js_input_btn" data-name="-Green feast" data-price="450" data-image="SeedsImages/Legumes/565-Green feast.png">Select</button>
    </div>
  </div>

  <a id="payment-anchor"></a>


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