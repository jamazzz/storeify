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
  <main role="main" id="main" >
    <div class="container-fluid" >


      <header class="page-title">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <h3 class="my-0">Payment of €35.00 from Toshiki0620</h3>
            <small class="text-muted text-uppercase font-weight-bold">Received May 29, 2024 17:45</small>
          </div>
          <div class="col-12 col-md-6 text-md-right mt-3 mt-md-0" >
            <a href="#refund-modal" class="btn btn-warning" data-toggle="modal">Refund</a>
            <a href="https://creator.tebex.io/payments" class="btn btn-quad">Back</a>
          </div>
        </div>
      </header>

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
                    <td>IP Address</td>
                    <td>150.9.93.98</td>
                  </tr>
                  <tr>
                    <td>Full Name</td>
                    <td>jaewang yoo</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


          <div class="card row-mt">
            <div class="card-header">
              Payment History
            </div>
            <div class="card-body">
              <div class="capped-div">

                Toshiki0620 hasn't made any other payments on your store.
                <table class="table table-responsive-sm table-responsive-md table-striped"></table>
              </div>
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

          <div class="card row-mt">
            <div class="card-header">
              Coupons / Gift Cards
            </div>
            <div class="card-body payment-info">
              <p class="m-0">No coupons or gift cards redeemed against this payment.</p>
            </div>
          </div>

          <div class="card row-mt">
            <div class="card-header">
              Applied Discounts
            </div>
            <div class="card-body payment-info">
              <p class="m-0">No discounts applied.</p>
            </div>
          </div>

          <div class="card row-mt">
            <div class="card-header">
              Notes
              <div class="float-right">
                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#create-note-modal">Create Note</a>
              </div>
            </div>
            <div class="card-body payment-info">
              <p class="m-0">No notes exist for this payment.</p>
            </div>
          </div>

        </div>
      </div>



      <div class="card row-mt">
        <div class="card-header">
          <div class="float-left">
            Commands
          </div>
          <div class="float-right">
            <a href="https://creator.tebex.io/payments/75387494/commands/resend" class="btn btn-secondary">Resend</a>
            <a href="https://creator.tebex.io/payments/75387494/commands/delete" class="btn btn-danger">Delete all</a>
          </div>
        </div>
        <div class="card-body">
          No commands exist for this payment.
        </div>
      </div>

      <div class="card row-mt">
        <div class="card-header">
          Processed Commands
        </div>
        <div class="card-body">
          No processed commands exist for this payment.
        </div>
      </div>





      <div class="card row-mt">
        <div class="card-header">
          <div class="float-left">
            FiveM Assets
          </div>
          <div class="float-right">
            <form class="float-left" action="https://creator.tebex.io/payments/75387494/deliverables/cfx_asset/resend" method="post">
              <input type="hidden" name="_token" value="MkOOOjI5Di1zTfEv93zjaSq05h6tnKJe3p0xCyl1">
              <button type="submit" class="btn btn-secondary">Resend</button>
            </form>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped table-responsive-sm table-responsive-md">
            <tbody>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Granted To</th>
                <th>Access Granted</th>
                <th>Access Revoked</th>
                <th>&nbsp;</th>
              </tr>
              <tr>
                <td>257506</td>
                <td>jz-cayo [Open Source]</td>
                <td>Taku_zou</td>
                <td>May 29, 2024 17:45</td>
                <td>
                  <span class="text-muted">Not yet revoked</span>
                </td>
                <td class="text-right">
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>


      <!-- Modals -->

      <div class="modal" id="package-details-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content"></div>
        </div>
      </div>

      <div class="modal" tabindex="-1" role="dialog" id="create-note-modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form method="post" action="https://creator.tebex.io/payments/75387494/notes">
              <input type="hidden" name="_token" value="MkOOOjI5Di1zTfEv93zjaSq05h6tnKJe3p0xCyl1">
              <div class="modal-header">
                <h5 class="modal-title">Create Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body pb-0">
                <div class="form-group mb-0">
                  <textarea name="note" class="form-control" rows="5" placeholder="Enter the note content"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary ml-auto" value="Create">
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal" tabindex="-1" role="dialog" id="refund-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Refund Payment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p class="mb-0">This action is irreversible, are you sure you wish to refund this payment?</p>
            </div>
            <div class="modal-footer">
              <a href="https://creator.tebex.io/payments/75387494/refund" class="btn btn-secondary">Refund</a>
              <button type="button" class="btn btn-link text-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal" tabindex="-1" role="dialog" id="breakdown-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Breakdown</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body p-0">
              <table class="table table-bordered w-100 mb-0">
                <tbody>
                  <tr>
                    <td>Payment Method</td>
                    <td> PayPal</td>
                  </tr>
                  <tr>
                    <td>Amount</td>
                    <td>EUR €35.00</td>
                  </tr>
                  <tr>
                    <td>Gateway Fee</td>
                    <td>€1.24</td>
                  </tr>
                  <tr>
                    <td>Platform Fee</td>
                    <td>
                      €5.25
                    </td>
                  </tr>
                  <tr>
                    <td>Amount Paid</td>
                    <td>€35.00</td>
                  </tr>
                  <tr>
                    <td>Paid into Wallet</td>
                    <td>€28.51</td>
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