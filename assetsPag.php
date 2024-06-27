<?php
include $_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php";

$countquery = "SELECT COUNT(*) as count FROM owned_products WHERE user_id = '" . $_SESSION['clientid'] . "'";
$countresult = mysqli_query($connect, $countquery);
$count = mysqli_fetch_array($countresult)['count'];


if ($_POST['type'] == 'returnbtn') {
  $_SESSION['tabel_page'] = ($_POST['idvalue'] * 5) - 10;
} else if ($_POST['type'] == 'nextbtn') {
  $_SESSION['tabel_page'] = ($_POST['idvalue'] * 1) * 5;
} else if ($_POST['type'] == 'returnbtnfull') {
  $_SESSION['tabel_page'] = 0;
} else if ($_POST['type'] == 'nextbtnfull') {
  $_SESSION['tabel_page'] = ($count - 5);
}

header("Location: /storeify/assets.php");
exit();
