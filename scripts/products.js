// JavaScript logic for searching products

// Function to handle search input
document.getElementById('searchInput'). addEventListener('input', function() {
  const searchQuery = this.value.toLowerCase();
  const productItems = document.querySelectorAll('.input_varieties');
  let found = false;

  productItems.forEach(item => {
    const productName = item.querySelector('.js_input_name').innerText.toLowerCase();
    if (productName.includes(searchQuery)) {
      item.style.display = 'block';
      found = true;
    } else {
      item.style.display = 'none';
    }
  });

  // Show alert if no results found
  if (!found) {
    alert('No results found.');
  }
});

// function showBasket() {
//   const basket = document.getElementById('basket');
//   basket.classList.remove('hidden');
// }

let quantity = 0;

// Add event listener to all Select buttons
const selectButtons = document.querySelectorAll('.select_button');
const yourBasket = document.querySelector(".js_basketDisplay");
selectButtons.forEach(button => {
  button.addEventListener('click', function() {
    const name = this.getAttribute('data-name');
    const price = parseFloat(this.getAttribute('data-price'));
    const imageSrc = this.getAttribute('data-image');

    quantity++;

    addToBasket(name, price, imageSrc);
    // showBasket();
    
    alert(`You have successfully added ${quantity} items to your basket!`);

    yourBasket.style.display = "block";
  });
});

// Function to add selected item to the basket
function addToBasket(name, price, imageSrc) {
  const basketItems = document.getElementById('basket-items');

  // Create a new item element
  const itemElement = document.createElement('div');
  itemElement.classList.add('basket-item');
  itemElement.innerHTML = `
    <img src="${imageSrc}" alt="${name}">
    <h3>${name}</h3>
    <p>Ksh.${price}</p>

    <button class="remove-button">X</button> <!--Add X button-->
  `;
 
  // Append the item to the basket
  basketItems.appendChild(itemElement);
  
  // Add event listener to the remove button
  const removeButton = itemElement.querySelector('.remove-button');
    removeButton.addEventListener('click', function() {
    const confirmRemove = confirm(`Are you sure you want to remove ${name}?`);
    if (confirmRemove) {
      itemElement.remove(); // Remove the item from the DOM
        // const productDiv = document.querySelector(`.product[data-id="${productId}"]`);
        // productDiv.remove();
        quantity--;
        updateTotalPrice(); // Update total price after removing the item
    }

  });

  // Update total price
  updateTotalPrice();
}

const exit_basket = document.querySelector(".js_exit_tab"); 
exit_basket.addEventListener('click', function (){
  const removeAllItems = document.querySelectorAll('.basket-item');
  const confirmExit = confirm(`This action will remove all the items from the basket?`);
  if (confirmExit) {
    removeAllItems.forEach(item => {
      item.remove();
  });
  quantity = 0;
  updateTotalPrice();
  }
  yourBasket.style.display = "none";
});


// Function to update the total price
function updateTotalPrice() {
  const basketItems = document.querySelectorAll('.basket-item');
  let totalPrice = 0;
  basketItems.forEach(item => {
    const priceText = item.querySelector('p').innerText;
    console.log(priceText);
    const price = parseFloat(priceText.replace('Ksh.', '').trim()); // Remove 'Ksh.' and  // Check if price is a valid number
    totalPrice += price;
  });

  document.getElementById('total-price').innerText = `Total: Ksh.${totalPrice.toFixed(2)}`; // Ensure the total price is formatted with 2 decimal places
}

const add_more_items = document.querySelector(".js_add_more_items");
add_more_items.addEventListener("click", () =>{
  yourBasket.style.display = "none";
});

//Adding event listener to the buy now button
const buyNowButton = document.querySelector('.js_buy_now_btn');
buyNowButton.addEventListener('click', function() {
    window.location.href = "../payment_form.php";
});


