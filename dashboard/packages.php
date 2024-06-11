<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include 'dashp1.php';
  ?>
  <main role="main" id="main" style="">
    <div class="container-fluid" style="">

      <header class="page-title">
        <div class="row no-gutters">
          <div class="col-12 col-md-6" style="">
            <h1 class="my-0" style="">Packages</h1>
          </div>
          <div class="col-12 col-md-6 text-left text-md-right">
            <a href="https://creator.tebex.io/packages/massedit" class="btn btn-secondary">Mass Edit</a>
            <div class="dropdown d-inline-block">
              <button class="btn btn-primary dropdown-toggle" type="button" id="addNewItemButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add New</button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="addNewItemButton">
                <a href="https://creator.tebex.io/categories/create" class="dropdown-item">Category</a>
                <a href="https://creator.tebex.io/packages/create" class="dropdown-item">Package</a>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="card package-page">
        <div class="card-body pb-0" style="">
          <div class="row d-flex align-items-center" style="">
            <div class="col-md-8 d-none d-md-inline">
              <button class="btn btn-light" type="button" name="hide-disabled" id="hide-disabled" data-hidden="0">Hide disabled</button>
            </div>
            <div class="col-md-4" style="">
              <input type="text" class="form-control text-right" name="quick-filter" placeholder="Quick filter packages" style="">
            </div>
          </div>
        </div>
        <div class="card-body" id="packages-card-body">
          <div class="categories" data-package-order-url="https://creator.tebex.io/packages/order" data-package-update-category-url="https://creator.tebex.io/packages/update-category" data-category-order-url="https://creator.tebex.io/categories/order" data-category-update-parent-url="https://creator.tebex.io/categories/update-parent">
            <div class="category parent " data-id="2470501">
              <div class="header">
                <div class="row d-flex align-items-center">
                  <a class="col-7 passive-link" href="https://creator.tebex.io/categories/2470501" style="1">
                    <i class="fal fa-bars move p-2 d-inline-block"></i>
                    <div class="category-name d-inline-block ml-3">
                      <h6 class="mb-0">
                        Escrowed
                      </h6>
                    </div>
                  </a>
                  <div class="col-5 d-flex align-items-center flex-wrap justify-content-end category-button-container">
                    <a class="d-inline-block nav-link package-buttons-dropdown dropdown-toggle dropdown-no-caret pr-1 py-0 mr-5" href="#" id="categoryButtons-2470501" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fal fa-xl fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="categoryButtons-2470501">
                      <a href="https://creator.tebex.io/categories/create?parent=2470501" class="dropdown-item">Create subcategory</a>
                      <a data-toggle="modal" data-target="#remotemodal" href="https://creator.tebex.io/categories/2470501/clone" class="dropdown-item">Clone</a>
                      <a href="https://creator.tebex.io/categories/2470501" class="dropdown-item">Edit</a>
                      <a data-toggle="modal" data-target="#remotemodal" href="https://creator.tebex.io/categories/2470501/delete" class="dropdown-item">Delete</a>
                    </div>
                    <i class="fal fa-chevron-up pr-2 text-dark category-collapse-toggle" data-category-id="2470501" data-toggle="collapse" href="#packages-for-2470501"></i>
                  </div>
                </div>
              </div>
              <ul class="packages mb-0 collapse show" id="packages-for-2470501" data-hide-children="0" data-create-package-url="https://creator.tebex.io/packages/create?category=2470501">
                <li class="border-top-0 " data-id="5945519">
                  <div class="row d-flex align-items-center">
                    <a class="col-9 passive-link" href="https://creator.tebex.io/packages/5945519">
                      <i class="fal fa-bars move p-2 d-inline-block"></i>
                      <div class="package-name d-inline-block ml-3">
                        <h6 class="mb-0">
                          [QB/OX] JZ-CAYO
                          - €20.00
                        </h6>
                      </div>
                    </a>
                    <div class="col-3 text-right d-flex align-items-center justify-content-end">
                      <div class="row">
                        <a class="nav-link package-buttons-dropdown dropdown-toggle dropdown-no-caret pr-1 py-0" href="#" id="packageButtons-5945519" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fal fa-xl fa-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="packageButtons-5945519">
                          <a href="https://creator.tebex.io/packages/create/5945519" class="dropdown-item">Clone</a>
                          <a href="https://creator.tebex.io/packages/5945519" class="dropdown-item">Edit</a>
                          <a data-toggle="modal" data-target="#remotemodal" href="https://creator.tebex.io/packages/5945519/delete" class="dropdown-item">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal" id="license-key-modal-5945519">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5>License Keys remaining</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>

                        <div class="alert alert-danger mx-3 p-2" role="alert">
                          <h6 class="text-center text-danger pt-1 text-uppercase">
                            <span class="fa fa-warning fs-16"></span> No Keys remaining
                          </h6>
                        </div>

                        <div class="modal-body border mx-3 p-3">
                          <h2 class="text-center font-weight-bold">0/0</h2>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-link text-info" data-dismiss="modal">Cancel</button>
                          <a href="https://creator.tebex.io/packages/5945519" class="btn btn-primary">View License Keys</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="subcategories">
                </li>
              </ul>
            </div>
            <div class="category parent " data-id="2557490">
              <div class="header">
                <div class="row d-flex align-items-center">
                  <a class="col-7 passive-link" href="https://creator.tebex.io/categories/2557490" style="1">
                    <i class="fal fa-bars move p-2 d-inline-block"></i>
                    <div class="category-name d-inline-block ml-3">
                      <h6 class="mb-0">
                        Open Source
                      </h6>
                    </div>
                  </a>
                  <div class="col-5 d-flex align-items-center flex-wrap justify-content-end category-button-container">
                    <a class="d-inline-block nav-link package-buttons-dropdown dropdown-toggle dropdown-no-caret pr-1 py-0 mr-5" href="#" id="categoryButtons-2557490" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fal fa-xl fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="categoryButtons-2557490">
                      <a href="https://creator.tebex.io/categories/create?parent=2557490" class="dropdown-item">Create subcategory</a>
                      <a data-toggle="modal" data-target="#remotemodal" href="https://creator.tebex.io/categories/2557490/clone" class="dropdown-item">Clone</a>
                      <a href="https://creator.tebex.io/categories/2557490" class="dropdown-item">Edit</a>
                      <a data-toggle="modal" data-target="#remotemodal" href="https://creator.tebex.io/categories/2557490/delete" class="dropdown-item">Delete</a>
                    </div>
                    <i class="fal fa-chevron-up pr-2 text-dark category-collapse-toggle" data-category-id="2557490" data-toggle="collapse" href="#packages-for-2557490"></i>
                  </div>
                </div>
              </div>
              <ul class="packages mb-0 collapse show" id="packages-for-2557490" data-hide-children="0" data-create-package-url="https://creator.tebex.io/packages/create?category=2557490">
                <li class="border-top-0 " data-id="6010114">
                  <div class="row d-flex align-items-center">
                    <a class="col-9 passive-link" href="https://creator.tebex.io/packages/6010114">
                      <i class="fal fa-bars move p-2 d-inline-block"></i>
                      <div class="package-name d-inline-block ml-3">
                        <h6 class="mb-0">
                          [QB/OX] JZ-CAYO
                          - €35.00
                        </h6>
                      </div>
                    </a>
                    <div class="col-3 text-right d-flex align-items-center justify-content-end">
                      <div class="row">
                        <a class="nav-link package-buttons-dropdown dropdown-toggle dropdown-no-caret pr-1 py-0" href="#" id="packageButtons-6010114" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fal fa-xl fa-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="packageButtons-6010114">
                          <a href="https://creator.tebex.io/packages/create/6010114" class="dropdown-item">Clone</a>
                          <a href="https://creator.tebex.io/packages/6010114" class="dropdown-item">Edit</a>
                          <a data-toggle="modal" data-target="#remotemodal" href="https://creator.tebex.io/packages/6010114/delete" class="dropdown-item">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal" id="license-key-modal-6010114">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5>License Keys remaining</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>

                        <div class="alert alert-danger mx-3 p-2" role="alert">
                          <h6 class="text-center text-danger pt-1 text-uppercase">
                            <span class="fa fa-warning fs-16"></span> No Keys remaining
                          </h6>
                        </div>

                        <div class="modal-body border mx-3 p-3">
                          <h2 class="text-center font-weight-bold">0/0</h2>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-link text-info" data-dismiss="modal">Cancel</button>
                          <a href="https://creator.tebex.io/packages/6010114" class="btn btn-primary">View License Keys</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="subcategories">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <?php
  include 'dashp2.php';
  ?>