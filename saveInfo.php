<?php
session_start();
if (!isset($_SESSION["thumbnail"])) {
  $_SESSION['thumbnail'] = $_FILES['fileElem']['tmp_name'];
}
if (!isset($_SESSION["zip"])) {
  $_SESSION['zip'] = $_FILES['fileElem2']['tmp_name'];
}

if (!isset($_SESSION['mdpack']) || $_SESSION['mdpack'] != "") {
  $_SESSION['mdpack'] = $_POST['mdpack'];
}
header("Location: /storeify/dashboard/packages/createPackage.php");
exit();
