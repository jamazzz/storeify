<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Storeify</title>
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
</head>

<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/admin/dashp1.php';
  ?>
  <main role="main" id="main">
    <div class="container-fluid">
      <header class="page-title">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="searchForm">
              <div class="search-container">
                <input type="text" class="form-control" placeholder="Procurar..." name="search" style="max-width: 500px;">
                <i class="fa-solid fa-magnifying-glass" id="searchIcon" style="cursor: pointer;"></i>
              </div>
            </form>

            <script>
              document.getElementById('searchIcon').addEventListener('click', function() {
                document.getElementById('searchForm').submit();
              });
            </script>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $search = htmlspecialchars($_POST['search']);
            }
            ?>
            <br>
          </div>
        </div>
      </header>

      <div class="row row-mt">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row row-mb">
                <div class="col-12 col-md-4 text-center text-md-left align-self-center">
                </div>
              </div>
              <table class="table table-responsive-sm table-striped table-responsive-md">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cargo</th>
                    <th class="text-end">Apagar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $filter = $_POST['search'] ?? '';
                  $select2 = "SELECT * FROM users WHERE username LIKE '%$filter%' 
                                    OR id LIKE '%$filter%' OR email LIKE '%$filter%'";
                  $result2 = mysqli_query($connect, $select2);
                  while ($row2 = mysqli_fetch_assoc($result2)) {
                    echo ('
                    <tr>
                      <td>' . $row2['id'] . '</td>
                      <td>' . $row2['username'] . '</td>
                      <td>' . $row2['email'] . '</td>
                    ');
                    if ($row2['permission_level'] == 1) {
                      echo ('<td>Admin</td>');
                    } else {
                      echo ('<td>Utilizador</td>');
                    }
                    echo ('
<td class="text-end">
                          <form action="/storeify/admin/delete.php" method="POST">
                            <input type="hidden" name="memberID" value="' . $row2['id'] . '">
                            <button type="submit" class="btn btn-default"><i class="fa-solid fa-times"></i></button>
                          </form>
                      </td>
                    </tr>
                    ');
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/admin/dashp2.php';
  ?>
</body>

</html>
