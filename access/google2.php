<?php
include $_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php";
$jsonData = $_POST['credential'];
$type = $_POST['buttonId'];
$data = json_decode($jsonData);

$iss = $data->iss;
$azp = $data->azp;
$aud = $data->aud;
$sub = $data->sub;
$email = $data->email;
$email_verified = $data->email_verified;
$nbf = $data->nbf;
$name = $data->name;
$picture = $data->picture;
$given_name = $data->given_name;
$family_name = $data->family_name;
$iat = $data->iat;
$exp = $data->exp;
$jti = $data->jti;

$_SESSION["gemail"] = $email;
$_SESSION["gverified"] = $email_verified;
$_SESSION["gname"] = $given_name;
$_SESSION["gfamily"] = $family_name;

if ($email_verified == "1") {
  $_SESSION["glogin"] = true;
  if ($type == "buttonDiv") {
    header("Location: ../access/login.php");
  } else {
    if ($_SESSION["glogin"]) {
      $registerquery = "SELECT * FROM users WHERE username = '" . $_SESSION["gemail"] . "' OR email = '" . $_SESSION["gemail"] . "' LIMIT 1";
      $result = mysqli_query($connect, $registerquery);
      $row = mysqli_fetch_assoc($result);

      if ($row != 0) {
        $_SESSION["errormsg"] = "O utilizador já existe";
        header("Location: access.php");
        exit();
      }
    }
    header("Location: ../access/gregister.php");
  }
} else {
  $_SESSION["errormsg"] = "Email não verificado. Por favor, verifique seu email no Google.<br>Se não conseguir verificar, por favor, use outro email ou faça login de outra forma.";
  header("Location: access.php");
}
