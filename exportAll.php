<?php
session_start();
$websiteName = $_SESSION['websitename'];
$directory = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/invoices/';
$files = scandir($directory);
$files = array_diff($files, array('.', '..'));
$zip = new ZipArchive();
$zipFileName = 'invoices_' . $websiteName . '.zip';
$zipFilePath = $directory . $zipFileName;

if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== TRUE) {
  exit("Cannot open <$zipFilePath>\n");
}

foreach ($files as $file) {
  $fileName = pathinfo($file, PATHINFO_FILENAME);
  $filePrefix = explode('_', $fileName)[0];
  if ($filePrefix === $websiteName) {
    $zip->addFile($directory . $file, $file);
  }
}
$zip->close();
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . $zipFileName . '"');
header('Content-Length: ' . filesize($zipFilePath));
readfile($zipFilePath);

header('Location: /storeify/payments/exports.php');
