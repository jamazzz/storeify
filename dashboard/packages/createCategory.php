<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';
$selectlastorder = "SELECT * FROM categories WHERE name = ?";
$stmt = mysqli_prepare($connect, $selectlastorder);
mysqli_stmt_bind_param($stmt, "s", $_SESSION['websitename']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$selecthighestorder = "SELECT MAX(`order`) AS highest_order FROM categories WHERE website_id = '".$_SESSION['currentwebsite']."' LIMIT 1";
$result = mysqli_query($connect, $selecthighestorder);
$row = mysqli_fetch_assoc($result);
$highestOrder = $row['highest_order'];

$insert = "INSERT INTO categories (name, website_id, `order`) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($connect, $insert);
$newOrder = $highestOrder + 1;
mysqli_stmt_bind_param($stmt, "sii", $_POST['categoryName'], $_SESSION['currentwebsite'], $newOrder);
mysqli_stmt_execute($stmt);

header("Location: /storeify/dashboard/packages/packages.php");
exit();
