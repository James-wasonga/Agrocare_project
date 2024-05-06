<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email
    $to = "jameswasonga22@gmail.com"; // Change this to your email address
    $subject = "New Contact Message from Agrocare Website";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully. We will get back to you soon.');</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.');</script>";
    }
} else {
    // Redirect if accessed directly
    header("Location: contactus.php");
    exit;
}
?>