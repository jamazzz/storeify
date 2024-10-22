<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

  <title>Storeify | Categorias</title>
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
  <meta name="title" content="storeify | Welcome">
  <meta name="description" content="">
  <meta name="theme-color" content="">

  <meta property="og:type" content="website">
  <meta property="og:title" content="storeify | Welcome">
  <meta property="og:description" content="">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="storeify | Welcome">
  <meta property="twitter:description" content="">

  <link rel="shortcut icon" href="/storeify/assets/images/logo.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link href="/storeify/assets/css/style.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&amp;display=swap" rel="stylesheet">

  <script async="" src="https://www.clarity.ms/tag/fxlepb8eap"></script>
  <script async="" src="https://www.clarity.ms/tag/kzn5ty5tcx"></script>
  <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
</head>

<body class="text-foreground bg-background" data-new-gr-c-s-check-loaded="14.1157.0" data-gr-ext-installed="" cz-shortcut-listen="true" data-new-gr-c-s-loaded="14.1157.0">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
  include $_SERVER['DOCUMENT_ROOT'] . "/storeify/storeSection.php";
  ?>
  <div class="grid gap-grid">
    <div class="grid grid-cols-[repeat(auto-fit,_minmax(350px,_1fr))] gap-grid max">
      <?php
      $getproducts = "SELECT * FROM products WHERE category_id = '" . $_SESSION['number'] . "' AND deleted = 0 ORDER BY `order` ASC";
      $result = mysqli_query($connect, $getproducts);
      $count = mysqli_num_rows($result);
      while ($row = mysqli_fetch_assoc($result)) {
        $exists = "SELECT * FROM checkout WHERE user_id = '" . $_SESSION['clientid'] . "' AND product_id = '" . $row['id'] . "' AND subdomain = '" . $_SESSION['subdomain'] . "'";
        $result2 = mysqli_query($connect, $exists);
        echo ('<div class="bg-background-accent rounded p-lg grid grid-rows-[1fr_auto_auto]" style="max-height: 29rem;">
                <a class="grid grid-rows-[1fr_auto] rounded-sm text-center items-center overflow-hidden">
              ');
        $logo_path = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/productsimg/' . $row['id'];
        $logo = '/storeify/store/productsimg/' . $row['id'];
        if (file_exists($logo_path . '.jpg')) {
          $logo_src = $logo . '.jpg';
        } elseif (file_exists($logo_path . '.png')) {
          $logo_src = $logo . '.png';
        } elseif (file_exists($logo_path . '.gif')) {
          $logo_src = $logo . '.gif';
        } else {
          $logo_src = '/storeify/assets/images/logo.png';
        }
        echo '<a href="/storeify/product/' . $row['id'] . '"class="inline-block mx-auto"><img src="' . $logo_src . '" alt="" class="max-h-52"></a>';

        echo ('</a>
              <h2 class="type-header  border-t  border-background-accent  p-sm text-center">' . $row['name'] . ' - ' . $row['price'] . ' €</h2>
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
        echo ('</div>');
      }
      ?>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="grid gap-grid">
    <div class="hidden lg:block">
    </div>
  </div>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/storeify/storeFooter.php";
  ?>
</body>

</html>