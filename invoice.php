<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body>
  <?php
  include 'essencial.php';

  if (!isset($_POST['json']) && !isset($_SESSION['json'])) {
    header('Location: /storeify/404.php');
  } else {
    $_SESSION['json'] = $_POST['json'];
    $data = json_decode($_SESSION['json'], true);
  }
  $_SESSION['id'] = isset($data['id']) ? $data['id'] : '';
  $_SESSION['status'] = isset($data['status']) ? $data['status'] : '';
  $_SESSION['amountValue'] = isset($data['purchase_units'][0]['amount']['value']) ? $data['purchase_units'][0]['amount']['value'] : '';
  $_SESSION['currencyCode'] = isset($data['purchase_units'][0]['amount']['currency_code']) ? $data['purchase_units'][0]['amount']['currency_code'] : '';
  $_SESSION['payeeEmailAddress'] = isset($data['purchase_units'][0]['payee']['email_address']) ? $data['purchase_units'][0]['payee']['email_address'] : '';
  $_SESSION['payeeMerchantId'] = isset($data['purchase_units'][0]['payee']['merchant_id']) ? $data['purchase_units'][0]['payee']['merchant_id'] : '';
  $_SESSION['payerGivenName'] = isset($data['payer']['name']['given_name']) ? $data['payer']['name']['given_name'] : '';
  $_SESSION['payerSurname'] = isset($data['payer']['name']['surname']) ? $data['payer']['name']['surname'] : '';
  $_SESSION['payerId'] = isset($data['payer']['payer_id']) ? $data['payer']['payer_id'] : '';
  $_SESSION['payerCountryCode'] = isset($data['payer']['address']['country_code']) ? $data['payer']['address']['country_code'] : '';
  $_SESSION['create_time'] = isset($data['create_time']) ? date('d-m-Y', strtotime($data['create_time'])) : '';

  $_SESSION['finalTable'] = '';
  for ($i = 0; $i < count($_SESSION['table']); $i++) {
    $_SESSION['finalTable'] .= '
      <tr>
        <td class="border-b py-3 pl-3">' . ($i + 1) . '.</td>
        <td class="border-b py-3 pl-2">' . $_SESSION['table'][$i]['name'] . '</td>
        <td class="border-b py-3 pl-2 text-right">' . $_SESSION['table'][$i]['price'] . ' €</td>
        <td class="border-b py-3 pl-2 text-center">1</td>
        <td class="border-b py-3 pl-2 text-center">23%</td>
        <td class="border-b py-3 pl-2 pr-3 text-right">' . round($_SESSION['table'][$i]['price']*1,23,2) . ' €</td>
      </tr>
    ';
  }

  header('Location: /storeify/pdf.php');
  exit;
  