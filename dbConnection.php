<?php
  $dbServer = "localhost";
  $dbUser = "root";
  $dbPassword = "";
  $dbName = "agrocare";

 try{
  $dbcon = mysqli_connect($dbServer,$dbUser,$dbPassword,$dbName);

 // echo"conection successful";
 }
 catch(mysqli_sql_exception){
  echo"Could not connect to the database";
 }
?>