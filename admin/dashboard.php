<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Storeify</title>
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/admin/dashp1.php';
  $select = "SELECT * FROM websites";
  $result = mysqli_query($connect, $select);
  $row = mysqli_fetch_assoc($result);
  $select2 = "SELECT * FROM transactions";
  $result2 = mysqli_query($connect, $select2);
  $row2 = mysqli_fetch_assoc($result2);
  $total = 0;
  $total2 = 0;
  $count = 0;
  $currentMonth = date('F');
  $currentDate = date('Y-m-d');
  while ($row2 = mysqli_fetch_assoc($result2)) {
    $createdDate = strtotime($row2['created_date']);
    $paymentMonth = date('F', $createdDate);
    $paymentDate = date('Y-m-d', $createdDate);
    $count++;
    if ($paymentMonth == $currentMonth) {
      $total += $row2['paid_amount'];
    }
    if ($paymentDate == $currentDate) {
      $total2 += $row2['paid_amount'];
    }
    $a[] = '<tr  class="text-muted">
        <td  width="50%" class="align-middle">' . $row2['payer_email'] . '</td>
        <td  width="30%" class="align-middle">' . $row2['paid_amount'] . ' €</td>
      </tr>';

    $monthlySales = array();
    for ($i = 1; $i <= 12; $i++) {
      $select3 = "SELECT SUM(paid_amount) AS total_amount FROM transactions WHERE MONTH(created_date) = $i";
      $result3 = mysqli_query($connect, $select3);
      $row3 = mysqli_fetch_assoc($result3);
      $monthlySales[] = $row3['total_amount'] ?? 0;
    }
    $monthlySalesJson = json_encode($monthlySales);
  }

  ?>
  <main role="main" id="main">
    <div class="container-fluid">
      <header class="page-title">
        <div class="row no-gutters align-items-center">
          <div class="col-12 col-md-6">
            <h2 class="my-0">Dashboard</h2>
            <br>
          </div>
          <div class="col-12 col-md-6 text-md-right mt-3">
          </div>
        </div>
      </header>

      <!---->



      <div>
        <div class="row row-mb">
          <div class="col-12 col-md-4 value-container">
            <div class="card h-100">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="col-lg-4 col-12 text-center d-lg-none d-xl-block"></div>
                  <div class="col-xl-8 col-12 text-center text-lg-left my-3 my-xl-0">
                    <h1><?php echo ($total2); ?> €</h1> <span class="text-uppercase">Vendas de Hoje</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 row-mt-mobile value-container">
            <div class="card h-100">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="col-lg-4 col-12 text-center d-lg-none d-xl-block"></div>
                  <div class="col-xl-8 col-12 text-center text-lg-left my-3 my-xl-0">
                    <?php
                    $month = date('F');
                    $months = [
                      'January' => 'Janeiro',
                      'February' => 'Fevereiro',
                      'March' => 'Março',
                      'April' => 'Abril',
                      'May' => 'Maio',
                      'June' => 'Junho',
                      'July' => 'Julho',
                      'August' => 'Agosto',
                      'September' => 'Setembro',
                      'October' => 'Outubro',
                      'November' => 'Novembro',
                      'December' => 'Dezembro'
                    ];

                    if (array_key_exists($month, $months)) {
                      $month = $months[$month];
                    }
                    ?>
                    <h1><?php echo ($total); ?> €</h1> <span class="text-uppercase text-center"><?php echo "Vendas de " . $month; ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 row-mt-mobile value-container">
            <div class="card h-100">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="col-xl-4 col-12 text-center d-lg-none d-xl-block"></div>
                  <div class="col-xl-8 col-12 text-center text-lg-left my-3 my-xl-0">
                    <?php
                    $average = $count > 0 ? $total / $count : 0;
                    ?>
                    <h1><?php echo number_format($average, 2); ?> €</h1> <span class="text-uppercase">Pagamento médio de <?php echo $month ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12 col-xxl-8">
            <div class="card h-100">
              <div class="card-header" style="height: 51px;">
                <div class="row">
                  <div class="col-6 d-flex align-items-center">Visão Geral de Vendas</div>
                </div>
              </div>
              <div class="card-body">
                <canvas id="myLineChart" width="400" height="200"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                  const ctx = document.getElementById('myLineChart').getContext('2d');
                  const data = {
                    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                    datasets: [{
                      label: '€',
                      backgroundColor: 'rgba(255, 99, 132, 0.2)',
                      borderColor: 'rgba(255, 99, 132, 1)',
                      data: <?php echo empty($monthlySalesJson) ? '[]' : $monthlySalesJson; ?>,
                      fill: false,
                    }]
                  };
                  const config = {
                    type: 'line',
                    data: data,
                    options: {
                      responsive: true,
                      scales: {
                        x: {
                          display: true,
                          title: {
                            display: true,
                            text: 'Mês'
                          }
                        },
                        y: {
                          display: true,
                          title: {
                            display: true,
                            text: 'Valor'
                          }
                        }
                      }
                    }
                  };
                  const myLineChart = new Chart(ctx, config);
                </script>
              </div>
            </div>
          </div>
          <div class="col-12 col-xxl-4 mt-4 mt-xxl-0">
            <div class="card h-100">
              <div class="card-header">
                <div class="row">
                  <div class="col-7 d-flex align-items-center">
                    Pagamentos Recentes
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table border">
                    <?php
                    if (empty($a)) {
                      echo "Ainda não há vendas";
                    } else {
                      for ($i = 0; $i < min(10, count($a)); $i++) {
                        echo $a[$i];
                      }
                    }
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/admin/dashp2.php';
  ?>