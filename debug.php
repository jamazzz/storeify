<?php
$_POST['fname'] = "Duarte";
$_POST['lname'] = "Neves";
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
$nameuser = $_POST['fname'] . " " . $_POST['lname'];
$userid = "INSERT INTO users_ids (name) VALUES ('{$nameuser}')";
$resultado = mysqli_query($connect, $userid);

echo($resultado);