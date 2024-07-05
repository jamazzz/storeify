<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Storeify | Faturas</title>
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");

  if (!isset($_POST['json']) && !isset($_SESSION['json'])) {
    header('Location: /storeify/404.php');
  } else {

    $_SESSION['finalTable'] = '';
    for ($i = 0; $i < count($_SESSION['table']); $i++) {
      $_SESSION['finalTable'] .= '
      <tr>
        <td class="border-b py-3 pl-3">' . ($i + 1) . '.</td>
        <td class="border-b py-3 pl-2">' . $_SESSION['table'][$i]['name'] . '</td>
        <td class="border-b py-3 pl-2 text-right">' . $_SESSION['table'][$i]['price'] . ' €</td>
        <td class="border-b py-3 pl-2 text-center">1</td>
        <td class="border-b py-3 pl-2 text-center">23%</td>
        <td class="border-b py-3 pl-2 pr-3 text-right">' . round($_SESSION['table'][$i]['price'] * 1, 23, 2) . ' €</td>
      </tr>
    ';
    }
    header('Location: /storeify/pdf.php');
    exit;
  }
