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

  <link rel="shortcut icon" href="/storeify/assets/images/favicon.png" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link href="template.css" rel="stylesheet">

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
            <img src="https://cdn.discordapp.com/attachments/1241482240224133212/1241482531321286717/branco.png?ex=667a7af5&is=66792975&hm=b23cbaf09497dda445a50387958a9c7e9bce8b96168810aae21147257f515aec&" alt="storeify Logo" class="max-h-64 max-w-full lg:max-w-[350px] block mx-auto">
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
                include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
                $subdomain = strtok($_SERVER['HTTP_HOST'], '.');

                $selectcat = "SELECT * FROM categories INNER JOIN websites ON categories.website_id = websites.id WHERE websites.subdomain = '" . $subdomain . "'";
                $resultcat = mysqli_query($connect, $selectcat);
                $number = -1;
                if (isset($number)) {
                  echo ('                   
                      <li>
                        <a href="' . '/storeify/website' . '" class="type-header cursor-pointer group justify-center btn-primary">
                          ' . "Home" . '
                        </a>
                      </li>'
                  );
                }
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

                        <!-- Redirect Section -->

                        <li>
                          <a href="/" class="type-header cursor-pointer group justify-center btn-primary">
                            Home
                          </a>
                        </li>

                        <!-- Section with dropdown -->

                        <li class="relative ">
                          <button class="type-header cursor-pointer w-full group dropdown-toggle data-[dropdown=open]:rounded-b-none justify-center btn-neutral shadow-none border-transparent transition hover:bg-background data-[dropdown=open]:bg-background lg:data-[dropdown=open]:rounded-btn" data-dropdown="close">
                            <span class="pr-sm">QBCORE</span>
                            <i class="fa-solid fa-caret-down fa-fw opacity-50  transition group-hover:opacity-100 group-data-[dropdown=open]:rotate-180"></i>
                          </button>
                          <ul class="dropdown-menu grid gap-xs relative w-full shadow-none rounded-btn rounded-t-none border-t max-w-full transition border-background-accent lg:w-[350px] lg:max-w-[500px] lg:absolute lg:rounded-btn lg:border-none lg:translate-y-2 lg:shadow-lg lg:shadow-[rgba(0,0,0,.3)]" style="display:none;">

                            <!-- Dropdown part -->

                            <li class="group">
                              <a href="/category/free-1" class="type-header py-sm px-sm transition rounded-btn block w-full hover:bg-background-accent">
                                FREE
                              </a>
                            </li>

                          </ul>
                        </li>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="lg:hidden block">
        </div>
      </div>
      <div>


        <div>
          <div class="bg-background-accent p-lg border-b border-background rounded-t flex items-center gap-grid justify-center text-center">
            <div>
              <h2 class="type-subtitle text-sm text-primary">Welcome to</h2>
              <h1 class="type-header">storeify</h1>
              <small class="type-subtitle text-sm text-foreground-accent text-opacity-50">
                <i class="fa-solid fa-house mr-xs"></i>Home

              </small>
            </div>
          </div>
          <?php
          //   echo('
          //   <div class="markdown bg-background-accent rounded-b p-lg">
          //     <p style="text-align:center;"><strong><span style="font-size:18px;color:rgb(44,130,201);font-family:Verdana, Geneva, sans-serif;">About Us</span></strong></p>
          //     <p style="text-align:center;"><span style="font-family:Verdana, Geneva, sans-serif;"><span style="font-size:14px;">We are a community with more than <strong>8000</strong> members on our discord and our commitment is to bring the best scripts to your servers!</span></span></p>
          //     <p style="text-align:center;"><span style="font-family:Verdana, Geneva, sans-serif;"><span style="font-size:14px;">You are free to choose any script to improve your server</span></span></p>
          //     <p style="text-align:center;"><span style="font-family:Verdana, Geneva, sans-serif;"><span style="font-size:14px;">You will find scripts for ESX &amp; QBCore frameworks</span></span></p>
          //     <p style="text-align:center;"><br></p>
          //     <p style="text-align:center;"><span style="font-family:Verdana, Geneva, sans-serif;"><span style="font-size:18px;"><strong><span style="color:rgb(44,130,201);">FiveM Escrow System</span></strong></span></span></p>
          //     <p style="text-align:center;"><span style="font-family:Verdana, Geneva, sans-serif;"><span style="font-size:14px;">All our scripts are encrypted and protected by the FiveM Escrow System</span></span></p>
          //     <p style="text-align:center;"><br></p>
          //     <p style="text-align:center;"><span style="font-family:Verdana, Geneva, sans-serif;"><span style="font-size:18px;"><strong><span style="color:rgb(44,130,201);">Updates</span></strong></span></span></p>
          //     <p style="text-align:center;"><span style="font-family:Verdana, Geneva, sans-serif;"><span style="font-size:14px;">All our scripts receive daily updates</span></span></p>
          //     <p style="text-align:center;"><br></p>
          //     <p style="text-align:center;"><span style="font-family:Verdana, Geneva, sans-serif;"><span style="font-size:18px;"><strong><span style="color:rgb(44,130,201);">Useful Links</span></strong></span><span style="color:rgb(44,130,201);"><span style="font-size:14px;"><br></span></span></span></p>
          //     <p style="text-align:center;"><span style="font-family:Verdana, Geneva, sans-serif;"><span style="font-size:14px;"><a href="https://discord.gg/marcinhu">Discord</a></span></span></p>
          //     <p style="text-align:center;"><span style="font-family:Verdana, Geneva, sans-serif;"><span style="font-size:14px;"><a href="https://youtube.com/c/marcinhu">Youtube</a></span></span></p>
          //     <p style="text-align:center;"><a href="https://storeify.gitbook.io/docs/" target="_blank" rel="noreferrer noopener"><span style="font-family:Verdana, Geneva, sans-serif;font-size:14px;">Documentation</span></a></p>
          //   </div>
          // </div>');
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