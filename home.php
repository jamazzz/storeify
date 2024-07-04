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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&amp;display=swap" rel="stylesheet">

  <script async="" src="https://www.clarity.ms/tag/fxlepb8eap"></script>
  <script async="" src="https://www.clarity.ms/tag/kzn5ty5tcx"></script>
  <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
</head>

<body class="text-foreground bg-background" data-new-gr-c-s-check-loaded="14.1157.0" data-gr-ext-installed="" cz-shortcut-listen="true" data-new-gr-c-s-loaded="14.1157.0">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
  include $_SERVER['DOCUMENT_ROOT'] . "/storeify/storeSection.php";
  $_SESSION['subdomain'] = strtok($_SERVER['HTTP_HOST'], '.');
  $select = "SELECT * FROM websites WHERE subdomain = '" . $_SESSION['subdomain'] . "'";
  $result = mysqli_query($connect, $select);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div>


    <div>
      <div class="bg-background-accent p-lg border-b border-background rounded flex items-center gap-grid justify-center text-center">
        <div>
          <h2 class="type-subtitle text-sm text-primary">Welcome to</h2>
          <h1 class="type-header"><?php echo $row['name'] ?></h1>
        </div>
      </div>
      <br>
      <?php
      if ($row['home_info_html'] == "" || !isset($row['home_info_html'])) {
        echo ('<div class="markdown bg-background-accent rounded p-lg">');
        echo ('<h1 class="type-header block mb-lg text-center">Welcome to ' . $row['name'] . '</h1>');
        echo ('<p class="type-paragraph text-foreground-accent text-center">This is the home page of your website. You can edit this page by going to the dashboard and clicking on the "Edit Home Page" button.</p>');
        echo ('</div>');
      } else {
        echo ('
         <div class="markdown bg-background-accent rounded p-lg">
         ' . $row['home_info_html'] . '
       </div>');
      }
      ?>
    </div>
  </div>
  </div>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . "/storeify/storeFooter.php";
  ?>