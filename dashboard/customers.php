<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp1.php';

  // Check database connection
  if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }

  ?>

  <main role="main" id="main">
    <div class="container-fluid">
      <header class="page-title">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <h1 class="my-0">Clientes</h1>
          </div>
          <div class="col-12 col-md-6 text-left text-md-right">
          </div>
        </div>
      </header>
      <br>
      <?php
      // Prepare statements
      $selectcid = $connect->prepare("SELECT id FROM categories WHERE website_id = ?");
      $selectpid = $connect->prepare("SELECT id FROM products WHERE category_id IN (?)");
      $select = $connect->prepare("SELECT DISTINCT user_id FROM owned_products WHERE product_id IN (?)");

      $selectcid->bind_param("i", $_SESSION['currentwebsite']);
      $selectcid->execute();
      $resultcid = $selectcid->get_result();
      $categoryIds = [];
      while ($row = $resultcid->fetch_assoc()) {
        $categoryIds[] = $row['id'];
      }
      $selectcid->close();

      $userIds = [];
      if (!empty($categoryIds)) {
        $categoryIdsString = implode(',', $categoryIds);
        $selectpid->bind_param("s", $categoryIdsString);
        $selectpid->execute();
        $resultpid = $selectpid->get_result();
        $productIds = [];
        while ($row = $resultpid->fetch_assoc()) {
          $productIds[] = $row['id'];
        }
        $selectpid->close();

        if (!empty($productIds)) {
          $productIdsString = implode(',', $productIds);
          $select->bind_param("s", $productIdsString);
          $select->execute();
          $result = $select->get_result();
          while ($row = $result->fetch_assoc()) {
            $userIds[] = $row['user_id'];
          }
          $select->close();
        }
      }

      $clients = [];
      if (!empty($userIds)) {
        $userinfo = $connect->prepare("SELECT * FROM clients WHERE id IN (" . implode(',', array_fill(0, count($userIds), '?')) . ")");
        $userinfo->bind_param(str_repeat('i', count($userIds)), ...$userIds);
        $userinfo->execute();
        $result = $userinfo->get_result();
        while ($row = $result->fetch_assoc()) {
          $clients[] = $row;
        }
        $userinfo->close();
      }

      foreach ($clients as &$client) {
        $ownedProducts = $connect->prepare("SELECT COUNT(DISTINCT product_id) FROM owned_products WHERE user_id = ?");
        $ownedProducts->bind_param("i", $client['id']);
        $ownedProducts->execute();
        $result = $ownedProducts->get_result();
        $productCount = $result->fetch_row()[0];
        $ownedProducts->close();
        $client['productCount'] = $productCount;
      }
      unset($client);
      ?>
      <div class="card">
        <div class="card-body">
          <div class="row row-mt">
            <div class="col-md-12">
              <table class="table table-striped table-responsive-sm table-responsive-md">
                <thead class="thead-light">
                  <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Produtos Adquiridos</th>
                    <th width="15%">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (!empty($clients)) {
                    foreach ($clients as $client) {
                      echo ('
                      <tr>
                      <td>' . htmlspecialchars($client['username']) . '</td>
                      <td>' . htmlspecialchars($client['email']) . '</td>
                      <td>' . htmlspecialchars($productCount) . '</td>
                    </tr>
                      ');
                    }
                  } else {
                    echo '<tr><td colspan="4">No results found.</td></tr>';
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="ban-reason-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">View reason</h5>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body"></div>
        </div>
      </div>
    </div>

  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>
</body>

</html>