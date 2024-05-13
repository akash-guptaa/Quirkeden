<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "akashgupta2134@gmail.com";
    $subject = "test mail";
    $message = "test mail";
    $headers = "From: akashgupta2134@gmail.com\r\n";
    $headers .= "Reply-To: akashgupta2134@gmail.com\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
