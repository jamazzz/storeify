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
    <!-- End Plugin css for this page -->
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
              <h3 class="page-title"> Buttons </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Normal buttons</h4>
                    <p class="card-description">Add class <code>.btn-{color}</code> for buttons in theme colors</p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-primary btn-fw">Primary</button>
                      <button type="button" class="btn btn-secondary btn-fw">Secondary</button>
                      <button type="button" class="btn btn-success btn-fw">Success</button>
                      <button type="button" class="btn btn-danger btn-fw">Danger</button>
                      <button type="button" class="btn btn-warning btn-fw">Warning</button>
                      <button type="button" class="btn btn-info btn-fw">Info</button>
                      <button type="button" class="btn btn-light btn-fw">Light</button>
                      <button type="button" class="btn btn-dark btn-fw">Dark</button>
                      <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Inverse buttons</h4>
                    <p class="card-description">Add class <code>.btn-inverse-{color} for inverse buttons</code></p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
                      <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
                      <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
                      <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
                      <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
                      <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
                      <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
                      <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
                      <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Rounded buttons</h4>
                    <p class="card-description">Add class <code>.btn-rounded</code></p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button>
                      <button type="button" class="btn btn-secondary btn-rounded btn-fw">Secondary</button>
                      <button type="button" class="btn btn-success btn-rounded btn-fw">Success</button>
                      <button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button>
                      <button type="button" class="btn btn-warning btn-rounded btn-fw">Warning</button>
                      <button type="button" class="btn btn-info btn-rounded btn-fw">Info</button>
                      <button type="button" class="btn btn-light btn-rounded btn-fw">Light</button>
                      <button type="button" class="btn btn-dark btn-rounded btn-fw">Dark</button>
                      <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Outlined buttons</h4>
                    <p class="card-description">Add class <code>.btn-outline-{color}</code> for outline buttons</p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-outline-primary btn-fw">Primary</button>
                      <button type="button" class="btn btn-outline-secondary btn-fw">Secondary</button>
                      <button type="button" class="btn btn-outline-success btn-fw">Success</button>
                      <button type="button" class="btn btn-outline-danger btn-fw">Danger</button>
                      <button type="button" class="btn btn-outline-warning btn-fw">Warning</button>
                      <button type="button" class="btn btn-outline-info btn-fw">Info</button>
                      <button type="button" class="btn btn-outline-light btn-fw">Light</button>
                      <button type="button" class="btn btn-outline-dark btn-fw">Dark</button>
                      <button type="button" class="btn btn-link btn-fw">Link</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-7">
                        <h4 class="card-title">Icon Buttons</h4>
                        <p class="card-description">Add class <code>.btn-icon</code> for buttons with only icons</p>
                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <button type="button" class="btn btn-primary btn-rounded btn-icon">
                            <i class="mdi mdi-home-outline"></i>
                          </button>
                          <button type="button" class="btn btn-dark btn-rounded btn-icon">
                            <i class="mdi mdi-microsoft-internet-explorer"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-rounded btn-icon">
                            <i class="mdi mdi-email-open"></i>
                          </button>
                          <button type="button" class="btn btn-info btn-rounded btn-icon">
                            <i class="mdi mdi-star"></i>
                          </button>
                          <button type="button" class="btn btn-success btn-rounded btn-icon">
                            <i class="mdi mdi-map-marker"></i>
                          </button>
                        </div>
                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <button type="button" class="btn btn-inverse-primary btn-icon">
                            <i class="mdi mdi-home-outline"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-dark btn-icon">
                            <i class="mdi mdi-microsoft-internet-explorer"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-danger btn-icon">
                            <i class="mdi mdi-email-open"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-info btn-icon">
                            <i class="mdi mdi-star"></i>
                          </button>
                          <button type="button" class="btn btn-inverse-success btn-icon">
                            <i class="mdi mdi-map-marker"></i>
                          </button>
                        </div>
                        <div class="template-demo d-flex justify-content-between flex-nowrap mt-4">
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="mdi mdi-heart-outline text-danger"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="mdi mdi-music text-dark"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="mdi mdi-star text-primary"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="mdi mdi-signal text-info"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="mdi mdi-trending-up text-success"></i>
                          </button>
                        </div>
                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="mdi mdi-heart-outline"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="mdi mdi-music"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="mdi mdi-star"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="mdi mdi-signal"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                            <i class="mdi mdi-trending-up"></i>
                          </button>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <h4 class="card-title">Button Size</h4>
                        <p class="card-description">Use class <code>.btn-{size}</code></p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-outline-secondary btn-lg">btn-lg</button>
                          <button type="button" class="btn btn-outline-secondary btn-md">btn-md</button>
                          <button type="button" class="btn btn-outline-secondary btn-sm">btn-sm</button>
                        </div>
                        <div class="template-demo mt-4">
                          <button type="button" class="btn btn-danger btn-lg">btn-lg</button>
                          <button type="button" class="btn btn-success btn-md">btn-md</button>
                          <button type="button" class="btn btn-primary btn-sm">btn-sm</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Block buttons</h4>
                    <p class="card-description">Add class <code>.d-grid.gap-2</code>to parent div of button elements</p>
                    <div class="template-demo d-grid gap-2">
                      <button type="button" class="btn btn-info btn-lg btn-block">Block buttons <i class="mdi mdi-menu float-right"></i>
                      </button>
                      <button type="button" class="btn btn-dark btn-lg btn-block">Block buttons</button>
                      <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i> Block buttons </button>
                      <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block buttons</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <h4 class="card-title">Button groups</h4>
                        <p class="card-description">Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code></p>
                        <div class="template-demo">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">1</button>
                            <button type="button" class="btn btn-outline-secondary">2</button>
                            <button type="button" class="btn btn-outline-secondary">3</button>
                          </div>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-heart-outline"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-calendar"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-clock"></i>
                            </button>
                          </div>
                        </div>
                        <div class="template-demo">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">1</button>
                            <button type="button" class="btn btn-primary">2</button>
                            <button type="button" class="btn btn-primary">3</button>
                          </div>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">
                              <i class="mdi mdi-heart-outline"></i>
                            </button>
                            <button type="button" class="btn btn-primary">
                              <i class="mdi mdi-calendar"></i>
                            </button>
                            <button type="button" class="btn btn-primary">
                              <i class="mdi mdi-clock"></i>
                            </button>
                          </div>
                        </div>
                        <div class="template-demo mt-4">
                          <div class="btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-format-vertical-align-top"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-format-vertical-align-center"></i>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-format-vertical-align-bottom"></i>
                            </button>
                          </div>
                          <div class="btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">Default</button>
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item">Go back</a>
                                <a class="dropdown-item">Delete</a>
                                <a class="dropdown-item">Swap</a>
                              </div>
                            </div>
                            <button type="button" class="btn btn-outline-secondary">Default</button>
                          </div>
                          <div class="btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">Top</button>
                            <button type="button" class="btn btn-outline-secondary">Middle</button>
                            <button type="button" class="btn btn-outline-secondary">Bottom</button>
                          </div>
                        </div>
                        <div class="template-demo mt-4">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-star d-block mb-1"></i> Favourites </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-reload d-block mb-1"></i> Reload </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-account d-block mb-1"></i> Users </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h4 class="card-title">Button with text and icon</h4>
                        <p class="card-description">Wrap icon and text inside <code>.btn-icon-text</code> and use <code>.btn-icon-prepend</code> or <code>.btn-icon-append</code> for icon tags</p>
                        <div class="template-demo">
                          <button type="button" class="btn btn-primary btn-icon-text">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                          <button type="button" class="btn btn-dark btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-success btn-icon-text">
                            <i class="mdi mdi-alert btn-icon-prepend"></i> Warning </button>
                        </div>
                        <div class="template-demo">
                          <button type="button" class="btn btn-danger btn-icon-text">
                            <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                          <button type="button" class="btn btn-info btn-icon-text"> Print <i class="mdi mdi-printer btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-warning btn-icon-text">
                            <i class="mdi mdi-reload btn-icon-prepend"></i> Reset </button>
                        </div>
                        <div class="template-demo mt-2">
                          <button type="button" class="btn btn-outline-primary btn-icon-text">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                          <button type="button" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-outline-success btn-icon-text">
                            <i class="mdi mdi-alert btn-icon-prepend"></i> Warning </button>
                        </div>
                        <div class="template-demo">
                          <button type="button" class="btn btn-outline-danger btn-icon-text">
                            <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                          <button type="button" class="btn btn-outline-info btn-icon-text"> Print <i class="mdi mdi-printer btn-icon-append"></i>
                          </button>
                          <button type="button" class="btn btn-outline-warning btn-icon-text">
                            <i class="mdi mdi-reload btn-icon-prepend"></i> Reset </button>
                        </div>
                        <div class="template-demo mt-2">
                          <button class="btn btn-outline-light btn-icon-text">
                            <i class="mdi mdi-apple btn-icon-prepend mdi-36px"></i>
                            <span class="d-inline-block text-start">
                              <small class="font-weight-light d-block">Available on the</small> App Store </span>
                          </button>
                          <button class="btn btn-outline-light btn-icon-text">
                            <i class="mdi mdi-android btn-icon-prepend mdi-36px"></i>
                            <span class="d-inline-block text-start">
                              <small class="font-weight-light d-block">Get it on the</small> Google Play </span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Social Icon Buttons</h4>
                    <p class="card-description">Add class <code>.btn-social-icon</code></p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon btn-outline-facebook"><i class="mdi mdi-facebook"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-youtube"><i class="mdi mdi-youtube"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-twitter"><i class="mdi mdi-twitter"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-dribbble"><i class="fa fa-dribbble"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-linkedin"><i class="mdi mdi-linkedin"></i></button>
                      <button type="button" class="btn btn-social-icon btn-outline-google"><i class="mdi mdi-google-plus"></i></button>
                    </div>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon btn-facebook"><i class="mdi mdi-facebook"></i></button>
                      <button type="button" class="btn btn-social-icon btn-youtube"><i class="mdi mdi-youtube"></i></button>
                      <button type="button" class="btn btn-social-icon btn-twitter"><i class="mdi mdi-twitter"></i></button>
                      <button type="button" class="btn btn-social-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
                      <button type="button" class="btn btn-social-icon btn-linkedin"><i class="mdi mdi-linkedin"></i></button>
                      <button type="button" class="btn btn-social-icon btn-google"><i class="mdi mdi-google-plus"></i></button>
                    </div>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i class="mdi mdi-facebook"></i></button>
                      <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i class="mdi mdi-youtube"></i></button>
                      <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i class="mdi mdi-twitter"></i></button>
                      <button type="button" class="btn btn-social-icon btn-dribbble btn-rounded"><i class="fa fa-dribbble"></i></button>
                      <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i class="mdi mdi-linkedin"></i></button>
                      <button type="button" class="btn btn-social-icon btn-google btn-rounded"><i class="mdi mdi-google-plus"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Social button with text</h4>
                    <p class="card-description">Add class <code>.btn-social-icon-text</code></p>
                    <div class="template-demo">
                      <button type="button" class="btn btn-social-icon-text btn-facebook"><i class="mdi mdi-facebook"></i>Facebook</button>
                      <button type="button" class="btn btn-social-icon-text btn-youtube"><i class="mdi mdi-youtube"></i>Youtube</button>
                      <button type="button" class="btn btn-social-icon-text btn-twitter"><i class="mdi mdi-twitter"></i>Twitter</button>
                      <button type="button" class="btn btn-social-icon-text btn-dribbble"><i class="fa fa-dribbble"></i>Dribbble</button>
                      <button type="button" class="btn btn-social-icon-text btn-linkedin"><i class="mdi mdi-linkedin"></i>Linkedin</button>
                      <button type="button" class="btn btn-social-icon-text btn-google"><i class="mdi mdi-google-plus"></i>Google</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.php -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
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
  </body>
</html>