<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
session_start();
function redirect($connection)
{
    mysqli_close($connection);
    header("Location: ../admin/login.php");
    exit();
}

$emailoruser = $_POST['eoru'];
$password = $_POST['pass'];

$userQuery = "SELECT * FROM users WHERE username = '$emailoruser' AND permission_level = '1' OR email = '$emailoruser' AND permission_level = '1'";

$userInfo = mysqli_query($connect, $userQuery);

if (!isset($emailoruser) && !empty($emailoruser)) {
    $_SESSION["errormsg"] = "Introduza o email.";
    redirect($connect);
}

if (!isset($password) && !empty($password)) {
    $_SESSION["errormsg"] = "Introduza a palavra-passe.";
    redirect($connect);
}

if ($userInfo) {
    $row = mysqli_fetch_assoc($userInfo);
    $_SESSION['userid'] = $row['id'];
}

if ($userInfo) {
    if ($row && password_verify($password, $row['password'])) {
        if ($_SESSION['phase'] == 1) {
            $_SESSION['recoveremail'] = $row['email'];
            header("Location: ../access/forgotcode.php");
        }
    } else {
        $_SESSION['currentwebsite'] = -1;
        header("Location: ../dashboard/dashlanding.php");
    }
    exit();
} else {
    $_SESSION["errormsg"] = "Dados de acesso incorretos";
    redirect($connect);
}
