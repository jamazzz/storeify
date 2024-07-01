<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';
$name = $_POST['name'];
$currentWebsite = $_SESSION['currentwebsite'];
$update = "UPDATE websites SET `name` = '$name' WHERE id = '$currentWebsite'";
$result = mysqli_query($connect, $update);
if ($result) {
  $_SESSION['name'] = $name;
  
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
} else {
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
}
