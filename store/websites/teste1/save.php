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
  include 'dashp1.php';
  $select = "SELECT * FROM websites WHERE id = " . $_SESSION['currentwebsite'];
  $result = mysqli_query($connect, $select);
  $row = mysqli_fetch_assoc($result);
  $select2 = "SELECT * FROM transactions WHERE store = '" . $row['subdomain'] . "'";
  $result2 = mysqli_query($connect, $select2);
  $row2 = mysqli_fetch_assoc($result2);
  $total = 0;
  $count = 0;
  ?>
  <main role="main" id="main">
    <div class="container-fluid">
      <header class="page-title">
        <div class="row no-gutters align-items-center">
          <div class="col-12 col-md-6">
            <h1 class="my-0">‎ JZ Works</h1>
            <small class="text-muted text-uppercase font-weight-bold">FiveM | Starter Plan </small>
          </div>
          <div class="col-12 col-md-6 text-md-right mt-3">
          </div>
        </div>
      </header>

      <!---->



      <div data-v-a416eab6="">
        <div data-v-a416eab6="" class="row row-mb">
          <div data-v-a416eab6="" class="col-12 col-md-4 value-container">
            <div data-v-a416eab6="" class="card h-100">
              <div data-v-a416eab6="" class="card-body">
                <div data-v-a416eab6="" class="row d-flex align-items-center">
                  <div data-v-a416eab6="" class="col-lg-4 col-12 text-center d-lg-none d-xl-block"></div>
                  <div data-v-a416eab6="" class="col-xl-8 col-12 text-center text-lg-left my-3 my-xl-0">
                    <?php
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                      $createdDate = strtotime($row2['created_date']);
                      $currentDate = date('Y-m-d');
                      $paymentDate = date('Y-m-d', $createdDate);

                      if ($paymentDate == $currentDate) {
                        $total += $row2['paid_amount'];
                      }
                    }
                    ?>
                    <h1 data-v-a416eab6=""><?php echo $total; ?>€</h1> <span data-v-a416eab6="" class="text-uppercase">Today's Sales</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-v-a416eab6="" class="col-12 col-md-4 row-mt-mobile value-container">
            <div data-v-a416eab6="" class="card h-100">
              <div data-v-a416eab6="" class="card-body">
                <div data-v-a416eab6="" class="row d-flex align-items-center">
                  <div data-v-a416eab6="" class="col-lg-4 col-12 text-center d-lg-none d-xl-block"></div>
                  <div data-v-a416eab6="" class="col-xl-8 col-12 text-center text-lg-left my-3 my-xl-0">
                    <?php
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                      $createdDate = strtotime($row2['created_date']);
                      $currentMonth = date('m');
                      $paymentMonth = date('m', $createdDate);

                      if ($paymentMonth == $currentMonth) {
                        $total += $row2['paid_amount'];
                      }
                    }
                    ?>
                    <h1 data-v-a416eab6=""><?php echo ($total); ?>€</h1> <span data-v-a416eab6="" class="text-uppercase"><?php echo date('F') . "'s Sales"; ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div data-v-a416eab6="" class="col-12 col-md-4 row-mt-mobile value-container">
            <div data-v-a416eab6="" class="card h-100">
              <div data-v-a416eab6="" class="card-body">
                <div data-v-a416eab6="" class="row d-flex align-items-center">
                  <div data-v-a416eab6="" class="col-xl-4 col-12 text-center d-lg-none d-xl-block"></div>
                  <div data-v-a416eab6="" class="col-xl-8 col-12 text-center text-lg-left my-3 my-xl-0">
                    <?php
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                      $createdDate = strtotime($row2['created_date']);
                      $currentMonth = date('m');
                      $paymentMonth = date('m', $createdDate);

                      if ($paymentMonth == $currentMonth) {
                        $total += $row2['paid_amount'];
                        $count++;
                      }
                    }

                    $average = $count > 0 ? $total / $count : 0;
                    ?>
                    <h1 data-v-a416eab6="">€<?php echo number_format($average, 2); ?></h1> <span data-v-a416eab6="" class="text-uppercase">June's Avg Payment</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div data-v-a416eab6="" class="row">
          <div data-v-a416eab6="" class="col-12 col-xxl-8">
            <div data-v-a416eab6="" class="card h-100">
              <div data-v-a416eab6="" class="card-header" style="height: 51px;">
                <div data-v-a416eab6="" class="row">
                  <div data-v-a416eab6="" class="col-6 d-flex align-items-center">Sales Overview</div>
                </div>
              </div>
              <div data-v-a416eab6="" class="card-body">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
          </div>
          <div data-v-a416eab6="" class="col-12 col-xxl-4 mt-4 mt-xxl-0">
            <div data-v-a416eab6="" class="card h-100">
              <div data-v-a416eab6="" class="card-header">
                <div data-v-a416eab6="" class="row">
                  <div data-v-a416eab6="" class="col-7 d-flex align-items-center">
                    Recent Payments
                  </div>
                </div>
              </div>
              <div data-v-a416eab6="" class="card-body">
                <div data-v-a416eab6="" class="table-responsive">
                  <table data-v-a416eab6="" class="table border">
                    <?php
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                    ?>
                      <tr data-v-a416eab6="" class="text-muted">
                        <td data-v-a416eab6="" width="50%" class="align-middle">
                          <?php echo $row2['payer_email']; ?>
                        </td>
                        <td data-v-a416eab6="" width="30%" class="align-middle"><?php echo '€' . $row2['paid_amount']; ?></td>
                      </tr>
                    <?php
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
  include 'dashp2.php';
  ?>