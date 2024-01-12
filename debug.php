<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
$_POST['email'] = "duarte.acn@gmail.com";

$emailocupado = "SELECT COUNT(*) AS count FROM users WHERE email = '" . $_POST['email'] . "'";
$result = mysqli_query($connect, $emailocupado);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
