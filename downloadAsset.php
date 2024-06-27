<?php
include $_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php";
$select = "SELECT path FROM products WHERE id = '" . $_POST['productId'] . "'";
$result = mysqli_query($connect, $select);
$row = mysqli_fetch_array($result);
$filePath = $row['path'];

if (file_exists($filePath) && is_readable($filePath)) {
  $fileSize = filesize($filePath);
  $fileName = basename($filePath);
  header("Content-Description: File Transfer");
  header("Content-Type: application/octet-stream");
  header("Content-Disposition: attachment; filename=\"$fileName\"");
  header("Content-Length: $fileSize");
  ob_clean();
  flush();
  readfile($filePath);
  exit;
} else {
  echo "The file you're trying to download is not available.";
}

header ("Location: /storeify/assets.php");
exit();
