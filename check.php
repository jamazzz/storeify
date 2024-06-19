<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
if (!isset($_SESSION['userid'])) {
  mysqli_close($connect);
  header('Location: /storeify/access/login.php');
  exit();
}