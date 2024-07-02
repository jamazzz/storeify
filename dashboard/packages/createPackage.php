<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
  <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css">
  <!-- Toast UI Editor Dark Theme CSS -->
  <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/theme/toastui-editor-dark.min.css">
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
            <h1 class="my-0">Criar categoria</h1>
            <br>
          </div>
        </div>
      </header>



      <?php
      $select = "SELECT * FROM websites WHERE id = " . $_SESSION['currentwebsite'];
      $result = mysqli_query($connect, $select);
      $row = mysqli_fetch_assoc($result);
      ?>

      <form action="/storeify/createPackage.php" method="post" enctype="multipart/form-data">
        <div class="card row-mt">
          <div class="card-body row d-flex w-100 align-self-center">
            <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
              <div class="row align-self-center h-100">
                <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center"></div>
                <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                  <h4 style="margin-left: -1100px;">Name</h4>
                  <p style="margin-left: -900px;">Customize the Name of your webstore.</p>
                </div>
              </div>
            </div>
            <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
              <div class="row no-gutters">
                <input type="text" name="name" id="name" class="form-control" style="max-width: 480px;">
              </div>
            </div>
          </div>
        </div>
        <br>

        <div class="card row-mt">
          <div class="card-body row d-flex w-100 align-self-center">
            <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
              <div class="row align-self-center h-100">
                <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center"></div>
                <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                  <h4 style="margin-left: -1100px;">Price</h4>
                  <p style="margin-left: -900px;">Customize the Name of your webstore.</p>
                </div>
              </div>
            </div>
            <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
              <div class="row no-gutters">
                <input type="number" name="price" id="price" class="form-control" style="max-width: 480px;">
              </div>
            </div>
          </div>
        </div>
        <br>

        <div class="card row-mt">
          <div class="card-body row d-flex w-100 align-self-center">
            <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
              <div class="row align-self-center h-100">
                <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center"></div>
                <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                  <h4 style="margin-left: -1100px;">Category</h4>
                  <p style="margin-left: -900px;">Customize the Name of your webstore.</p>
                </div>
              </div>
            </div>
            <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
              <div class="row no-gutters">
                <select class="form-control selectpicker" name="category" id="category" style="max-width: 480px;">
                  <?php
                  $category = "SELECT * FROM categories WHERE website_id = " . $_SESSION['currentwebsite'];
                  $category = mysqli_query($connect, $category);
                  while ($row = mysqli_fetch_assoc($category)) {
                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
          </div>
        </div>
        <br>

        <div class="card row-mt">
          <div class="card-body row d-flex w-100 align-self-center">
            <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
              <div class="row align-self-center h-100">
                <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center"></div>
                <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                  <h4 style="margin-left: -1050px;">Description</h4>
                  <br>
                </div>
              </div>
            </div>
            <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
              <div class="row no-gutters"></div>
            </div>
            <br>
            <textarea name="description" id="description" class="form-control"></textarea>
          </div>
        </div>
        <br>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
        <style>
          #drop-area,
          #drop-area2 {
            border: 2px dashed #ccc;
            border-radius: 20px;
            width: 480px;
            font-family: sans-serif;
            height: 76px;
          }

          .button {
            display: inline-block;
            padding: 10px;
            background: #ccc;
            cursor: pointer;
            border-radius: 5px;
            border: 1px solid #ccc;
          }

          #thumbnail,
          #zip {
            display: none;
          }
        </style>
        <div class="card row-mt">
          <div class="card-body row d-flex w-100 align-self-center">
            <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
              <div class="row align-self-center h-100">
                <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                  <h4 style="margin-left: -720px;">Thumbnail</h4>
                  <p style="margin-left: -630px;">Upload your thumbnail here</p>
                </div>
              </div>
            </div>
            <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
              <div class="row no-gutters">
                <div id="drop-area" class="drop-area">
                  <input type="file" id="thumbnail" name="thumbnail">
                  <script>
                    function success() {
                      var drop = document.getElementById('drop-area');
                      drop.style.color = 'rgb(0, 255, 0)';
                      drop.style.borderColor = 'rgb(0, 255, 0)';
                      edit.classList.remove('fa-download');
                      edit.classList.add('fa-check');
                    }

                    document.getElementById('thumbnail').addEventListener('change', success);
                  </script>
                  <br>
                  <div class="text-center">
                    <label for="thumbnail"><i id="edit" class="fa-solid fa-download opacity-100 transition group-hover:opacity-100"></i></label>
                  </div>
                </div>
              </div>
              <br>
            </div>
          </div>
        </div>
        <br>

        <div class="card row-mt">
          <div class="card-body row d-flex w-100 align-self-center">
            <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
              <div class="row align-self-center h-100">
                <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                  <h4 style="margin-left: -720px;">File</h4>
                  <p style="margin-left: -630px;">Upload your file here</p>
                </div>
              </div>
            </div>
            <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
              <div class="row no-gutters">
                <div id="drop-area2" class="drop-area">
                  <input type="file" id="zip" name="zip">
                  <script>
                    function success2() {
                      var drop = document.getElementById('drop-area2');
                      drop.style.color = 'rgb(0, 255, 0)';
                      drop.style.borderColor = 'rgb(0, 255, 0)';
                      edit2.classList.remove('fa-download');
                      edit2.classList.add('fa-check');
                    }

                    document.getElementById('zip').addEventListener('change', success2);
                  </script>
                  <br>
                  <div class="text-center">
                    <label for="zip"><i id="edit2" class="fa-solid fa-download opacity-100 transition group-hover:opacity-100"></i></label>
                  </div>
                </div>
              </div>
              <br>
            </div>
          </div>
        </div>
        <br>

        <div class="text-right">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>