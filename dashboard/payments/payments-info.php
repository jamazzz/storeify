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
  if (isset($_POST['payment_id']) && !empty($_POST['payment_id'])) {
    $payment_id = $_POST['payment_id'];
  }
  $transactioninfo = "SELECT * FROM transactions WHERE id = " . $payment_id;
  $result = mysqli_query($connect, $transactioninfo);
  $row = mysqli_fetch_assoc($result);
  ?>
  <main role="main" id="main">
    <div class="container-fluid">


      <header class="page-title">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <h3 class="my-0">Detalhes da transação - <?php echo $row['transaction_id']; ?></h3>
          </div>
        </div>
      </header>
      <br>
      <div class="row">
        <div class="col-xxl-12">
          <div class="card">
            <div class="card-header">
              Detalhes
            </div>
            <div class="card-body">
              <table class="table table-responsive-sm table-responsive-md table-responsive-lg table-striped">
                <tbody>
                  <tr>
                    <td>ID da Transação</td>
                    <td><?php echo $row['transaction_id']; ?></td>
                  </tr>
                  <tr>
                    <td>Método de Pagamento</td>
                    <td>
                      <div class="float-left">
                        PayPal
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Quantidade</td>
                    <td class="d-flex align-items-center">
                      <div>
                        <?php echo $row['paid_amount']; ?>€ </div>
                      <div class="ml-auto">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Cliente</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div>
                          <p class="mb-0">
                            <?php echo $row['payer_email']; ?>
                          </p>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Nome</td>
                    <td><?php echo $row['payer_name']; ?></td>
                  </tr>
                  <tr>
                    <td>Pais</td>
                    <td><?php echo $row['payer_country']; ?></td>
                  </tr>
                  <tr>
                    <td>Data da Venda</td>
                    <td><?php echo $row['created_date']; ?></td>
                  </tr>
                  <tr>
                    <td>Estado</td>
                    <td>
                      <div class="float-left">
                        <?php
                        if ($row['state'] == '1') {
                          echo '<span class="badge badge-success" style="max-height:28px; width:80px;">Completo</span>';
                          $directory = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/invoices/';
                          $files = scandir($directory);
                          $files = array_diff($files, array('.', '..'));
                          $hasInvoice = false;
                          foreach ($files as $file) {
                            $fileName = pathinfo($file, PATHINFO_FILENAME);
                            $filePrefix = explode('_', $fileName)[1];
                            if ($filePrefix === $row['transaction_id']) {
                              $hasInvoice = true;
                              break;
                            }
                          }
                          if ($hasInvoice) {
                            echo '<tr>
                                        <td>Fatura</td>
                                        <td><a style="max-height:28px; width:80px;" class="btn btn-primary" href="/storeify/store/invoices/' . $file . '">Abrir</a></td>
                                      </tr>';
                          } else {
                            echo '<tr>
                                        <td>Fatura</td>
                                        <td>Not available</td>
                                      </tr>';
                          }
                        } else if ($row['state'] == '0') {
                          echo '<span class="badge badge-warning" style="max-height:28px; width:80px;">Pendente</span>';
                        } else {
                          echo '<span class="badge badge-danger" style="max-height:28px; width:80px;">Falhou</span>';
                        }
                        ?>
                      </div>
                      <div class="float-right">
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <br>
          <a href="/storeify/dashboard/payments/payments.php" class="btn btn-primary">Voltar</a>


        </div>

      </div>


    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>