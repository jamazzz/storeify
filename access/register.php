<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");

function genUser($str1, $str2, $email)
{
    if (ctype_alpha($str1) && ctype_alpha($str2)) {
        $combinedString = $str1 . $str2;
    } else {
        $atSymbolPosition = strpos($email, '@');
        $emailPrefix = ($atSymbolPosition !== false) ? substr($email, 0, $atSymbolPosition) : '';
        $emailPrefix = preg_replace('/[^a-zA-Z]/', '', $emailPrefix);
        $combinedString = $emailPrefix;
    }

    $lowercaseString = strtolower($combinedString);
    $randomChars = substr(str_shuffle(str_repeat('0123456789', 3)), 0, 5);
    $user = $lowercaseString . $randomChars;
    return $user;
}

// Email Validation
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if ($email === false) {
    echo "Email Inválido";
}

// Name Validation
if (empty($_POST['fname']) || $_POST['fname'] == "" || empty($_POST['sname']) || $_POST['sname'] == "") {
    echo "Nome Inválido";
}
$namePattern = '/^[A-Z][a-zA-Z]*$/';
if (
    preg_match($namePattern, $_POST['fname']) && !preg_match('/\d/', $_POST['fname']) && !preg_match('/\s/', $_POST['fname']) &&
    preg_match($namePattern, $_POST['sname']) && !preg_match('/\d/', $_POST['sname']) && !preg_match('/\s/', $_POST['sname'])
) {
    // valid
} else {
    echo "Nome Inválido";
}

// Password Validation
if (empty($_POST['password2'])) {
    echo "Password 2 is empty";
} elseif (empty($_POST['password3'])) {
    echo "Password 3 is empty";
} elseif ($_POST['password2'] !== $_POST['password3']) {
    echo "Passwords do not match";
} elseif (strlen($_POST['password2']) < 6) {
    echo "Password should be at least 6 characters long";
} elseif (!preg_match('/[a-z]/', $_POST['password2'])) {
    echo "Password should contain at least one lowercase letter";
} elseif (!preg_match('/[A-Z]/', $_POST['password2'])) {
    echo "Password should contain at least one uppercase letter";
} elseif (!preg_match('/[0-9]/', $_POST['password2'])) {
    echo "Password should contain at least one number";
} else {
    $pass = password_hash($_POST['password2'], PASSWORD_BCRYPT);
}

// gen user
$username = genUser($_POST['fname'], $_POST['sname'], $_POST['email']);
echo ("<br>");
echo $username;

$new = "INSERT INTO users (username, password, email, permission_level, creation_date, attempts) VALUES ('{$username}', '{$pass}', '{$_POST['email']}', 0, NOW(), 5)";

$resultado = mysqli_query($connect, $new);

if ($resultado) {
    header("Location: access.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conexao);
}