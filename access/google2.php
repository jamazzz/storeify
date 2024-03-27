<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php";
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

echo "type: " . $type . "<br>";
echo "iss: $iss<br>";
echo "azp: $azp<br>";
echo "aud: $aud<br>";
echo "sub: $sub<br>";
echo "email: $email<br>";
echo "email_verified: $email_verified<br>";
echo "nbf: $nbf<br>";
echo "name: $name<br>";
echo "picture: $picture<br>";
echo "given_name: $given_name<br>";
echo "family_name: $family_name<br>";
echo "iat: $iat<br>";
echo "exp: $exp<br>";
echo "jti: $jti<br>";

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
