<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
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

function isValidName($name, $name2)
{
    $namePattern = '/^[A-Z][a-zA-Z]*$/';

    if (!(preg_match($namePattern, $name) && !preg_match('/\d/', $name) && !preg_match('/\s/', $name))) {
        return "Name is not valid";
    }

    if (!(preg_match($namePattern, $name2) && !preg_match('/\d/', $name2) && !preg_match('/\s/', $name2))) {
        return "Name2 is not valid";
    }

    return true;
}

function validateEmail($email)
{
    $filteredEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($filteredEmail === false) {
        return "Email Inválido";
    } else {
        return true;
    }
}

function isEmailOccupied($email, $connection)
{
    $emailocupado = "SELECT COUNT(*) AS count FROM users WHERE email = '" . $_POST['email'] . "'";
    $result = mysqli_query($connection, $emailocupado);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];

    return $count != 0;
}

function validatePassword($password2, $password3)
{
    if ($password2 !== $password3) {
        return "Passwords do not match";
    }

    if (strlen($password2) < 6) {
        return "Password should be at least 6 characters long";
    }

    if (!preg_match('/[a-z]/', $password2)) {
        return "Password should contain at least one lowercase letter";
    }

    if (!preg_match('/[A-Z]/', $password2)) {
        return "Password should contain at least one uppercase letter";
    }

    if (!preg_match('/[0-9]/', $password2)) {
        return "Password should contain at least one number";
    }

    return password_hash($password2, PASSWORD_BCRYPT);
}

$_POST['fname'] = "Duarte";
$_POST['lname'] = "Neves";
$_POST['email'] = "duarte.acn@gmail.com";
$_POST['password2'] = "Teste123";
$_POST['password3'] = "Teste123";

// genUser($connect,$_POST['fname'], $_POST['lname'], $_POST['email']);
// isValidName($_POST['fname'], $_POST['lname']);
// validateEmail($_POST['email']);
// isEmailOccupied($_POST['email'],$connect);
// validatePassword($_POST['password2'],$_POST['password3']);
echo("genUser - ");
echo(genUser($connect,$_POST['fname'], $_POST['lname'], $_POST['email']));
echo("<br>");
echo("isValidName - ");
echo(isValidName($_POST['fname'], $_POST['lname']));
echo("<br>");
echo("validateEmail - ");
echo(validateEmail($_POST['email']));
echo("<br>");
echo("isEmailOccupied - ");
echo(isEmailOccupied($_POST['email'],$connect));
echo("<br>");
echo("validatePassword - ");
echo(validatePassword($_POST['password2'],$_POST['password3']));