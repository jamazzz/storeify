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
            <h1 class="my-0">Criar Produto</h1>
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
                  <h4 style="margin-left: -970px;">Nome do produto</h4>
                  <p style="margin-left: -900px;">Escolha um nome para o produto.</p>
                </div>
              </div>
            </div>
            <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
              <div class="row no-gutters">
                <input type="text" name="name" id="name" class="form-control" style="max-width: 480px;">
              </div>
            </div>
            <br>
            <?php
            if (isset($_SESSION['productNameError'])) {
              echo '<div class="alert alert-danger" role="alert" id="productNameError">' . $_SESSION['productNameError'] . '</div>';
              unset($_SESSION['productNameError']);
            }
            ?>
          </div>
        </div>
        <br>

        <div class="card row-mt">
          <div class="card-body row d-flex w-100 align-self-center">
            <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
              <div class="row align-self-center h-100">
                <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center"></div>
                <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                  <h4 style="margin-left: -1070px;">Preço</h4>
                  <p style="margin-left: -900px;">Escolha um preço para o produto.</p>
                </div>
              </div>
            </div>
            <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
              <div class="row no-gutters">
                <input type="number" name="price" id="price" class="form-control" style="max-width: 480px;">
              </div>
            </div>
            <br>
            <?php
            if (isset($_SESSION['productPriceError'])) {
              echo '<div class="alert alert-danger" role="alert" id="productPriceError">' . $_SESSION['productPriceError'] . '</div>';
              unset($_SESSION['productPriceError']);
            }
            ?>
          </div>
        </div>
        <br>

        <div class="card row-mt">
          <div class="card-body row d-flex w-100 align-self-center">
            <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
              <div class="row align-self-center h-100">
                <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center"></div>
                <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                  <h4 style="margin-left: -1050px;">Categoria</h4>
                  <p style="margin-left: -880px;">Escolha uma categoria para o produto.</p>
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
              <br>
              <?php
              if (isset($_SESSION['productCategoryError'])) {
                echo '<div class="alert alert-danger" role="alert" id="productCategoryError">' . $_SESSION['productCategoryError'] . '</div>';
                unset($_SESSION['productCategoryError']);
              }
              ?>
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
                  <h4 style="margin-left: -1060px;">Descrição</h4>
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
          <?php
        if (isset($_SESSION['productDescriptionError'])) {
          echo '<div class="alert alert-danger" role="alert" id="productDescriptionError">' . $_SESSION['productDescriptionError'] . '</div>';
          unset($_SESSION['productDescriptionError']);
        }
        ?>
        </div>
        <br>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
        <style>
          #drop-area,
          #drop-area2 {
            border: 2px dashed #ccc;
            border-radius: 20px;
            width: 480px;
            font-family: sans-poppins;
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
                  <h4 style="margin-left: -610px;">Thumbnail do Produto</h4>
                  <p style="margin-left: -590px;">Carregue a thumbnail do produto</p>
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
                  <?php
                  if (isset($_SESSION['productThumbnailError'])) {
                    echo ('
                <script>
                  var drop = document.getElementById("drop-area");
                  var edit = document.getElementById("edit");
                  drop.style.color = "rgb(255, 0, 0)";
                  drop.style.borderColor = "rgb(255, 0, 0)";
                </script>
                ');
                    unset($_SESSION['productThumbnailError']);
                  }
                  ?>
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
                  <h4 style="margin-left: -740px;">Ficheiro</h4>
                  <p style="margin-left: -630px;">Carregue o seu ficheiro aqui</p>
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
              <?php
              if (isset($_SESSION['productZipError'])) {
                echo ('
                <script>
                  var drop = document.getElementById("drop-area2");
                  drop.style.color = "rgb(255, 0, 0)";
                  drop.style.borderColor = "rgb(255, 0, 0)";
                </script>
                ');
                unset($_SESSION['productZipError']);
              }
              ?>
              <br>
            </div>
          </div>
        </div>
        <br>

        <div class="text-right">
          <button type="submit" class="btn btn-primary">Criar Produto</button>
        </div>
      </form>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>

  <script>
    function hideErrors() {
      const errorElements = document.querySelectorAll('.alert-danger');
      errorElements.forEach(element => {
        element.style.display = 'none';
      });

      const dropArea = document.getElementById('drop-area');
      dropArea.style.color = '#ccc';
      dropArea.style.borderColor = '#ccc';
      const editIcon = document.getElementById('edit');
      editIcon.classList.remove('fa-times');
      editIcon.classList.add('fa-download');

      const dropArea2 = document.getElementById('drop-area2');
      dropArea2.style.color = '#ccc';
      dropArea2.style.borderColor = '#ccc';
      const editIcon2 = document.getElementById('edit2');
      editIcon2.classList.remove('fa-times');
      editIcon2.classList.add('fa-download');
    }

    window.onload = function() {
      setTimeout(hideErrors, 3000);
    }
  </script>
</body>

</html>