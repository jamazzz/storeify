<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End Plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../../assets/css/modern-vertical/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>
  <?php
  include 'dashp1.php';
  ?>
  <style>
    .content-wrapper {
      background-color: #191c24;
      box-shadow: none;
      padding: 1.875rem 1.75rem;
      width: 100%;
      -webkit-flex-grow: 1;
      flex-grow: 1;
    }

    .navbar .navbar-menu-wrapper {
      transition: width 0.25s ease;
      -webkit-transition: width 0.25s ease;
      -moz-transition: width 0.25s ease;
      -ms-transition: width 0.25s ease;
      box-shadow: 20px 19px 34px -15px rgba(0, 0, 0, 0.0);
      -webkit-box-shadow: 20px 19px 34px -15px rgba(0, 0, 0, 0.0);
      -moz-box-shadow: 20px 19px 34px -15px rgba(0, 0, 0, 0.0);
      color: #ffffff;
      padding-left: 15px;
      padding-right: 15px;
      width: 100%;
      height: 70px;
    }
  </style>
  <div class="row">
    <div class="col-12">
      <div class="card2">
        <div class="card-body">
          <h4 class="card-title">Tickets</h4>
          <div class="row grid-margin">
            <div class="col-12">
              <!-- <div class="alert alert-warning" role="alert">
                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
              </div> -->
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table" cellspacing="0" width="100%">
                  <thead>
                    <tr class="bg-primary text-white">
                      <th>Order #</th>
                      <th>Customer</th>
                      <th>Ship to</th>
                      <th>Base Price</th>
                      <th>Purchased Price</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>WD-61</td>
                      <td>Edinburgh</td>
                      <td>New York</td>
                      <td>$1500</td>
                      <td>$3200</td>
                      <td>
                        <label class="badge badge-info">On hold</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-62</td>
                      <td>Doe</td>
                      <td>Brazil</td>
                      <td>$4500</td>
                      <td>$7500</td>
                      <td>
                        <label class="badge badge-danger">Pending</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-63</td>
                      <td>Sam</td>
                      <td>Tokyo</td>
                      <td>$2100</td>
                      <td>$6300</td>
                      <td>
                        <label class="badge badge-success">Closed</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-64</td>
                      <td>Joe</td>
                      <td>Netherland</td>
                      <td>$1100</td>
                      <td>$7300</td>
                      <td>
                        <label class="badge badge-warning">Open</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-65</td>
                      <td>Edward</td>
                      <td>Indonesia</td>
                      <td>$3600</td>
                      <td>$4800</td>
                      <td>
                        <label class="badge badge-success">Closed</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-66</td>
                      <td>Stella</td>
                      <td>Japan</td>
                      <td>$5600</td>
                      <td>$3600</td>
                      <td>
                        <label class="badge badge-info">On hold</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-67</td>
                      <td>Jaqueline</td>
                      <td>Germany</td>
                      <td>$1100</td>
                      <td>$6300</td>
                      <td>
                        <label class="badge badge-success">Closed</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-68</td>
                      <td>Tim</td>
                      <td>Italy</td>
                      <td>$6300</td>
                      <td>$2100</td>
                      <td>
                        <label class="badge badge-warning">Open</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-69</td>
                      <td>John</td>
                      <td>Tokyo</td>
                      <td>$2100</td>
                      <td>$6300</td>
                      <td>
                        <label class="badge badge-success">Closed</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-70</td>
                      <td>Tom</td>
                      <td>Germany</td>
                      <td>$1100</td>
                      <td>$2300</td>
                      <td>
                        <label class="badge badge-danger">Pending</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-71</td>
                      <td>Aleena</td>
                      <td>New York</td>
                      <td>$1600</td>
                      <td>$3500</td>
                      <td>
                        <label class="badge badge-danger">Pending</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-72</td>
                      <td>Alphy</td>
                      <td>Brazil</td>
                      <td>$5500</td>
                      <td>$7200</td>
                      <td>
                        <label class="badge badge-warning">Open</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-73</td>
                      <td>Twinkle</td>
                      <td>Italy</td>
                      <td>$1560</td>
                      <td>$2530</td>
                      <td>
                        <label class="badge badge-warning">Open</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-74</td>
                      <td>Catherine</td>
                      <td>Brazil</td>
                      <td>$1600</td>
                      <td>$5600</td>
                      <td>
                        <label class="badge badge-success">Closed</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-75</td>
                      <td>Daniel</td>
                      <td>Singapore</td>
                      <td>$6800</td>
                      <td>$9800</td>
                      <td>
                        <label class="badge badge-danger">Pending</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-76</td>
                      <td>Tom</td>
                      <td>Tokyo</td>
                      <td>$1600</td>
                      <td>$6500</td>
                      <td>
                        <label class="badge badge-info">On hold</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-77</td>
                      <td>Cris</td>
                      <td>Tokyo</td>
                      <td>$2100</td>
                      <td>$6300</td>
                      <td>
                        <label class="badge badge-warning">Open</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-78</td>
                      <td>Tim</td>
                      <td>Italy</td>
                      <td>$6300</td>
                      <td>$2100</td>
                      <td>
                        <label class="badge badge-success">Closed</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-79</td>
                      <td>Jack</td>
                      <td>Tokyo</td>
                      <td>$3100</td>
                      <td>$7300</td>
                      <td>
                        <label class="badge badge-danger">Pending</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                    <tr>
                      <td>WD-80</td>
                      <td>Tony</td>
                      <td>Germany</td>
                      <td>$1100</td>
                      <td>$2300</td>
                      <td>
                        <label class="badge badge-info">On hold</label>
                      </td>
                      <td class="text-end">
                        <button class="btn btn-light">
                          <i class="mdi mdi-eye text-primary"></i>View </button>
                        <button class="btn btn-light">
                          <i class="mdi mdi-close text-danger"></i>Remove </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'dashp2.php';
  ?>
</body>

</html>