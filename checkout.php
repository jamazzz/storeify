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
                $_SESSION['subdomain'] = strtok($_SERVER['HTTP_HOST'], '.');

                $selectcat = "SELECT * FROM categories INNER JOIN websites ON categories.website_id = websites.id WHERE websites.subdomain = '" . $_SESSION['subdomain'] . "'";
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
          <br><br>
          <div class="grid xl:grid-cols-[2fr_1fr] gap-grid">

            <div>


              <div>
                <div class="bg-background-accent p-lg border-b border-background rounded-t flex items-center gap-grid justify-center text-center">
                  <div>
                    <h1 class="type-header">Your cart</h1>
                  </div>
                  <?php
                  $emptycart = 0;
                  $_SESSION['tempvalue'] = 1;
                  $select = "SELECT c.product_id, p.* FROM checkout c JOIN products p ON c.product_id = p.id WHERE c.subdomain = '" . $_SESSION['subdomain'] . "' AND c.user_id = '" . $_SESSION['tempvalue'] . "'AND p.deleted = '0'";
                  $resultproducts = mysqli_query($connect, $select);
                  $totalrow = 0;
                  if ($resultproducts) {
                    $rows = [];
                    while ($row = mysqli_fetch_assoc($resultproducts)) {
                      $totalrow++;
                      $rows[] = $row;
                    }
                    if ($totalrow > 0) {
                      $product_id = $rows[0]['product_id'];
                    } else {
                      $emptycart = 1;
                    }
                  } else {
                    echo 'Error executing checkout query: ' . mysqli_error($connect);
                  }
                  if ($emptycart != 1) {
                    echo ('<small class="px-btn py-btn-sm rounded-btn bg-background type-subtitle text-foreground-accent text-opacity-50"> ' . $totalrow . ' item </small>');
                  }
                  ?>
                </div>
                <div class=" bg-background-accent rounded-b p-lg">
                  <div>
                    <div class="grid gap-md">
                      <!--  -->
                      <?php
                      $_SESSION['subtotal'] = 0;
                      $_SESSION['table'] = [];
                      foreach ($rows as $row) {
                        $_SESSION['subtotal'] = $_SESSION['subtotal'] + $row['price'];
                        $_SESSION['table'][] = [
                          'name' => $row['name'],
                          'product_id' => $row['product_id'],
                          'price' => $row['price']
                        ];
                        echo ('
                        <div class="bg-background rounded">
                            <div class="flex flex-wrap justify-between lg:grid grid-cols-[2fr_1fr_1fr] gap-md items-center p-sm pr-lg">
                                <div class="grid grid-cols-[4rem_1fr] items-center gap-md">
                                    <div class="rounded-sm bg-background-accent h-[4rem] flex justify-center items-center">
                                        <img src="https://cdn.discordapp.com/attachments/1241482240224133212/1241482531321286717/branco.png?ex=667a7af5&is=66792975&hm=b23cbaf09497dda445a50387958a9c7e9bce8b96168810aae21147257f515aec&" class="inline-block max-h-[5rem] mx-auto">
                                    </div>
                                    <div>
                                        <h2 class="type-header">' . $row['name'] . '</h2>
                                        <h3 class="font-subtitle text-foreground-accent text-opacity-50 text-sm">' . $row['price'] . ' EUR</h3>
                                    </div>
                                </div>
                                <div class="flex gap-sm">
                                    <a id="' . $row['product_id'] . '" class="btn-neutral bg-background-accent rounded-btn py-xs px-sm group spinner-toggle" onclick="removeItem(event)">
                                      <i class="fa-solid fa-trash-can opacity-50 transition group-hover:opacity-100"></i>
                                    </a>  
                                </div>
                                <h3 class="type-header text-right">' . round($row['price'] * 1.23, 2) . ' EUR</h3>
                            </div>
                        </div>
                        ');
                      }
                      if ($emptycart == 1) {
                        echo ('
                            <div class="flex flex-wrap justify-center text-center gap-md items-center p-sm pr-lg">
                              <h3 class="type-header">Your cart is empty</h3>
                            </div>
                        ');
                      }
                      $_SESSION['taxes'] = round($_SESSION['subtotal'] * 0.23, 2);
                      $_SESSION['total'] = round($_SESSION['subtotal'] + $_SESSION['taxes'], 2);
                      ?>
                      <script>
                        function removeItem(event) {
                          event.preventDefault();
                          const itemId = event.currentTarget.id;
                          const form = document.createElement('form');
                          form.method = 'post';
                          form.action = 'removeProduct.php';
                          const input = document.createElement('input');
                          input.type = 'hidden';
                          input.name = 'productId';
                          input.value = itemId;
                          form.appendChild(input);
                          const currentUrlInput = document.createElement('input');
                          currentUrlInput.type = 'hidden';
                          currentUrlInput.name = 'currentUrl';
                          currentUrlInput.value = window.location.href;
                          form.appendChild(currentUrlInput);
                          document.body.appendChild(form);
                          form.submit();
                        }
                      </script>
                      <!--  -->
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div>

              <?php if (!$emptycart == 1) { ?>
                <div>
                  <div class="bg-background-accent p-lg border-b border-background rounded-t flex items-center gap-grid justify-center text-center">
                    <div>
                      <h1 class="type-header">Summary</h1>
                    </div>
                  </div>
                  <div class=" bg-background-accent rounded-b p-lg">
                    <div>
                      <div class="flex flex-wrap justify-between">
                        <h4 class="type-paragraph text-foreground">Subtotal</h4>
                        <?php echo ('<p class="text-foreground-accent text-opacity-50">' . $_SESSION['subtotal'] . '</p>'); ?>
                      </div>
                      <div class="flex flex-wrap justify-between">
                        <h4 class="type-paragraph text-foreground">Sales Tax</h4>
                        <?php echo ('<p class="text-foreground-accent text-opacity-50">+ ' . $_SESSION['taxes'] . '</p>'); ?>
                      </div>
                      <div class="flex flex-wrap justify-between mt-md mb-lg">
                        <h3 class="text-paragraph font-bold text-foreground">Total</h3>
                        <?php echo ('<p class="text-foreground-accent text-opacity-50">' . $_SESSION['total'] . ' EUR</p>'); ?>
                      </div>
                      <br>
                      <?php require_once 'paypal/config.php';  ?>
                      <script src="https://www.paypal.com/sdk/js?client-id=<?php echo PAYPAL_SANDBOX ? PAYPAL_SANDBOX_CLIENT_ID : PAYPAL_PROD_CLIENT_ID; ?>&currency=EUR"></script>
                      <div class="panel-body">
                        <div id="paymentResponse" class="hidden"></div>
                        <div id="paypal-button-container"></div>
                      </div>
                    </div>
                    <script>
                      window.addEventListener('load', function() {
                        setTimeout(function() {
                          paypal.Buttons({
                            style: {
                              layout: 'vertical',
                              color: 'blue',
                              shape: 'pill',
                              label: 'paypal'
                            },
                            createOrder: (data, actions) => {
                              return actions.order.create({
                                "purchase_units": [{
                                  "amount": {
                                    "currency_code": "EUR",
                                    "value": "<?php echo $_SESSION['total']; ?>",
                                  },
                                }],
                                "application_context": {
                                  "shipping_preference": "NO_SHIPPING"
                                },
                              });
                            },

                            onApprove: (data, actions) => {
                              return actions.order.capture().then(function(details) {
                                const form = document.createElement('form');
                                form.method = 'post';
                                form.action = 'success.php';

                                const jsonInput = document.createElement('input');
                                jsonInput.type = 'hidden';
                                jsonInput.name = 'json';
                                jsonInput.value = JSON.stringify(details);
                                form.appendChild(jsonInput);

                                const currentUrlInput = document.createElement('input');
                                currentUrlInput.type = 'hidden';
                                currentUrlInput.name = 'currentUrl';
                                currentUrlInput.value = window.location.href;
                                form.appendChild(currentUrlInput);

                                document.body.appendChild(form);
                                form.submit();
                              });
                            },

                          }).render('#paypal-button-container');
                        }, 700);
                      });

                      function encodeFormData(data) {
                        var form_data = new FormData();
                        for (var key in data) {
                          form_data.append(key, data[key]);
                        }
                        return form_data;
                      }

                      function setProcessing(isProcessing) {
                        if (isProcessing) {
                          document.querySelector(".overlay").classList.remove("hidden");
                        } else {
                          document.querySelector(".overlay").classList.add("hidden");
                        }
                      }
                    </script>
                    <br>
                    <form method="post" action="/checkout/coupons/add" class="flex gap-md">
                      <input type="text" name="coupon" placeholder="Coupon Code" class="">
                      <button type="submit" class="btn-icon-primary spinner-toggle"><i class="fa-solid fa-circle-plus"></i></button>
                    </form>
                  </div>

                </div>
              <?php                   } else {
                echo ('
                  <div>
                  <div class="bg-background-accent p-lg border-b border-background rounded-t flex items-center gap-grid justify-center text-center">
                    <div>
                      <h1 class="type-header">Summary</h1>
                    </div>
                  </div>
                  <div class=" bg-background-accent rounded-b p-lg">
                            <div class="flex flex-wrap justify-center text-center gap-md items-center p-sm pr-lg">
                              <h3 class="type-header">Your cart is empty</h3>
                            </div>

                </div>
                  ');
              }
              ?>
            </div>
          </div>
        </div>
        <!-- End Widget Area-->
        <br><br>
        <div class="container mx-auto">
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