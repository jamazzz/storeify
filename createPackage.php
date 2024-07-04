<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';

$name = htmlspecialchars($_POST['name']);
$price = htmlspecialchars($_POST['price']);
$category = htmlspecialchars($_POST['category']);
$description = htmlspecialchars($_POST['description']);

function moveUploadedFile($tmp_name, $upload_dir, $name)
{
  $target_path = $upload_dir . $name;
  return move_uploaded_file($tmp_name, $target_path);
}

$file_name = $_FILES['zip']['name'];
$file_tmp_name = $_FILES['zip']['tmp_name'];
$upload_dir_files = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/websites/' . $_SESSION['websitename'] . '/';
if (!is_dir($upload_dir_files)) {
  mkdir($upload_dir_files, 0777, true);
}
move_uploaded_file($file_tmp_name, $upload_dir_files . $file_name);
$file_path = htmlspecialchars($upload_dir_files . $file_name);


$order_query = "SELECT MAX(`order`) as max_order FROM products WHERE category_id = '$category'";
$result = mysqli_query($connect, $order_query);
$row = mysqli_fetch_assoc($result);
$order = isset($row['max_order']) ? $row['max_order'] + 1 : 1;

$sql = "INSERT INTO products (name, price, category_id, path,description, `order`) VALUES ('$name', '$price', '$category', '$file_path', '$description',$order)";
$result = mysqli_query($connect, $sql);
$id = mysqli_insert_id($connect);

$thumbnail_name = $_FILES['thumbnail']['name'];
$thumbnail_tmp_name = $_FILES['thumbnail']['tmp_name'];
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/productsimg/';
moveUploadedFile($thumbnail_tmp_name, $upload_dir, $id . '.png');

header('Location: /storeify/dashboard/packages/packages.php');
exit();
