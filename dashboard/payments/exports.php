<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Storeify</title>
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
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
        $subdomain = $_SESSION['subdomain'];
        $directory = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/invoices/';
        $files = scandir($directory);
        $files = array_diff($files, array('.', '..'));

        $search = isset($_POST['search']) && $_POST['search'] != "" ? htmlspecialchars($_POST['search']) : $subdomain;
        $hasExports = false;
        foreach ($files as $file) {
          $fileName = pathinfo($file, PATHINFO_FILENAME);
          $filePrefix = explode('_', $fileName)[0];
          if ($filePrefix === $search) {
            $hasExports = true;
            break;
          }
        }

        echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post" id="searchForm">
                <div class="search-container" style="display: flex; justify-content: space-between; align-items: center;">
                    <div style="display: flex; align-items: center;">
                        <input type="text" class="form-control" placeholder="Procurar..." name="search" style="width: 500px;">
                        <i class="fa-solid fa-magnifying-glass" id="searchIcon" style="cursor: pointer; margin-left: 8px;"></i>
                    </div>
                    <a href="/storeify/exportAll.php" class="btn btn-primary">Transferir todos</a>
                  </div>
                </form>
                <script>
                  document.getElementById("searchIcon").addEventListener("click", function() {
                    document.getElementById("searchForm").submit();
                  });
                </script>';
        if (!$hasExports) {
          echo '<br><h3>Não há exportações</h3>';
        } else {
          echo '<br>';
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

          if ($filePrefix === $search) {
            echo '<div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h5 class="card-title">ID da transação:  ' . explode('_', $fileName)[1] . '</h5>
                                <p class="card-text">Data da transação: ' . $fileCreationDate . '</p>
                                <p class="card-text">Tamanho do arquivo: ' . $fileSize . ' bytes</p>
                            </div>
                            <div class="col-12 col-md-6 text-md-right content-align-center text-end"><br>
                                <a href="' . $fileDownloadLink . '" class="btn btn-primary">Transferir</a>
                            </div>
                        </div>
                    </div>
                  </div><br>';
          }
        }
      }
      ?>

    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>
</body>

</html>