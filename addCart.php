<?php
include 'essencial.php';

$tempvalue = 1;

$subdomain = strtok($_SERVER['HTTP_HOST'], '.');

if ($_POST['remove']) {
  $delete = "DELETE FROM checkout WHERE user_id = '" . $tempvalue . "' AND product_id = '" . $_POST['remove'] . "' AND subdomain = '" . $subdomain . "'";
  mysqli_query($connect, $delete);
  echo "Product removed from cart";
} else {
  $insert = "INSERT INTO checkout (user_id, product_id, subdomain) VALUES ('" . $tempvalue . "', '" . $_POST['add'] . "', '" . $subdomain . "')";
  mysqli_query($connect, $insert);
  echo "Product added to cart";
}
header("Location: " . $_POST["url"]);
exit();
