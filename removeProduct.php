<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
$tempvalue = 1;
$_SESSION['subdomain'] = strtok($_SERVER['HTTP_HOST'], '.');
$delete = "DELETE from checkout Where product_id = '" . $_POST['productId'] . "' AND subdomain = '" . $_SESSION['subdomain'] . "' AND user_id = '" . $tempvalue . "'";

$resultdelete = mysqli_query($connect, $delete);

if ($resultdelete) {
  mysqli_close($connect);
  header("Location: " . $_POST['currentUrl']);
  exit();
} else {
  mysqli_close($connect);
  header('Location: /storeify/dashboard/pages/samples/error-404.php');
  exit();
}
