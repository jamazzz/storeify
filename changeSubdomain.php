<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';

$subdomain = trim($_POST['subdomain']);
$currentWebsite = $_SESSION['currentwebsite'];

if (empty($subdomain) || preg_match('/\s/', $subdomain)) {
  $_SESSION['subdomainUpdate'] = false;
  $_SESSION['subdomainError'] = "Subdomain cannot be empty or contain spaces.";
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
}

$checkQuery = "SELECT id FROM websites WHERE subdomain = '$subdomain' LIMIT 1";
$checkResult = mysqli_query($connect, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
  $_SESSION['subdomainUpdate'] = false;
  $_SESSION['subdomainError'] = "Subdomain already exists. Please choose another one.";
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
}
$update = "UPDATE websites SET `subdomain` = '$subdomain' WHERE id = '$currentWebsite'";
$result = mysqli_query($connect, $update);

if ($result) {
  $_SESSION['subdomain'] = $subdomain;
  $_SESSION['subdomainUpdate'] = true;
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
} else {
  $_SESSION['subdomainUpdate'] = false;
  $_SESSION['subdomainError'] = "Failed to update the subdomain.";
  header('Location: /storeify/dashboard/webstore/appearance.php');
  exit();
}
