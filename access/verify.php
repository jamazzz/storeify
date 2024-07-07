<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");

function redirect($connection)
{
  mysqli_close($connection);
  header('Location:/storeify/access/forgot.php');
  exit();
}

function validatePassword($password2, $password3, $connection)
{
  if (!isset($password2) && !empty($password2) && !isset($password3) && !empty($password3)) {
    $_SESSION["errormsg"] = "Introduza uma palavra-passe.";
    redirect($connection);
  }

  if ($password2 !== $password3) {
    $_SESSION["errormsg"] = "A senha não corresponde.";
    redirect($connection);
  }

  if (strlen($password2) < 6) {
    $_SESSION["errormsg"] = "A senha precisa de pelo menos 6 caracteres.";
    redirect($connection);
  }

  if (!preg_match('/[a-z]/', $password2)) {
    $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 caractere minúsculo.";
    redirect($connection);
  }

  if (!preg_match('/[A-Z]/', $password2)) {
    $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 caractere maiúsculo.";
    redirect($connection);
  }

  if (!preg_match('/[0-9]/', $password2)) {
    $_SESSION["errormsg"] = "A senha precisa de pelo menos 1 dígito.";
    redirect($connection);
  }

  return true;
}
if (!isset($_SESSION['verify'])) {
  $codigo = $_POST['input1'] . $_POST['input2'] . $_POST['input3'] . $_POST['input4'] . $_POST['input5'] . $_POST['input6'];
  if ($codigo == $_SESSION['code']) {
    if (isset($_SESSION["emailfromadmin"])) {
      $_SESSION['currentwebsite'] = -1;
      unset($_SESSION['phase']);
      header("Location: /storeify/admin/dashboard.php");
      exit();
    }
    $_SESSION['verify'] = true;
    redirect($connect);
  } else {
    if (isset($_SESSION["emailfromadmin"])) {
      $_SESSION["errormsg"] = "Código de confirmação incorreto.";
      header("Location: ../admin/login.php");
      exit();
    }
    $_SESSION["errormsg"] = "Código de confirmação incorreto.";
    redirect($connect);
  }
} else {
  if (validatePassword($_POST['password'], $_POST['password2'], $connect)) {
    $pass = password_hash($_POST['password2'], PASSWORD_BCRYPT);
    $userinfo = "UPDATE users SET password = '$pass' WHERE email = '" . $_SESSION['recoveremail'] . "'";
    $resultado = mysqli_query($connect, $userinfo);
    if ($resultado) {
      session_destroy();
      header("Location: access.php");
      exit();
    } else {
      echo "Error: " . mysqli_error($conexao);
    }
  }
}
