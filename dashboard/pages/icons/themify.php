<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/vendors/ti-icons/css/themify-icons.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/modern-vertical/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="../../dashlanding.php"><img src="../../../assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../dashlanding.php"><img src="../../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../../assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-shape-plus text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../dashlanding.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/widgets/widgets.php">
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/layout/boxed-layout.php">Boxed</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/layout/rtl-layout.php">RTL</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/layout/compact-menu.php">Compact menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-collapsed.php">Icon menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-hidden.php">Sidebar Hidden</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-hidden-overlay.php">Sidebar Overlay</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/layout/sidebar-fixed.php">Sidebar Fixed</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/accordions.php">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.php">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/badges.php">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/breadcrumbs.php">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.php">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/modals.php">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/progress.php">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/pagination.php">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/tabs.php">Tabs</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.php">Typography</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dragula.php">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/clipboard.php">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/context-menu.php">Context menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/slider.php">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/loaders.php">Loaders</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/colcade.php">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/carousel.php">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/tooltips.php">Tooltips</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/basic_elements.php">Basic Form</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/advanced_elements.php">Advanced Form</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/validation.php">Validation</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/wizard.php">Wizard</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.php">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/data-table.php">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/js-grid.php">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/sortable-table.php">Sortable table</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/text_editor.php">Text editors</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/forms/code_editor.php">Code Editor</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.php">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/morris.php">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/flot-chart.php">Flot</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/google-charts.php">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/sparkline.php">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/c3.php">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartist.php">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/justGage.php">JustGage</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/maps/google-maps.php">Google Maps</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/maps/mapael.php">Mapeal</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/maps/vector-map.php">Vector map</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/ui-features/notifications.php">
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/flag-icons.php">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/mdi.php">Mdi icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/font-awesome.php">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/simple-line-icon.php">Simple line icons</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/themify.php">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">More</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/ui-features/popups.php">
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.php"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login-2.php"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.php"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register-2.php"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/lock-screen.php"> Lockscreen </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.php"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/profile.php"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/portfolio.php"> Portfolio </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/faq.php"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/faq-2.php"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/search-results.php"> Search Results </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/news-grid.php"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/timeline.php"> Timeline </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.php"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.php"> 500 </a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/invoice.php"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/pricing-table.php"> Pricing Table </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/orders.php"> Orders </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/apps/calendar.php">
              <span class="menu-icon">
                <i class="mdi mdi-calendar-today"></i>
              </span>
              <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/apps/todo.php">
              <span class="menu-icon">
                <i class="mdi mdi-bulletin-board"></i>
              </span>
              <span class="menu-title">Todo list</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/apps/email.php">
              <span class="menu-icon">
                <i class="mdi mdi-email"></i>
              </span>
              <span class="menu-title">E-mail</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/apps/gallery.php">
              <span class="menu-icon">
                <i class="mdi mdi-image-filter-center-focus-weak"></i>
              </span>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../../../docs/documentation.php">
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
        <!-- partial:../../partials/_navbar.php -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../dashlanding.php"><img src="../../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
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
                      <img src="../../../assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../../assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../../assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
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
                    <img class="img-xs rounded-circle" src="../../../assets/images/faces/face15.jpg" alt="">
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
            <div class="page-header">
              <h3 class="page-title"> Themify icons </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Icons</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Themify icons</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Arrows & direction icons</h4>
                    <div class="icons-list row">
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-up"></i> ti-arrow-up </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-right"></i> ti-arrow-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-left"></i> ti-arrow-left </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-down"></i> ti-arrow-down </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrows-vertical"></i> ti-arrows-vertical </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrows-horizontal"></i> ti-arrows-horizontal </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-up"></i> ti-angle-up </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-right"></i> ti-angle-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-left"></i> ti-angle-left </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-down"></i> ti-angle-down </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-up"></i> ti-angle-double-up </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-right"></i> ti-angle-double-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-left"></i> ti-angle-double-left </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-down"></i> ti-angle-double-down </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-move"></i> ti-move </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-fullscreen"></i> ti-fullscreen </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-top-right"></i> ti-arrow-top-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-top-left"></i> ti-arrow-top-left </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-up"></i> ti-arrow-circle-up </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-right"></i> ti-arrow-circle-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-left"></i> ti-arrow-circle-left </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-down"></i> ti-arrow-circle-down </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrows-corner"></i> ti-arrows-corner </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-split-v"></i> ti-split-v </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-split-v-alt"></i> ti-split-v-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-split-h"></i> ti-split-h </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-up"></i> ti-hand-point-up </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-right"></i> ti-hand-point-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-left"></i> ti-hand-point-left </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-down"></i> ti-hand-point-down </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-back-right"></i> ti-back-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-back-left"></i> ti-back-left </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-exchange-vertical"></i> ti-exchange-vertical </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Web app icons</h4>
                    <div class="icons-list row">
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wand"></i> ti-wand </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-save"></i> ti-save </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-save-alt"></i> ti-save-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-direction"></i> ti-direction </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-direction-alt"></i> ti-direction-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-user"></i> ti-user </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-link"></i> ti-link </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-unlink"></i> ti-unlink </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-trash"></i> ti-trash </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-target"></i> ti-target </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tag"></i> ti-tag </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-desktop"></i> ti-desktop </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tablet"></i> ti-tablet </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-mobile"></i> ti-mobile </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-email"></i> ti-email </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-star"></i> ti-star </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-spray"></i> ti-spray </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-signal"></i> ti-signal </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shopping-cart"></i> ti-shopping-cart </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shopping-cart-full"></i> ti-shopping-cart-full </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-settings"></i> ti-settings </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-search"></i> ti-search </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-zoom-in"></i> ti-zoom-in </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-zoom-out"></i> ti-zoom-out </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cut"></i> ti-cut </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler"></i> ti-ruler </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler-alt-2"></i> ti-ruler-alt-2 </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler-pencil"></i> ti-ruler-pencil </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler-alt"></i> ti-ruler-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bookmark"></i> ti-bookmark </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bookmark-alt"></i> ti-bookmark-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-reload"></i> ti-reload </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-plus"></i> ti-plus </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-minus"></i> ti-minus </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-close"></i> ti-close </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pin"></i> ti-pin </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pencil"></i> ti-pencil </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pencil-alt"></i> ti-pencil-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paint-roller"></i> ti-paint-roller </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paint-bucket"></i> ti-paint-bucket </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-na"></i> ti-na </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-medall"></i> ti-medall </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-medall-alt"></i> ti-medall-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-marker"></i> ti-marker </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-marker-alt"></i> ti-marker-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-lock"></i> ti-lock </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-unlock"></i> ti-unlock </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-location-arrow"></i> ti-location-arrow </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout"></i> ti-layout </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layers"></i> ti-layers </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layers-alt"></i> ti-layers-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-key"></i> ti-key </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-image"></i> ti-image </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-heart"></i> ti-heart </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-heart-broken"></i> ti-heart-broken </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-stop"></i> ti-hand-stop </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-open"></i> ti-hand-open </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-drag"></i> ti-hand-drag </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flag"></i> ti-flag </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flag-alt"></i> ti-flag-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flag-alt-2"></i> ti-flag-alt-2 </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-eye"></i> ti-eye </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-import"></i> ti-import </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-export"></i> ti-export </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cup"></i> ti-cup </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-crown"></i> ti-crown </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comments"></i> ti-comments </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comment"></i> ti-comment </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comment-alt"></i> ti-comment-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-thought"></i> ti-thought </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-clip"></i> ti-clip </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-check"></i> ti-check </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-check-box"></i> ti-check-box </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-camera"></i> ti-camera </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-announcement"></i> ti-announcement </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-brush"></i> ti-brush </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-brush-alt"></i> ti-brush-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-palette"></i> ti-palette </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-briefcase"></i> ti-briefcase </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bolt"></i> ti-bolt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bolt-alt"></i> ti-bolt-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-blackboard"></i> ti-blackboard </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bag"></i> ti-bag </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-world"></i> ti-world </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wheelchair"></i> ti-wheelchair </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-car"></i> ti-car </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-truck"></i> ti-truck </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-timer"></i> ti-timer </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ticket"></i> ti-ticket </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-thumb-up"></i> ti-thumb-up </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-thumb-down"></i> ti-thumb-down </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stats-up"></i> ti-stats-up </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stats-down"></i> ti-stats-down </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shine"></i> ti-shine </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-right"></i> ti-shift-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-left"></i> ti-shift-left </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-right-alt"></i> ti-shift-right-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-left-alt"></i> ti-shift-left-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shield"></i> ti-shield </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-notepad"></i> ti-notepad </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-server"></i> ti-server </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pulse"></i> ti-pulse </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-printer"></i> ti-printer </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-power-off"></i> ti-power-off </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-plug"></i> ti-plug </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pie-chart"></i> ti-pie-chart </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-panel"></i> ti-panel </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-package"></i> ti-package </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-music"></i> ti-music </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-music-alt"></i> ti-music-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-mouse"></i> ti-mouse </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-mouse-alt"></i> ti-mouse-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-money"></i> ti-money </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microphone"></i> ti-microphone </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-menu"></i> ti-menu </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-menu-alt"></i> ti-menu-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-map"></i> ti-map </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-map-alt"></i> ti-map-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-location-pin"></i> ti-location-pin </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-light-bulb"></i> ti-light-bulb </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-info"></i> ti-info </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-infinite"></i> ti-infinite </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-id-badge"></i> ti-id-badge </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hummer"></i> ti-hummer </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-home"></i> ti-home </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-help"></i> ti-help </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-headphone"></i> ti-headphone </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-harddrives"></i> ti-harddrives </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-harddrive"></i> ti-harddrive </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-gift"></i> ti-gift </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-game"></i> ti-game </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-filter"></i> ti-filter </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-files"></i> ti-files </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-file"></i> ti-file </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-zip"></i> ti-zip </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-folder"></i> ti-folder </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-envelope"></i> ti-envelope </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dashboard"></i> ti-dashboard </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cloud"></i> ti-cloud </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cloud-up"></i> ti-cloud-up </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cloud-down"></i> ti-cloud-down </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-clipboard"></i> ti-clipboard </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-calendar"></i> ti-calendar </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-book"></i> ti-book </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bell"></i> ti-bell </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-basketball"></i> ti-basketball </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bar-chart"></i> ti-bar-chart </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bar-chart-alt"></i> ti-bar-chart-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-archive"></i> ti-archive </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-anchor"></i> ti-anchor </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-alert"></i> ti-alert </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-alarm-clock"></i> ti-alarm-clock </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-agenda"></i> ti-agenda </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-write"></i> ti-write </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wallet"></i> ti-wallet </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-video-clapper"></i> ti-video-clapper </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-video-camera"></i> ti-video-camera </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-vector"></i> ti-vector </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-support"></i> ti-support </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stamp"></i> ti-stamp </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-slice"></i> ti-slice </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shortcode"></i> ti-shortcode </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-receipt"></i> ti-receipt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pin2"></i> ti-pin2 </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pin-alt"></i> ti-pin-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pencil-alt2"></i> ti-pencil-alt2 </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-eraser"></i> ti-eraser </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-more"></i> ti-more </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-more-alt"></i> ti-more-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microphone-alt"></i> ti-microphone-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-magnet"></i> ti-magnet </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-line-double"></i> ti-line-double </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-line-dotted"></i> ti-line-dotted </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-line-dashed"></i> ti-line-dashed </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ink-pen"></i> ti-ink-pen </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-info-alt"></i> ti-info-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-help-alt"></i> ti-help-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-headphone-alt"></i> ti-headphone-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-gallery"></i> ti-gallery </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-face-smile"></i> ti-face-smile </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-face-sad"></i> ti-face-sad </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-credit-card"></i> ti-credit-card </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comments-smiley"></i> ti-comments-smiley </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-time"></i> ti-time </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-share"></i> ti-share </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-share-alt"></i> ti-share-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-rocket"></i> ti-rocket </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-new-window"></i> ti-new-window </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-rss"></i> ti-rss </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-rss-alt"></i> ti-rss-alt </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Control icons</h4>
                    <div class="icons-list row">
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-stop"></i> ti-control-stop </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-shuffle"></i> ti-control-shuffle </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-play"></i> ti-control-play </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-pause"></i> ti-control-pause </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-forward"></i> ti-control-forward </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-backward"></i> ti-control-backward </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-volume"></i> ti-volume </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-skip-forward"></i> ti-control-skip-forward </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-skip-backward"></i> ti-control-skip-backward </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-record"></i> ti-control-record </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-eject"></i> ti-control-eject </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Text editor</h4>
                    <div class="icons-list row">
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paragraph"></i> ti-paragraph </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-uppercase"></i> ti-uppercase </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-underline"></i> ti-underline </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-text"></i> ti-text </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-Italic"></i> ti-Italic </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-smallcap"></i> ti-smallcap </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-list"></i> ti-list </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-list-ol"></i> ti-list-ol </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-right"></i> ti-align-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-left"></i> ti-align-left </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-justify"></i> ti-align-justify </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-center"></i> ti-align-center </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-quote-right"></i> ti-quote-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-quote-left"></i> ti-quote-left </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Layout icons</h4>
                    <div class="icons-list row">
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paragraph"></i> ti-paragraph </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-uppercase"></i> ti-uppercase </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-underline"></i> ti-underline </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-text"></i> ti-text </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-Italic"></i> ti-Italic </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-smallcap"></i> ti-smallcap </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-list"></i> ti-list </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-list-ol"></i> ti-list-ol </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-right"></i> ti-align-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-left"></i> ti-align-left </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-justify"></i> ti-align-justify </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-center"></i> ti-align-center </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-quote-right"></i> ti-quote-right </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-quote-left"></i> ti-quote-left </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Brand icons</h4>
                    <div class="icons-list row">
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flickr"></i> ti-flickr </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flickr-alt"></i> ti-flickr-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-instagram"></i> ti-instagram </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-google"></i> ti-google </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-github"></i> ti-github </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-facebook"></i> ti-facebook </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dropbox"></i> ti-dropbox </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dropbox-alt"></i> ti-dropbox-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dribbble"></i> ti-dribbble </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-apple"></i> ti-apple </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-android"></i> ti-android </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-yahoo"></i> ti-yahoo </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-trello"></i> ti-trello </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stack-overflow"></i> ti-stack-overflow </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-soundcloud"></i> ti-soundcloud </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-sharethis"></i> ti-sharethis </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-sharethis-alt"></i> ti-sharethis-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-reddit"></i> ti-reddit </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microsoft"></i> ti-microsoft </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microsoft-alt"></i> ti-microsoft-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-linux"></i> ti-linux </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-jsfiddle"></i> ti-jsfiddle </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-joomla"></i> ti-joomla </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-html5"></i> ti-html5 </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-css3"></i> ti-css3 </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-drupal"></i> ti-drupal </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wordpress"></i> ti-wordpress </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tumblr"></i> ti-tumblr </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tumblr-alt"></i> ti-tumblr-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-skype"></i> ti-skype </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-youtube"></i> ti-youtube </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-vimeo"></i> ti-vimeo </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-vimeo-alt"></i> ti-vimeo-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-twitter"></i> ti-twitter </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-twitter-alt"></i> ti-twitter-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-linkedin"></i> ti-linkedin </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pinterest"></i> ti-pinterest </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pinterest-alt"></i> ti-pinterest-alt </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-themify-logo"></i> ti-themify-logo </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-themify-favicon"></i> ti-themify-favicon </div>
                      <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-themify-favicon-alt"></i> ti-themify-favicon-alt </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- partial:../../partials/_footer.php -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
      </div>
    </div>
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/js/off-canvas.js"></script>
    <script src="../../../assets/js/hoverable-collapse.js"></script>
    <script src="../../../assets/js/misc.js"></script>
    <script src="../../../assets/js/settings.js"></script>
    <script src="../../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>