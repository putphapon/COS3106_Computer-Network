<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
include 'config.php';

    $mail = new PHPMailer;
    $mail->isSMTP();

    $mail->Host = HostSTMP;
    $mail->Port = PortSTMP;
    $mail->SMTPAuth = true;
    $mail->Username = UsernameSTMP;
    $mail->Password = PasswordSTMP;

    $mail->setFrom(UsernameSTMP, YourName);
    $mail->addAddress($_POST['email'], $_POST['name']);
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = $_POST['subject'];
        $mail->isHTML(true);
        $mail->Body = <<<EOT
                        Email: {$_POST['email']}
                        Name: {$_POST['name']}
                        Message: {$_POST['message']}
                        EOT;
        if (!$mail->send()) {
            echo 'Sorry, something went wrong. Please try again later.';
        } else {
            echo 'Message sent to <b>'.$_POST['name'].'!</b>
             Thanks for contacting us.<br><a href="/cos3106/index.php">หน้าหลัก</a>';
        }
    } else {
        echo 'Invalid email address, message ignored.';
    }
?>