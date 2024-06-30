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
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <h1 class="my-0">Payments</h1>
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
                    <th>Customer</th>
                    <th>Amount</th>
                    <th>Received</th>
                    <th></th>
                    <th>&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $select = "SELECT * FROM websites WHERE id = " . $_SESSION['currentwebsite'];
                  $result = mysqli_query($connect, $select);
                  $row = mysqli_fetch_assoc($result);
                  $select2 = "SELECT * FROM transactions WHERE store = '" . $row['subdomain'] . "'";
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
                      <td class="text-center">
                        <span class="badge badge-success" style="width: 75px;" data-toggle="tooltip" title="" data-original-title="This payment has been completed successfully">Complete</span>
                      </td>
                      ');
                    } elseif ($row2['state'] == 0) {
                      echo ('
                      <td class="text-center">
                        <span class="badge badge-warning" style="width: 75px;" data-toggle="tooltip" title="" data-original-title="This payment is pending">Pending</span>
                      </td>
                      ');
                    } else {
                      echo ('
                      <td class="text-center">
                        <span class="badge badge-danger" style="width: 75px;" data-toggle="tooltip" title="" data-original-title="This payment has failed">Failed</span>
                      </td>
                      ');
                    }
                    echo ('
                      <td class="text-right">
                        <a href="https://creator.tebex.io/payments/75387494" class="btn btn-default">View</a>
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