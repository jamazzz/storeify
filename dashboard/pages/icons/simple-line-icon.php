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
    <link rel="stylesheet" href="../../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/modern-vertical/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  </head>
  <body>
    <div class=" container-scroller">
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
              <h3 class="page-title"> Simple line icons </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Icons</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Simple line icons</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Simple line icons</h4>
                    <div class="icons-list row">
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-user"></i>icon-user </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-people"></i>icon-people </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-user-female"></i> icon-user-female </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-user-follow"></i> icon-user-follow </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-user-following"></i> icon-user-following </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-user-unfollow"></i> icon-user-unfollow </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-login"></i> icon-login </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-logout"></i> icon-logout </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-emotsmile"></i> icon-emotsmile </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-phone"></i> icon-phone </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-call-end"></i> icon-call-end </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-call-in"></i> icon-call-in </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-call-out"></i> icon-call-out </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-map"></i> icon-map </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-location-pin"></i> icon-location-pin </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-direction"></i> icon-direction </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-directions"></i> icon-directions </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-compass"></i> icon-compass </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-layers"></i> icon-layers </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-menu"></i> icon-menu </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-list"></i> icon-list </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-options-vertical"></i> icon-options-vertical </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-options"></i> icon-options </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-arrow-down"></i> icon-arrow-down </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-arrow-left"></i> icon-arrow-left </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-arrow-right"></i> icon-arrow-right </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-arrow-up"></i> icon-arrow-up </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-arrow-up-circle"></i> icon-arrow-up-circle </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-arrow-left-circle"></i> icon-arrow-left-circle </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-arrow-right-circle"></i> icon-arrow-right-circle </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-arrow-down-circle"></i> icon-arrow-down-circle </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-check"></i> icon-check </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-clock"></i> icon-clock </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-plus"></i> icon-plus </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-close"></i> icon-close </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-trophy"></i> icon-trophy </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-screen-smartphone"></i> icon-screen-smartphone </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-screen-desktop"></i> icon-screen-desktop </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-plane"></i> icon-plane </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-notebook"></i> icon-notebook </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-mustache"></i> icon-mustache </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-mouse"></i> icon-mouse </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-magnet"></i> icon-magnet </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-energy"></i> icon-energy </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-disc"></i> icon-disc </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-cursor"></i> icon-cursor </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-cursor-move"></i> icon-cursor-move </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-crop"></i> icon-crop </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-chemistry"></i> icon-chemistry </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-speedometer"></i> icon-speedometer </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-shield"></i> icon-shield </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-screen-tablet"></i> icon-screen-tablet </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-magic-wand"></i> icon-magic-wand </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-hourglass"></i> icon-hourglass </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-graduation"></i> icon-graduation </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-ghost"></i> icon-ghost </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-game-controller"></i> icon-game-controller </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-fire"></i> icon-fire </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-eyeglass"></i> icon-eyeglass </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-envelope-open"></i> icon-envelope-open </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-envelope-letter"></i> icon-envelope-letter </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-bell"></i> icon-bell </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-badge"></i> icon-badge </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-anchor"></i> icon-anchor </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-wallet"></i> icon-wallet </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-vector"></i> icon-vector </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-speech"></i> icon-speech </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-puzzle"></i> icon-puzzle </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-printer"></i> icon-printer </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-present"></i> icon-present </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-playlist"></i> icon-playlist </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-pin"></i> icon-pin </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-picture"></i> icon-picture </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-handbag"></i> icon-handbag </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-globe-alt"></i> icon-globe-alt </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-globe"></i> icon-globe </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-folder-alt"></i> icon-folder-alt </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-folder"></i> icon-folder </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-film"></i> icon-film </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-feed"></i> icon-feed </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-drop"></i> icon-drop </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-drawer"></i> icon-drawer </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-docs"></i> icon-docs </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-doc"></i> icon-doc </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-diamond"></i> icon-diamond </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-cup"></i> icon-cup </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-calculator"></i> icon-calculator </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-bubbles"></i> icon-bubbles </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-briefcase"></i> icon-briefcase </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-book-open"></i> icon-book-open </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-basket-loaded"></i> icon-basket-loaded </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-basket"></i> icon-basket </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-bag"></i> icon-bag </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-action-undo"></i> icon-action-undo </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-action-redo"></i> icon-action-redo </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-wrench"></i> icon-wrench </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-umbrella"></i> icon-umbrella </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-trash"></i> icon-trash </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-tag"></i> icon-tag </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-support"></i> .icon-support </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-frame"></i> icon-frame </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-size-fullscreen"></i> icon-size-fullscreen </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-size-actual"></i> icon-size-actual </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-shuffle"></i> icon-shuffle </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-share-alt"></i> icon-share-alt </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-share"></i> icon-share </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-rocket"></i> icon-rocket </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-question"></i> icon-question </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-pie-chart"></i> icon-pie-chart </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-pencil"></i> icon-pencil </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-note"></i> icon-note </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-loop"></i> icon-loop </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-home"></i> icon-home </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-grid"></i> icon-grid </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-graph"></i> icon-graph </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-microphone"></i> icon-microphone </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-music-tone-alt"></i> icon-music-tone-alt </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-music-tone"></i> icon-music-tone </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-earphones-alt"></i> icon-earphones-alt </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-earphones"></i> icon-earphones </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-equalizer"></i> icon-equalizer </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-like"></i> icon-like </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-dislike"></i> icon-dislike </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-control-start"></i> icon-control-start </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-control-rewind"></i> icon-control-rewind </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-control-play"></i> icon-control-play </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-control-pause"></i> icon-control-pause </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-control-forward"></i> icon-control-forward </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-control-end"></i> icon-control-end </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-volume-1"></i> icon-volume-1 </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-volume-2"></i> icon-volume-2 </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-volume-off"></i> icon-volume-off </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-calendar"></i> icon-calendar </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-bulb"></i> icon-bulb </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-chart"></i> icon-chart </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-ban"></i> icon-ban </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-bubble"></i> icon-bubble </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-camrecorder"></i> icon-camrecorder </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-camera"></i> icon-camera </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-cloud-download"></i> icon-cloud-download </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-cloud-upload"></i> icon-cloud-upload </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-eye"></i> icon-eye </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-flag"></i> icon-flag </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-heart"></i> icon-heart </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-info"></i> icon-info </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-key"></i> icon-key </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-link"></i> icon-link </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-lock"></i> icon-lock </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-lock-open"></i> icon-lock-open </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-magnifier"></i> icon-magnifier </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-magnifier-add"></i> icon-magnifier-add </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-magnifier-remove"></i> icon-magnifier-remove </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-paper-clip"></i> icon-paper-clip </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-paper-plane"></i> icon-paper-plane </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-power"></i> icon-power </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-refresh"></i> icon-refresh </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-reload"></i> icon-reload </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-settings"></i> icon-settings </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-star"></i> icon-star </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-symbol-female"></i> icon-symbol-female </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-symbol-male"></i> icon-symbol-male </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-target"></i> icon-target </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-credit-card"></i> icon-credit-card </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-paypal"></i> icon-paypal </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-tumblr"></i> icon-social-tumblr </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-twitter"></i> icon-social-twitter </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-facebook"></i> icon-social-facebook </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-instagram"></i> icon-social-instagram </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-linkedin"></i> icon-social-linkedin </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-pinterest"></i> icon-social-pinterest </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-github"></i> icon-social-github </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-google"></i> icon-social-google </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-reddit"></i> icon-social-reddit </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-skype"></i> icon-social-skype </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-dribbble"></i> icon-social-dribbble </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-behance"></i> icon-social-behance </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-foursqare"></i> icon-social-foursqare </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-soundcloud"></i> icon-social-soundcloud </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-spotify"></i> icon-social-spotify </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-stumbleupon"></i> icon-social-stumbleupon </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-youtube"></i> icon-social-youtube </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="preview"> <i class="icon-social-dropbox"></i> icon-social-dropbox </div>
                      </div>
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