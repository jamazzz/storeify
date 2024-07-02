<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';
$insert = "INSERT INTO products (name, price, category_id, path, order, website_id) VALUES ('" . $_POST['name'] . "', '" . $_POST['price'] . "', '" . $_POST['category_id'] . "', '" . $_SESSION['thumbnail'] . "', '" . $_POST['order'] . "', '" . $_SESSION['currentwebsite'] . "')";
mysqli_query($connection, $insert);
$id = mysqli_insert_id($connection);

$fileTmpPath = $_SESSION['thumbnail'];
$uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/productsimg/';
$dest_path = $uploadFileDir;
if (!is_dir($uploadFileDir)) {
  mkdir($uploadFileDir, 0777, true);
}
move_uploaded_file($fileTmpPath, $dest_path);
$fileType = pathinfo($dest_path, PATHINFO_EXTENSION);
$newFileName = $id . "." . $fileType;
$newFilePath = $uploadFileDir . $newFileName;
rename($dest_path, $newFilePath);

$zipPath = $_SESSION['zip'];
$zipDir = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/' . $_SESSION['currentwebsite'] . '/';
if (!is_dir($zipDir)) {
  mkdir($zipDir, 0777, true);
}
$newZipPath = $zipDir . basename($zipPath);
rename($zipPath, $newZipPath);
