<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';

if (isset($_POST['products'])) {
  $products = $_POST['products'];
  $originCategory = $_POST['originCategory'];
  $destinationCategory = $_POST['destinationCategory'];
  $productsNewCategory = $_POST['productsnewCategory'];

  $explodedProducts = array_filter(explode(",", $products));
  $explodedProductsNewCategory = array_filter(explode(",", $productsNewCategory));

  if (count($explodedProducts) > 0) {
    for ($i = 0; $i < count($explodedProducts); $i++) {
      $order = ($i == 0 && count($explodedProducts) == 1) ? 1 : $i;
      $productId = intval($explodedProducts[$i]);
      $update = "UPDATE products SET `order` = $order, category_id = $originCategory WHERE id = $productId ORDER BY `order` ASC";
      $connect->query($update);
    }
  }

  if (count($explodedProductsNewCategory) > 0) {
    for ($i = 0; $i < count($explodedProductsNewCategory); $i++) {
      $order = ($i == 0 && count($explodedProductsNewCategory) == 1) ? 1 : $i;
      $productId = intval($explodedProductsNewCategory[$i]);
      $update = "UPDATE products SET `order` = $order, category_id = $destinationCategory WHERE id = $productId ORDER BY `order` ASC";
      $connect->query($update);
    }
  }

  if (empty($originCategory)) {
    $update = "UPDATE products SET `order` = 1 WHERE id IN ($products) AND category_id IS NULL";
    $connect->query($update);
  }

  if (empty($destinationCategory)) {
    $update = "UPDATE products SET `order` = 1 WHERE id IN ($productsNewCategory) AND category_id IS NULL";
    $connect->query($update);
  }
}

if (isset($_POST['categories'])) {
  $categories = $_POST['categories'];
  $explodedCategories = array_filter(explode(",", $categories));
  for ($i = 0; $i < count($explodedCategories); $i++) {
    $category = $connect->real_escape_string($explodedCategories[$i]);
    $update = "UPDATE categories SET `order` = $i WHERE name = '$category' ORDER BY `order` ASC";
    $connect->query($update);
  }
}

header('Location: /storeify/dashboard/packages/packages.php');
exit();
