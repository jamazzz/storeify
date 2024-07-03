<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
</head>

<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp1.php';
  ?>
  <main role="main" id="main">
    <div class="container-fluid">
      <header class="page-title">
        <div class="row no-gutters">
          <div class="col-12">
            <h1 class="my-0 d-flex justify-content-between">
              Produtos
              <div class="ml-auto">
                <a class="btn btn-primary" style="margin-right: 20px;" data-bs-toggle="modal" data-bs-target="#createCategory">Adicionar Categoria</a>
                <a href="/storeify/dashboard/packages/createPackage.php" class="btn btn-primary">Adicionar Produto</a>
              </div>
            </h1>
          </div>
        </div>
        <br>
      </header>
      <!-- Modal starts -->
      <div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="createCategoryLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="createCategoryLabel">Criar Categoria</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="createCategory.php" method="post">
              <div class="modal-body">
                <h6>Nome</h6>
                <input type="text" id="categoryName" name="categoryName" class="form-control" placeholder="Nome da categoria">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="cancel" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal Ends -->
      <?php
      $categories = "SELECT * FROM categories WHERE website_id = '" . $_SESSION['currentwebsite'] . "' ORDER BY `order` ASC";
      $result = mysqli_query($connect, $categories);

      echo '<div id="categories" class="row row-mb">';
      while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="col-12 col-md-12 category-container">
            <div class="card h-35" style="background-color: rgba(28, 28, 37,0.8)">
                <div class="card-body category-header">
                    <h6>' . $row['name'] . '</h6>
                </div>
                <div id="category' . $row['id'] . '" class="category mt-4 product-list" style="margin:25px;">';
        $products = "SELECT * FROM products WHERE category_id = '" . $row['id'] . "' ORDER BY `order` ASC";
        $result2 = mysqli_query($connect, $products);
        while ($row2 = mysqli_fetch_assoc($result2)) {
          echo '
            <div class="card">
                <div class="card-body" id="' . $row2['id'] . '">' . $row2['name'] . '<span style="float: right;"></span></div>
            </div>';
        }
        echo '
                </div>
            </div>
        </div>';
      }
      echo '</div>';
      ?>


      <style>
        .card {
          margin-bottom: 25px;
        }

        .container2 {
          margin-bottom: 30px;
        }

        .category-header {
          max-height: 50px;
          color: white;
        }

        .product-list {
          margin-left: 20px;
        }
      </style>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var containers = document.querySelectorAll('.category');
          containers.forEach(function(container) {
            new Sortable(container, {
              group: 'shared',
              animation: 150,
              onEnd: function(evt) {
                var item = evt.item;
                var originCategory = evt.from.getAttribute('id').replace('category', '');
                var destinationCategory = evt.to.getAttribute('id').replace('category', '');
                var productsInOrigin = Array.from(evt.from.getElementsByClassName('card-body')).map(function(product) {
                  return product.getAttribute('id');
                });
                var productsInDestination = Array.from(evt.to.getElementsByClassName('card-body')).map(function(product) {
                  return product.getAttribute('id');
                });
                var productsnewCategory = Array.from(evt.to.getElementsByClassName('card-body')).map(function(product) {
                  return product.getAttribute('id');
                });
                console.log('Origin category:', originCategory);
                console.log('Destination category:', destinationCategory);
                console.log('Products in origin category:', productsInOrigin);
                console.log('Products in destination category:', productsInDestination);

                var formData = new FormData();
                formData.append('originCategory', originCategory);
                formData.append('destinationCategory', destinationCategory);
                formData.append('products', productsInOrigin);
                formData.append('productsnewCategory', productsnewCategory);
                var form = document.createElement('form');
                form.style.display = 'none';
                form.method = 'POST';
                form.action = '/storeify/updateOrder.php';


                for (var pair of formData.entries()) {
                  var input = document.createElement('input');
                  input.type = 'hidden';
                  input.name = pair[0];
                  input.value = pair[1];
                  form.appendChild(input);
                }

                document.body.appendChild(form);
                form.submit();
              }
            });
          });


          new Sortable(document.getElementById('categories'), {
            animation: 150,
            handle: '.card-body.category-header',
            onEnd: function(evt) {
              var categories = Array.from(document.querySelectorAll('.category-container h6')).map(function(category) {
                return category.innerText.trim();
              });
              console.log('Categories:', categories);
              const formData = new FormData();
              formData.append('categories', categories);
              var form = document.createElement('form');
              form.style.display = 'none';
              form.method = 'POST';
              form.action = '/storeify/updateOrder.php';

              for (var pair of formData.entries()) {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = pair[0];
                input.value = pair[1];
                form.appendChild(input);
              }

              document.body.appendChild(form);
              form.submit();
            }
          });

          window.onload = function() {
            var scrollPosition = localStorage.getItem('scrollPosition');
            if (scrollPosition) {
              window.scrollTo(0, scrollPosition);
            }
          };

          window.onbeforeunload = function() {
            localStorage.setItem('scrollPosition', window.pageYOffset);
          };
        });
      </script>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>
</body>

</html>