<?php

use PHPMailer\Exception;
use PHPMailer\PHPMailer;
 

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if(isset($_POST["submit"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail-> SMTPAuth = true;
    $mail->Username = 'jameswasonga22@gmail.com';
    $mail->Password = 'rnls vgqb smei qtwz';
    $mail->SMTPSecure = 'ssl';
    $mail->port = 465;

    $mail -> setFrom('jameswasonga22@gmail.com');

    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);

    $mail->name = $_POST['Name'];
    $mail->Body = $_POST['message'];

    $mail->send();

    echo "
    <script> 
        alert('sent successfully');
        document.location.href = 'contactus.php';
     </script>
     ";
}

?>


























