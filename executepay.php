

<?php
session_start();
include("paymentsuccess.php");

$connect = mysqli_connect("localhost","root","","agrocare");
// if($connect){
//     echo "connection";
// } else{
//     echo " no connection";
// }
mysqli_select_db($connect,"agrocare");

//inserting into the database

if($_SERVER['REQUEST_METHOD'] == "POST"){
   if(isset($_POST["pay"])){
    $fullname =$_POST['full-name'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $item = $_POST['amount'];
    $date = $_POST['date'];
    $paymentmode = $_POST['payment-mode'];
    //$accountNo = $_POST['account_no'];


mysqli_query($connect,"insert into tbl_payment(FulName,Address,Location,Item_to_hire,Date_of_payment,Payment_mode) values('$fullname','$address','$location','$item','$date','$paymentmode')");
mysqli_close($connect);
    
}
}
?>


