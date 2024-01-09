<?php
	include ($_SERVER['DOCUMENT_ROOT']."/turno_1_v1/acesso_bd_t1.php");

	// $consulta = "SELECT * FROM users WHERE user = '".$_POST["username"]."'";

	// $resultado = mysqli_query($conexao, $consulta);

	// $numero_de_linhas = mysqli_num_rows($resultado);
	echo($_POST['name']);
	echo("<br>");
	echo($_POST['email']);
	echo("<br>");
	echo($_POST['password2']);
	echo("<br>");
	echo($_POST['password3']);

	$new = "INSERT INTO `users`(`username`, `pass`, `email`, `nivel_perm`, `data_criacao`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]',NOW())"
?>