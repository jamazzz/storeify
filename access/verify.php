<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
session_start();
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
if (!$_SESSION['verify']) {
  $codigo = $_POST['input1'] . $_POST['input2'] . $_POST['input3'] . $_POST['input4'] . $_POST['input5'] . $_POST['input6'];
  if ($codigo == $_SESSION['code']) {
    $_SESSION['verify'] = true;
    mysqli_close($connect);
    header('Location: /storeify/access/forgot.php');
    exit();
  }
} else {
  if (validatePassword($_POST['password'], $_POST['password2'], $connect)) {
    $pass = password_hash($_POST['password2'], PASSWORD_BCRYPT);
    $userinfo = "UPDATE users SET password = '$pass' WHERE email = '" . $_SESSION['recoveremail'] . "'";
    $resultado = mysqli_query($connect, $userinfo);
    if ($resultado) {
      header("Location: access.php");
      exit();
    } else {
      echo "Error: " . mysqli_error($conexao);
    }
  }
}
