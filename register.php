<?php
$con = mysqli_connect("localhost","root","");
if(!$con){
echo "<center><i>Connection problem</i></center>";
}
mysqli_query($con,"CREATE DATABASE IF NOT EXISTS AgroCare");
mysqli_select_db($con,"AgroCare");
mysqli_query($con,"CREATE TABLE IF NOT EXISTS users(userID int primary key auto_increment,fName varchar(55),uName varchar(55),email varchar(100),passwd varchar(100),phone varchar(10),country varchar(100),city varchar(100),address varchar(100),region varchar(100),regDate datetime)");
$pass = $_POST['passwd'];
if($_POST['conf_passwd'] == $pass){
$id = 0;
$fname =$_POST['f_name'];
$uname =$_POST['u_name'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$cntry =$_POST['country'];
$reg =$_POST['region'];
$city =$_POST['city'];
$addr =$_POST['addr'];
$date = date('Y-m-d H:i:s');
mysqli_query($con,"INSERT INTO users VALUES($id,'$fname','$uname','$email','$pass','$phone','$cntry','$city','$addr','$reg','$date')") or die("error");
header('location:login.php');
}
mysqli_close($con);
?>
