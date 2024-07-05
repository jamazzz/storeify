<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';

$name = trim(htmlspecialchars($_POST['name']));
$price = trim(htmlspecialchars($_POST['price']));
$category = trim(htmlspecialchars($_POST['category']));
$description = htmlspecialchars($_POST['description']);

if (empty($name)) {
  $_SESSION['productNameError'] = "O nome do produto não pode estar vazio.";
}
if (preg_match('/\s/', $name)) {
  $_SESSION['productNameError'] = "O nome do produto não pode conter espaços.";
}

if (empty($description)) {
  $_SESSION['productDescriptionError'] = "A descrição do produto não pode estar vazia.";
}

if (empty($price)) {
  $_SESSION['productPriceError'] = "O preço não pode estar vazio.";
}
if (!is_numeric($price) || $price <= 0) {
  $_SESSION['productPriceError'] = "Por favor, insira um preço válido.";
}

if (empty($category)) {
  $_SESSION['productCategoryError'] = "Por favor, selecione uma categoria válida.";
}

if (empty($_FILES['zip']['name'])) {
  $_SESSION['productZipError'] = "O arquivo ZIP deve ser enviado.";
}

if (empty($_FILES['thumbnail']['name'])) {
  $_SESSION['productThumbnailError'] = "A imagem de miniatura deve ser enviada.";
}

if (isset($_SESSION['productNameError']) || isset($_SESSION['productDescriptionError']) || isset($_SESSION['productPriceError']) || isset($_SESSION['productCategoryError']) || isset($_SESSION['productFileError'])) {
  header('Location: /storeify/dashboard/packages/createPackage.php');
  exit();
}

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

if (!move_uploaded_file($file_tmp_name, $upload_dir_files . $file_name)) {
  $_SESSION['productZipError'] = "Failed to upload ZIP file.";
}

$file_path = htmlspecialchars($upload_dir_files . $file_name);

$order_query = "SELECT MAX(`order`) as max_order FROM products WHERE category_id = '$category'";
$result = mysqli_query($connect, $order_query);
$row = mysqli_fetch_assoc($result);
$order = isset($row['max_order']) ? $row['max_order'] + 1 : 1;

$sql = "INSERT INTO products (name, price, category_id, path, description, `order`) VALUES ('$name', '$price', '$category', '$file_path', '$description', $order)";
$result = mysqli_query($connect, $sql);

$id = mysqli_insert_id($connect);

$thumbnail_name = $_FILES['thumbnail']['name'];
$thumbnail_tmp_name = $_FILES['thumbnail']['tmp_name'];
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/productsimg/';

if (!moveUploadedFile($thumbnail_tmp_name, $upload_dir, $id . '.png')) {
  $_SESSION['productThumbnailError'] = "Failed to upload thumbnail.";
}

header('Location: /storeify/dashboard/packages/packages.php');
exit();
