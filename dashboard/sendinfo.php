<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");

$_SESSION['currentwebsite'] = $_POST['id'];

if (isset($_SESSION['currentwebsite'])) {
  mysqli_close($connect);
  header('Location: /storeify/dashboard/dashlanding.php');
  exit();
} else {
  mysqli_close($connect);
  header('Location: /storeify/dashboard/pages/samples/error-404.php');
  exit();
}
