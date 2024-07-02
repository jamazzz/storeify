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
              Packages
              <div class="ml-auto">
                <a href="/storeify/dashboard/packages/createCategory.php" class="btn btn-primary" style="margin-right: 20px;">Create Category</a>
                <a href="/storeify/dashboard/packages/createPackage.php" class="btn btn-primary">Create Package</a>
              </div>
            </h1>
          </div>
        </div>
        <br>
      </header>
      <?php
      $categories = "SELECT * FROM categories WHERE website_id = '" . $_SESSION['currentwebsite'] . "' ORDER BY `order` ASC";
      $result = mysqli_query($connect, $categories);

      while ($row = mysqli_fetch_assoc($result)) {
        echo '      
                <div class="container2">
                    <div id="categories" class="row row-mb">
                      <div class="col-12 col-md-12 category-container">
                        <div class="card h-35" style="background-color: rgba(28, 28, 37,0.8)">
                          <div class="card-body category-header">
                            <h6>' . $row['name'] . '</h6>
                          </div>
                          <div id="category1" class="category mt-4 product-list" style="margin:25px;">';
        $products = "SELECT * FROM products WHERE category_id = '" . $row['id'] . "' ORDER BY `order` ASC";
        $result2 = mysqli_query($connect, $products);
        while ($row2 = mysqli_fetch_assoc($result2)) {
          echo '
                                        <div class="card">
                                          <div class="card-body">' . $row2['name'] . '<span style="float: right;">View</span></div>
                                        </div>';
        }
        echo '
                                      </div>
                                    </div>
                                  </div>
                          ';
      }
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
                var originCategory = evt.from.id;
                var destinationCategory = evt.to.id;
                var productsInOrigin = Array.from(evt.from.getElementsByClassName('card-body')).map(function(product) {
                  return product.innerText;
                });
                var productsInDestination = Array.from(evt.to.getElementsByClassName('card-body')).map(function(product) {
                  return product.innerText;
                });

                console.log('Moved from:', originCategory, 'to', destinationCategory);
                console.log('Products in origin category:', productsInOrigin);
                console.log('Products in destination category:', productsInDestination);
              }
            });
          });

          new Sortable(document.getElementById('categories'), {
            animation: 150,
            handle: '.card-body.category-header',
            onEnd: function(evt) {
              var categories = Array.from(document.querySelectorAll('.category-container h6')).map(function(category) {
                return category.innerText;
              });
              console.log('Categories:', categories);
            }
          });
        });
      </script>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>
</body>

</html>