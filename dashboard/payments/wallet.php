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
  <main id="main" role="main"><!---->
    <div class="container">
      <header class="page-title"><!---->
        <div class="row no-gutters align-items-center">
          <div class="col-12 col-md-6">
            <!-- <h1 class="my-0">Summary</h1> -->
            <br>
          </div>
      </header><!---->
      <?php
      $tsales = "SELECT SUM(paid_amount) AS total_sales FROM transactions WHERE store = '" . $_SESSION['subdomain'] . "'";
      $result = mysqli_query($connect, $tsales);
      $row = mysqli_fetch_assoc($result);
      $tsales = "SELECT SUM(paid_amount) AS total_sales FROM transactions WHERE store = '" . $_SESSION['subdomain'] . "' AND created_date < DATE_SUB(NOW(), INTERVAL 3 DAY)";
      $result = mysqli_query($connect, $tsales);
      $row2 = mysqli_fetch_assoc($result);
      ?>
      <section class="card-deck">
        <div class="card card-stats"><!---->
          <div class="card-body"><!----><!---->
            <?php echo '<h3 class="text-white">' . ($row['total_sales'] ?? 0). '€</h3><span>Saldo Total</span>'; ?>
          </div><!---->
        </div>
        <br>
        <div class="card card-stats"><!---->
          <div class="card-body"><!----><!---->
            <?php echo '<h3 class="text-white">' . ($row2['total_sales'] ?? 0)  . '€</h3><span>Em espera</span>'; ?>
          </div><!---->
        </div>
        <br>
        <div class="card card-stats"><!---->
          <div class="card-body"><!----><!---->
            <?php echo '<h3 class="text-white">' . (($row['total_sales'] - $row2['total_sales']) ?? 0) . '€</h3><span>Disponivel</span>'; ?>
          </div><!---->
        </div>
      </section>
      <div class="card mt-4">
        <div class="card-body"><!----><!----><!----><!----><!---->
          <div class="table-responsive">
            <div class="table-responsive">
              <table class="table table-striped">
                <colgroup>
                  <col span="5">
                </colgroup>
                <colgroup class="outline">
                  <col span="3">
                </colgroup>
                <thead class="thead-light">

                  <tr>
                    <td colspan="8" class="text-center">Nenhum levantamento encontrado</td>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div><!---->
        </div><!---->
      </div>
    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>