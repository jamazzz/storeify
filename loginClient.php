<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

  <title>Storeify | Login</title>
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

  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
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
  $_SESSION['subdomain'] = strtok($_SERVER['HTTP_HOST'], '.');
  $select = "SELECT * FROM websites WHERE subdomain = '" . $_SESSION['subdomain'] . "'";
  $result = mysqli_query($connect, $select);
  $row = mysqli_fetch_assoc($result);
  ?>
  <style>
    :root {
      --dark: <?php echo empty($row['dark_color']) ? 'rgba(28, 28, 37, 1)' : $row['dark_color']; ?>;
      --light: <?php echo empty($row['light_color']) ? 'rgba(36, 36, 45, 1)' : $row['light_color']; ?>;
    }
  </style>
  <div class="container mx-auto p-sm" style="width: 450px; height: 900px;">
    <div class="lg:col-span-full">
      <header class="grid gap-md ">
        <br>
      </header>
    </div>
    <div>
      <div class="grid gap-grid">
        <div>
          <div>
            <br><br><br>
            <div class="container mx-auto grid xl:max-w-2xl gap-grid">
              <div>
                <div class=" bg-background-accent rounded-b p-lg" style="border-radius: 12px;">
                  <a class="max-h-64 block mx-auto order-3 col-span-2 w-full lg:w-auto lg:order-2 lg:mx-0 rounded-b">
                    <img src="/storeify/assets/images/logo.png" alt="storeify Logo" class="max-h-64 max-w-full lg:max-w-[350px] block mx-auto">
                  </a>
                  <form action="/storeify/login.php" method="post">
                    <input type="text" name="emailoruser" id="emailoruser" style="width: 400px;" placeholder="Email">
                    <br>
                    <br>
                    <input type="password" name="password" id="password" style="width: 400px;" placeholder="Password">
                    <br>
                    <br>
                    <div style="display: flex; align-items: center;">
                      <button type="submit" class="btn-primary block w-full group relative text-left">
                        Entrar na conta
                      </button>
                    </div>
                  </form>
                  <button onclick="window.location.href='/storeify/registerClient.php'" class="btn-primary block w-full group relative text-left">Criar uma conta</button>
                  <?php
                  if (isset($_SESSION["errormsg"])) {
                    echo "<br><span id='errormsg' style='color: red'>" . $_SESSION["errormsg"] . "</span>";
                    unset($_SESSION["errormsg"]);
                  }
                  ?>
                </div>
                <!-- End Widget Area-->

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