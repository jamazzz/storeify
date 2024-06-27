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
  ?>
  <div class="grid xl:grid-cols-[2fr_1fr] gap-grid">

    <div>


      <div>
        <div class="bg-background-accent p-lg border-b border-background rounded-t flex items-center gap-grid justify-center text-center">
          <div>
            <h1 class="type-header">Your cart</h1>
          </div>
          <?php
          $emptycart = 0;
          $select = "SELECT c.product_id, p.* FROM checkout c JOIN products p ON c.product_id = p.id WHERE c.subdomain = '" . $_SESSION['subdomain'] . "' AND c.user_id = '" . $_SESSION['clientid'] . "'AND p.deleted = '0'";
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
                                        <img src="/storeify/assets/images/logo.png" class="inline-block max-h-[5rem] mx-auto">
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
              if (!isset($_SESSION['clientid']) || $_SESSION['clientid'] == -1) {
                echo ('<div class="flex flex-wrap justify-center text-center gap-md items-center p-sm pr-lg">
                            <h3 class="type-header" href="/storeify/clientLogin.php" >Please login to continue</h3>
                        </div>');
              } else {
                if ($emptycart == 1) {
                  echo ('
                            <div class="flex flex-wrap justify-center text-center gap-md items-center p-sm pr-lg">
                              <h3 class="type-header">Your cart is empty</h3>
                            </div>
                        ');
                }
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
              <?php require_once 'config.php';  ?>
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
        if (!isset($_SESSION['clientid']) || $_SESSION['clientid'] == -1) {
          echo ('<div>
                  <div class="bg-background-accent p-lg border-b border-background rounded-t flex items-center gap-grid justify-center text-center">
                    <div>
                      <h1 class="type-header">Summary</h1>
                    </div>
                  </div>
                  <div class=" bg-background-accent rounded-b p-lg">
                            <div class="flex flex-wrap justify-center text-center gap-md items-center p-sm pr-lg">
                              <h3 class="type-header" href="/storeify/clientLogin.php" >Please login to continue</h3>
                            </div>
                </div>
                  ');
        } else {
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
      }
      ?>
    </div>
  </div>
  </div>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/storeify/storeFooter.php";
  ?>
</body>

</html>