<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';

$delete = "DELETE FROM members WHERE websiteid = " . $_POST['id'];

$result = mysqli_query($connect, $delete);

$add = "INSERT INTO members (memberid, websiteid, added_date) VALUES ('" . $_POST['newOwner'] . "', '" . $_POST['id'] . "', NOW())";

$result = mysqli_query($connect, $add);

$update = "UPDATE websites SET owner = '" . $_POST['newOwner'] . "' WHERE id = '" . $_POST['id'] . "'";
$result = mysqli_query($connect, $update);
header('Location: /storeify/dashboard/select.php');
exit();
