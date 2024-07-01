<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp1.php';
  ?>
  <main role="main" id="main">
    <div class="container-fluid">

      <header class="page-title">
        <br>
        <?php
        $websiteName = $_SESSION['websitename'];
        $directory = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/invoices/';
        $files = scandir($directory);
        $files = array_diff($files, array('.', '..'));
        //  check if there is any file that has the website name as a prefix
        $hasExports = false;
        foreach ($files as $file) {
          $fileName = pathinfo($file, PATHINFO_FILENAME);
          $filePrefix = explode('_', $fileName)[0];
          if ($filePrefix === $websiteName) {
            $hasExports = true;
            break;
          }
        }
        if ($hasExports) {
          echo '<h1 class="my-0">Exports <span style="float: right;"><a href="/storeify/exportAll.php" class="btn btn-primary">Download All</a></span></h1>';
        } else {
          echo '<h1 class="my-0">Exports</h1>';
        }
        ?>
        <br>
      </header>



      <?php

      if (count($files) > 0) {
        foreach ($files as $file) {
          $fileName = pathinfo($file, PATHINFO_FILENAME);
          $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
          $fileSize = filesize($directory . $file);
          $fileCreationDate = date('Y-m-d H:i:s', filectime($directory . $file));
          $fileDownloadLink = '/storeify/store/invoices/' . $file;
          $filePrefix = explode('_', $fileName)[0];
          if ($filePrefix === $websiteName) {
            echo '<div class="card">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-12 col-md-6">
                                      <h5 class="card-title">Transaction ID:  ' . explode('_', $fileName)[1] . '</h5>
                                      <p class="card-text">Transaction Date: ' . $fileCreationDate . '</p>
                                      <p class="card-text">File Size: ' . $fileSize . ' bytes</p>
                                  </div>
                                  <div class="col-12 col-md-6 text-md-right content-align-center text-end"><br>
                                      <a href="' . $fileDownloadLink . '" class="btn btn-primary">Download</a>
                                  </div>
                              </div>
                          </div>
                      </div><br>';
          }
        }
      } else {
        echo '<div class="card">
                  <div class="card-body">
                      <div class="empty-content-container">
                          <i class="fal fa-download"></i>
                          <p>Exports which you have requested to be generated will be available to download here.</p>
                      </div>
                  </div>
                </div>';
      }
      ?>

    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>