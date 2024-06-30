<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"></form>

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
  if (!isset($_SESSION['tabel_page'])) {
    $_SESSION['tabel_page'] = 0;
  }
  ?>
  <div class="container mx-auto p-sm">
    <div class="lg:col-span-full">
      <header class="grid gap-md ">
        <div class="flex flex-wrap justify-evenly items-center gap-md">
          <a href="/" class="max-h-64 block mx-auto order-3 col-span-2 w-full lg:w-auto lg:order-2 lg:mx-0">
            <img src="/storeify/assets/images/logo.png" alt="" class="max-h-64 max-w-full lg:max-w-[350px] block mx-auto">
          </a>
        </div>
      </header>
    </div>
    <div>
      <div class="grid gap-grid">
        <div>
          <div>
            <div>
              <div class="bg-background-accent p-lg border-b border-background rounded-t flex items-center gap-grid justify-center text-center">
                <div>
                  <h1 class="type-header">Your Assets</h1>
                </div>
                <?php
                if (!isset($_SESSION['clientid'])) {
                  $_SESSION['clientid'] = -1;
                }


                if (!isset($_SESSION['clientid']) || $_SESSION['clientid'] == -1) {
                  echo ('
              <li class="flex justify-end items-center gap-md h-12 group pr-lg ml-auto">
                <a href="/storeify/loginClient" class="flex justify-end items-center gap-md h-12 group pr-lg">
                  <div class="text-left justify-end">
                    <small class="text-foreground-accent opacity-50 block group-hover:hidden justify-end">Logged out</small>
                    <small class="text-success hidden group-hover:block justify-end">Sign in</small>
                    <h3 class="leading-none type-header block justify-end">Guest</h3>
                  </div>
                </a>
                ');
                } else {
                  echo ('
                <a href="/storeify/logout" class="flex items-center gap-md h-12 group pr-lg  ml-auto">
                  <div class="text-left">
                    <small class="text-foreground-accent opacity-50 block group-hover:hidden">Logged in</small>
                    <small class="text-danger hidden group-hover:block">Sign out</small>
                    <h3 class="leading-none type-header block">' . $_SESSION['clientUsername'] . '</h3>
                  </div>
                </a>
                ');
                }
                ?>
                <?php
                $select = "SELECT * FROM owned_products 
                           LEFT JOIN products ON owned_products.product_id = products.id
                           WHERE owned_products.user_id = '" . $_SESSION['clientid'] . "' 
                           ORDER BY owned_products.product_id DESC LIMIT 5 OFFSET " . $_SESSION['tabel_page'];
                $countquery = "SELECT COUNT(*) as count FROM owned_products WHERE user_id = '" . $_SESSION['clientid'] . "'";
                $countresult = mysqli_query($connect, $countquery);
                $count = mysqli_fetch_array($countresult)['count'];
                $resultproducts = mysqli_query($connect, $select);
                $totalrow = 0;
                if ($resultproducts) {
                  $rows = [];
                  while ($row = mysqli_fetch_assoc($resultproducts)) {
                    $totalrow++;
                    $rows[] = $row;
                  }
                }
                ?>
              </div>
              <div class=" bg-background-accent rounded-b p-lg">
                <div>
                  <div class="grid gap-md">
                    <?php
                    if ($totalrow == 0) {
                      echo ('<div class="bg-background rounded">
                        <div class="flex flex-wrap justify-between  gap-md items-center p-sm pr-lg">
                                <div class="text-center">
                                    <div class="text-center" style="margin: 10px;">
                                      <div class="text-center">
                                        <div class="text-center" style="margin: 10px;">
                                          <h2 class="type-header">No assets</h2>
                                        </div>
                                      </div>
                                    </div>
                            </div>                          
                        </div>
                    </div>');
                    } else {
                      foreach ($rows as $row) {
                        echo ('
                    <div class="bg-background rounded">
                        <div class="flex flex-wrap justify-between  gap-md items-center p-sm pr-lg">
                            <div class="grid grid-cols-[4rem_1fr] items-center gap-md">
                                <div class="rounded-sm bg-background-accent h-[4rem] flex justify-center items-center">
                                    <img src="/storeify/assets/images/logo.png" class="inline-block max-h-[5rem] mx-auto">
                                </div>
                                <div>
                                    <h2 class="type-header">' . $row['name'] . '</h2>
                                </div>
                            </div>                          
                            <a id="' . $row['product_id'] . '" class="btn-neutral bg-background-accent rounded-btn py-xs px-sm group spinner-toggle ml-auto" onclick="removeItem(event)" style="max-width: 25px;">
                            <i class="fa-solid fa-download opacity-50 transition group-hover:opacity-100"></i>
                            </a>  
                        </div>
                    </div>
                    ');
                      }
                    }
                    ?>
                    <?php
                    if (!$totalrow == 0) { ?>
                      <form id="pagination" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div style="text-align: center;">
                          <div class="flex justify-center">
                            <?php if ($_SESSION['tabel_page'] / 5 + 1 == 1) : ?>
                              <a id="returnbtn" disabled class="btn-primary block text-center group relative spinner-toggle text-center content-center" style="height: 40px; width: 40px; margin-right: 10px;">&lt;</a>
                            <?php else : ?>
                              <a id="returnbtnfull" class="btn-primary block text-center group relative spinner-toggle text-center content-center" style="height: 40px; width: 40px; margin-right: 10px;" onclick="submitForm('returnbtnfull')">&lt;&lt;</a>
                              <a id="returnbtn" class="btn-primary block text-center group relative spinner-toggle text-center content-center" style="height: 40px; width: 40px; margin-right: 10px;" onclick="submitForm('returnbtn')">&lt;</a>
                            <?php endif; ?>
                            <a id="idvalue" class="btn-primary block text-center group relative spinner-toggle text-center content-center" style="height: 40px; width: 40px; margin-right: 10px;"><?php echo ceil($_SESSION['tabel_page'] / 5 + 1) ?></a>
                            <?php if ($count - 5 <= $_SESSION['tabel_page']) : ?>
                              <a id="nextbtn" class="btn-primary block text-center group relative spinner-toggle text-center content-center" style="height: 40px; width: 40px; margin-right: 10px;" disabled>&gt;</a>
                            <?php else : ?>
                              <a id="nextbtn" class="btn-primary block text-center group relative spinner-toggle text-center content-center" style="height: 40px; width: 40px; margin-right: 10px;" onclick="submitForm('nextbtn')">&gt;</a>
                              <a id="nextbtnfull" class="btn-primary block text-center group relative spinner-toggle text-center content-center" style="height: 40px; width: 40px; margin-right: 10px;" onclick="submitForm('nextbtnfull')">&gt;&gt;</a>
                            <?php endif; ?>
                          </div>
                        </div>
                      <?php }
                      ?>
                      <script>
                        function submitForm(buttonClicked) {
                          var idvalue = document.getElementById("idvalue").innerText;
                          var form = document.getElementById("pagination");
                          form.setAttribute("action", "assetsPag.php");
                          form.setAttribute("method", "post");
                          var input = document.createElement("input");
                          input.setAttribute("type", "hidden");
                          input.setAttribute("name", "idvalue");
                          input.setAttribute("value", idvalue);
                          form.appendChild(input);
                          var typeInput = document.createElement("input");
                          typeInput.setAttribute("type", "hidden");
                          typeInput.setAttribute("name", "type");
                          typeInput.setAttribute("value", buttonClicked);
                          form.appendChild(typeInput);

                          form.submit();
                        }
                      </script>
                  </div>
                  </form>
                  <script>
                    function removeItem(event) {
                      event.preventDefault();
                      const itemId = event.currentTarget.id;
                      const form = document.createElement('form');
                      form.method = 'post';
                      form.action = 'downloadAsset.php';
                      const input = document.createElement('input');
                      input.type = 'hidden';
                      input.name = 'productId';
                      input.value = itemId;
                      form.appendChild(input);
                      document.body.appendChild(form);
                      form.submit();
                    }
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/storeify/storeFooter.php";
    ?>
</body>

</html>