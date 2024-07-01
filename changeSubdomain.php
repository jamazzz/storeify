<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';
$subdomain = $_POST['subdomain'];
$currentWebsite = $_SESSION['currentwebsite'];
$update = "UPDATE websites SET `subdomain` = '$subdomain' WHERE id = '$currentWebsite'";
$result = mysqli_query($connect, $update);
if ($result) {
  $_SESSION['subdomain'] = $subdomain;
  
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
} else {
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
}
