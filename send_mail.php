<?php
use PHPMailer\PHPMailer\PHPMailer;
require './vendor/autoload.php';
function send_mail($to, $receivername, $subject, $message){
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.titan.email';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@fortressboxes.tech';
    $mail->Password = 'zpIotaoonc';
    $mail->setFrom('noreply@fortressboxes.tech', 'FORTRESSBOXES');
    $mail->addReplyTo('noreply@fortressboxes.tech', 'FORTRESSBOXES');
    $mail->addAddress($to, $receivername);
    $mail->Subject = $subject;
    //$mail->msgHTML(file_get_contents('message.html'), __DIR__);
    $mail->Body = $message;
    //$mail->addAttachment('attachment.txt');
    if (!$mail->send()) {
        return FALSE;
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return TRUE;
        //echo 'The email message was sent.';
    }
}
?>