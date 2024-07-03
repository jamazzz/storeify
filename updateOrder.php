<?php
include $_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php";

header('Content-Type: application/json');

$input = file_get_contents('php://input');
$data = json_decode($input, true);
print_r($data);

$originCategory = $data['originCategory'];
$destinationCategory = $data['destinationCategory'];
$productsInOrigin = $data['productsInOrigin'];
$productsInDestination = $data['productsInDestination'];

$response = [
  'message' => 'Order update successful'
];
echo json_encode($response);
