<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';

$name = trim($_POST['name']);
$currentWebsite = $_SESSION['currentwebsite'];

if (empty($name) || preg_match('/\s/', $name)) {
  $_SESSION['nameUpdate'] = false;
  $_SESSION['nameError'] = "Name cannot be empty or contain spaces.";
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
}

$checkQuery = "SELECT id FROM websites WHERE name = '$name' LIMIT 1";
$checkResult = mysqli_query($connect, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
  $_SESSION['nameUpdate'] = false;
  $_SESSION['nameError'] = "Name already exists. Please choose another one.";
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
}

$update = "UPDATE websites SET `name` = '$name' WHERE id = '$currentWebsite'";
$result = mysqli_query($connect, $update);

if ($result) {
  $_SESSION['name'] = $name;
  $_SESSION['nameUpdate'] = true;
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
} else {
  $_SESSION['nameUpdate'] = false;
  $_SESSION['nameError'] = "Failed to update the name.";
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
}
