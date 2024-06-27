<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
$mail = new PHPMailer;

try {
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'duarte.acn@gmail.com';
  $mail->Password   = 'dhojvgdcnxwrbqco';
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;

  $mail->setFrom('duarte.acn@gmail.com');
  $mail->addAddress($_SESSION['recoveremail']);
  $mail->isHTML(true);
  $mail->Subject = 'Codigo';
  $mail->Body = $_SESSION['code'];
  $mail->AltBody = $_SESSION['code'];

  $mail->send();
  $_SESSION['lastSentTimes'][$_SESSION['recoveremail']] = $_SESSION['currentTime'];
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
