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

  <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/1241482240224133212/1241482531321286717/branco.png?ex=667bcc75&is=667a7af5&hm=8f00ef557f5cee58fb2982833167f590ad6241f512333348219fa03dcb206f80&">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link href="../template.css" rel="stylesheet">

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
  include $_SERVER['DOCUMENT_ROOT'] . "/storeify/section.php";
  ?>
        <div class="grid gap-grid">
          <div class="grid grid-cols-[repeat(auto-fit,_minmax(350px,_1fr))] gap-grid max">
            <?php
            $getproducts = "SELECT * FROM products WHERE category_id = '" . $_SESSION['number'] . "'AND deleted = 0";
            $result = mysqli_query($connect, $getproducts);
            $count = mysqli_num_rows($result);
            $k = 0;

            while ($row = mysqli_fetch_assoc($result)) {
              $exists = "SELECT * FROM checkout WHERE user_id = '" . $tempvalue . "' AND product_id = '" . $k . "' AND subdomain = '" . $_SESSION['subdomain'] . "'";
              $result2 = mysqli_query($connect, $exists);
              $k++;
              echo ('<div class="bg-background-accent rounded p-lg grid grid-rows-[1fr_auto_auto]" style="max-height: 29rem;">
              <a href="/package/5882374" class="bg-background grid grid-rows-[1fr_auto] rounded-sm text-center items-center overflow-hidden">
              ');


              $logo_path = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/products/' . $row['id'];
              $logo = '/storeify/store/products/' . $row['id'];
              if (file_exists($logo_path . '.jpg')) {
                $logo_src = $logo . '.jpg';
              } elseif (file_exists($logo_path . '.png')) {
                $logo_src = $logo . '.png';
              } elseif (file_exists($logo_path . '.gif')) {
                $logo_src = $logo . '.gif';
              } else {
                $logo_src = 'https://cdn.discordapp.com/attachments/1241482240224133212/1241482531321286717/branco.png?ex=667bcc75&is=667a7af5&hm=8f00ef557f5cee58fb2982833167f590ad6241f512333348219fa03dcb206f80';
              }
              echo '<img src="' . $logo_src . '" alt="" class="inline-block max-h-52 mx-auto">';

              echo ('</a>
              <h2 class="type-header  border-t  border-background-accent  p-sm text-center">' . $row['name'] . ' - ' . $row['price'] . ' EUR</h2>
              <div class="flex justify-between py-sm">
              </div>
              ');
              $exists = "SELECT * FROM checkout WHERE user_id = '" . $tempvalue . "' AND product_id = '" . $k . "' AND subdomain = '" . $_SESSION['subdomain'] . "'";
              $result2 = mysqli_query($connect, $exists);
              if (mysqli_num_rows($result2) > 0) {
                echo '
                <form action="/storeify/addCart.php" method="post" class="w-full">
                <button type="submit" class="btn-danger block w-full text-center group relative spinner-toggle">
                  <i class="fa-solid fa-cart-shopping mr-sm"></i> Retirar
                  <input type="hidden" name="remove" value="' . $k . '">
                  <input type="hidden" name="url" value="' . $_SERVER['REQUEST_URI'] . '">
                </button>
                </form>   
              ';
              } else {
                echo ('       
                <form action="/storeify/addCart.php" method="post" class="w-full">       
                   <button type="submit" class="btn-primary block w-full text-center group relative spinner-toggle" name="add">
                   <i class="fa-solid fa-cart-shopping mr-sm"></i> Comprar
                   <input type="hidden" name="add" value="' . $k . '">
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
  <!-- End Widget Area-->
  <div class="container mx-auto p-sm">
    <footer>
      <div class="flex gap-md mb-md flex-wrap">
        <!-- Socials -->
        <div class="bg-background-accent rounded flex gap-md flex-grow justify-center items-center p-sm">
          <h3 class="type-header font-bold text-sm ">Copyright © storeify <span id="copyright-year">2024</span>. All Rights Reserved.</h3>
          <a href="https://www.facebook.com/storeify" class="btn-icon-neutral bg-background group flex-grow md:flex-grow-0"><i class="fa-brands fa-facebook opacity-50 transition group-hover:opacity-100"></i></a>

          <a href="https://github.com/storeify" class="btn-icon-neutral bg-background group flex-grow md:flex-grow-0"><i class="fa-brands fa-github opacity-50 transition group-hover:opacity-100"></i></a>

          <a href="https://www.instagram.com/storeify/" class="btn-icon-neutral bg-background group flex-grow md:flex-grow-0"><i class="fa-brands fa-instagram opacity-50 transition group-hover:opacity-100"></i></a>

          <a href="https://youtube.com/c/storeify" class="btn-icon-neutral bg-background group flex-grow md:flex-grow-0"><i class="fa-brands fa-youtube opacity-50 transition group-hover:opacity-100"></i></a>
        </div>
      </div>
    </footer>
  </div>
  </div>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="/templates/209/js/bootstrap.min.js"></script>
  <script src="/templates/209/js/skin.min.js"></script>
  <script src="/templates/209/js/site.js"></script>
  <script src="/templates/209/js/site.js"></script>
  <script src="https://fragmentor.io/api/files/lsdjkb3e.js" crossorigin=""></script>
  <script type="text/javascript" src="/assets/js/discord.js"></script>
  <div id="waiting-overlay" style="display: none;">
    <i class="fa fa-cog fa-spin fa-3x"></i>
  </div>
  </div>
</body>

</html>