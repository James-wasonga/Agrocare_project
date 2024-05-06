let cereals = document.querySelector('.js_cereals');
let legumes = document.querySelector('.js_legumes');
let vegetables = document.querySelector('.js_vegetables');

cereals.addEventListener('click', () => {
  window.location.href = "./seeds/cereals.php";
});

legumes.addEventListener('click', () => {
  window.location.href = "./seeds/legumes.php";
});

vegetables.addEventListener('click', () =>{
  window.location.href = "./seeds/vegetables.php";
});