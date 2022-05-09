<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
include 'config.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;

$mail->Host = HostSTMP;
$mail->Port = PortSTMP;
$mail->SMTPAuth = true;
$mail->Username = UsernameSTMP;
$mail->Password = PasswordSTMP;

$mail->setFrom(UsernameSTMP, HostSTMP);
$mail->addAddress('5805001111@rumail.ru.ac.th', 'Rumail');
$mail->Subject = 'PHPMailer SMTP message';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//$mail->AltBody = 'This is a plain text message body';


if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '</p>Message sent!</p><br><p><a href="/cos3106/index.php">หน้าหลัก</a></p>';
}
?>