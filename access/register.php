<?php
include($_SERVER['DOCUMENT_ROOT'] . "/turno_1_v1/acesso_bd_t1.php");

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
    echo "Valid name: " . $_POST['fname'] . " " . $_POST['sname'];
} else {
    echo "Nome Inválido";
}

$username = genUser($_POST['fname'], $_POST['sname'], $_POST['email']);
echo ("<br>");
echo $username;

// $insert = "INSERT INTO users (username, password, email, permission_level, creation_date, elimination_date, attempts, deleted) VALUES ('{$_POST['fname']}', '{$_POST['password']}', '{$_POST['email']}', '{$_POST['permission_level']}', '{$_POST['creation_date']}', '{$_POST['elimination_date']}', '{$_POST['attempts']}', '{$_POST['deleted']}')";
