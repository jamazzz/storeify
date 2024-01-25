<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
$mail = new PHPMailer;
$_SESSION['currentTime'] = time();
$_SESSION['lastSentTimes'] = isset($_SESSION['lastSentTimes']) ? $_SESSION['lastSentTimes'] : array();
if (!isset($_POST['recoveremail2'])) {
  $_SESSION['recoveremail'] = $_POST['recoveremail'];
}
$emailValid = "SELECT COUNT(*) AS count FROM users WHERE email = '" . $_SESSION['recoveremail'] . "'";
$valid = mysqli_query($connect, $emailValid);
$row = mysqli_fetch_assoc($valid);
$count = $row['count'];
if ($count != 1 && !$_SESSION['email']) {
  $_SESSION["errormsg"] = "Email invalido";
  mysqli_close($connect);
  header('Location: /storeify/access/forgot.php');
  exit();
} else {
  $_SESSION['email'] = true;
}
if (($_SESSION['currentTime'] - @$_SESSION['lastSentTimes'][$_SESSION['recoveremail']]) >= 60) {
  $code = rand(0, 999999);
  $_SESSION['code'] = $code;
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
} else {
  $_SESSION['remaining_time'] = 60 - ($_SESSION['currentTime'] - @$_SESSION['lastSentTimes'][$_SESSION['recoveremail']]);
  $_SESSION["errormsg"] = "Please wait for " . $_SESSION['remaining_time'] . " seconds before trying again.";
}

mysqli_close($connect);
header('Location: /storeify/access/forgot.php');
exit();
