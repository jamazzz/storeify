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
  <div class="container mx-auto p-sm" style="width: 450px; height: 900px;">
    <div class="lg:col-span-full">


      <header class="grid gap-md ">
        <div class="flex flex-wrap justify-evenly items-center gap-md">
          <a href="/" class="max-h-64 block mx-auto order-3 col-span-2 w-full lg:w-auto lg:order-2 lg:mx-0">
            <img src="https://cdn.discordapp.com/attachments/1241482240224133212/1241482531321286717/branco.png?ex=667880b5&is=66772f35&hm=3fa2499852c47c9750b71f8fc5f3dcf7656a8e785e7736718bead271f52752be&" alt="storeify Logo" class="max-h-64 max-w-full lg:max-w-[350px] block mx-auto">
          </a>
        </div>
      </header>
    </div>
    <div>
      <div class="grid gap-grid">
        <div>


          <!-- Start Section Area-->
          <?php
          include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
          $_SESSION['subdomain'] = strtok($_SERVER['HTTP_HOST'], '.');
          $tempvalue = 1;
          $clearCheckout = "DELETE from checkout WHERE subdomain = '".$_SESSION['subdomain']."' AND user_id = ".$_SESSION['tempvalue'];
          mysqli_query($connect, $clearCheckout);


          ?>
          <!-- End Section Area-->
          <div>
            <br><br>
            <div class="container mx-auto grid xl:max-w-2xl gap-grid">
              <div>
                <div class="bg-background-accent p-lg border-b border-background rounded-t flex items-center gap-grid justify-center text-center">
                  <div>
                    <h1 class="type-header">Sucesso !</h1>
                  </div>
                </div>
                <div class=" bg-background-accent rounded-b p-lg">
                  <div class="flex flex-wrap justify-center text-center gap-md items-center p-sm pr-lg">
                    <div class="success-animation">
                      <div id="timer"></div>
                      <script>
                        setTimeout(function() {
                          var timer = document.getElementById("timer");
                          timer.innerHTML = `
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                              <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                              <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                          `;
                        }, 800);
                      </script>
                    </div>
                  </div>
                  <form action="/storeify/invoice.php" method="post">
                    <?php
                    if (isset($_POST['json'])) {
                      echo '<input type="hidden" name="json" value="' . $_POST['json'] . '">';
                    }
                    ?>
                    <button type="submit" class="btn-primary block w-full text-center group relative">Abrir Recibo</button>
                    <br>
                  </form>
                  <button class="btn-primary block w-full text-center group relative" onclick="window.location.href = '<?php echo str_replace('checkout', 'category/home', $_POST['currentUrl']); ?>';">Voltar</button>


                </div>
              </div>
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
        <style>
          .success-animation {
            margin: 150px auto;
          }

          .checkmark {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #4bb71b;
            stroke-miterlimit: 10;
            box-shadow: inset 0px 0px 0px #4bb71b;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
            position: relative;
            top: 5px;
            right: 5px;
            margin: 0 auto;
          }

          .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #4bb71b;
            fill: rgb(28, 28, 37);
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;

          }

          .checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
          }

          @keyframes stroke {
            100% {
              stroke-dashoffset: 0;
            }
          }

          @keyframes scale {

            0%,
            100% {
              transform: none;
            }

            50% {
              transform: scale3d(1.1, 1.1, 1);
            }
          }

          @keyframes fill {
            100% {
              box-shadow: inset 0px 0px 0px 30px #4bb71b;
            }
          }
        </style>
</body>

</html>