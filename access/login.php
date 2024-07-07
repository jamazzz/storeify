<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");

function redirect($connection)
{
    mysqli_close($connection);
    header('Location:/storeify/access/access.php');
    exit();
}

$emailoruser = $_POST['emailoruser'];
$password = $_POST['password'];

if ($_SESSION["glogin"]) {
    $loginquery = "SELECT * FROM users WHERE username = '".$_SESSION["gemail"]."' OR email = '".$_SESSION["gemail"]."' LIMIT 1";
    $result = mysqli_query($connect, $loginquery);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['userid'] = $row['id'];
        header("Location: ../dashboard/select.php");
        exit();
    } else {
        $_SESSION["errormsg"] = "Dados de acesso incorretos";
        header("Location: ../access.php");
        redirect($connect);
    }
}

$userpassQuery = "SELECT password FROM users WHERE username = '$emailoruser' OR email = '$emailoruser'";
$idquery = "SELECT id FROM users WHERE username = '$emailoruser' OR email = '$emailoruser'";

$resultadopass = mysqli_query($connect, $userpassQuery);

$resultadoid = mysqli_query($connect, $idquery);

if (!isset($emailoruser) && !empty($emailoruser)) {
    $_SESSION["errormsg"] = "Introduza o email.";
    redirect($connect);
}

if (!isset($password) && !empty($password)) {
    $_SESSION["errormsg"] = "Introduza a palavra-passe.";
    redirect($connect);
}

if ($resultadoid) {
    $row = mysqli_fetch_assoc($resultadoid);
    $_SESSION['userid'] = $row['id'];
}

if ($resultadopass) {
    $row = mysqli_fetch_assoc($resultadopass);
    if ($row && password_verify($password, $row['password'])) {
        header("Location: ../dashboard/select.php");
        exit();
    } else {
        $_SESSION["errormsg"] = "Dados de acesso incorretos";
        redirect($connect);
    }
} else {
    echo "Error: " . mysqli_error($connect);
}
