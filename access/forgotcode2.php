<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
unset($_SESSION['email']);
mysqli_close($connect);
header('Location: /storeify/access/forgot.php');
exit();
