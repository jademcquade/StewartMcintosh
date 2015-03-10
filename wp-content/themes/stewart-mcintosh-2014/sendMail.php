<?php

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

// Grab values from input post objects
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jordanbmcquade@gmail.com';         // SMTP username
$mail->Password = 'LogoProneBang';                    // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = $name;
$mail->FromName = $name;
$mail->addAddress('jordanbmcquade@gmail.com');     // Add a recipient
$mail->addReplyTo = $email;

$mail->isHTML(true);                   

$mail->Subject = $subject;
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Location:http://localhost/stewart-mcintosh/success/");
    exit;
}

?>