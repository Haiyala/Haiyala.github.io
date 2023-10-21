<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load the PHPMailer classes
require 'path/to/PHPMailer/PHPMailer.php';
require 'path/to/PHPMailer/Exception.php';
require 'path/to/PHPMailer/SMTP.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your_email@gmail.com';
$mail->Password = 'your_email_password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('your_email@gmail.com', 'Your Name');
$mail->addAddress('recipient_email@example.com', 'Recipient Name');
$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $message;

if ($mail->send()) {
    echo "Message sent successfully.";
} else {
    echo "Message delivery failed. Error: " . $mail->ErrorInfo;
}
?>