<?php
$to = "coltona82012@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: webmaster@example.com" . "\r\n" .
    "Reply-To: webmaster@example.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if(mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully!";
} else {
    echo "Mail sending failed!";
}
?>
