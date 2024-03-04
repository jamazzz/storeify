<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/check.php");

$delete = "UPDATE websites SET deleted = 1 ,deleted_date= NOW() WHERE id = '" . $_POST['id'] . "'";
$resultdelete = mysqli_query($connect, $delete);

if ($resultdelete) {
  mysqli_close($connect);
  header('Location: /storeify/dashboard/select.php');
  exit();
} else {
  mysqli_close($connect);
  header('Location: /storeify/dashboard/pages/samples/error-404.php');
  exit();
}
