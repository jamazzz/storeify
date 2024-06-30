<?php
include $_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php";

header('Content-Type: application/json');

$input = file_get_contents('php://input');
$data = json_decode($input, true);

function lightenHexColor($hex, $percent)
{
  // Ensure the hex color is valid
  $hex = ltrim($hex, '#');
  if (strlen($hex) == 3) {
    $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
  }

  // Convert hex to RGB
  $r = hexdec($hex[0] . $hex[1]);
  $g = hexdec($hex[2] . $hex[3]);
  $b = hexdec($hex[4] . $hex[5]);

  // Calculate the new RGB values
  $r = round($r + ($percent / 100) * (255 - $r));
  $g = round($g + ($percent / 100) * (255 - $g));
  $b = round($b + ($percent / 100) * (255 - $b));

  // Ensure RGB values are within 0-255
  $r = max(0, min(255, $r));
  $g = max(0, min(255, $g));
  $b = max(0, min(255, $b));

  // Convert RGB back to hex
  $newHex = sprintf("#%02x%02x%02x", $r, $g, $b);

  return $newHex;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($data['color'])) {
    $color = $data['color'];
    $websiteName = $_SESSION['websitename'];

    $ligthcolor = lightenHexColor($color, 20);

    $update = "UPDATE websites SET dark_color = '" . $color . "', light_color = '" . $ligthcolor . "' WHERE name = '" . $websiteName . "'";
    $result = mysqli_query($connect, $update);
  }
} else {
  $color = '#1C1C25 ';
  $ligthcolor = '#24242D';

  $websiteName = $_SESSION['websitename'];

  $update = "UPDATE websites SET dark_color = '" . $color . "', light_color = '" . $ligthcolor . "' WHERE name = '" . $websiteName . "'";
  $result = mysqli_query($connect, $update);
}

header('Location: http://localhost/storeify/dashboard/webstore/appearance.php');
exit();
