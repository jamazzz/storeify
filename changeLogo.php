<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fileElem'])) {
  $fileTmpPath = $_FILES['fileElem']['tmp_name'];
  $fileName = $_FILES['fileElem']['name'];
  $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/logos/';
  $dest_path = $uploadFileDir . $fileName;
  if (!is_dir($uploadFileDir)) {
    mkdir($uploadFileDir, 0777, true);
  }
  move_uploaded_file($fileTmpPath, $dest_path);
}

include $_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php";
echo ($websiteName);
$websiteName = $_SESSION['websitename'];
$fileType = pathinfo($dest_path, PATHINFO_EXTENSION);
$newFileName = $websiteName . "." . $fileType;
$newFilePath = $uploadFileDir . $newFileName;
rename($dest_path, $newFilePath);
$update = "UPDATE websites SET logo = '/storeify/store/logos/" . $newFileName . "' WHERE name = '" . $websiteName . "'";
mysqli_query($connect, $update);
