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
              Details
            </div>
            <div class="card-body">
              <table class="table table-responsive-sm table-responsive-md table-responsive-lg table-striped">
                <tbody>
                  <tr>
                    <td>Transaction ID</td>
                    <td><?php echo $row['transaction_id']; ?></td>
                  </tr>
                  <tr>
                    <td>Payment Method</td>
                    <td>
                      <div class="float-left">
                        PayPal
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Amount</td>
                    <td class="d-flex align-items-center">
                      <div>
                        <?php echo $row['paid_amount']; ?>€ </div>
                      <div class="ml-auto">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer</td>
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
                    <td>Status</td>
                    <td>
                      <div class="float-left">
                        <?php
                        if ($row['state'] == '1') {
                          echo '<span class="badge badge-success">Completo</span>';
                        } else if ($row['state'] == '0') {
                          echo '<span class="badge badge-warning">Pendente</span>';
                        } else {
                          echo '<span class="badge badge-danger">Falhou</span>';
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



        </div>

      </div>


    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>