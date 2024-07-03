<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

  <title>storeify | Welcome</title>
  <meta name="title" content="storeify | Welcome">
  <meta name="description" content="">
  <meta name="theme-color" content="">

  <meta property="og:type" content="website">
  <meta property="og:title" content="storeify | Welcome">
  <meta property="og:description" content="">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="storeify | Welcome">
  <meta property="twitter:description" content="">

  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link href="/storeify/assets/css/style.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700&amp;display=swap" rel="stylesheet">

  <script async="" src="https://www.clarity.ms/tag/fxlepb8eap"></script>
  <script async="" src="https://www.clarity.ms/tag/kzn5ty5tcx"></script>
  <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
</head>

<body class="text-foreground bg-background" data-new-gr-c-s-check-loaded="14.1157.0" data-gr-ext-installed="" cz-shortcut-listen="true" data-new-gr-c-s-loaded="14.1157.0">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
  include $_SERVER['DOCUMENT_ROOT'] . "/storeify/storeSection.php";
  $_SESSION['number'] = -1;
  if (preg_match('/\/product\/([0-9]+)$/', $_SERVER['REQUEST_URI'], $matches)) {
    $_SESSION['number'] = $matches[1];
  }
  $pinfo = "SELECT * FROM products WHERE id = '" . $_SESSION['number'] . "'";
  $result = mysqli_query($connect, $pinfo);
  $row = mysqli_fetch_assoc($result);
  $rnumber = mysqli_num_rows($result);
  if ($rnumber === 0) {
    echo "<script>window.location.href = '/storeify/404.php';</script>";
    exit;
  }
  ?>
  <div class="grid lg:grid-cols-[1fr_300px] gap-grid bg-background-accent">
    <div>



      <div>
        <div class="bg-background-accent p-lg border-b border-background rounded-t flex items-center gap-grid justify-center text-center">
          <div>
            <h1 class="type-header"><?php echo $row['name']; ?></h1>
            <small class="type-subtitle text-sm text-foreground-accent text-opacity-50">

            </small>
          </div>
        </div>
        <div class="markdown bg-background-accent rounded-b p-lg" style="margin-left:50px;">
          <p><span style="color:rgb(255,255,255);"><span style="font-size:14px;"><span style="font-family:Verdana, Geneva, sans-serif;"><strong>Description:</strong></span></span></span></p>
          <br>
          <?php echo $row['description']; ?>
        </div>
      </div>
    </div>
    <div class="bg-background-accent rounded">
      <div class=" grid grid-rows-[1fr_auto_auto]">
        <br><br><br><br><br><br><br>
        <div class="bg-background-accent block rounded-sm text-center items-center overflow-hidden" style="margin-right:100px;">
          <?php
          $base_url_path = '/storeify/store/productsimg/';
          $number = $_SESSION['number'];
          $default_image = '/storeify/assets/images/logo.png';

          // Define the server-side path to check for file existence
          $server_path = $_SERVER['DOCUMENT_ROOT'] . $base_url_path . $number;

          if (file_exists($server_path . '.jpg')) {
            $logo_src = $base_url_path . $number . '.jpg';
          } elseif (file_exists($server_path . '.png')) {
            $logo_src = $base_url_path . $number . '.png';
          } elseif (file_exists($server_path . '.gif')) {
            $logo_src = $base_url_path . $number . '.gif';
          } else {
            $logo_src = $default_image;
          }

          echo '<img src="' . $logo_src . '" class="inline-block max-h-52 mx-auto">';
          ?>
          <h2 class="type-header border-background  p-sm"><?php echo $row['name'] . ' - ' . $row['price']; ?></h2>
          <?php
          echo ('</a>
<div class="flex justify-between py-sm">
</div>
');
          $exists = "SELECT * FROM checkout WHERE user_id = '" . $_SESSION['clientid'] . "' AND product_id = '" . $row['id'] . "' AND subdomain = '" . $_SESSION['subdomain'] . "'";
          $result2 = mysqli_query($connect, $exists);
          if (mysqli_num_rows($result2) > 0) {
            echo '
  <form action="/storeify/addCart.php" method="post" class="w-full">
  <button type="submit" class="btn-danger block w-full text-center group relative spinner-toggle">
    <i class="fa-solid fa-cart-shopping mr-sm"></i> Retirar
    <input type="hidden" name="remove" value="' . $row['id'] . '">
    <input type="hidden" name="url" value="' . $_SERVER['REQUEST_URI'] . '">
  </button>
  </form>   
';
          } else {
            echo ('       
  <form action="/storeify/addCart.php" method="post" class="w-full">       
     <button type="submit" class="btn-primary block w-full text-center group relative spinner-toggle" name="add">
     <i class="fa-solid fa-cart-shopping mr-sm"></i> Comprar
     <input type="hidden" name="add" value="' . $row['id'] . '">
     <input type="hidden" name="url" value="' . $_SERVER['REQUEST_URI'] . '">
     </button>
  </form>
   ');
          }
          ?>
        </div>
      </div>
      <div class="pt-md">
      </div>
    </div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . "/storeify/storeFooter.php");
  ?>