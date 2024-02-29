<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
  include($_SERVER['DOCUMENT_ROOT'] . "/storeify/check.php");

  $pinfoquery = "SELECT * FROM users  WHERE id = '" . $_SESSION['userid'] . "'";
  $resultadou = mysqli_query($connect, $pinfoquery);
  $pinfo = mysqli_fetch_assoc($resultadou);

  $winfoquery = "SELECT * FROM websites WHERE id = '" . $_SESSION['currentwebsite'] . "'";
  $resultadow = mysqli_query($connect, $winfoquery);
  $winfo = mysqli_fetch_assoc($resultadow);
  ?>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
      </div>
    </div>
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="dashboard.php"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="dashboard.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav" style="position: fixed; overflow-y: hidden;">
        <br>
        <li class="nav-item menu-items">
          <a class="nav-link" href="dashboard.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/forms/basic_elements.html">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Form Elements</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Tables</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/charts/chartjs.html">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Charts</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/icons/mdi.html">
            <span class="menu-icon">
              <i class="mdi mdi-contacts"></i>
            </span>
            <span class="menu-title">Icons</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <span class="menu-icon">
              <i class="mdi mdi-security"></i>
            </span>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            </ul>
          </div>
        </li>

      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" href="new.php">+ Create New Project</a>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email"></i>
                <span class="count bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Tiago send you a message</p>
                    <p class="text-muted mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                    <p class="text-muted mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">4 new messages</p>
              </div>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell"></i>
                <span class="count bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Event today</p>
                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                    <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-link-variant text-warning"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Launch Admin</p>
                    <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">See all notifications</p>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                  <!-- <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $winfo['name']; ?></p> -->
                  <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $pinfo['username']; ?></p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <form action="../index.php" id="logoutform">
                      <p class="preview-subject mb-1" onclick="submitForm()">Log out</p>
                      <script>
                        function submitForm() {
                          document.getElementById("logoutform").submit();
                        }
                      </script>
                    </form>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">$12.34</h3>
                        <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success ">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Potential growth</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">$17.34</h3>
                        <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Revenue current</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">$12.34</h3>
                        <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-danger">
                        <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Daily Income</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">$31.53</h3>
                        <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success ">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Expense current</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Transaction History</h4>
                  <canvas id="transaction-history" class="transaction-chart"></canvas>
                  <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">Transfer to Paypal</h6>
                      <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">$236</h6>
                    </div>
                  </div>
                  <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">Tranfer to Stripe</h6>
                      <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">$593</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Area chart</h4>
                  <canvas id="areaChart" style="height:250px"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Revenue</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">$32123</h2>
                        <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                      </div>
                      <h6 class="text-muted font-weight-normal">11.38% Since last month</h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Sales</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">$45850</h2>
                        <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                      </div>
                      <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5>Purchase</h5>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0">$2039</h2>
                        <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p>
                      </div>
                      <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order Status</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </th>
                          <th> Client Name </th>
                          <th> Order No </th>
                          <th> Product Cost </th>
                          <th> Project </th>
                          <th> Payment Mode </th>
                          <th> Start Date </th>
                          <th> Payment Status </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="assets/images/faces/face1.jpg" alt="image" />
                            <span class="ps-2">Henry Klein</span>
                          </td>
                          <td> 02312 </td>
                          <td> $14,500 </td>
                          <td> Dashboard </td>
                          <td> Credit card </td>
                          <td> 04 Dec 2019 </td>
                          <td>
                            <div class="badge badge-outline-success">Approved</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="assets/images/faces/face2.jpg" alt="image" />
                            <span class="ps-2">Estella Bryan</span>
                          </td>
                          <td> 02312 </td>
                          <td> $14,500 </td>
                          <td> Website </td>
                          <td> Cash on delivered </td>
                          <td> 04 Dec 2019 </td>
                          <td>
                            <div class="badge badge-outline-warning">Pending</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="assets/images/faces/face5.jpg" alt="image" />
                            <span class="ps-2">Lucy Abbott</span>
                          </td>
                          <td> 02312 </td>
                          <td> $14,500 </td>
                          <td> App design </td>
                          <td> Credit card </td>
                          <td> 04 Dec 2019 </td>
                          <td>
                            <div class="badge badge-outline-danger">Rejected</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="assets/images/faces/face3.jpg" alt="image" />
                            <span class="ps-2">Peter Gill</span>
                          </td>
                          <td> 02312 </td>
                          <td> $14,500 </td>
                          <td> Development </td>
                          <td> Online Payment </td>
                          <td> 04 Dec 2019 </td>
                          <td>
                            <div class="badge badge-outline-success">Approved</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="assets/images/faces/face4.jpg" alt="image" />
                            <span class="ps-2">Sallie Reyes</span>
                          </td>
                          <td> 02312 </td>
                          <td> $14,500 </td>
                          <td> Website </td>
                          <td> Credit card </td>
                          <td> 04 Dec 2019 </td>
                          <td>
                            <div class="badge badge-outline-success">Approved</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title">Messages</h4>
                    <p class="text-muted mb-1 small">View all</p>
                  </div>
                  <div class="preview-list">
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face6.jpg" alt="image" class="rounded-circle" />
                      </div>
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">Leonard</h6>
                            <p class="text-muted text-small">5 minutes ago</p>
                          </div>
                          <p class="text-muted">Well, it seems to be working now.</p>
                        </div>
                      </div>
                    </div>
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face8.jpg" alt="image" class="rounded-circle" />
                      </div>
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">Luella Mills</h6>
                            <p class="text-muted text-small">10 Minutes Ago</p>
                          </div>
                          <p class="text-muted">Well, it seems to be working now.</p>
                        </div>
                      </div>
                    </div>
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face9.jpg" alt="image" class="rounded-circle" />
                      </div>
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">Ethel Kelly</h6>
                            <p class="text-muted text-small">2 Hours Ago</p>
                          </div>
                          <p class="text-muted">Please review the tickets</p>
                        </div>
                      </div>
                    </div>
                    <div class="preview-item border-bottom">
                      <div class="preview-thumbnail">
                        <img src="assets/images/faces/face11.jpg" alt="image" class="rounded-circle" />
                      </div>
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">Herman May</h6>
                            <p class="text-muted text-small">4 Hours Ago</p>
                          </div>
                          <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Visitors by Countries</h4>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>
                                <i class="flag-icon flag-icon-us"></i>
                              </td>
                              <td>USA</td>
                              <td class="text-right"> 1500 </td>
                              <td class="text-right font-weight-medium"> 56.35% </td>
                            </tr>
                            <tr>
                              <td>
                                <i class="flag-icon flag-icon-de"></i>
                              </td>
                              <td>Germany</td>
                              <td class="text-right"> 800 </td>
                              <td class="text-right font-weight-medium"> 33.25% </td>
                            </tr>
                            <tr>
                              <td>
                                <i class="flag-icon flag-icon-au"></i>
                              </td>
                              <td>Australia</td>
                              <td class="text-right"> 760 </td>
                              <td class="text-right font-weight-medium"> 15.45% </td>
                            </tr>
                            <tr>
                              <td>
                                <i class="flag-icon flag-icon-gb"></i>
                              </td>
                              <td>United Kingdom</td>
                              <td class="text-right"> 450 </td>
                              <td class="text-right font-weight-medium"> 25.00% </td>
                            </tr>
                            <tr>
                              <td>
                                <i class="flag-icon flag-icon-ro"></i>
                              </td>
                              <td>Romania</td>
                              <td class="text-right"> 620 </td>
                              <td class="text-right font-weight-medium"> 10.25% </td>
                            </tr>
                            <tr>
                              <td>
                                <i class="flag-icon flag-icon-br"></i>
                              </td>
                              <td>Brasil</td>
                              <td class="text-right"> 230 </td>
                              <td class="text-right font-weight-medium"> 75.00% </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div id="audience-map" class="vector-map"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
  <script src="assets/js/chart.js"></script>

</body>

</html>