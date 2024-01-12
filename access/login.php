<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
session_start();

// Email Validation
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if ($email === false) {
    echo "Email Inválido";
}
$pass = password_hash($_POST['password2'], PASSWORD_BCRYPT);


if (strpos($_POST['details'], '@') !== false) {
    echo "This is an email";
} else {
    echo "This is not a valid email";
}

$nameuser = $_POST['fname'] . " " . $_POST['lname'];
$userid = "INSERT INTO users_ids (name) VALUES ('{$nameuser}')";

$resultado = mysqli_query($connect, $userid);

if ($resultado) {
    header("Location: access.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conexao);
}
