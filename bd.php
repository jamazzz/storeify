<?php	
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "teste";

	// Create connection
	$connect = mysqli_connect($servername, $username, $password, $dbname);
	mysqli_set_charset($connect,"utf8");
	
	// Check connection
	if (!$connect) 
		{
    	die("Connection failed: " . mysqli_connect_error());
		};			
?>