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
    <link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icons.min.css" />
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
              <h3 class="page-title"> Flag icons </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Icons</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Flag icons</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Flag icons</h4>
                    <div class="icons-list row">
                      <div class="col-3"><i class="flag-icon flag-icon-ad" title="ad" id="ad"></i> AD</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ae" title="ae" id="ae"></i> AE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-af" title="af" id="af"></i> AF</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ag" title="ag" id="ag"></i> AG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ai" title="ai" id="ai"></i> AU</div>
                      <div class="col-3"><i class="flag-icon flag-icon-al" title="al" id="al"></i> AL</div>
                      <div class="col-3"><i class="flag-icon flag-icon-am" title="am" id="am"></i> AM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ao" title="ao" id="ao"></i> AO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-aq" title="aq" id="aq"></i> AQ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ar" title="ar" id="ar"></i> AR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-as" title="as" id="as"></i> AS</div>
                      <div class="col-3"><i class="flag-icon flag-icon-at" title="at" id="at"></i> AT</div>
                      <div class="col-3"><i class="flag-icon flag-icon-au" title="au" id="au"></i> AU</div>
                      <div class="col-3"><i class="flag-icon flag-icon-aw" title="aw" id="aw"></i> AW</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ax" title="ax" id="ax"></i> AX</div>
                      <div class="col-3"><i class="flag-icon flag-icon-az" title="az" id="az"></i> AZ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ba" title="ba" id="ba"></i> BA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bb" title="bb" id="bb"></i> BB</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bd" title="bd" id="bd"></i> BD</div>
                      <div class="col-3"><i class="flag-icon flag-icon-be" title="be" id="be"></i> BE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bf" title="bf" id="bf"></i> BF</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bg" title="bg" id="bg"></i> BG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bh" title="bh" id="bh"></i> BH</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bi" title="bi" id="bi"></i> BI</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bj" title="bj" id="bj"></i> BJ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bl" title="bl" id="bl"></i> BL</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bm" title="bm" id="bm"></i> BM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bn" title="bn" id="bn"></i> BN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bo" title="bo" id="bo"></i> BO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bq" title="bq" id="bq"></i> BQ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-br" title="br" id="br"></i> BR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bs" title="bs" id="bs"></i> BS</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bt" title="bt" id="bt"></i> BT</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bv" title="bv" id="bv"></i> BV</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bw" title="bw" id="bw"></i> BW</div>
                      <div class="col-3"><i class="flag-icon flag-icon-by" title="by" id="by"></i> BY</div>
                      <div class="col-3"><i class="flag-icon flag-icon-bz" title="bz" id="bz"></i> BZ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i> CA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cc" title="cc" id="cc"></i> CC</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cd" title="cd" id="cd"></i> CD</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cf" title="cf" id="cf"></i> CF</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cg" title="cg" id="cg"></i> CG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ch" title="ch" id="ch"></i> CH</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ci" title="ci" id="ci"></i> CI</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ck" title="ck" id="ck"></i> CK</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cl" title="cl" id="cl"></i> CL</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cm" title="cm" id="cm"></i> CM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cn" title="cn" id="cn"></i> CN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-co" title="co" id="co"></i> CO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cr" title="cr" id="cr"></i> CR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cu" title="cu" id="cu"></i> CU</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cv" title="cv" id="cv"></i> CV</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cw" title="cw" id="cw"></i> CW</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cx" title="cx" id="cx"></i> CX</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cy" title="cy" id="cy"></i> CY</div>
                      <div class="col-3"><i class="flag-icon flag-icon-cz" title="cz" id="cz"></i> CZ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-de" title="de" id="de"></i> DE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-dj" title="dj" id="dj"></i> DJ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-dk" title="dk" id="dk"></i> DK</div>
                      <div class="col-3"><i class="flag-icon flag-icon-dm" title="dm" id="dm"></i> DM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-do" title="do" id="do"></i> DO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-dz" title="dz" id="dz"></i> DZ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ec" title="ec" id="ec"></i> EC</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ee" title="ee" id="ee"></i> EE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-eg" title="eg" id="eg"></i> EG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-eh" title="eh" id="eh"></i> EH</div>
                      <div class="col-3"><i class="flag-icon flag-icon-er" title="er" id="er"></i> ER</div>
                      <div class="col-3"><i class="flag-icon flag-icon-es" title="es" id="es"></i> ES</div>
                      <div class="col-3"><i class="flag-icon flag-icon-et" title="et" id="et"></i> ET</div>
                      <div class="col-3"><i class="flag-icon flag-icon-fi" title="fi" id="fi"></i> FI</div>
                      <div class="col-3"><i class="flag-icon flag-icon-fj" title="fj" id="fj"></i> FJ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-fk" title="fk" id="fk"></i> FK</div>
                      <div class="col-3"><i class="flag-icon flag-icon-fm" title="fm" id="fm"></i> FM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-fo" title="fo" id="fo"></i> FO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> FR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ga" title="ga" id="ga"></i> GA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gb" title="gb" id="gb"></i> GB</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gd" title="gd" id="gd"></i> GD</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ge" title="ge" id="ge"></i> GE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gf" title="gf" id="gf"></i> GF</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gg" title="gg" id="gg"></i> GG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gh" title="gh" id="gh"></i> GH</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gi" title="gi" id="gi"></i> GI</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gl" title="gl" id="gl"></i> GL</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gm" title="gm" id="gm"></i> GM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gn" title="gn" id="gn"></i> GN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gp" title="gp" id="gp"></i> GP</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gq" title="gq" id="gq"></i> GQ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gr" title="gr" id="gr"></i> GR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gs" title="gs" id="gs"></i> GS</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gt" title="gt" id="gt"></i> GT</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gu" title="gu" id="gu"></i> GU</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gw" title="gw" id="gw"></i> GW</div>
                      <div class="col-3"><i class="flag-icon flag-icon-gy" title="gy" id="gy"></i> GY</div>
                      <div class="col-3"><i class="flag-icon flag-icon-hk" title="hk" id="hk"></i> HK</div>
                      <div class="col-3"><i class="flag-icon flag-icon-hm" title="hm" id="hm"></i> HM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-hn" title="hn" id="hn"></i> HN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-hr" title="hr" id="hr"></i> HR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ht" title="ht" id="ht"></i> HT</div>
                      <div class="col-3"><i class="flag-icon flag-icon-hu" title="hu" id="hu"></i> HU</div>
                      <div class="col-3"><i class="flag-icon flag-icon-id" title="id" id="id"></i> ID</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ie" title="ie" id="ie"></i> IE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-il" title="il" id="il"></i> IL</div>
                      <div class="col-3"><i class="flag-icon flag-icon-im" title="im" id="im"></i> IM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-in" title="in" id="in"></i> IN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-io" title="io" id="io"></i> IO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-iq" title="iq" id="iq"></i> IQ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ir" title="ir" id="ir"></i> IR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-is" title="is" id="is"></i> IS</div>
                      <div class="col-3"><i class="flag-icon flag-icon-it" title="it" id="it"></i> IT</div>
                      <div class="col-3"><i class="flag-icon flag-icon-je" title="je" id="je"></i> JE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-jm" title="jm" id="jm"></i> JM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-jo" title="jo" id="jo"></i> JO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-jp" title="jp" id="jp"></i> JP</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ke" title="ke" id="ke"></i> KE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-kg" title="kg" id="kg"></i> KG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-kh" title="kh" id="kh"></i> KH</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ki" title="ki" id="ki"></i> KI</div>
                      <div class="col-3"><i class="flag-icon flag-icon-km" title="km" id="km"></i> KM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-kn" title="kn" id="kn"></i> KN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-kp" title="kp" id="kp"></i> KP</div>
                      <div class="col-3"><i class="flag-icon flag-icon-kr" title="kr" id="kr"></i> KR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-kw" title="kw" id="kw"></i> KW</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ky" title="ky" id="ky"></i> KY</div>
                      <div class="col-3"><i class="flag-icon flag-icon-kz" title="kz" id="kz"></i> KZ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-la" title="la" id="la"></i> LA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-lb" title="lb" id="lb"></i> LB</div>
                      <div class="col-3"><i class="flag-icon flag-icon-lc" title="lc" id="lc"></i> LC</div>
                      <div class="col-3"><i class="flag-icon flag-icon-li" title="li" id="li"></i> LI</div>
                      <div class="col-3"><i class="flag-icon flag-icon-lk" title="lk" id="lk"></i> LK</div>
                      <div class="col-3"><i class="flag-icon flag-icon-lr" title="lr" id="lr"></i> LR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ls" title="ls" id="ls"></i> LS</div>
                      <div class="col-3"><i class="flag-icon flag-icon-lt" title="lt" id="lt"></i> LT</div>
                      <div class="col-3"><i class="flag-icon flag-icon-lu" title="lu" id="lu"></i> LU</div>
                      <div class="col-3"><i class="flag-icon flag-icon-lv" title="lv" id="lv"></i> LV</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ly" title="ly" id="ly"></i> LY</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ma" title="ma" id="ma"></i> MA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mc" title="mc" id="mc"></i> MC</div>
                      <div class="col-3"><i class="flag-icon flag-icon-md" title="md" id="md"></i> MD</div>
                      <div class="col-3"><i class="flag-icon flag-icon-me" title="me" id="me"></i> ME</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mf" title="mf" id="mf"></i> MF</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mg" title="mg" id="mg"></i> MG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mh" title="mh" id="mh"></i> MH</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mk" title="mk" id="mk"></i> MK</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ml" title="ml" id="ml"></i> ML</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mm" title="mm" id="mm"></i> MM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mn" title="mn" id="mn"></i> MN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mo" title="mo" id="mo"></i> MO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mp" title="mp" id="mp"></i> MP</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mq" title="mq" id="mq"></i> MQ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mr" title="mr" id="mr"></i> MR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ms" title="ms" id="ms"></i> MS</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mt" title="mt" id="mt"></i> MT</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mu" title="mu" id="mu"></i> MU</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mv" title="mv" id="mv"></i> MV</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mw" title="mw" id="mw"></i> MW</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mx" title="mx" id="mx"></i> MX</div>
                      <div class="col-3"><i class="flag-icon flag-icon-my" title="my" id="my"></i> MY</div>
                      <div class="col-3"><i class="flag-icon flag-icon-mz" title="mz" id="mz"></i> MZ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-na" title="na" id="na"></i> NA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-nc" title="nc" id="nc"></i> NC</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ne" title="ne" id="ne"></i> NE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-nf" title="nf" id="nf"></i> NF</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ng" title="ng" id="ng"></i> NG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ni" title="ni" id="ni"></i> NI</div>
                      <div class="col-3"><i class="flag-icon flag-icon-nl" title="nl" id="nl"></i> NL</div>
                      <div class="col-3"><i class="flag-icon flag-icon-no" title="no" id="no"></i> NO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-np" title="np" id="np"></i> NP</div>
                      <div class="col-3"><i class="flag-icon flag-icon-nr" title="nr" id="nr"></i> NR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-nu" title="nu" id="nu"></i> NU</div>
                      <div class="col-3"><i class="flag-icon flag-icon-nz" title="nz" id="nz"></i> NZ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-om" title="om" id="om"></i> OM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pa" title="pa" id="pa"></i> PA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pe" title="pe" id="pe"></i> PE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pf" title="pf" id="pf"></i> PF</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pg" title="pg" id="pg"></i> PG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ph" title="ph" id="ph"></i> PH</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pk" title="pk" id="pk"></i> PK</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pl" title="pl" id="pl"></i> PL</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pm" title="pm" id="pm"></i> PM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pn" title="pn" id="pn"></i> PN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pr" title="pr" id="pr"></i> PR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ps" title="ps" id="ps"></i> PS</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> PT</div>
                      <div class="col-3"><i class="flag-icon flag-icon-pw" title="pw" id="pw"></i> PW</div>
                      <div class="col-3"><i class="flag-icon flag-icon-py" title="py" id="py"></i> PY</div>
                      <div class="col-3"><i class="flag-icon flag-icon-qa" title="qa" id="qa"></i> QA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-re" title="re" id="re"></i> RE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ro" title="ro" id="ro"></i> RO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-rs" title="rs" id="rs"></i> RS</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i> RU</div>
                      <div class="col-3"><i class="flag-icon flag-icon-rw" title="rw" id="rw"></i> RW</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sa" title="sa" id="sa"></i> SA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sb" title="sb" id="sb"></i> SB</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sc" title="sc" id="sc"></i> SC</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sd" title="sd" id="sd"></i> SD</div>
                      <div class="col-3"><i class="flag-icon flag-icon-se" title="se" id="se"></i> SE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sg" title="sg" id="sg"></i> SG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sh" title="sh" id="sh"></i> SH</div>
                      <div class="col-3"><i class="flag-icon flag-icon-si" title="si" id="si"></i> SI</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sj" title="sj" id="sj"></i> SJ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sk" title="sk" id="sk"></i> SK</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sl" title="sl" id="sl"></i> SL</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sm" title="sm" id="sm"></i> SM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sn" title="sn" id="sn"></i> SN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-so" title="so" id="so"></i> SO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sr" title="sr" id="sr"></i> SR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ss" title="ss" id="ss"></i> SS</div>
                      <div class="col-3"><i class="flag-icon flag-icon-st" title="st" id="st"></i> ST</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sv" title="sv" id="sv"></i> SV</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sx" title="sx" id="sx"></i> SX</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sy" title="sy" id="sy"></i> SY</div>
                      <div class="col-3"><i class="flag-icon flag-icon-sz" title="sz" id="sz"></i> SZ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tc" title="tc" id="tc"></i> TC</div>
                      <div class="col-3"><i class="flag-icon flag-icon-td" title="td" id="td"></i> TD</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tf" title="tf" id="tf"></i> TF</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tg" title="tg" id="tg"></i> TG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-th" title="th" id="th"></i> TH</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tj" title="tj" id="tj"></i> TJ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tk" title="tk" id="tk"></i> TK</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tl" title="tl" id="tl"></i> TL</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tm" title="tm" id="tm"></i> TM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tn" title="tn" id="tn"></i> TN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-to" title="to" id="to"></i> TO</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tr" title="tr" id="tr"></i> TR</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tt" title="tt" id="tt"></i> TT</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tv" title="tv" id="tv"></i> TV</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tw" title="tw" id="tw"></i> TW</div>
                      <div class="col-3"><i class="flag-icon flag-icon-tz" title="tz" id="tz"></i> TZ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ua" title="ua" id="ua"></i> UA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ug" title="ug" id="ug"></i> UG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-um" title="um" id="um"></i> UM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-us" title="us" id="us"></i> US</div>
                      <div class="col-3"><i class="flag-icon flag-icon-uy" title="uy" id="uy"></i> UY</div>
                      <div class="col-3"><i class="flag-icon flag-icon-uz" title="uz" id="uz"></i> UZ</div>
                      <div class="col-3"><i class="flag-icon flag-icon-va" title="va" id="va"></i> VA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-vc" title="vc" id="vc"></i> VC</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ve" title="ve" id="ve"></i> VE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-vg" title="vg" id="vg"></i> VG</div>
                      <div class="col-3"><i class="flag-icon flag-icon-vi" title="vi" id="vi"></i> VI</div>
                      <div class="col-3"><i class="flag-icon flag-icon-vn" title="vn" id="vn"></i> VN</div>
                      <div class="col-3"><i class="flag-icon flag-icon-vu" title="vu" id="vu"></i> VU</div>
                      <div class="col-3"><i class="flag-icon flag-icon-wf" title="wf" id="wf"></i> WF</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ws" title="ws" id="ws"></i> WS</div>
                      <div class="col-3"><i class="flag-icon flag-icon-ye" title="ye" id="ye"></i> YE</div>
                      <div class="col-3"><i class="flag-icon flag-icon-yt" title="yt" id="yt"></i> YT</div>
                      <div class="col-3"><i class="flag-icon flag-icon-za" title="za" id="za"></i> ZA</div>
                      <div class="col-3"><i class="flag-icon flag-icon-zm" title="zm" id="zm"></i> ZM</div>
                      <div class="col-3"><i class="flag-icon flag-icon-zw" title="zw" id="zw"></i> ZW</div>
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