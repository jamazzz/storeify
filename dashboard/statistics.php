<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include 'dashp1.php';
  ?>
  <main role="main" id="main" style="">
    <div class="container-fluid">

      <div style="">
        <header class="page-title">
          <div class="row no-gutters" style="">
            <div class="col-12 col-md-6">
              <div class="d-flex align-items-center" style="">
                <h2 class="my-0">
                  Overview
                </h2>
                <h5 data-toggle="tooltip" class="text-muted my-auto ml-2" title="" data-original-title="This page is displaying figures exclusive of VAT"><i class="fas fa-info-circle"></i></h5>
              </div> <small class="text-muted text-uppercase font-weight-bold">Statistics</small>
            </div>
            <div class="col-12 col-md-6 text-md-right mt-3 mt-lg-0 d-flex align-self-center" style="">
              <div data-toggle="tooltip" data-placement="left" title="" class="dropdown ml-md-auto" data-original-title="Select from the list of categories to track all areas of your stores performance">
                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu dropdown-menu-right w-100"><a href="#" class="dropdown-item">Overview</a><a href="#" class="dropdown-item">Monthly Report</a><a href="#" class="dropdown-item">Payments</a><a href="#" class="dropdown-item">Packages</a><a href="#" class="dropdown-item">Sales</a><a href="#" class="dropdown-item">Coupons</a><a href="#" class="dropdown-item">Creator Codes</a><a href="#" class="dropdown-item">Categories</a><a href="#" class="dropdown-item">Servers</a><a href="#" class="dropdown-item">Referrals</a><a href="#" class="dropdown-item">Gift Cards</a><a href="#" class="dropdown-item">Abandoned Baskets</a><a href="#" class="dropdown-item">Purchase Follow-Ups</a><a href="#" class="dropdown-item">Upselling</a><a href="#" class="dropdown-item">Offers</a><a href="#" class="dropdown-item">Recurring Payments</a></div>
              </div>
            </div>
          </div>
        </header>
        <div class="container-fluid">
          <div class="overview-statistics row">
            <div class="card">
              <div class="card-body"><span>ALL TIME SALES</span>
                <h2 class="mt-2">€ 200.00</h2>
              </div>
            </div>
            <div class="card">
              <div class="card-body"><span>YEAR TO DATE</span>
                <h2 class="mt-2">€ 110.00</h2>
              </div>
            </div>
            <div class="card">
              <div class="card-body" style=""><span>MONTH TO DATE</span>
                <h2 class="mt-2">€ 0.00</h2>
              </div>
            </div>
            <div class="card">
              <div class="card-body" style=""><span style="">TODAY</span>
                <h2 class="mt-2">€ 0.00</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="card row-mt w-100">
              <div class="card-header">
                <form>
                  <div class="row">
                    <div class="col-12 col-xl-5">
                      <div class="vdp-datepicker">
                        <div class="input-group"><span class="vdp-datepicker__calendar-button input-group-prepend"><span class="input-group-text"><i class="fal fa-calendar">

                                <!----></i></span></span> <input type="text" readonly="readonly" autocomplete="off" class="form-control"> <!----> </div>
                        <div class="vdp-datepicker__calendar" style="display: none;">
                          <header><span class="prev">&lt;</span> <span class="day__month_btn up">May 2024</span> <span class="next">&gt;</span></header>
                          <div class=""><span class="cell day-header">Sun</span><span class="cell day-header">Mon</span><span class="cell day-header">Tue</span><span class="cell day-header">Wed</span><span class="cell day-header">Thu</span><span class="cell day-header">Fri</span><span class="cell day-header">Sat</span> <span class="cell day blank"></span><span class="cell day blank"></span><span class="cell day blank"></span><span class="cell day">1</span><span class="cell day">2</span><span class="cell day">3</span><span class="cell day weekend sat">4</span><span class="cell day weekend sun">5</span><span class="cell day">6</span><span class="cell day">7</span><span class="cell day">8</span><span class="cell day selected">9</span><span class="cell day">10</span><span class="cell day weekend sat">11</span><span class="cell day weekend sun">12</span><span class="cell day">13</span><span class="cell day">14</span><span class="cell day">15</span><span class="cell day">16</span><span class="cell day">17</span><span class="cell day weekend sat">18</span><span class="cell day weekend sun">19</span><span class="cell day">20</span><span class="cell day">21</span><span class="cell day">22</span><span class="cell day">23</span><span class="cell day">24</span><span class="cell day weekend sat">25</span><span class="cell day weekend sun">26</span><span class="cell day">27</span><span class="cell day">28</span><span class="cell day">29</span><span class="cell day">30</span><span class="cell day">31</span></div>
                        </div>
                        <div class="vdp-datepicker__calendar" style="display: none;">
                          <header><span class="prev">&lt;</span> <span class="month__year_btn up">2024</span> <span class="next">&gt;</span></header> <span class="cell month">January</span><span class="cell month">February</span><span class="cell month">March</span><span class="cell month">April</span><span class="cell month selected">May</span><span class="cell month">June</span><span class="cell month">July</span><span class="cell month">August</span><span class="cell month">September</span><span class="cell month">October</span><span class="cell month">November</span><span class="cell month">December</span>
                        </div>
                        <div class="vdp-datepicker__calendar" style="display: none;">
                          <header><span class="prev">&lt;</span> <span>2020 - 2029</span> <span class="next">&gt;</span></header> <span class="cell year">2020</span><span class="cell year">2021</span><span class="cell year">2022</span><span class="cell year">2023</span><span class="cell year selected">2024</span><span class="cell year">2025</span><span class="cell year">2026</span><span class="cell year">2027</span><span class="cell year">2028</span><span class="cell year">2029</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-xl-5 mt-3 mt-xl-0">
                      <div class="vdp-datepicker">
                        <div class="input-group"><span class="vdp-datepicker__calendar-button input-group-prepend"><span class="input-group-text"><i class="fal fa-calendar">

                                <!----></i></span></span> <input type="text" readonly="readonly" autocomplete="off" class="form-control"> <!----> </div>
                        <div class="vdp-datepicker__calendar" style="display: none;">
                          <header><span class="prev">&lt;</span> <span class="day__month_btn up">Jun 2024</span> <span class="next">&gt;</span></header>
                          <div class=""><span class="cell day-header">Sun</span><span class="cell day-header">Mon</span><span class="cell day-header">Tue</span><span class="cell day-header">Wed</span><span class="cell day-header">Thu</span><span class="cell day-header">Fri</span><span class="cell day-header">Sat</span> <span class="cell day blank"></span><span class="cell day blank"></span><span class="cell day blank"></span><span class="cell day blank"></span><span class="cell day blank"></span><span class="cell day blank"></span><span class="cell day weekend sat">1</span><span class="cell day weekend sun">2</span><span class="cell day">3</span><span class="cell day">4</span><span class="cell day">5</span><span class="cell day">6</span><span class="cell day">7</span><span class="cell day weekend sat">8</span><span class="cell day selected today weekend sun">9</span><span class="cell day">10</span><span class="cell day">11</span><span class="cell day">12</span><span class="cell day">13</span><span class="cell day">14</span><span class="cell day weekend sat">15</span><span class="cell day weekend sun">16</span><span class="cell day">17</span><span class="cell day">18</span><span class="cell day">19</span><span class="cell day">20</span><span class="cell day">21</span><span class="cell day weekend sat">22</span><span class="cell day weekend sun">23</span><span class="cell day">24</span><span class="cell day">25</span><span class="cell day">26</span><span class="cell day">27</span><span class="cell day">28</span><span class="cell day weekend sat">29</span><span class="cell day weekend sun">30</span></div>
                        </div>
                        <div class="vdp-datepicker__calendar" style="display: none;">
                          <header><span class="prev">&lt;</span> <span class="month__year_btn up">2024</span> <span class="next">&gt;</span></header> <span class="cell month">January</span><span class="cell month">February</span><span class="cell month">March</span><span class="cell month">April</span><span class="cell month">May</span><span class="cell month selected">June</span><span class="cell month">July</span><span class="cell month">August</span><span class="cell month">September</span><span class="cell month">October</span><span class="cell month">November</span><span class="cell month">December</span>
                        </div>
                        <div class="vdp-datepicker__calendar" style="display: none;">
                          <header><span class="prev">&lt;</span> <span>2020 - 2029</span> <span class="next">&gt;</span></header> <span class="cell year">2020</span><span class="cell year">2021</span><span class="cell year">2022</span><span class="cell year">2023</span><span class="cell year selected">2024</span><span class="cell year">2025</span><span class="cell year">2026</span><span class="cell year">2027</span><span class="cell year">2028</span><span class="cell year">2029</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-xl-2 mt-3 mt-xl-0 d-flex align-items-center justify-content-end"><button type="submit" class="btn btn-primary  generate">Generate <i class="fal fa-chevron-right ml-3"></i></button></div>
                  </div>
                </form>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <p class="font-weight-bold">Popular Packages</p>
                    <table id="packages" class="table table-striped table-responsive-sm table-responsive-md">
                      <thead class="thead-light">
                        <tr>
                          <th width="50%">Package</th>
                          <th>Purchases</th>
                          <th>Value</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>[QB/OX] JZ-CAYO</td>
                          <td>1</td>
                          <td>€35.00</td>
                        </tr>
                        <tr>
                          <td>[QB/OX] JZ-CAYO</td>
                          <td>1</td>
                          <td>€20.00</td>
                        </tr> <!---->
                      </tbody>
                    </table>
                  </div>
                  <div>
                    <p class="font-weight-bold">Popular Customers</p>
                    <table id="players" class="table table-striped table-responsive-sm table-responsive-md">
                      <thead class="thead-light">
                        <tr>
                          <th width="50%">Customer</th>
                          <th>Purchases</th>
                          <th>Value</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Toshiki0620</td>
                          <td>1</td>
                          <td>€35.00</td>
                        </tr>
                        <tr>
                          <td>GwapNasty</td>
                          <td>1</td>
                          <td>€20.00</td>
                        </tr> <!---->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row row-mt">
                  <div class="col-sm-12 col-md-6">
                    <p class="font-weight-bold">Popular Categories</p>
                    <table id="categories" class="table table-striped table-responsive-sm table-responsive-md">
                      <thead class="thead-light">
                        <tr>
                          <th width="50%">Category</th>
                          <th>Purchases</th>
                          <th>Value</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Open Source</td>
                          <td>1</td>
                          <td>€35.00</td>
                        </tr>
                        <tr>
                          <td>Escrowed</td>
                          <td>1</td>
                          <td>€20.00</td>
                        </tr> <!---->
                      </tbody>
                    </table>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <p class="font-weight-bold">Popular Emails</p>
                    <table id="emails" class="table table-striped table-responsive-sm table-responsive-md">
                      <thead class="thead-light">
                        <tr>
                          <th width="50%">Email</th>
                          <th>Purchases</th>
                          <th>Value</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>jaewangyoo0620@gmail.com</td>
                          <td>1</td>
                          <td>€35.00</td>
                        </tr>
                        <tr>
                          <td>bhgwap@gmail.com</td>
                          <td>1</td>
                          <td>€20.00</td>
                        </tr> <!---->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row row-mt">
                  <div class="col-12">
                    <p class="font-weight-bold">Popular Servers</p>
                    <table id="servers" class="table table-striped table-responsive-sm table-responsive-md">
                      <thead class="thead-light">
                        <tr>
                          <th width="50%">Server</th>
                          <th>Purchases</th>
                          <th>Value</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>JZ Works</td>
                          <td>2</td>
                          <td>€55.00</td>
                        </tr> <!---->
                      </tbody>
                    </table>
                  </div>
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