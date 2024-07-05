<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Storeify</title>
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

</head>

<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp1.php';
  ?>
  <main role="main" id="main">
    <div class="container-fluid">
      <header class="page-title">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="searchForm">
              <div class="search-container">
                <input type="text" class="form-control" placeholder="Procurar..." name="search" style="max-width: 500px;">
                <i class="fa-solid fa-magnifying-glass" id="searchIcon" style="cursor: pointer;"></i>
              </div>
            </form>

            <script>
              document.getElementById('searchIcon').addEventListener('click', function() {
                document.getElementById('searchForm').submit();
              });
            </script>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $search = htmlspecialchars($_POST['search']);
            }
            ?>
            <br>
          </div>
        </div>
      </header>

      <div class="row row-mt">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row row-mb">
                <div class="col-12 col-md-4 text-center text-md-left align-self-center">
                </div>
              </div>
              <table class="table table-responsive-sm table-striped table-responsive-md">
                <thead class="thead-light">
                  <tr>
                    <th>Cliente</th>
                    <th>Valor</th>
                    <th>Data</th>
                    <th>Estado</th>
                    <th class="text-end">Mais Informações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $select = "SELECT * FROM websites WHERE id = " . $_SESSION['currentwebsite'];
                  $subdomain = $_SESSION['subdomain'];
                  $result = mysqli_query($connect, $select);
                  $row = mysqli_fetch_assoc($result);
                  $filter = $_POST['search'] ?? $filter ?? '';
                  $select2 = "SELECT * FROM transactions 
                  WHERE store = '$subdomain' 
                  AND (payer_email LIKE '%$filter%' 
                  OR transaction_id LIKE '%$filter%')";
                  $result2 = mysqli_query($connect, $select2);
                  $row2 = mysqli_fetch_assoc($result2);
                  while ($row2 = mysqli_fetch_assoc($result2)) {
                    echo ('
                    <tr>
                      <td>
                        ' . $row2['payer_email'] . '
                      </td>
                      <td>' . $row2['paid_amount'] . ' €</td>
                      <td>' . $row2['created_date'] . '</td>
                      ');
                    if ($row2['state'] == 1) {
                      echo ('
                      <td >
                        <span class="badge badge-success" style="width: 75px;" data-toggle="tooltip" title="" data-original-title="Este pagamento foi concluído com sucesso">Completo</span>
                      </td>
                      ');
                    } elseif ($row2['state'] == 0) {
                      echo ('
                      <td >
                        <span class="badge badge-warning" style="width: 75px;" data-toggle="tooltip" title="" data-original-title="Este pagamento está pendente">Pendente</span>
                      </td>
                      ');
                    } else {
                      echo ('
                      <td>
                        <span class="badge badge-danger" style="width: 75px;" data-toggle="tooltip" title="" data-original-title="Este pagamento falhou">Falhou</span>
                      </td>
                      ');
                    }
                    $file = $row2['store'] . "_" . $row2['transaction_id'] . "_" . date('d-m-Y', strtotime($row2['created_date'])) . '.pdf';
                    echo ('
                        <td class="text-end">
                          <form action="/storeify/dashboard/payments/payments-info.php" method="POST">
                            <input type="hidden" name="payment_id" value="' . $row2['id'] . '">
                            <button type="submit" class="btn btn-default"><i class="fa-solid fa-magnifying-glass"></i></button>
                          </form>
                        </td>
                    </tr>
                    ');
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>