<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/check.php");
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

// Name Validation

function isValidName($name, $name2, $connection)
{
    $namePattern = '/^[A-Z][a-zA-Z]*$/';
    if (!(preg_match($namePattern, $name) && !preg_match('/\d/', $name) && !preg_match('/\s/', $name))) {
        $_SESSION["errormsg"] = $name." é um nome inválido.";
        mysqli_close($connection);
        header('Location:/storeify/access/access.php');
        exit();
    }

    if (!(preg_match($namePattern, $name2) && !preg_match('/\d/', $name2) && !preg_match('/\s/', $name2))) {
        $_SESSION["errormsg"] = $name2." é um nome inválido.";
        mysqli_close($connection);
        header('Location:/storeify/access/access.php');
        exit();
    }

    return true;
}

function validateEmail($email, $connection)
{
    $filteredEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($filteredEmail === false) {
        $_SESSION["errormsg"] = $email." é um email inválido.";
        mysqli_close($connection);
        header('Location:/storeify/access/access.php');
        exit();
    } else {
        return true;
    }
}

function isEmailOccupied($email, $connection)
{
    $emailocupado = "SELECT COUNT(*) AS count FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($connection, $emailocupado);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    if ($count != 0) {
        $_SESSION["errormsg"] = $email." já está registado.";
        mysqli_close($connection);
        header('Location:/storeify/access/access.php');
        exit();
    }
    return true;
}

function validatePassword($password2, $password3, $connection)
{
    if ($password2 !== $password3) {
        $_SESSION["errormsg"] = "A senha não corresponde.";
        mysqli_close($connection);
        header('Location:/storeify/access/access.php');
        exit();
    }

    if (strlen($password2) < 6) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 6 caracteres.";
        mysqli_close($connection);
        header('Location:/storeify/access/access.php');
        exit();
    }

    if (!preg_match('/[a-z]/', $password2)) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 caractere minúsculo.";
        mysqli_close($connection);
        header('Location:/storeify/access/access.php');
        exit();
    }

    if (!preg_match('/[A-Z]/', $password2)) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 caractere maiúsculo.";
        mysqli_close($connection);
        header('Location:/storeify/access/access.php');
        exit();
    }

    if (!preg_match('/[0-9]/', $password2)) {
        $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 dígito.";
        mysqli_close($connection);
        header('Location:/storeify/access/access.php');
        exit();
    }

    return true;
}
$_POST['fname'] = "Duarte";
$_POST['lname'] = "Neves";
$_POST['email'] = "duarte.acn@gmail.com";
$_POST['password2'] = "TesteA1";
$_POST['password3'] = "TesteA1";

// echo("<br>".isValidName($_POST['fname'], $_POST['lname'], $connect));
// echo("<br>".validateEmail($_POST['email'], $connect));
// echo("<br>".isEmailOccupied($_POST['email'], $connect));
// echo("<br>".validatePassword($_POST['password2'], $_POST['password3'], $connect));
// echo("<br> erro1");
if (
    isValidName($_POST['fname'], $_POST['lname'], $connect) == 1
    &&
    validateEmail($_POST['email'], $connect) == 1
    &&
    isEmailOccupied($_POST['email'], $connect) == 1
    &&
    validatePassword($_POST['password2'], $_POST['password3'], $connect) == 1
) {
    $pass = password_hash($_POST['password2'], PASSWORD_BCRYPT);
    $username = genUser($connect, $_POST['fname'], $_POST['lname'], $_POST['email']);

    $nameuser = $_POST['fname'] . " " . $_POST['lname'];
    $userid = "INSERT INTO users_ids (name) VALUES ('{$nameuser}')";
    $userinfo = "INSERT INTO users (username, password, email, permission_level, creation_date, attempts) VALUES ('{$username}', '{$pass}', '{$_POST['email']}', 0, NOW(), 5)";

    $resultado = mysqli_query($connect, $userid);
    $resultado2 = mysqli_query($connect, $userinfo);

    if ($resultado && $resultado2) {
        header("Location: access.php");
        exit();
    } else {
        echo("erro2");
        echo "Error: " . mysqli_error($conexao);
    }
}
