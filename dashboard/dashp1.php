<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/storeify/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/storeify/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/storeify/assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="/storeify/assets/vendors/flag-icon-css/css/flag-icons.min.css">
  <link rel="stylesheet" href="/storeify/assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="/storeify/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="/storeify/assets/css/modern-vertical/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="/storeify/assets/images/favicon.png" />
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
        <a class="sidebar-brand brand-logo" href="dashlanding.php"><img src="/storeify/assets/images/logo.svg" alt="logo" /></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
      <ul class="nav">
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <!-- Dashboard -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="/storeify/dashboard/dashlanding.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <!-- Payments -->
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#payments" aria-expanded="false" aria-controls="payments">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Pagamentos</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="payments">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/storeify/dashboard/payments/payments.php">Pagamentos</a></li>
              <li class="nav-item"> <a class="nav-link" href="/storeify/dashboard/payments/wallet.php">Carteira</a></li>
              <li class="nav-item"> <a class="nav-link" href="/storeify/dashboard/payments/exports.php">Registros</a></li>
            </ul>
          </div>
        </li>
        <!-- Packages -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="/storeify/dashboard/packages/packages.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Pacotes</span>
          </a>
        </li>
        <!-- Statistics -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="/storeify/dashboard/statistics.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Estatísticas</span>
          </a>
        </li>
        <!-- Clients -->
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#customers" aria-expanded="false" aria-controls="customers">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Clientes</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="customers">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/storeify/dashboard/customers/lookup.php">Pesquisar</a></li>
              <li class="nav-item"> <a class="nav-link" href="/storeify/dashboard/customers/bans.php">Proibições</a></li>
            </ul>
          </div>
        </li>
        <!-- Webstore -->
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#webstore" aria-expanded="false" aria-controls="webstore">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Webstore</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="webstore">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="/storeify/dashboard/webstore/appearance.php">Aparência</a></li>
              <li class="nav-item"> <a class="nav-link" href="/storeify/dashboard/webstore/sidebar.php">Sidebar</a></li>
              <li class="nav-item"> <a class="nav-link" href="/storeify/dashboard/webstore/pages.php">Páginas</a></li>
            </ul>
          </div>
        </li>
        <!-- Members -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="/storeify/dashboard/members.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Members</span>
          </a>
        </li>
        <!--
        <li class="nav-item nav-category">
          <span class="nav-link">Debug</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="./pages/widgets/widgets.php">
            <span class="menu-icon">
              <i class="mdi mdi-texture"></i>
            </span>
            <span class="menu-title">Widgets</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
            <span class="menu-icon">
              <i class="mdi mdi-crosshairs-gps"></i>
            </span>
            <span class="menu-title">Sidebar Layouts</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="sidebar-layouts">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/layout/compact-menu.php">Compact menu</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/layout/sidebar-collapsed.php">Icon menu</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/layout/sidebar-hidden.php">Sidebar Hidden</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/layout/sidebar-hidden-overlay.php">Sidebar Overlay</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/layout/sidebar-fixed.php">Sidebar Fixed</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Basic UI Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.php">Accordions</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.php">Buttons</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.php">Badges</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.php">Breadcrumbs</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.php">Dropdowns</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.php">Modals</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.php">Progress bar</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.php">Pagination</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.php">Tabs</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.php">Typography</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
            <span class="menu-icon">
              <i class="mdi mdi-shape-plus"></i>
            </span>
            <span class="menu-title">Advanced Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-advanced">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/dragula.php">Dragula</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/clipboard.php">Clipboard</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/context-menu.php">Context menu</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/slider.php">Slider</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/loaders.php">Loaders</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/colcade.php">Colcade</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/carousel.php">Carousel</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/ui-features/tooltips.php">Tooltips</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Form Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/forms/basic_elements.php">Basic Form</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/forms/advanced_elements.php">Advanced Form</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/forms/validation.php">Validation</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/forms/wizard.php">Wizard</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Tables</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/tables/basic-table.php">Basic table</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/tables/data-table.php">Data table</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/tables/js-grid.php">Js-grid</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/tables/sortable-table.php">Sortable table</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
            <span class="menu-icon">
              <i class="mdi mdi-format-text"></i>
            </span>
            <span class="menu-title">Editors</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="editors">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/forms/text_editor.php">Text editors</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/forms/code_editor.php">Code Editor</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Charts</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/charts/chartjs.php">ChartJs</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/charts/morris.php">Morris</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/charts/flot-chart.php">Flot</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/charts/google-charts.php">Google charts</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/charts/sparkline.php">Sparkline js</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/charts/c3.php">C3 charts</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/charts/chartist.php">Chartists</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/charts/justGage.php">JustGage</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
            <span class="menu-icon">
              <i class="mdi mdi-map-marker-radius"></i>
            </span>
            <span class="menu-title">Maps</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="maps">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/maps/google-maps.php">Google Maps</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/maps/mapael.php">Mapeal</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/maps/vector-map.php">Vector map</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
        <li class="nav-item menu-items">
          <a class="nav-link" href="./pages/ui-features/notifications.php">
            <span class="menu-icon">
              <i class="mdi mdi-bell-ring"></i>
            </span>
            <span class="menu-title">Notifications</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
            <span class="menu-icon">
              <i class="mdi mdi-contacts"></i>
            </span>
            <span class="menu-title">Icons</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/icons/flag-icons.php">Flag icons</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/icons/mdi.php">Mdi icons</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/icons/font-awesome.php">Font Awesome</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/icons/simple-line-icon.php">Simple line icons</a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="./pages/icons/themify.php">Themify icons</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">More</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="./pages/ui-features/popups.php">
            <span class="menu-icon">
              <i class="mdi mdi-forum"></i>
            </span>
            <span class="menu-title">Popups</span>
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
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/login.php"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/login-2.php"> Login 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/register.php"> Register </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/register-2.php"> Register 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/lock-screen.php"> Lockscreen </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
            <span class="menu-icon">
              <i class="mdi mdi-earth"></i>
            </span>
            <span class="menu-title">General Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="general-pages">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/blank-page.php"> Blank Page </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/profile.php"> Profile </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/portfolio.php"> Portfolio </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/faq.php"> FAQ </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/faq-2.php"> FAQ 2 </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/search-results.php"> Search Results </a> </li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/news-grid.php"> News grid </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/timeline.php"> Timeline </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
            <span class="menu-icon">
              <i class="mdi mdi-lock"></i>
            </span>
            <span class="menu-title">Error pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="error">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/error-404.php"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/error-500.php"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
            <span class="menu-icon">
              <i class="mdi mdi-medical-bag"></i>
            </span>
            <span class="menu-title">E-commerce</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="e-commerce">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/invoice.php"> Invoice </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/pricing-table.php"> Pricing Table </a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/orders.php"> Orders </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="./pages/apps/calendar.php">
            <span class="menu-icon">
              <i class="mdi mdi-calendar-today"></i>
            </span>
            <span class="menu-title">Calendar</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="./pages/apps/todo.php">
            <span class="menu-icon">
              <i class="mdi mdi-bulletin-board"></i>
            </span>
            <span class="menu-title">Todo list</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="./pages/apps/email.php">
            <span class="menu-icon">
              <i class="mdi mdi-email"></i>
            </span>
            <span class="menu-title">E-mail</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="./pages/apps/gallery.php">
            <span class="menu-icon">
              <i class="mdi mdi-image-filter-center-focus-weak"></i>
            </span>
            <span class="menu-title">Gallery</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="../../docs/documentation.php">
            <span class="menu-icon">
              <i class="mdi mdi-file-document"></i>
            </span>
            <span class="menu-title">Documentation</span>
          </a>
        </li>
        -->
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.php -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="dashlanding.php"><img src="/storeify/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" href="/storeify/home.php">View Website</a>
            </li>
            <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell"></i>
                <span class="count bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
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
                      <i class="mdi mdi-shape-plus text-danger"></i>
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
                  <!-- <img class="img-xs rounded-circle" src="storeify/assets/images/faces/face15.jpg" alt=""> -->
                  <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $pinfo['username']; ?></p>
                  <!-- <p class="mb-0 d-none d-sm-block navbar-profile-name" style="text-align:end;"><?php echo $pinfo['username'] . "<br>" . $winfo['name']; ?></p> -->
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <a class="dropdown-item preview-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-shape-plus text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="select.php">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-folder-account text-warning"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Projects</p>
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
                    <form action="/storeify/index.php" id="logoutform">
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
      <!-- Modal starts -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
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
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="cancel" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal Ends -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">