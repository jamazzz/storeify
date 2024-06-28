<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
</head>

<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp1.php';
  ?>
  <main role="main" id="main">
    <div class="container-fluid">

      <header class="page-title">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <h1 class="my-0">Appearance</h1>
          </div>
        </div>
      </header>




      <div class="card row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center"><img src="https://dunb17ur4ymx4.cloudfront.net/webstore/favicons/d8fc6a75efe2c1e38e4c2e515d26efe1e5168100.png" alt="Favicon" class="w-75" style="max-width: 50px;"></div>
              <div class="col-12 col-xl-10 col-lg-9 align-self-center my-3 my-lg-0">
                <h4>Favicon</h4>
                <p class="m-0">Provide a favicon that will be displayed on your webstore.</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <div class="row no-gutters">
              <div class="col text-right"><span class="btn btn-primary btn-file">
                  Replace
                  <input type="file" accept="image/*" class="image-uploader-file"></span></div>
              <div class="col-auto"><button type="button" class="btn btn-danger ml-lg-2">Delete</button></div>
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="card row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
                <i class="fal fa-code rounded-icon bg-dark"></i>
              </div>
              <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4>Template</h4>
                <p class="m-0">Customise the layout of your webstore using our selection of templates or create your own.</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <small class="text-muted text-uppercase font-weight-bold d-block mb-2">Abstract Template</small>
            <div class="w-100"></div>
            <a class="btn btn-primary mr-lg-1" href="https://creator.tebex.io/templates/53391">Edit</a>
            <a class="btn btn-secondary ml-lg-1" href="https://creator.tebex.io/templates">Change</a>
          </div>
        </div>
      </div>

      <br>

      <div class="card row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
                <i class="fal fa-palette rounded-icon bg-dark"></i>
              </div>
              <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4>Theme</h4>
                <p class="m-0">Customise your template's colour scheme via pre-built themes or create your own.</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <small class="text-muted text-uppercase font-weight-bold d-block mb-2">Tebex Orange Theme</small>
            <div class="w-100"></div>
            <span class="d-inline-block" data-toggle="tooltip" title="" data-original-title="You need to create a copy of this theme to be able to edit the code.">
              <a class="btn btn-primary disabled mr-lg-1" href="https://creator.tebex.io/themes/188660">Edit</a>
            </span>
            <a class="btn btn-secondary ml-lg-1" href="https://creator.tebex.io/themes/template/53391">Change</a>
          </div>
        </div>
      </div>

      <br>

      <div class="card box-configuration row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
                <i class="fal fa-power-off rounded-icon bg-dark"></i>
              </div>
              <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-md-3">
                <h4>Visibility</h4>
                <p class="m-0">Prevent your store from being accessible by the public.</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-center row-mt-mobile account-branding-update">
            <div class="row align-items-end d-flex flex-column">
              <div class="col-12 col-xl-5">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#disabledStoreAllowedIpModal">Configure</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <br>
      
      <div class="modal" id="disabledStoreAllowedIpModal" tabindex="-1" role="dialog" aria-labelledby="disabledStoreAllowedIpModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Visibility</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form method="post" action="https://creator.tebex.io/appearance/disable">
              <input type="hidden" name="_token" value="dYyBmLnbb4i5cPO6zIO2AM752xrU8TUtWKWZmYJh">
              <div class="modal-body">
                <div class="card mb-3">
                  <div class="card-body p-3">
                    <div class="row d-flex align-items-center">
                      <div class="col-12 col-md-10">Prevent my webstore from being accessible by the public</div>
                      <div class="col-12 col-md-2 text-center">
                        <label class="switch d-flex align-self-center mb-0 mt-3 mt-md-0 float-md-right">
                          <input type="checkbox" name="disabled">
                          <span class="slider"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group mt-3 mb-0">
                  <label>Allowed IP Addresses</label>
                  <input type="text" name="disable_override" class="form-control" placeholder="127.0.0.1,8.8.8.8" value="">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      <br>
      
      <div class="card box-configuration account-update row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
                <i class="fal fa-cart-plus rounded-icon bg-dark"></i>
              </div>
              <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4>Add to Basket Behaviour</h4>
                <p class="m-0">Select the behaviour after a customer adds a package to their basket.</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <div class="dropdown bootstrap-select form-control"><select name="add_to_cart_redirect" class="form-control selectpicker" data-url="https://creator.tebex.io/settings/webstore/update">
                <option value="default" selected="selected">Redirect customer to the basket</option>
                <option value="category">Redirect customer to the package's category page</option>
                <option value="checkout">Redirect customer to the checkout</option>
              </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Redirect customer to the basket">
                <div class="filter-option">
                  <div class="filter-option-inner">
                    <div class="filter-option-inner-inner">Redirect customer to the basket</div>
                  </div>
                </div>
              </button>
              <div class="dropdown-menu ">
                <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                  <ul class="dropdown-menu inner show" role="presentation"></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <br>
      
      <div class="card box-configuration row-mt account-update">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
                <i class="fal fa-user rounded-icon bg-dark"></i>
              </div>
              <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-md-3">
                <h4>Allow Guests To View Packages</h4>
                <p class="m-0">Allow customers to view packages without logging into your webstore.</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile">
            <label class="switch">
              <input type="checkbox" name="guestLogin" checked="" data-url="https://creator.tebex.io/settings/webstore/update">
              <span class="slider"></span>
            </label>
          </div>
        </div>
      </div>

    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>
</body>

</html>