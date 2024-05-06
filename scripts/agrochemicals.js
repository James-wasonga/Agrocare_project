let herbicides = document.querySelector('.js_herbicides');
let insecticides = document.querySelector('.js_insecticides');
let fungicides = document.querySelector('.js_fungicides');

herbicides.addEventListener('click', () => {
  window.location.href = "./agrochemicals/herbicides.php";
});

insecticides.addEventListener('click', () => {
  window.location.href = "./agrochemicals/insecticides.php";
});

fungicides.addEventListener('click', () =>{
  window.location.href = "./agrochemicals/fungicides.php";
});