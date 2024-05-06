
    // Display username dynamically
    var usernameDisplay = document.getElementById('username-display');
   
function animateUsername(element) {
    var direction = 1; // 1 for moving right, -1 for moving left
    var position = 0;
    var interval = setInterval(function() {
        if (position >= 100) {
            direction = -1; // Change direction when reaching the end
        } else if (position <= 0) {
            direction = 1; // Change direction when reaching the start
        }
        position += direction;
        element.style.marginLeft = position + 'px';
    }, 5); // Adjust the speed of animation by changing the interval duration
}
animateUsername(usernameDisplay);