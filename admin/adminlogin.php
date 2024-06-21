<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
function redirect($connection)
{
    mysqli_close($connection);
    header("Location: ../admin/login.php");
    exit();
}

$emailoruser = $_POST['eoru'];
$password = $_POST['pass'];

$userQuery = "SELECT * FROM users WHERE  username = '$emailoruser' OR email = '$emailoruser' AND permission_level = '1'";

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
    if (mysqli_num_rows($userInfo) != 1) {
        $_SESSION["errormsg"] = "Dados de acesso incorretos";
        redirect($connect);
    }
    $_SESSION['userid'] = $row['id'];
    $_SESSION['emailfromadmin'] = $row['email'];
}

if ($userInfo) {
    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['recoveremail'] = $row['email'];
        header("Location: ../access/forgotcode.php");
    }
    exit();
} else {
    $_SESSION["errormsg"] = "Dados de acesso incorretos";
    redirect($connect);
}
