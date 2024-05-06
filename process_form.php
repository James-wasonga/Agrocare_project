<?php
session_start();
  include("dbConnection.php");

  if(isset($_POST["submit"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $firstName = filter_input(INPUT_POST, "first_name");
      $lastName = filter_input(INPUT_POST, "last_name");
      $id_number = filter_input(INPUT_POST, "id_number");
      $phoneNumber = filter_input(INPUT_POST, "phone_number");
      $emailAddress = filter_input(INPUT_POST, "email_address", FILTER_VALIDATE_EMAIL);
      $county = filter_input(INPUT_POST, "county");
      $subcounty = filter_input(INPUT_POST, "subcounty");
      $nearestAgrovet = filter_input(INPUT_POST, "nearest_agrovet");
      // $result = "";

      if(!ctype_alpha($firstName)){
          echo "Invalid name";
      }
      else if(!ctype_alpha($lastName)){
        echo "Invalid characters depicted";
      }
      
      else if(!ctype_digit($id_number)){
        echo "Invalid Id number";
      }

      else if(!ctype_digit($phoneNumber)){
        echo "Invalid phone number";
      }
  
      else if(!ctype_alpha($county)){
        echo "Invalid characters depicted";
      }
  
      else if(!ctype_alpha($subcounty)){
        echo "Invald characters depicted";
      }

      else if(!ctype_alpha($nearestAgrovet)){
        echo "Invalid characters depicted";
      }

      $sqlqerry = "INSERT INTO payment_info (firstname,lastname,idnumber,phonenumber,emailaddress,county,subcounty,nearestagrovet)
      VALUES ('$firstName','$lastName','$id_number','$phoneNumber','$emailAddress','$county','$subcounty','$nearestAgrovet')";
   
      try{
        mysqli_query($dbcon,$sqlqerry);
        echo"Details submitted successfully"."<br>";
        echo"Thanks ".$firstName  ."  for choosing us we will contact you later"."";
      }
      catch(mysqli_sql_exception){
        echo"Submission not successful";
      
      }
    }
  }

  mysqli_close($dbcon);
?>