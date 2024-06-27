<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
$_SESSION['subdomain'] = strtok($_SERVER['HTTP_HOST'], '.');

if ($_SESSION['clientid'] == -1) {
  header('Location: /storeify/loginClient');
  exit();
}

if ($_POST['remove']) {
  $selectprice = "SELECT price FROM products WHERE id = '" . $_POST['remove'] . "'";
  $result = mysqli_query($connect, $selectprice);
  $row = mysqli_fetch_assoc($result);
  $price = $row['price'];
  $_SESSION['total'] -= $price * 1.23;
  $delete = "DELETE FROM checkout WHERE user_id = '" . $_SESSION['clientid'] . "' AND product_id = '" . $_POST['remove'] . "' AND subdomain = '" . $_SESSION['subdomain'] . "'";
  mysqli_query($connect, $delete);
} else {
  $insert = "INSERT INTO checkout (user_id, product_id, subdomain) VALUES ('" . $_SESSION['clientid'] . "', '" . $_POST['add'] . "', '" . $_SESSION['subdomain'] . "')";
  mysqli_query($connect, $insert);
}
header("Location: " . $_POST["url"]);
exit();
