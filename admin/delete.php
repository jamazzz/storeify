<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';

if (isset($_POST['productID'])) {
  $delete = "DELETE FROM products WHERE id = " . $_POST['productID'];
  $result = mysqli_query($connect, $delete);
  unset($_POST['productID']);
  header('Location: /storeify/admin/products.php');
  exit();
}

if (isset($_POST['memberID'])) {
  $delete = "DELETE FROM users WHERE id = " . $_POST['memberID'];
  $result = mysqli_query($connect, $delete);
  unset($_POST['memberID']);
  header('Location: /storeify/admin/members.php');
  exit();
}

if (isset($_POST['paymentID'])) {
  $delete = "DELETE FROM transactions WHERE id = " . $_POST['paymentID'];
  $result = mysqli_query($connect, $delete);
  unset($_POST['paymentID']);
  header('Location: /storeify/admin/payments.php');
  exit();
}

if (isset($_POST['websiteID'])) {
  $delete = "DELETE FROM websites WHERE id = " . $_POST['websiteID'];
  $result = mysqli_query($connect, $delete);
  unset($_POST['websiteID']);
  header('Location: /storeify/admin/stores.php');
  exit();
}

header('Location: /storeify/admin/dashboard.php');
exit();
