<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
$mail = new PHPMailer;

$selectEmail = "SELECT email FROM clients WHERE id = '" . $_SESSION['clientid'] . "'";
$emailResult = mysqli_query($connect, $selectEmail);
$row = mysqli_fetch_assoc($emailResult);
$email = $row['email'];

$selectStore = "SELECT * FROM websites WHERE url = '" . $_SESSION['subdomain'] . "'";
$storeResult = mysqli_query($connect, $selectStore);
$row2 = mysqli_fetch_assoc($storeResult);


try {
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'duarte.acn@gmail.com';
  $mail->Password   = 'dhojvgdcnxwrbqco';
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;

  $mail->setFrom('duarte.acn@gmail.com');
  $mail->addAddress($email);
  $mail->isHTML(true);
  $mail->Subject = $row2['name'] . " - Compra " . $row['id'];
  $mail->Body = "<html>
    <body>
      <h2>Obrigado por comprar nosso produto!</h2>
      <p>Você pode resgatá-lo em <a href='http://example.com'>example.com</a>.</p>
    </body>
  </html>";

  $mail->send();
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
