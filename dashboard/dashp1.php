<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icons.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/modern-vertical/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.php -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="dashlanding.php"><img src="../assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="dashlanding.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <!-- Dashboard -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="dashlanding.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <!-- Members -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="members.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Members</span>
          </a>
        </li>
        <!-- Tickets -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="tickets.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Tickets</span>
          </a>
        </li>
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
          <a class="nav-link" data-bs-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
            <span class="menu-icon">
              <i class="mdi mdi-view-list"></i>
            </span>
            <span class="menu-title">Page Layouts</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="page-layouts">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="./pages/layout/boxed-layout.php">Boxed</a></li>
              <li class="nav-item"> <a class="nav-link" href="./pages/layout/rtl-layout.php">RTL</a></li>
            </ul>
          </div>
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
              <li class="nav-item"> <a class="nav-link" href="./pages/samples/search-results.php"> Search Results </a>
              </li>
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
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.php -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="dashlanding.php"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
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
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                    <p class="text-muted mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
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
                  <img class="img-xs rounded-circle" src="../assets/images/faces/face15.jpg" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
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
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">Advanced settings</p>
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