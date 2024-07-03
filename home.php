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
  $_SESSION['subdomain'] = strtok($_SERVER['HTTP_HOST'], '.');
  ?>
  <div>


    <div>
      <div class="bg-background-accent p-lg border-b border-background rounded flex items-center gap-grid justify-center text-center">
        <div>
          <h2 class="type-subtitle text-sm text-primary">Welcome to</h2>
          <h1 class="type-header">storeify</h1>
          <small class="type-subtitle text-sm text-foreground-accent text-opacity-50">
            <i class="fa-solid fa-house mr-xs"></i>Home

          </small>
        </div>
      </div>
      <br>
      <?php
      echo ('
         <div class="markdown bg-background-accent rounded p-lg">
         '.empty($row['home_info_html']) ? '' : $row['home_info_html'].'
       </div>');
      ?>


      <section class="bg-background-accent rounded p-lg mt-grid">
        <h1 class="type-header block mb-lg text-center">Testimonials</h1>
        <div class="mb-lg flex items-center gap-md justify-center">
          <div>
            <!-- Stars -->
            <div>
              <i class="fa-solid fa-star fa-fw text-primary"></i>
              <i class="fa-solid fa-star fa-fw text-primary"></i>
              <i class="fa-solid fa-star fa-fw text-primary"></i>
              <i class="fa-solid fa-star fa-fw text-primary"></i>
              <i class="fa-solid fa-star fa-fw text-primary"></i>
            </div>
            <!-- Stars -->
            <p class="text-foreground-accent">From 6 reviews</p>
          </div>
        </div>
        <div class="flex flex-wrap gap-grid">
          <!--  -->
          <div class="bg-background rounded p-lg grid flex-[1_1_300px] grid-rows-[auto_1fr]">
            <div class="flex items-center">
              <h3 class="type-header block leading-none">hzrdd.</h3>
              <br>
            </div>
            <div>
              <div class="mb-md">
                <i class="fa-solid fa-star fa-fw text-primary"></i>
                <i class="fa-solid fa-star fa-fw text-primary"></i>
                <i class="fa-solid fa-star fa-fw text-primary"></i>
                <i class="fa-solid fa-star fa-fw text-primary"></i>
                <i class="fa-solid fa-star fa-fw text-primary"></i>
              </div>
              <p class="type-paragraph text-foreground-accent">M-Blackmarket &amp; M-Drugs, very high quality scripts and when I had a issue with something the staff team was quick to help me fix the problem and get everything working again. Highly recommend</p>
            </div>
          </div>
          <!--  -->
        </div>
      </section>
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
        <div class="bg-background-accent rounded flex gap-md flex-grow justify-start items-center p-sm">
          <h3 class="type-header font-bold text-sm ">Copyright © storeify <span id="copyright-year">2024</span>. All Rights Reserved.</h3>
          <a href="https://www.facebook.com/marcinhuScripts" class="btn-icon-neutral bg-background group flex-grow md:flex-grow-0"><i class="fa-brands fa-facebook opacity-50 transition group-hover:opacity-100"></i></a>

          <a href="https://github.com/marcinhuu" class="btn-icon-neutral bg-background group flex-grow md:flex-grow-0"><i class="fa-brands fa-github opacity-50 transition group-hover:opacity-100"></i></a>

          <a href="https://www.instagram.com/marcinhu.scripts/" class="btn-icon-neutral bg-background group flex-grow md:flex-grow-0"><i class="fa-brands fa-instagram opacity-50 transition group-hover:opacity-100"></i></a>

          <a href="https://youtube.com/c/marcinhu" class="btn-icon-neutral bg-background group flex-grow md:flex-grow-0"><i class="fa-brands fa-youtube opacity-50 transition group-hover:opacity-100"></i></a>
        </div>
      </div>
    </footer>
  </div>
  </div>
  </div>

  <div class="fixed top-0 bottom-0 left-0 right-0 h-[100vh] w-[100vw] bg-[rgba(0,0,0,.3)] z-50 backdrop-blur-sm text-foreground hidden overflow-y-auto overflow-x-hidden modal modal-backdrop" role="remote">
    <div class="absolute xl:max-w-[1200px] xl:min-w-[960px] min-w-full max-w-full -translate-x-1/2 lg:top-[10vh] left-1/2 p-sm hidden modal-container">
    </div>
  </div>

  <div class="fixed top-0 bottom-0 left-0 right-0 h-[100vh] w-[100vw] bg-[rgba(0,0,0,.3)] z-50 backdrop-blur-sm text-foreground hidden overflow-y-auto overflow-x-hidden sidebar sidebar-backdrop" role="remote">
    <div class="absolute lg:max-w-[1024px] lg:min-w-[350px] min-w-[90vw] max-w-[90vw] right-0 h-[100vh] hidden translate-x-full transition sidebar-container">
    </div>
  </div>

  <div class="notification">

  </div>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="/templates/209/js/bootstrap.min.js"></script>
  <script src="/templates/209/js/skin.min.js"></script>
  <script src="/templates/209/js/site.js"></script>
  <script src="/templates/209/js/site.js"></script>
  <script src="https://fragmentor.io/api/files/lsdjkb3e.js" crossorigin=""></script>
  <div id="waiting-overlay" style="display: none;">
    <i class="fa fa-cog fa-spin fa-3x"></i>
  </div>
  </div>
</body>

</html>