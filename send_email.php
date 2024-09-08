<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "Akharazabdessamad@gmail.com";  // Replace with your email
    $headers = "From: " . $email;
    $txt = "You have received an email from " . $name . ".\n\n" . $message;

    if (mail($to, $subject, $txt, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
