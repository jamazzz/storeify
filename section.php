<?php
$_SESSION['subdomain'] = strtok($_SERVER['HTTP_HOST'], '.');
$_SESSION['number'] = -1;
if (preg_match('/\/category\/([0-9]+)$/', $_SERVER['REQUEST_URI'], $matches)) {
  $_SESSION['number'] = $matches[1];
}
$tempvalue = 1;

$select = "SELECT * FROM websites WHERE subdomain = '" . $_SESSION['subdomain'] . "'";
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

$select2 = "SELECT categories.id,logo FROM categories INNER JOIN websites ON categories.website_id = websites.id WHERE websites.subdomain = '" . $_SESSION['subdomain'] . "'";
$result2 = mysqli_query($connect, $select2);
if (!mysqli_num_rows($result2) > 0) {
  header('Location: /storeify/404.php');
  exit();
}
$found = false;
while ($row2 = mysqli_fetch_assoc($result2)) {
  $found = true;
  break;
  if ($row2['id'] == $_SESSION['number']) {
    $found = true;
    break;
  }
}
if (!$found && substr_count($_SERVER['REQUEST_URI'], '/storeify/checkout') != 1) {
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
              $selectcat = "SELECT categories.name,categories.id FROM categories INNER JOIN websites ON categories.website_id = websites.id WHERE websites.subdomain = '" . $_SESSION['subdomain'] . "'";
              $resultcat = mysqli_query($connect, $selectcat);
              if (substr_count($_SERVER['REQUEST_URI'], '/storeify/website') != 1) {
                echo ('
                      <li>
                        <a href="' . '/storeify/website' . '" class="type-header cursor-pointer w-full group dropdown-toggle data-[dropdown=open]:rounded-b-none justify-center btn-neutral shadow-none border-transparent transition hover:bg-background data-[dropdown=open]:bg-background lg:data-[dropdown=open]:rounded-btn">
                          ' . "Home" . '
                        </a>
                      </li>'
                );
              } else {
                echo ('
                      <li>
                        <a href="' . '/storeify/website' . '" class="type-header cursor-pointer group justify-center btn-primary">
                          ' . "Home" . '
                        </a>
                      </li>'
                );
              }
              while ($rowcat = mysqli_fetch_assoc($resultcat)) {
                $url = "http://" . $_SESSION['subdomain'] . ".localhost/storeify/category/" . $rowcat['id'];
                if ($rowcat['id'] != $_SESSION['number']) {
                  echo '
                          <li>
                              <a href="' . $url . '" class="type-header cursor-pointer w-full group dropdown-toggle data-[dropdown=open]:rounded-b-none justify-center btn-neutral shadow-none border-transparent transition hover:bg-background data-[dropdown=open]:bg-background lg:data-[dropdown=open]:rounded-btn">
                                  ' . $rowcat['name'] . '
                              </a>
                          </li>
                      ';
                } else {
                  if (substr_count($_SERVER['REQUEST_URI'], '/storeify/checkout') != 1) {
                    echo '
                          <li> 
                              <a href="' . $url . '" class="type-header cursor-pointer group justify-center btn-primary">
                                  ' . $rowcat['name'] . '
                              </a>
                          </li>
                      ';
                  } else {
                    echo '
                          <li> 
                              <a href="' . $url . '" class="type-header cursor-pointer w-full group dropdown-toggle data-[dropdown=open]:rounded-b-none justify-center btn-neutral shadow-none border-transparent transition hover:bg-background data-[dropdown=open]:bg-background lg:data-[dropdown=open]:rounded-btn">
                                  ' . $rowcat['name'] . '
                              </a>
                          </li>
                      ';
                  }
                }
              }
              ?>
              <?php
              if (!isset($_SESSION['clientid'])) {
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
              </li>
              <?php
              if (substr_count($_SERVER['REQUEST_URI'], '/storeify/checkout') != 1) {
                echo (' 
              <button class="btn-icon-primary sidebar-toggle" onclick="toggleBasket()">
                <i class="fa-solid fa-cart-shopping"></i>

              </button>
              ');
              }
              ?>
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
                        $select = "SELECT c.product_id, p.* FROM checkout c JOIN products p ON c.product_id = p.id WHERE c.subdomain = '" . $_SESSION['subdomain'] . "' AND c.user_id = '" . $tempvalue . "'AND p.deleted = '0'";
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
                          <h2 class="type-header"><?php echo ($_SESSION['total'] ?? 0);
                                                  echo (' EUR') ?></h2>
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