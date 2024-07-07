<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';

$delete = "DELETE FROM categories WHERE id = '" . $_POST['id'] . "'";
$result = mysqli_query($connect, $delete);

header('Location: /storeify/dashboard/packages/packages.php');
exit();