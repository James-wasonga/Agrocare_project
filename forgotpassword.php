<!DOCTYPE html>
<html lang="en">
<head>
	<title>AgroCare Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="./styles/style.css">
</head>
<body>
<div class="contents log">
<div class="top">
<p class="name">AgroCare</p>
<p>nutrients intelligent</p>
</div>
<?php
$connection = mysqli_connect("localhost","root","");
if(!$connection){
	echo "Connection Failed";
}
mysqli_select_db($connection,"AgroCare");
$results = mysqli_query($connection,"SELECT email FROM users");
while($current = mysqli_fetch_array($results,MYSQLI_ASSOC)){
if($current['email'] == $_POST['username']){
if($_POST['code'] == 0){
header('location: reset.html');
return;
}
}
}
?>
<p class="details"><b>Enter Email to reset your password</b></p>
<form class="form" method="POST" action="forgotPassword.php">
<input type="text" name="username" placeholder="Enter Email"><br/>
<input type="text" name="code" placeholder="Enter the code sent via email">
<button id="sbmt" type="submit">Reset</button>
</form>
<p class="sign">Don't have an account yet? <a href="signup.html">Sign Up</a></p>
<hr/>
</div>
</body>
</html>

