<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/check.php");
$_SESSION['currentwebsite'] = $_POST['id'];

if (isset($_SESSION['currentwebsite'])) {
  mysqli_close($connect);
  header('Location: /storeify/dashboard/dashboard.php');
  exit();
} else {
  mysqli_close($connect);
  header('Location: /storeify/dashboard/pages/samples/error-404.html');
  exit();
}
