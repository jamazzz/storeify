<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include '../dashp1.php';
  ?>
  <main role="main" id="main" style="">
    <div class="container-fluid" style="">


      <header class="page-title">
        <div class="row no-gutters">
          <div class="col-12 col-md-6" style="">
            <h1 class="my-0" style="">Sidebar</h1>
          </div>
        </div>
      </header>



      <div class="card">
        <div class="card-header" style="">
          Modules
        </div>
        <div class="card-body">
          <table class="table table-striped table-responsive-sm table-responsive-md">
            <thead class="thead-light">
              <tr>
                <th class="d-none d-lg-table-cell" width="3%"></th>
                <th>Header</th>
                <th>Type</th>
                <th>Status</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody id="modules-move" data-order-update-url="https://creator.tebex.io/sidebar/order">
              <tr data-id="3589126" class="module">
                <td width="3%" class="d-none d-lg-table-cell">
                  <span><i class="fal fa-bars pr-4 move"></i></span>
                </td>
                <td>More stuff in our discord !</td>
                <td>Text Box</td>
                <td>
                  <span class="label label-success">Active</span>
                </td>
                <td class="text-right">
                  <div class="btn-group">
                    <a href="https://creator.tebex.io/sidebar/3589126" class="btn text-primary">Edit</a>
                    <a href="https://creator.tebex.io/sidebar/3589126/delete" class="btn text-danger">Delete</a>
                  </div>
                </td>
              </tr>
              <tr data-id="3642033" class="module">
                <td width="3%" class="d-none d-lg-table-cell">
                  <span><i class="fal fa-bars pr-4 move"></i></span>
                </td>
                <td>Tebex Terms &amp; Conditions</td>
                <td>Text Box</td>
                <td>
                  <span class="label label-success">Active</span>
                </td>
                <td class="text-right">
                  <div class="btn-group">
                    <a href="https://creator.tebex.io/sidebar/3642033" class="btn text-primary">Edit</a>
                    <a href="https://creator.tebex.io/sidebar/3642033/delete" class="btn text-danger">Delete</a>
                  </div>
                </td>
              </tr>
              <tr data-id="3642040" class="module">
                <td width="3%" class="d-none d-lg-table-cell">
                  <span><i class="fal fa-bars pr-4 move"></i></span>
                </td>
                <td>Privacy Policy</td>
                <td>Text Box</td>
                <td>
                  <span class="label label-success">Active</span>
                </td>
                <td class="text-right">
                  <div class="btn-group">
                    <a href="https://creator.tebex.io/sidebar/3642040" class="btn text-primary">Edit</a>
                    <a href="https://creator.tebex.io/sidebar/3642040/delete" class="btn text-danger">Delete</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </main>
  <?php
  include '../dashp2.php';
  ?>