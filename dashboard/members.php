<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Storeify</title>
</head>

<body>
  <?php
  include 'dashp1.php';
  ?>
  <!-- Modal starts -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here large.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Ends -->
  <?php
  $midquery = "SELECT memberid FROM members  WHERE websiteid = '" . $_SESSION['currentwebsite'] . "'";
  $midqueryresult = mysqli_query($connect, $midquery);
  $midinfo = mysqli_fetch_assoc($midqueryresult);
  $numero = 4;

  $membersString = '';
  $membersArray = array();
  while ($row = mysqli_fetch_assoc($midqueryresult)) {
    $membersArray[] = $row;
    $membersString = implode(',', $row) . ',';
  }
  $membersString = rtrim($membersString, ',');

  $mquery = "SELECT * FROM users  WHERE id = '" . $membersString . "'";
  $mqueryresult = mysqli_query($connect, $mquery);
  $minfo = mysqli_fetch_assoc($mqueryresult);
  echo '
      <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-row">
            <img src="../assets/images/faces/face3.jpg" class="img-lg rounded" alt="umage" />
            <div class="ms-3">
              <h6>Tim Cook</h6>
              <p class="text-muted">ola@gmail.com</p>
              <div class="col-md-2 grid-margin stretch-card">
                <p class="mt-2 text-success font-weight-bold">Designer</p>
                <div class="btn-group">
                  <button type="button" class="btn btn-secundary dropdown" data-bs-toggle="dropdown"><i class="fa fa-gear"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item">Go back</a>
                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                    <a class="dropdown-item">Kick</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    ';
  ?>
  <?php
  include 'dashp2.php';
  ?>
</body>

</html>