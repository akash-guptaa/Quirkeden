<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["recipient"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: your_email@example.com\r\n";
    $headers .= "Reply-To: your_email@example.com\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
