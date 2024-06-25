<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
session_start();

if ($_SESSION["glogin"]) {
    $pass = password_hash($_POST['password2'], PASSWORD_BCRYPT);
    $username = genUser($connect, $_SESSION["gname"], $_SESSION["gfamily"], $_SESSION["gemail"]);
    $userinfo = "INSERT INTO clients (username,email,password,creation_date,attempts,deleted) VALUES ('{$username}', '{$_SESSION["gemail"]}','{$pass}', NOW()),5,0";
    $resultado = mysqli_query($connect, $userinfo);

    if ($resultado) {
        $_SESSION['register'] = true;
        header("Location: loginClient.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conexao);
    }
}

// Username
function genUser($connection, $email)
{
    $uniqueUsernameFound = false;

    while (!$uniqueUsernameFound) {
        $atSymbolPosition = strpos($email, '@');
        $emailPrefix = ($atSymbolPosition !== false) ? substr($email, 0, $atSymbolPosition) : '';
        $emailPrefix = preg_replace('/[^a-zA-Z]/', '', $emailPrefix);
        $combinedString = $emailPrefix;

        $lowercaseString = strtolower($combinedString);
        $randomChars = substr(str_shuffle(str_repeat('0123456789', 3)), 0, 9);
        $username = $lowercaseString . $randomChars;

        $userQuery = "SELECT COUNT(*) AS count FROM clients WHERE username = '$username'";
        $result = mysqli_query($connection, $userQuery);

        if (!$result) {
            die("Error in SQL query: " . mysqli_error($connection));
        }

        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];

        if ($count == 0) {
            $uniqueUsernameFound = true;
        }
    }

    return $username;
}

function isEmailOccupied($email, $connection)
{
    if (!isset($email) && !empty($email)) {
        $_SESSION["errormsg"] = "Introduza um email.";
        redirect($connection);
    }

    $filteredEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($filteredEmail === false) {
        $_SESSION["errormsg"] = $email . " é um email inválido.";
        redirect($connection);
    }

    $emailocupado = "SELECT COUNT(*) AS count FROM clients WHERE email = '" . $email . "'";
    $result = mysqli_query($connection, $emailocupado);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    if ($count != 0) {
        $_SESSION["errormsg"] = $email . " já está registado.";
        redirect($connection);
    }
    return true;
}

function validatePassword($password2, $password3, $connection)
{
    if (!isset($password2) && !empty($password2) && !isset($password3) && !empty($password3)) {
        $_SESSION["errormsg"] = "Introduza uma palavra-passe.";
        redirect($connection);
    }

    if ($password2 !== $password3) {
        $_SESSION["errormsg"] = "A senha não corresponde.";
        redirect($connection);
    }

    if (strlen($password2) < 6) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 6 caracteres.";
        redirect($connection);
    }

    if (!preg_match('/[a-z]/', $password2)) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 caractere minúsculo.";
        redirect($connection);
    }

    if (!preg_match('/[A-Z]/', $password2)) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 caractere maiúsculo.";
        redirect($connection);
    }

    if (!preg_match('/[0-9]/', $password2)) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 dígito.";
        redirect($connection);
    }

    return true;
}

if (
    isEmailOccupied($_POST['email'], $connect) == 1
    &&
    validatePassword($_POST['password2'], $_POST['password3'], $connect) == 1
) {
    $pass = password_hash($_POST['password2'], PASSWORD_BCRYPT);
    $username = genUser($connect, $_POST['email']);
    $userinfo = "INSERT INTO clients (username, password, email, creation_date, attempts,deleted) VALUES ('{$username}', '{$pass}', '{$_POST['email']}', NOW(), 5,0)";

    $resultado = mysqli_query($connect, $userinfo);

    if ($resultado) {
        $_SESSION['register'] = true;
        header("Location: loginClient.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conexao);
    }
}
