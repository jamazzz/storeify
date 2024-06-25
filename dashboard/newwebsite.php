<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");


$urlweb = str_replace(' ', '-', $_POST['project_name']);
$newweb = "INSERT INTO websites (name, subdomain, owner, package_id) VALUES ('" . $_POST['project_name'] . "', '" . $urlweb . "', '" . $_SESSION['userid'] . "', 1)";
$resultadoweb = mysqli_query($connect, $newweb);
$websiteId = mysqli_insert_id($connect);
$_SESSION['currentwebsite'] = $websiteId;
mkdir($_SERVER['DOCUMENT_ROOT'] . "/storeify/store/" . $urlweb, 0777, true);

$websiteExists = "SELECT COUNT(*) as count FROM websites WHERE name = '" . $_POST['project_name'] . "'";
$result = mysqli_query($connect, $websiteExists);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

if ($count != 0) {
  if ($websiteId) {
    $addmember = "INSERT INTO members(memberid, websiteid, added_date) VALUES ('" . $_SESSION['userid'] . "','" . $websiteId . "', NOW())";
    $resultadomember = mysqli_query($connect, $addmember);
  }
  if ($resultadomember) {
    mysqli_close($connect);
    $_SESSION['websiteid'] = $websiteId;
    header('Location: /storeify/dashboard/dashlanding.php');
    exit();
  }
} else {
  mysqli_close($connect);
  header('Location: /storeify/dashboard/pages/samples/error-404.html');
  exit();
}
