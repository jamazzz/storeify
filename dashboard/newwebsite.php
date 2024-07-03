<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");


$urlweb = str_replace(' ', '-', $_POST['project_name']);
$newweb = "INSERT INTO websites (name, subdomain, owner, logo,dark_color,light_color) VALUES ('" . $_POST['project_name'] . "', '" . $urlweb . "', '" . $_SESSION['userid'] . "', '/storeify/store/logos/" . $urlweb . ".png','#1C1C25','#24242D')";
$resultadoweb = mysqli_query($connect, $newweb);
$websiteId = mysqli_insert_id($connect);
$_SESSION['currentwebsite'] = $websiteId;
mkdir($_SERVER['DOCUMENT_ROOT'] . "/storeify/store/websites/" . $urlweb, 0777, true);

$logo = $_SERVER['DOCUMENT_ROOT'] . "/storeify/assets/images/logo.png";
$destination = $_SERVER['DOCUMENT_ROOT'] . "/storeify/store/logos/";

if (file_exists($logo)) {
  copy($logo, $destination . "logo.png");
  $newFileName = $destination . $urlweb . ".png";
  rename($destination . "logo.png", $newFileName);
}


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
  header('Location: /storeify/dashboard//storeify/404.php');
  exit();
}