//Adding event listener to the submit button
const submitPaymentDetails = document.querySelector('.submit_payment_details');
submitPaymentDetails.addEventListener('click', function() {
  const buyerName = document.getElementById('buyerName').value;
    const phoneNumber = document.getElementById('phoneNumber').value;

    // const purchaseDate = new Date().toLocaleString(); // Get current date and time

    const totalPrice = parseFloat(document.getElementById('total-price').innerText.replace('Total: Ksh.', '').trim());

    const basketItems = document.querySelectorAll('.basket-item');
    const itemsBought = [];
    basketItems.forEach(item => {
        const name = item.querySelector('h3').innerText;
        const imageSrc = item.querySelector('img').getAttribute('src');
        const price = parseFloat(item.querySelector('p').innerText.replace('Ksh.', '').trim());
        itemsBought.push({ name, imageSrc, price });
    });

    // Prepare data to send to the server-side script
    const data = {
        buyerName,
        phoneNumber,
        // purchaseDate,
        totalPrice,
        itemsBought
    };

    // Send data to the server-side script using AJAX
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'processpayment.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle response from the server, if needed
            console.log(xhr.responseText);
        }
    };
    xhr.send(JSON.stringify(data));

    // Clear basket and display a confirmation message
    const confirmPurchase = confirm(`Thank you for your purchase, ${buyerName}!`);
    if (confirmPurchase) {
        basketItems.forEach(item => {
            item.remove();
        });
        quantity = 0;
        updateTotalPrice();
        yourBasket.style.display = 'none';
    }
});


// // //Function to handle Add More Items button click
// // function showProducts() {
 
// }


// Function to show the basket
//  function showBasket() {
//   document.getElementById('basket').classList.remove('hidden');
// }

// Function to handle Buy Now button click
// function buyNow() {
//   // Your buy now logic goes here
// }



// let submitButton = document.querySelector(".js_submit_details");
// let paymentOption = document.querySelector(".js_payment");

// let exitPayment = document.querySelector(".js_close");

// submitButton.addEventListener("click", () =>{
//   paymentOption.style.display = "flex";
// });

// exitPayment.addEventListener("click", () =>{
//   paymentOption.style.display = "none";
// });



// document.addEventListener("DOMContentLoaded", function() {
//   const input_btns = document.querySelectorAll(".js_input_btn");
//   const payment_form = document.querySelector(".js_payment_form");
//   const paymentAnchor = document.getElementById("payment-anchor");
//   const input_image = document.querySelectorAll('.js_input_image');
//   const input_details = document.querySelector(".js_input_details");
//   const exit_tab = document.querySelector(".js_exit_tab");
//   const selected_name = document.getElementById("selected_name");
//   const selected_price = document.getElementById("selected_price");
//   const selected_image = document.getElementById("selected_image")

//   let dec_quantity = document.getElementById("js_dec_quantity");
//   let show_quantity = document.getElementById("js_show_quantity");
//   let inc_quantity = document.getElementById("js_inc_quantity");
//   let quantity = 0;

//   input_btns.forEach(button => {
//     button.addEventListener("click", function() {
//       const name = this.getAttribute("data-name");
//       const price = this.getAttribute("data-price");
//       const image = this.getAttribute("data-image");
//       quantity++;
//       show_quantity.textContent = `${quantity}`;

//      
//       paymentAnchor.scrollIntoView({ behavior: "smooth" });

//       updateCart(name, price, image);
//       displayProductDetails(name, price, image);
      
//       dec_quantity.addEventListener("click", () => {
//         if(0 < quantity){
//           quantity -=1;
//           show_quantity.textContent = `${quantity}`;
//         } 
//         else{
//           alert(`You have ${quantity} items left!`);
//         }
//       });

//       inc_quantity.addEventListener("click", function(){
//         quantity +=1;
//         show_quantity.textContent = `${quantity}`;
//         dec_quantity.style.backgroundColor = "red";
       
//       });
//     });
//   });
 
//   function displayProductDetails(name, price, image) {
//     selected_image.setContent = `${image}`;
//     selected_name.textContent = `${name}`;
//     selected_price.textContent = `${price}`; 
//   }
//   exit_tab.addEventListener("click", () => {
//     payment_form.style.display = "none";
//   });
  
//   const cartDiv = document.getElementById("cart");
//   const cart = [];

//   function updateCart(name, price, image) {
  
//     cart.forEach(item => {
//      const itemDiv = document.createElement("div");

//       itemDiv.innerHTML = `
//       <div>
//           <img src="${item.image}" alt="${item.name}">
//           <h3>${item.name}</h3>
//           <p>$${item.price}</p>
//       </div>
//   `;
//       cartDiv.appendChild(itemDiv);
//     });
//     if (cart.length > 0) {
//         const itemCount = document.createElement("p");
//         itemCount.textContent = `Number of items in cart: ${cart.length}`;
//         cartDiv.appendChild(itemCount);
//     }
// }

//   //dispalay unit scripts
//    const add_to_basket_btns = document.querySelector(".js_add_to_bskt_btn");
//   // const cart_display_info = document.querySelector(".js_cart_display_info");
//   // const cart_anchor = document.getElementById("cart_anchor");
//   // const exit_cart = document.querySelector(".js_exit_cart");


