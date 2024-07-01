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
            <h3 class="my-0">Payment of €35.00 from Toshiki0620</h3>
          </div>
          <div class="col-12 col-md-6 text-md-right mt-3 mt-md-0">
            <a href="#refund-modal" class="btn btn-warning" data-toggle="modal">Refund</a>
            <a href="https://creator.tebex.io/payments" class="btn btn-quad">Back</a>
          </div>
        </div>
      </header>
      <br>
      <div class="row">
        <div class="col-xxl-7">
          <div class="card">
            <div class="card-header">
              Details
            </div>
            <div class="card-body">
              <table class="table table-responsive-sm table-responsive-md table-responsive-lg table-striped">
                <tbody>
                  <tr>
                    <td>Transaction ID</td>
                    <td>tbx-12514924a60329-6f64e0</td>
                  </tr>
                  <tr>
                    <td>Payment Method</td>
                    <td>
                      <div class="float-left">
                        PayPal
                      </div>
                      <div class="float-right">
                        <a href="#breakdown-modal" class="btn btn-default text-secondary" data-toggle="modal">Breakdown</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>
                      <div class="float-left">
                        <span class="badge badge-success">Complete</span>

                      </div>
                      <div class="float-right">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Amount</td>
                    <td class="d-flex align-items-center">
                      <div>
                        €35.00 </div>
                      <div class="ml-auto">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="https://avatars.discourse-cdn.com/v4/letter/t/8edcca/256.png" style="max-width:33px;" class="mr-2 rounded">
                        <div>
                          <p class="mb-0">
                            Toshiki0620
                          </p>
                          <p class="mb-0 small text-muted">
                            11845590
                          </p>
                        </div>
                        <div class="flex-fill text-right">
                          <a href="https://creator.tebex.io/lookup/11845590" class="btn btn-default text-primary">View</a>
                          <a href="https://creator.tebex.io/bans/create?username=Toshiki0620&amp;ip=150.9.93.98" class="btn btn-default text-danger">Ban</a>
                          <a href="https://creator.tebex.io/payments/75387494/username" class="btn btn-default text-secondary">Change</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>
                      jaewangyoo0620@gmail.com
                    </td>
                  </tr>
                  <tr>
                    <td>Full Name</td>
                    <td>jaewang yoo</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>



        </div>

        <div class="col-xxl-5 row-mt-mobile">
          <div class="card">
            <div class="card-header">
              Packages
            </div>
            <div class="card-body payment-info">
              <div class="table-responsive">
                <table class="table table-striped table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl packages px-0">
                  <tbody>
                    <tr>
                      <th></th>
                      <th width="35%">Item</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th width="15%"></th>
                    </tr>
                    <tr>
                      <td class="text-center">
                        <div class="image">
                          <img src="https://dunb17ur4ymx4.cloudfront.net/packages/images/4d3fd83cf40d9f414bd9e3e7c1d2a596e80b8bd9.png" width="45px">
                        </div>
                      </td>
                      <td>
                        <i class="fa fa-gift"></i> <a href="https://creator.tebex.io/packages/6010114">[QB/OX] JZ-CAYO</a>
                      </td>
                      <td>1</td>
                      <td>€35.00</td>
                      <td>
                        <div class="float-right">
                          <a href="#" class="btn btn-default open-details-modal" data-url="https://creator.tebex.io/payments/75387494/packages/6010114" data-loading-text="Loading...">Details</a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <br>
          <div class="card row-mt">
            <div class="card-header">
              Coupons / Gift Cards
            </div>
            <div class="card-body payment-info">
              <p class="m-0">No coupons or gift cards redeemed against this payment.</p>
            </div>
          </div>
          <br>
          <div class="card row-mt">
            <div class="card-header">
              Applied Discounts
            </div>
            <div class="card-body payment-info">
              <p class="m-0">No discounts applied.</p>
            </div>
          </div>

        </div>
      </div>


    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>