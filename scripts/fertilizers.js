let planting_fert = document.querySelector('.js_planting_fert');
let topdressing_fert = document.querySelector('.js_topdresser');
let foliar_fert = document.querySelector('.js_foliar');

planting_fert.addEventListener('click', () => {
  window.location.href = "./fertilizers/planting_fert.php";
});

topdressing_fert.addEventListener('click', () => {
  window.location.href = "./fertilizers/topdresser.php";
});

foliar_fert.addEventListener('click', () =>{
  window.location.href = "./fertilizers/foliar_fert.php";
});