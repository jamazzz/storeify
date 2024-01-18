<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/select.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/45266fece3.js" crossorigin="anonymous"></script>
</head>
<div class="container-fluid">

    <header class="page-title">
        <div class="row no-gutters">
            <div class="col-12 col-md-6 my-2">
                <h1>Your Projects</h1>
            </div>
        </div>
    </header>

    </body>

</html>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/bd.php");
include($_SERVER['DOCUMENT_ROOT'] . "/storeify/check.php");
$projects = "SELECT websiteid FROM members WHERE memberid = '" . $_SESSION['userid'] . "'";
$result = mysqli_query($connect, $projects);
$total = mysqli_num_rows($result);

$projeto = "SELECT ";

if ($total == 0) {
    mysqli_close($connect);
    header('Location: /storeify/dashboard/new.php');
    exit();
}
echo '<div class="row2" style="margin-left: 35px;">';
for ($i = 0; $i < $total; $i++) {
    $row = mysqli_fetch_assoc($result);
    $projectsinfo = "SELECT * FROM websites WHERE id = '" . $row['websiteid'] . "'";
    $result2 = mysqli_query($connect, $projectsinfo);
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo '
    <div class="col-11 col-md-11 col-lg-11 col-xl-11 mb-5">
        <div class="card h-100" style="border: 1px solid #d9d9d9 ;">
            <div class="card-header">
                <div class="float-left">
                    <i class="fa-solid fa-cart-shopping" style="padding-top: 17px;"></i> ‎ ' . $row2['name'] . '
                </div>
                <div class="float-right">
                    <a href="pages/samples/error-404.html" class="btn btn-danger"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="card-body">
                <p class="mb-2">' . $row2['package_id'] . '</p>
                <p class="mb-0"><a href="pages/samples/error-404.html" target="_blank">View webstore</a></p>
                <a href="#" class="btn text-primary disabled btn-outline-primary mt-4">Logged in</a>
                ';
        if ($row2['owner'] == $_SESSION['userid']) {
            echo '
                <a href="pages/samples/error-404.html" class="btn text-secondary mt-4">Transfer</a>';
        }
        echo '
            </div>
        </div>
    </div>';
    }
}
echo ' <div class="col-11 col-md-11 col-lg-11 col-xl-11 mb-5">
        <a class="passive-link" href="new.php">
            <div class="card h-100" style="border: 1.5px dashed #d9d9d9 ;">
            <p class="mb-2">‎</p>
            <p class="mb-2">‎</p>
                <div class="card-body text-center d-flex align-items-center">
                    <div class="mx-auto">
                        <i class="fa-solid fa-circle-plus" style="font-size: 30px;"></i>
                        <h3>Create webstore</h3>
                        <p class="mb-2">‎</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>';
?>