//   add_to_basket_btns.addEventListener("click", function() {
//    function addToCart(name, image, price) {
//      if (cart.length > 0) {
//          cart.push({name, image, price});
//          updateCart(name, price, image);
//      }
//    }

//     alert(`You have successfully added ${quantity} items to your basket!`);

//     cart_anchor.scrollIntoView({ behavior: "smooth" });

//    });

// //   exit_cart.addEventListener("click", () => {
// //     cart_display_info.style.display = "none";

// //   });
// //   const total_price = document.getElementById("cart_total_price");
// //   const more_items = document.getElementById("more_items_btn");
// //   const buy_button = document.getElementById("js_buy_now_btn")

// //   more_items.addEventListener("click", () => {
// //     window.location.href = "/seeds.html";

// //   });

// //   buy_button.addEventListener("click", () => {
// //     window.location.href = "/payment_form.html";

// //   });
//  });

  






// Function to add selected item to the basket
// function addToBasket(name, price, imageSrc) {
//   const basketItems = document.getElementById('basket-items');

//   // Create a new item element
//   const itemElement = document.createElement('div');
//   itemElement.classList.add('basket-item');
//   itemElement.innerHTML = `
//     <img src="${imageSrc}" alt="${name}">
//     <h3>${name}</h3>
//     <p>Ksh.${price}</p>

//     <button class="remove-button">X</button> <!-- Add X button -->
//   `;
//   // Add event listener to the remove button
  
//   const removeButton = itemElement.querySelector('.remove-button');
//   removeButton.addEventListener('click', function() {
//     itemElement.remove(); // Remove the item from the DOM
//     quantity--;
//     updateTotalPrice(); // Update total price after removing the item
//   });

//   // const buttonItems = document.getElementById('button-items');
//   //  const buttonElement = document.createElement('div');
//   //  buttonElement.classList.add('button-item');
//   //  buttonElement.innerText = `<button class="remove-button">X</button>`;

//   // Append the item to the basket
//   basketItems.appendChild(itemElement);

//    // Append the button to the basket
//    //basketItems.appendChild(buttonElement);

//   // Update total price
//   updateTotalPrice();

  
//   // // Add event listener to the remove button
//   //  removeButton.addEventListener('click', function() {
//   //    removeItemFromBasket(itemElement);
//   //    quantity--;
//   //    updateTotalPrice();
//   //  });

//   function removeItemFromBasket(itemElement) {
//     itemElement.parentNode.removeChild(itemElement);
//   }
//   // Append remove button to item element
//   //  itemElement.appendChild(buttonElement);
// }

// // Function to update the total price
// function updateTotalPrice() {
//   const basketItems = document.querySelectorAll('.basket-item');
//   let totalPrice = 0;
//   basketItems.forEach(item => {
//     const priceText = item.querySelector('p').innerText;
//     console.log(priceText);
//     const price = parseFloat(priceText.replace('Ksh.', '').trim()); // Remove 'Ksh.' and  // Check if price is a valid number
//     totalPrice += price;
//   });

//   document.getElementById('total-price').innerText = `Total: Ksh.${totalPrice.toFixed(2)}`; // Ensure the total price is formatted with 2 decimal places
// }


// // Function to show the basket
// function showBasket() {
//   document.getElementById('basket').classList.remove('hidden');
// }

// // Function to handle Buy Now button click
// function buyNow() {
//   // Your buy now logic goes here
// }

// // Function to handle Add More Items button click
// function showProducts() {
//   document.getElementById('basket').classList.add('hidden');
  
// }
// let quantity = 0;

// // Add event listener to all Select buttons
// const selectButtons = document.querySelectorAll('.select_button');
// selectButtons.forEach(button => {
//   button.addEventListener('click', function() {
//     const name = this.getAttribute('data-name');
//     const price = parseFloat(this.getAttribute('data-price'));
//     const imageSrc = this.getAttribute('data-image');

//     quantity++;

//     addToBasket(name, price, imageSrc);
//     showBasket();
    
//     alert(`You have successfully added ${quantity} items to your basket!`);
//   });
// });

// const buy_now_btn = document.querySelector(".buy_now_btn");
// buy_now_btn.addEventListener("click", () =>{
//   window.location.href = "../payment_form.php";
// });

// // let submitButton = document.querySelector(".js_submit_details");
// // let paymentOption = document.querySelector(".js_payment");

