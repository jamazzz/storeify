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

  <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/475404516469243935/1235369292724179044/branco.png?ex=66716c8f&is=66701b0f&hm=6b6814d365d821c11667fcc90cf8665e96702ee59e73a610ced07aedeeedaee6&">
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
  <div class="container mx-auto p-sm">
    <div class="lg:col-span-full">


      <header class="grid gap-md ">
        <div class="flex flex-wrap justify-evenly items-center gap-md">
          <a href="/" class="max-h-64 block mx-auto order-3 col-span-2 w-full lg:w-auto lg:order-2 lg:mx-0">
            <img src="https://cdn.discordapp.com/attachments/475404516469243935/1235369292724179044/branco.png?ex=66716c8f&is=66701b0f&hm=6b6814d365d821c11667fcc90cf8665e96702ee59e73a610ced07aedeeedaee6&" alt="storeify Logo" class="max-h-64 max-w-full lg:max-w-[350px] block mx-auto">
          </a>
        </div>
      </header>
    </div>
    <div>
      <div class="grid gap-grid">
        <div>
          <?php
          include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
          $subdomain = strtok($_SERVER['HTTP_HOST'], '.');
          if (preg_match('/\/category\/([0-9]+)$/', $_SERVER['REQUEST_URI'], $matches)) {
            $number = $matches[1];
          }

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

          $select2 = "SELECT categories.id FROM categories INNER JOIN websites ON categories.website_id = websites.id WHERE websites.subdomain = '" . $subdomain . "'";
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

          <!-- Start Section Area-->
          <div class="hidden lg:block">
            <nav class="p-sm bg-background-accent rounded">
              <ul class="grid gap-sm lg:flex lg:justify-center">
                <?php
                $selectcat = "SELECT * FROM categories INNER JOIN websites ON categories.website_id = websites.id WHERE websites.subdomain = '" . $subdomain . "'";
                $resultcat = mysqli_query($connect, $selectcat);
                echo ('
                      <li>
                        <a href="' . '/storeify/website' . '" class="type-header cursor-pointer w-full group dropdown-toggle data-[dropdown=open]:rounded-b-none justify-center btn-neutral shadow-none border-transparent transition hover:bg-background data-[dropdown=open]:bg-background lg:data-[dropdown=open]:rounded-btn">
                          ' . "Home" . '
                        </a>
                      </li>'
                );
                while ($rowcat = mysqli_fetch_assoc($resultcat)) {
                  if ($rowcat['id'] != $number) {
                    echo ('  
                          <li>
                              <a href="/storeify/category/" class="type-header cursor-pointer w-full group dropdown-toggle data-[dropdown=open]:rounded-b-none justify-center btn-neutral shadow-none border-transparent transition hover:bg-background data-[dropdown=open]:bg-background lg:data-[dropdown=open]:rounded-btn">
                                ' . $rowcat['name'] . '
                              </a>
                          </li>
                        ');
                  } else {
                    echo ('  
                          <li>
                            <a href="/storeify/category/" class="type-header cursor-pointer group justify-center btn-primary">
                              ' . $rowcat['name'] . '
                            </a>
                          </li>
                        ');
                  }
                }
                ?>
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
        <div class="lg:hidden block">


          <div class="flex items-center justify-between ">
            <div class="fixed top-0 bottom-0 left-0 right-0 h-[100vh] w-[100vw] bg-[rgba(0,0,0,.3)] z-50 backdrop-blur-sm text-foreground hidden overflow-y-auto overflow-x-hidden sidebar sidebar-backdrop" role="basket">
              <div class="absolute lg:max-w-[1024px] lg:min-w-[350px] min-w-[90vw] max-w-[90vw] right-0 h-[100vh] hidden translate-x-full transition sidebar-container">
                <div class="bg-background-accent grid grid-rows-[auto_1fr] h-full lg:min-w-[540px]">
                  <div class="flex justify-between p-grid border-b border-background items-center gap-grid">
                    <a href="/login" class="flex items-center gap-md h-12 group pr-lg">
                      <div class="text-left">
                        <small class="text-foreground-accent opacity-50 block group-hover:hidden">Logged out</small>
                        <small class="text-success hidden group-hover:block">Sign in</small>
                        <h3 class="leading-none type-header block">Guest</h3>
                      </div>
                    </a>
                  </div>
                  <div class="grid grid-rows-[auto_1fr_auto] overflow-y-auto">
                    <div class="p-grid pb-0 flex items-center justify-between">
                      <h1 class="type-header text-foreground">Your cart</h1>
                      <small class="px-btn py-btn-sm rounded-btn bg-background type-subtitle text-foreground-accent text-opacity-50">

                        Empty

                      </small>
                    </div>
                    <div>
                      <div class="p-grid grid gap-grid">
                      </div>
                    </div>
                    <div class="p-grid border-t border-t-background">
                      <div class="flex justify-between items-center mb-md">
                        <h2 class="type-header text-opacity-50 text-foreground-accent">Order total</h2>
                        <h2 class="type-header">0 EUR</h2>
                      </div>
                      <a href="/checkout/basket" class="btn-primary w-full spinner-toggle"><i class="fa-solid fa-cart-shopping mr-sm"></i>Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="grid gap-grid">
          <div>
          </div>
          <div class="grid grid-cols-[repeat(auto-fit,_minmax(350px,_1fr))] gap-grid max">
            <?php
            $getproducts = "SELECT * FROM products WHERE category_id = '" . $number . "'";
            $result = mysqli_query($connect, $getproducts);
            $count = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
              echo ('<div class="bg-background-accent rounded p-lg grid grid-rows-[1fr_auto_auto]" style="max-height: 29rem;">
              <a href="/package/5882374" class="bg-background grid grid-rows-[1fr_auto] rounded-sm text-center items-center overflow-hidden">
              ');
              if (!file_exists('/storeify/store/' . $subdomain . ' /img/' . $row['id'] . '.png')) {
                echo ('<img src="https://cdn.discordapp.com/attachments/475404516469243935/1235369292724179044/branco.png?ex=66716c8f&is=66701b0f&hm=6b6814d365d821c11667fcc90cf8665e96702ee59e73a610ced07aedeeedaee6&" class="inline-block max-h-52 mx-auto">');
              } else {
                echo ('<img src="/storeify/store/' . $subdomain . ' /img/' . $row['id'] . '" class="inline-block max-h-52 mx-auto">');
              }
              echo ('</a>
              <h2 class="type-header  border-t  border-background-accent  p-sm text-center">' . $row['name'] . ' - ' . $row['price'] . ' EUR</h2>
              <div class="flex justify-between py-sm">
              </div>
              <a href="/checkout/packages/add/5882374/single" class="btn-primary block w-full text-center group relative spinner-toggle">
                <i class="fa-solid fa-cart-shopping mr-sm"></i>Comprar
              </a>
            </div>');
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


      <div class="flex items-center justify-between ">
        <a href="/login" class="flex items-center gap-md h-12 group pr-lg">
        </a>
        <div class="flex gap-md">
          <div class="relative group">
            <div class="fixed top-0 bottom-0 left-0 right-0 h-[100vh] w-[100vw] bg-[rgba(0,0,0,.3)] z-50 backdrop-blur-sm text-foreground hidden overflow-y-auto overflow-x-hidden sidebar sidebar-backdrop" role="basket">
              <div class="absolute lg:max-w-[1024px] lg:min-w-[350px] min-w-[90vw] max-w-[90vw] right-0 h-[100vh] hidden translate-x-full transition sidebar-container">
                <div class="bg-background-accent grid grid-rows-[auto_1fr] h-full lg:min-w-[540px]">
                  <div class="flex justify-between p-grid border-b border-background items-center gap-grid">
                    <div class="flex gap-md">
                      <button class="btn-icon-neutral bg-background group sidebar-close"><i class="fa-solid fa-xmark transition opacity-50 group-hover:opacity-100"></i></button>
                    </div>
                  </div>
                  <div class="grid grid-rows-[auto_1fr_auto] overflow-y-auto">
                    <div>
                      <div class="p-grid grid gap-grid">
                      </div>
                    </div>
                    <div class="p-grid border-t border-t-background">
                      <div class="flex justify-between items-center mb-md">
                        <h2 class="type-header text-opacity-50 text-foreground-accent">Order total</h2>
                        <h2 class="type-header">0 EUR</h2>
                      </div>
                      <a href="/checkout/basket" class="btn-primary w-full spinner-toggle"><i class="fa-solid fa-cart-shopping mr-sm"></i>Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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