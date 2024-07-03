<?php
include $_SERVER['DOCUMENT_ROOT'] . '/storeify/essencial.php';
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['content'])) {
  $mdContent = mysqli_real_escape_string($connect, $data['content']['md']); 
  $htmlContent = mysqli_real_escape_string($connect, $data['content']['html']);
  $websiteId = mysqli_real_escape_string($connect, $_SESSION['currentwebsite']);
  $_SESSION['mdpack'] = $mdContent;
  $_SESSION['htmlpack'] = $htmlContent;
  $updateQuery = "UPDATE websites SET home_info_md = '$mdContent', home_info_html = '$htmlContent' WHERE id = '$websiteId'";
  $websiteResult = mysqli_query($connect, $updateQuery);

  if ($websiteResult) {
    echo "Update successful";
  } else {
    echo "Update failed";
  }
} else {
  echo "Invalid request";
}