// // let exitPayment = document.querySelector(".js_close");

// // submitButton.addEventListener("click", () =>{
// //   paymentOption.style.display = "flex";
// // });

// // exitPayment.addEventListener("click", () =>{
// //   paymentOption.style.display = "none";
// // });



// // document.addEventListener("DOMContentLoaded", function() {
// //   const input_btns = document.querySelectorAll(".js_input_btn");
// //   const payment_form = document.querySelector(".js_payment_form");
// //   const paymentAnchor = document.getElementById("payment-anchor");
// //   const input_image = document.querySelectorAll('.js_input_image');
// //   const input_details = document.querySelector(".js_input_details");
// //   const exit_tab = document.querySelector(".js_exit_tab");
// //   const selected_name = document.getElementById("selected_name");
// //   const selected_price = document.getElementById("selected_price");
// //   const selected_image = document.getElementById("selected_image")

// //   let dec_quantity = document.getElementById("js_dec_quantity");
// //   let show_quantity = document.getElementById("js_show_quantity");
// //   let inc_quantity = document.getElementById("js_inc_quantity");
// //   let quantity = 0;

// //   input_btns.forEach(button => {
// //     button.addEventListener("click", function() {
// //       const name = this.getAttribute("data-name");
// //       const price = this.getAttribute("data-price");
// //       const image = this.getAttribute("data-image");
// //       quantity++;
// //       show_quantity.textContent = `${quantity}`;

// //      
// //       paymentAnchor.scrollIntoView({ behavior: "smooth" });

// //       updateCart(name, price, image);
// //       displayProductDetails(name, price, image);
      
// //       dec_quantity.addEventListener("click", () => {
// //         if(0 < quantity){
// //           quantity -=1;
// //           show_quantity.textContent = `${quantity}`;
// //         } 
// //         else{
// //           alert(`You have ${quantity} items left!`);
// //         }
// //       });

// //       inc_quantity.addEventListener("click", function(){
// //         quantity +=1;
// //         show_quantity.textContent = `${quantity}`;
// //         dec_quantity.style.backgroundColor = "red";
       
// //       });
// //     });
// //   });
 
// //   function displayProductDetails(name, price, image) {
// //     selected_image.setContent = `${image}`;
// //     selected_name.textContent = `${name}`;
// //     selected_price.textContent = `${price}`; 
// //   }
// //   exit_tab.addEventListener("click", () => {
// //     payment_form.style.display = "none";
// //   });
  
// //   const cartDiv = document.getElementById("cart");
// //   const cart = [];

// //   function updateCart(name, price, image) {
  
// //     cart.forEach(item => {
// //      const itemDiv = document.createElement("div");

// //       itemDiv.innerHTML = `
// //       <div>
// //           <img src="${item.image}" alt="${item.name}">
// //           <h3>${item.name}</h3>
// //           <p>$${item.price}</p>
// //       </div>
// //   `;
// //       cartDiv.appendChild(itemDiv);
// //     });
// //     if (cart.length > 0) {
// //         const itemCount = document.createElement("p");
// //         itemCount.textContent = `Number of items in cart: ${cart.length}`;
// //         cartDiv.appendChild(itemCount);
// //     }
// // }

// //   //dispalay unit scripts
// //    const add_to_basket_btns = document.querySelector(".js_add_to_bskt_btn");
// //   // const cart_display_info = document.querySelector(".js_cart_display_info");
// //   // const cart_anchor = document.getElementById("cart_anchor");
// //   // const exit_cart = document.querySelector(".js_exit_cart");


// //   add_to_basket_btns.addEventListener("click", function() {
// //    function addToCart(name, image, price) {
// //      if (cart.length > 0) {
// //          cart.push({name, image, price});
// //          updateCart(name, price, image);
// //      }
// //    }

// //     alert(`You have successfully added ${quantity} items to your basket!`);

// //     cart_anchor.scrollIntoView({ behavior: "smooth" });

// //    });

// // //   exit_cart.addEventListener("click", () => {
// // //     cart_display_info.style.display = "none";

// // //   });
// // //   const total_price = document.getElementById("cart_total_price");
// // //   const more_items = document.getElementById("more_items_btn");
// // //   const buy_button = document.getElementById("js_buy_now_btn")

// // //   more_items.addEventListener("click", () => {
// // //     window.location.href = "/seeds.html";

// // //   });

// // //   buy_button.addEventListener("click", () => {
// // //     window.location.href = "/payment_form.html";

// // //   });
// //  });

  




