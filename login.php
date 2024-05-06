<?php 

session_start();

?>
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
$con = mysqli_connect("localhost","root","");
if(!$con){
	echo "Connection to the database failed";
}
mysqli_select_db($con,"AgroCare");
if(isset($_POST['username'])){
	$user = $_POST['username'];
	$passwd = $_POST['passwd'];
	$users = mysqli_query($con,"SELECT uName,email,passwd FROM users where email = '$user'");
	if(mysqli_num_rows($users) > 0){
		$row = mysqli_fetch_array($users);
		if($passwd == $row["passwd"]){
			echo "login successful";
			$_SESSION['email'] = $row['email'];
			$_SESSION['uname'] = $row['uName'];
			header("location: index.php");
		}else{
			echo "<script> alert('Incorrect password')</script>";
		}
	}else{
		echo "<script> alert('The user does not exist')</script>";
	}

}

?>
<p class="details"><b>Sign in To AgroCare Portal</b><br/><?php ?></p>
<form class="form" id= "login-form" method="POST" action="login.php">
<input type="text" name="username" placeholder="Email or Username"><br/>
<input type="password" name="passwd" placeholder="Password">
<p class="p"><a class="forgot" href="forgotPassword.php">Forget Password</a></p>
<button id="sbmt" type="submit">Login</button>
</form>
<?php
mysqli_close($con);
?>
<p class="sign">sign in as an <a href="../admin_panel/login.php">Admin</a></p>
<p class="sign">Don't have an account yet? <a href="signup.php">Sign Up</a></p>

<hr/>
</div>
<script src="./script/animate.js"></script>
</body>
</html>
