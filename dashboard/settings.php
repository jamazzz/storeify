<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$userQuery = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
$userInfo = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($userInfo);

$currentemail = $row['email'];
$currentusername = $row['username'];
$currentpassword = $row['password'];

function redirect($connection)
{
    mysqli_close($connection);
    header("Location: " . $_POST['currentpage']);
    exit();
}

// verify 
if ($username != $currentusername) {
  $userQuery = "SELECT COUNT(*) AS count FROM users WHERE username = '$username'";
  $result = mysqli_query($connect, $userQuery);
  $row = mysqli_fetch_assoc($result);
  $count = $row['count'];
  if ($count != 0) {
    $_SESSION["errormsg"] = "Nome de utilizador já em uso.";
    redirect($connect);
  }
  $username = $_POST['username'];
}
if ($email != $currentemail) {
  $userQuery = "SELECT COUNT(*) AS count FROM users WHERE email = '$email'";
  $result = mysqli_query($connect, $userQuery);
  $row = mysqli_fetch_assoc($result);
  $count = $row['count'];
  if ($count != 0) {
    $_SESSION["errormsg"] = "Email já em uso.";
    redirect($connect);
  }
  $email = $_POST['email'];
}
if ($password != $currentpassword) {
    $password = password_hash($password, PASSWORD_BCRYPT);
}

$sql = "UPDATE users SET username = '$username', email = '$email', password = '$password' WHERE email = '$email'";
if (mysqli_query($connect, $sql)) {
  echo($_POST['currentpage']);
  header("Location: " . $_POST['currentpage']);
  exit();
} else {
  echo "Error updating record: " . mysqli_error($connect);
}
