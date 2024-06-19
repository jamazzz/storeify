<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teste";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($connect, "utf8");

// Check connection
if (!$connect) {
	die("Connection failed: " . mysqli_connect_error());
};

// Loader
if (substr_count($_SERVER['REQUEST_URI'], '/storeify/dashboard') != 1) {
	echo ('
<style>
#loading {
	width: 100%;
	height: 100%;
	top: 0px;
	left: 0px;
	position: fixed;
	display: block;
	z-index: 99
}

/* HTML: <div class="loader"></div> */
.loader {
	width: 50px;
	aspect-ratio: 1.154;
	position: relative;
	background: conic-gradient(from 120deg at 50% 64%, #0000, #25b09b 1deg 120deg, #0000 121deg);
	animation: l27-0 1.5s infinite cubic-bezier(0.3, 1, 0, 1);
}

.loader:before,
.loader:after {
	content: "";
	position: absolute;
	inset: 0;
	background: inherit;
	transform-origin: 50% 66%;
	animation: l27-1 1.5s infinite;
}

.loader:after {
	--s: -1;
}

@keyframes l27-0 {

	0%,
	30% {
		transform: rotate(0)
	}

	70% {
		transform: rotate(120deg)
	}

	70.01%,
	100% {
		transform: rotate(360deg)
	}
}

@keyframes l27-1 {
	0% {
		transform: rotate(calc(var(--s, 1)*120deg)) translate(0)
	}

	30%,
	70% {
		transform: rotate(calc(var(--s, 1)*120deg)) translate(calc(var(--s, 1)*-5px), 10px)
	}

	100% {
		transform: rotate(calc(var(--s, 1)*120deg)) translate(0)
	}
}
</style>
<div id="loading" class="bg-background">
<div class="loader justify-center items-center" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);"></div>
</div>
<script>
window.onload = function() {
	document.getElementById("loading").style.display = "none"
}
</script>');
} else {
	session_start();
	if (!isset($_SESSION['userid'])) {
		mysqli_close($connect);
		header('Location: /storeify/access/login.php');
		exit();
	}
}
