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
  $subdomain = strtok($_SERVER['HTTP_HOST'], '.');
  if (preg_match('/\/category\/([0-9]+)$/', $_SERVER['REQUEST_URI'], $matches)) {
    $number = $matches[1];
  }
  $tempvalue = 1;

  $select = "SELECT * FROM websites WHERE subdomain = '" . $subdomain . "'";
  $result = mysqli_query($connect, $select);
  $row = mysqli_fetch_assoc($result);
  if (!mysqli_num_rows($result) == 1 || $_SERVER['HTTP_HOST'] == "localhost") {
    header('Location: /storeify/404.php');
    exit();
  }

  if ($_SERVER['HTTP_HOST'] == "localhost") {
    header('Location: /storeify/404.php');
    exit();
  }

  $select2 = "SELECT categories.id,logo FROM categories INNER JOIN websites ON categories.website_id = websites.id WHERE websites.subdomain = '" . $subdomain . "'";
  $result2 = mysqli_query($connect, $select2);
  if (!mysqli_num_rows($result2) > 0) {
    header('Location: /storeify/404.php');
    exit();
  }

  $found = false;
  while ($row2 = mysqli_fetch_assoc($result2)) {
    if ($row2['id'] == $number) {
      $found = true;
      break;
    }
  }
  if (!$found) {
    header('Location: /storeify/404.php');
    exit();
  }
  ?>
  <div class="container mx-auto p-sm">
    <div class="lg:col-span-full">


      <header class="grid gap-md ">
        <div class="flex flex-wrap justify-evenly items-center gap-md">
          <a href="/" class="max-h-64 block mx-auto order-3 col-span-2 w-full lg:w-auto lg:order-2 lg:mx-0">
            <img src="<?php echo $row2['logo']; ?>" alt="" class="max-h-64 max-w-full lg:max-w-[350px] block mx-auto">
          </a>
        </div>
      </header>
    </div>
    <div>
      <div class="grid gap-grid">
        <div>
          <!-- Start Section Area-->
          <div class="hidden lg:block">
            <nav class="p-sm bg-background-accent rounded">
              <ul class="grid gap-sm lg:flex lg:justify-center">
                <?php
                $selectcat = "SELECT categories.name,categories.id FROM categories INNER JOIN websites ON categories.website_id = websites.id WHERE websites.subdomain = '" . $subdomain . "'";
                $resultcat = mysqli_query($connect, $selectcat);
                echo ('
                      <li>
                        <a href="' . '/storeify/website' . '" class="type-header cursor-pointer w-full group dropdown-toggle data-[dropdown=open]:rounded-b-none justify-center btn-neutral shadow-none border-transparent transition hover:bg-background data-[dropdown=open]:bg-background lg:data-[dropdown=open]:rounded-btn">
                          ' . "Home" . '
                        </a>
                      </li>'
                );
                while ($rowcat = mysqli_fetch_assoc($resultcat)) {
                  $url = "http://" . $subdomain . ".localhost/storeify/category/" . $rowcat['id'];
                  if ($rowcat['id'] != $number) {
                    echo '
                          <li>
                              <a href="' . $url . '" class="type-header cursor-pointer w-full group dropdown-toggle data-[dropdown=open]:rounded-b-none justify-center btn-neutral shadow-none border-transparent transition hover:bg-background data-[dropdown=open]:bg-background lg:data-[dropdown=open]:rounded-btn">
                                  ' . $rowcat['name'] . '
                              </a>
                          </li>
                      ';
                  } else {
                    echo '
                          <li> 
                              <a href="' . $url . '" class="type-header cursor-pointer group justify-center btn-primary">
                                  ' . $rowcat['name'] . '
                              </a>
                          </li>
                      ';
                  }
                }
                ?>
                <li class="flex justify-end items-center gap-md h-12 group pr-lg ml-auto">
                  <a href="http://localhost/storeify/loginClient" class="flex justify-end items-center gap-md h-12 group pr-lg">
                    <div class="text-left justify-end">
                      <small class="text-foreground-accent opacity-50 block group-hover:hidden justify-end">Logged out</small>
                      <small class="text-success hidden group-hover:block justify-end">Sign in</small>
                      <h3 class="leading-none type-header block justify-end">Guest</h3>
                    </div>
                  </a>
                </li>
                <button class="btn-icon-primary sidebar-toggle" onclick="toggleBasket()">
                  <i class="fa-solid fa-cart-shopping"></i>

                </button>
                <script>
                  function toggleBasket() {
                    var basket = document.getElementById('basket');
                    if (basket.style.display === 'block') {
                      basket.style.display = 'none';
                    } else {
                      basket.style.display = 'block';
                    }
                  }
                  document.addEventListener('keydown', function(event) {
                    if (event.key === "Escape") {
                      var basket = document.getElementById('basket');
                      if (basket.style.display === 'block') {
                        toggleBasket();
                      }
                    }
                  });
                </script>
                <div id="basket" class="fixed top-0 bottom-0 left-0 right-0 h-[100vh] w-[100vw] bg-[rgba(0,0,0,.3)] z-50 backdrop-blur-sm text-foreground hidden overflow-y-auto overflow-x-hidden sidebar sidebar-backdrop" role="basket" style="display: none">
                  <div class="absolute lg:max-w-[1024px] lg:min-w-[350px] min-w-[90vw] max-w-[90vw] right-0 h-[100vh] hidden translate-x-full transition sidebar-container" style="display: block; transform: translateX(0px)">
                    <div class="bg-background-accent grid grid-rows-[auto_1fr] h-full lg:min-w-[540px]">
                      <div class="flex justify-between p-grid border-b border-background items-center gap-grid">
                        <a href="http://localhost/storeify/loginClient" class="flex items-center gap-md h-12 group pr-lg">
                          <div class="text-left">
                            <small class="text-foreground-accent opacity-50 block group-hover:hidden">Logged out</small>
                            <small class="text-success hidden group-hover:block">Sign in</small>
                            <h3 class="leading-none type-header block">
                              Guest
                            </h3>
                          </div>
                        </a>
                        <div class="flex gap-md">
                          <button class="btn-icon-neutral bg-background group sidebar-close" onclick="toggleBasket()">
                            <i class="fa-solid fa-xmark transition opacity-50 group-hover:opacity-100"></i>
                          </button>
                        </div>
                      </div>
                      <div class="grid grid-rows-[auto_1fr_auto] overflow-y-auto">
                        <div class="p-grid items-center justify-between">
                          <?php
                          $_SESSION['subtotal'] = 0;
                          $select = "SELECT c.product_id, p.* FROM checkout c JOIN products p ON c.product_id = p.id WHERE c.subdomain = '" . $subdomain . "' AND c.user_id = '" . $tempvalue . "'AND p.deleted = '0'";
                          $result = mysqli_query($connect, $select);
                          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                          if (empty($rows)) {
                            echo ('
                                <div class="p-grid pb-0 flex items-center justify-between">
                                  <h1 class="type-header text-foreground">Your cart</h1>
                                  <small class="px-btn py-btn-sm rounded-btn bg-background type-subtitle text-foreground-accent text-opacity-50">

                                    Empty

                                  </small>
                                </div>
                            ');
                          } else {
                            foreach ($rows as $row) {
                              $_SESSION['subtotal'] = $_SESSION['subtotal'] + $row['price'];
                              echo (' 
                          <div class="grid grid-cols-[5rem_1fr] bg-background gap-sm" style="border-radius: 10px;">
                            <div class="rounded bg-background h-[5rem] flex justify-center items-center">
                              <img src="//dunb17ur4ymx4.cloudfront.net/packages/images/c2f74d4741f3da09d0caa8867fd98790541d3e16.png" class="inline-block max-h-[5rem]" style="margin-top:50px; margin-left: 50px;">
                            </div>
                            <div>
                              <br>
                              <h2 class="type-header" style="margin-top:10px; margin-left: 30px;">' . $row['name'] . '</h2>
                              <div class="flex gap-md mb-sm">
                              <h3 class="font-subtitle text-foreground-accent text-opacity-50 text-sm mb-sm" style="margin-top:9; margin-left: 26px;">' . round($row['price'] * 1.23, 2) . 'EUR</h3>
                                <div style="margin-left: 200px;"></div>
                                <form action="/storeify/addCart.php" method="post" class="w-full">
                                  <button type="submit" class="text-center">
                                    <a class="object-center btn-neutral bg-background rounded-btn py-xs px-sm group spinner-toggle"><i class="fa-solid fa-trash-can opacity-50 transition group-hover:opacity-100"></i></a>
                                    <input type="hidden" name="remove" value="' . $row['product_id'] . '">
                                    <input type="hidden" name="url" value="' . $_SERVER['REQUEST_URI'] . '">
                                  </button>
                                </form>
                                </div></div>
                          </div>
                          <br>');
                            }
                            $_SESSION['taxes'] = round($_SESSION['subtotal'] * 0.23, 2);
                            $_SESSION['total'] = round($_SESSION['subtotal'] + $_SESSION['taxes'], 2);
                          }
                          ?>
                        </div>
                        <div>
                          <div class="p-grid grid gap-grid"></div>
                        </div>
                        <div class="p-grid border-t border-t-background">
                          <div class="flex justify-between items-center mb-md">
                            <h2 class="type-header text-opacity-50 text-foreground-accent">
                              Order total
                            </h2>
                            <h2 class="type-header"><?php echo ($_SESSION['total']); ?></h2>
                          </div>
                          <a href="/storeify/checkout.php" class="btn-primary w-full spinner-toggle"><i class="fa-solid fa-cart-shopping mr-sm"></i>Checkout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </ul>
            </nav>

          </div>
          <!-- End Section Area-->

          <!-- Start Mobile Section Area-->
          <div class="block lg:hidden p-sm bg-background-accent rounded">
            <button class="btn-neutral bg-background group block w-full justify-center sidebar-toggle" data-toggle="navigation">
              Menu
            </button>
            <div class="sidebar sidebar-backdrop" role="navigation">
              <div class="sidebar-container">
                <div class="bg-background-accent grid grid-rows-[auto_1fr] h-full lg:min-w-[540px]">
                  <div class="flex justify-between p-grid border-b border-background items-center">
                    <div>
                      <h2 class="type-header text-2xl">Navigation Menu</h2>
                    </div>
                    <button class="btn-icon-neutral bg-background group sidebar-close"><i class="fa-solid fa-xmark transition opacity-50 group-hover:opacity-100"></i></button>
                  </div>
                  <div class="overflow-y-auto ">
                    <nav class="p-sm bg-background-accent rounded">
                      <ul class="grid gap-sm lg:flex lg:justify-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Mobile Section Area-->
        <div class="grid gap-grid">
          <div>
          </div>
          <div class="grid grid-cols-[repeat(auto-fit,_minmax(350px,_1fr))] gap-grid max">
            <?php
            $getproducts = "SELECT * FROM products WHERE category_id = '" . $number . "'AND deleted = 0";
            $result = mysqli_query($connect, $getproducts);
            $count = mysqli_num_rows($result);
            $k = 0;

            while ($row = mysqli_fetch_assoc($result)) {
              $exists = "SELECT * FROM checkout WHERE user_id = '" . $tempvalue . "' AND product_id = '" . $k . "' AND subdomain = '" . $subdomain . "'";
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
              $exists = "SELECT * FROM checkout WHERE user_id = '" . $tempvalue . "' AND product_id = '" . $k . "' AND subdomain = '" . $subdomain . "'";
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