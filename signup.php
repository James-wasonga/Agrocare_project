
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Agrocare Sign up</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./styles/style.css">
</head>
<div class="contents">
<div class="top">
<p class="name">AgroCare</p>
<p>nutrients intelligent</p>
</div>
<div class="details">
<p><b>Sign Up</b></P><br/><p id="det">Enter your details to create your account<p>
<p id="error"></p>
</div>
<form method="POST" id="form" action="register.php">
<div class="fields">
<input name="f_name" type="text" pattern="[A-Z a-z]{4,}" title="Should contain a-Z and a length greater than 4" placeholder="Full Name">
<input name="u_name" type="text" placeholder="Username" title="Username can not contain special characters and a minimum of 3 characters" pattern="[A-Za-z0-9]{3,}">
<input name="phone" type="number" placeholder="Phone"  minlength="10" maxlength="10" title="Enter a valid number">
<input name="email" type="email" placeholder="Email" required>
<input name="passwd" id="password" type="password" required  placeholder="Password">
<input name="conf_passwd" id="conf_password" type="password" placeholder="Confirm Password">
<input name="country" type="text" pattern="[A-Za-z]{1,}" title="Should contain a-Z" value="Kenya">
<input name="region" type="text" placeholder="Region" pattern="[A-Za-z]{3,}" title="Should contain a-Z and at least 3 characters">
<input name="city" type="text" placeholder="City" pattern="[A-Za-z]{4,}" title="Should contain a-Z and a length greater than 4">
<input name="addr" type="text" placeholder="Address" require>
</div>
<input type="checkbox" required id="data"><label for="data">I agree to my data being processed in accordance with the privacy&nbsp;policy</label><br/>
<input type="checkbox" required id="terms"><label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>


<div class="btns">
<button id="sbmt" type="submit">Sign Up</button>
<button id="cancel"><a href="login.php">Cancel</a></button>
</div>
</form>
</div>
<script>

const error = document.querySelector('#error');
const submitform = document.getElementById('form');
submitform.addEventListener('submit',function(event){
const password = document.querySelector('#password');
const conf_password = document.querySelector('#conf_password');
if(password.value !== conf_password.value){
  confirm("Password Mismatch");
  event.preventDefault();
}
});

</script>
</html>
