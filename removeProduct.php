<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
// 
$delete = "UPDATE products SET deleted = '1' WHERE id = '" . $_POST['productId'] . "'";

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
