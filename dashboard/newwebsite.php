<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
session_start();

$newweb = "INSERT INTO websites (name, owner) VALUES ('" . $_POST['project_name'] . "', '" . $_SESSION['userid'] . "')";
$resultadoweb = mysqli_query($connect, $newweb);
$websiteId = mysqli_insert_id($conn);
$addmember = "INSERT INTO members(memberid, websiteid, added_date) VALUES ('" . $_SESSION['userid'] . "','" . $websiteId . "', NOW())";
$resultadomember = mysqli_query($connect, $addmember);

if ($resultadomember && $websiteId) {
  mysqli_close($connect);
  header('Location: /storeify/access/access.php');
  exit();
}
