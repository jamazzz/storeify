<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Storeify</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/storeify/assets/mdi/css/materialdesignicons.min.css">
  <!-- endinject -->
  <title>storeify | Dashboard</title>
  <meta name="title" content="storeify | Welcome">
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="/storeify/assets/css/modern-vertical/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
</head>

<body>
  </script>
  <div class="container-scroller">
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");


    $pinfoquery = "SELECT * FROM users  WHERE id = '" . $_SESSION['userid'] . "'";
    $resultadou = mysqli_query($connect, $pinfoquery);
    $pinfo = mysqli_fetch_assoc($resultadou);

    $winfoquery = "SELECT * FROM websites WHERE id = '" . $_SESSION['currentwebsite'] . "'";
    $resultadow = mysqli_query($connect, $winfoquery);
    $winfo = mysqli_fetch_assoc($resultadow);
    ?>
    <!-- partial:partials/_sidebar.php -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/storeify/dashboard/dashlanding.php" style="color: white; font-weight: bold; text-decoration: none;">Storeify</a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
      <ul class="nav">
        <li class="nav-item nav-category">
          <span class="nav-link">Navegação</span>
        </li>
        <!-- Dashboard -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="/storeify/admin/dashboard.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <!-- Payments -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="/storeify/admin/stores.php">
            <span class="menu-icon">
              <i class="mdi mdi-package"></i>
            </span>
            <span class="menu-title">Lojas</span>
          </a>
        </li>
        <!-- Packages -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="/storeify/admin/members.php">
            <span class="menu-icon">
              <i class="mdi mdi-package"></i>
            </span>
            <span class="menu-title">Membros</span>
          </a>
        </li>
        <!-- Webstore -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="/storeify/admin/products.php">
            <span class="menu-icon">
              <i class="mdi mdi-web"></i>
            </span>
            <span class="menu-title">Produtos</span>
          </a>
        </li>
        <!-- Webstore -->
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#payments" aria-expanded="false" aria-controls="payments">
            <span class="menu-icon">
              <i class="mdi mdi-cash"></i>
            </span>
            <span class="menu-title">Pagamentos</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="payments">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/storeify/admin/payments.php">Pagamentos</a></li>
              <li class="nav-item"> <a class="nav-link" href="/storeify/admin/exports.php">Registos</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.php -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="/storeify/dashboard/dashlanding.php"><img src="/storeify/assets/images/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                <div class="navbar-profile">
                  <!-- <img class="img-xs rounded-circle" src="storeify/assets/images/faces/face15.jpg" alt=""> -->
                  <i class="fa-solid fa-user"></i>
                  <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $pinfo['username']; ?></p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="/storeify/index.php">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content" href="/storeify/index.php">
                    <p class="preview-subject mb-1" href="/storeify/index.php">Terminar Sessão</p>
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
      <!-- Modal starts -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Perfil</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="settings.php" method="post">
              <div class="modal-body">
                <label>Username</label>
                <input type="text" id="username" name="username" class="form-control" value="<?php echo $pinfo['username']; ?>">
                <br>
                <label>Email</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo $pinfo['email']; ?>">
                <br>
                <label>Password</label>
                <input type="password" id="password" name="password" class="form-control" value="PASSWORDEXAMPLE">
              </div>
              <div class="modal-footer">
                <input type="text" id="currentpage" name="currentpage" class="invisible" value="<?php echo $_SERVER['PHP_SELF']; ?>">
                <button type="submit" class="btn btn-success">Submeter</button>
                <button type="cancel" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal Ends -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">