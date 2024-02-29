<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
session_start();

function redirect($connection, $fname, $lname)
{
    $_SESSION['oldfname'] = $fname;
    $_SESSION['oldlname'] = $lname;
    $_SESSION['oldemail'] = $_POST['email'];
    mysqli_close($connection);
    header('Location:/storeify/access/access.php');
    exit();
}

// Username
function genUser($connection, $fname, $lname, $email)
{
    $uniqueUsernameFound = false;

    while (!$uniqueUsernameFound) {
        if (ctype_alpha($fname) && ctype_alpha($lname)) {
            $combinedString = $fname . $lname;
        } else {
            $atSymbolPosition = strpos($email, '@');
            $emailPrefix = ($atSymbolPosition !== false) ? substr($email, 0, $atSymbolPosition) : '';
            $emailPrefix = preg_replace('/[^a-zA-Z]/', '', $emailPrefix);
            $combinedString = $emailPrefix;
        }

        $lowercaseString = strtolower($combinedString);
        $randomChars = substr(str_shuffle(str_repeat('0123456789', 3)), 0, 9);
        $username = $lowercaseString . $randomChars;

        $userQuery = "SELECT COUNT(*) AS count FROM users WHERE username = '$username'";
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

function isValidName($name, $name2, $connection)
{
    if (!isset($name) && !empty($name)) {
        $_SESSION["errormsg"] = "Introduza um Nome próprio.";
        redirect($connection, $name, $name2);
    }

    if (!isset($name2) && !empty($name2)) {
        $_SESSION["errormsg"] = "Introduza um Apelido.";
        redirect($connection, $name, $name2);
    }

    $namePattern = '/^[A-ZÀ-ÖØ-öø-ÿ][a-zA-ZÀ-ÖØ-öø-ÿ]*$/u';
    if (!(preg_match($namePattern, $name) && !preg_match('/\d/', $name) && !preg_match('/\s/', $name))) {
        $_SESSION["errormsg"] = $name . " é um nome inválido.";
        redirect($connection, $name, $name2);
    }

    if (!(preg_match($namePattern, $name2) && !preg_match('/\d/', $name2) && !preg_match('/\s/', $name2))) {
        $_SESSION["errormsg"] = $name2 . " é um nome inválido.";
        redirect($connection, $name, $name2);
    }

    return true;
}

function isEmailOccupied($email, $connection, $fname, $lname)
{
    if (!isset($email) && !empty($email)) {
        $_SESSION["errormsg"] = "Introduza um email.";
        redirect($connection, $fname, $lname);
    }

    $filteredEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($filteredEmail === false) {
        $_SESSION["errormsg"] = $email . " é um email inválido.";
        redirect($connection, $fname, $lname);
    }

    $emailocupado = "SELECT COUNT(*) AS count FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($connection, $emailocupado);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    if ($count != 0) {
        $_SESSION["errormsg"] = $email . " já está registado.";
        redirect($connection, $fname, $lname);
    }
    return true;
}

function validatePassword($password2, $password3, $connection, $fname, $lname)
{
    if (!isset($password2) && !empty($password2) && !isset($password3) && !empty($password3)) {
        $_SESSION["errormsg"] = "Introduza uma palavra-passe.";
        redirect($connection, $fname, $lname);
    }

    if ($password2 !== $password3) {
        $_SESSION["errormsg"] = "A senha não corresponde.";
        redirect($connection, $fname, $lname);
    }

    if (strlen($password2) < 6) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 6 caracteres.";
        redirect($connection, $fname, $lname);
    }

    if (!preg_match('/[a-z]/', $password2)) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 caractere minúsculo.";
        redirect($connection, $fname, $lname);
    }

    if (!preg_match('/[A-Z]/', $password2)) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 caractere maiúsculo.";
        redirect($connection, $fname, $lname);
    }

    if (!preg_match('/[0-9]/', $password2)) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 dígito.";
        redirect($connection, $fname, $lname);
    }

    return true;
}

if (
    isValidName($_POST['fname'], $_POST['lname'], $connect) == 1
    &&
    isEmailOccupied($_POST['email'], $connect, $_POST['fname'], $_POST['lname']) == 1
    &&
    validatePassword($_POST['password2'], $_POST['password3'], $connect, $_POST['fname'], $_POST['lname']) == 1
) {
    $pass = password_hash($_POST['password2'], PASSWORD_BCRYPT);
    $username = genUser($connect, $_POST['fname'], $_POST['lname'], $_POST['email']);

    $nameuser = $_POST['fname'] . " " . $_POST['lname'];
    $userid = "INSERT INTO users_ids (name) VALUES ('{$nameuser}')";
    $userinfo = "INSERT INTO users (username, password, email, permission_level, creation_date, attempts) VALUES ('{$username}', '{$pass}', '{$_POST['email']}', 0, NOW(), 5)";

    $resultado = mysqli_query($connect, $userid);
    $resultado2 = mysqli_query($connect, $userinfo);

    if ($resultado && $resultado2) {
        $_SESSION['register'] = true;
        header("Location: access.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conexao);
    }
}
