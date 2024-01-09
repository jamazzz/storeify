<?php
include($_SERVER['DOCUMENT_ROOT'] . "/turno_1_v1/acesso_bd_t1.php");

// $consulta = "SELECT * FROM users WHERE user = '".$_POST["username"]."'";

// $resultado = mysqli_query($conexao, $consulta);

// $numero_de_linhas = mysqli_num_rows($resultado);
echo ($_POST['fname']);
echo ("<br>");
echo ($_POST['sname']);
echo ("<br>");
echo ($_POST['email']);
echo ("<br>");
echo ($_POST['password2']);
echo ("<br>");
echo ($_POST['password3']);

function genUser($email)
{
	$allowedChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

	$atSymbolPosition = strpos($email, '@');
	$emailPrefix = ($atSymbolPosition !== false) ? substr($email, 0, $atSymbolPosition) : '';

	$emailPrefix = preg_replace('/[^' . preg_quote($allowedChars, '/') . ']/', '', $emailPrefix);

	if (empty($emailPrefix)) {
		echo "Invalid email address";
		return false;
	}

	$randomChars = substr(str_shuffle(str_repeat('0123456789', 3)), 0, 5);
	$user = $emailPrefix . $randomChars;

	return $user;
}

$user = genUser($_POST['email']);
echo ("<br>");
echo $user;

$new = "INSERT INTO `users`(`username`, `pass`, `email`, `nivel_perm`, `data_criacao`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]',NOW())";
