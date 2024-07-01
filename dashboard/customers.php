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
          <div class="col-12 col-md-6" >
            <h1 class="my-0" >Bans</h1>
          </div>
          <div class="col-12 col-md-6 text-left text-md-right" >
          </div>
        </div>
      </header>

      <div class="card" >
        <div class="card-body" >
          <div class="row" >
            <div class="col-12 col-xl-2 text-center text-xl-left align-self-center">
              <div class="card m-0 mt-2" id="filter-card" style="display: none;">
                <form method="get" action="https://creator.tebex.io/bans">
                  <div class="card-body">
                    <div class="card card-header form-group search-form-fields">
                      <div class="search-attribute">
                        <div class="dropdown bootstrap-select form-control"><select class="form-control selectpicker" name="attribute">
                            <option value="username" data-query=".text">
                              Username
                            </option>
                            <option value="uuid" data-query=".text">
                              ID
                            </option>
                            <option value="ip" data-query=".text">
                              IP Address
                            </option>
                          </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Username">
                            <div class="filter-option">
                              <div class="filter-option-inner">
                                <div class="filter-option-inner-inner">Username</div>
                              </div>
                            </div>
                          </button>
                          <div class="dropdown-menu ">
                            <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                              <ul class="dropdown-menu inner show" role="presentation"></ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="search-query mt-3">
                        <div class="text">
                          <input type="text" class="form-control" name="query" placeholder="Enter your search query" value="" required="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-12 text-center text-md-right row-mt-mobile">
                        <div class="search-submit">
                          <a href="https://creator.tebex.io/bans" class="btn btn-light mr-2">Clear</a>
                          <input type="submit" class="btn btn-primary" value="Apply Filters">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-12 col-xl-10 align-self-center text-center text-xl-right my-3 my-xl-0" >
              <span class="result-count"><strong>1</strong> results</span>
            </div>
          </div>
          <div class="row row-mt">
            <div class="col-md-12">
              <table class="table table-striped table-responsive-sm table-responsive-md">
                <thead class="thead-light">
                  <tr>
                    <th>Customer</th>
                    <th>IP</th>
                    <th>Date</th>
                    <th width="15%">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="https://avatars.discourse.org/v4/letter/j/7933a0/256.png" style="max-width:30px;" class="rounded mr-2"> Jamaz
                    </td>
                    <td>
                      97.55.44.222 </td>
                    <td>Jun 09, 2024 16:21</td>
                    <td class="text-right">
                      <a href="#" class="btn text-primary" data-toggle="modal" data-target="#ban-reason-modal" data-username="Jamaz" data-reason="ban">View reason</a>
                      <a href="https://creator.tebex.io/bans/93287/delete" class="btn text-danger">Unban</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row">
            <div class="col-xl-4 align-self-center row-mt-mobile text-center text-xl-left">
            </div>
            <div class="col-xl-8 align-self-center row-mt-mobile text-center text-xl-right">
              <span class="result-count"><strong>1</strong> results</span>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal" id="ban-reason-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">View reason</h5>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body"></div>
        </div>
      </div>
    </div>


  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>