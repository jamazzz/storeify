<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/45266fece3.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
    ?>
    <div class="container-fluid">

        <header class="page-title">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 my-2">
                    <h1>Your Projects</h1>
                </div>
            </div>
        </header>
        <style>
            #myDiv {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 1000;
                padding: 20px;
            }
        </style>

        <div id="myDiv" class="col-6 col-md-6 col-lg-6 col-xl-6 mb-6" style="display: none;">
            <div class="card h-100" style="border: 1px solid #d9d9d9 ;">
                <div class="card-header">
                    <div class="float-left">
                        <i class="fa-solid fa-ban" style="padding-top: 17px;"></i> ‎ Delete Project
                    </div>
                </div>
                <div class="card-body">
                    <p class="mb-0">Are you sure you want to delete?</p>
                    <div style="margin-top: 2rem; position: relative; left: 550px;">
                        <form action="delete.php" method="post">
                            <input type="text" name="id" value="" style="display: none;">
                            <button onclick="toggleVisibility(this)" type="button" class="btn text">No</button>
                            <button type="submit" class="btn btn-danger text-primary">Yes</button>
                        </form>
                        <form id="send" action="sendinfo.php" method="post">
                            <input type="text" name="id2" value="" style="display: none;">
                            <button type="submit" style="display: none;"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function toggleVisibility(clickedElement) {
                var websiteId = clickedElement.getAttribute('value');
                document.getElementsByName('id')[0].value = websiteId;

                var myDiv = document.getElementById("myDiv");
                if (myDiv.style.display === "none") {
                    myDiv.style.display = "block";
                } else {
                    myDiv.style.display = "none";
                }
            }

            function submitForm(clickedElement) {
                var websiteId = clickedElement.getAttribute('value');
                var hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'id';
                hiddenInput.value = websiteId;
                var form = document.getElementById('send');
                form.appendChild(hiddenInput);
                form.submit();
            }
        </script>



</body>

</html>

<?php
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
    $projectsinfo = "SELECT * FROM websites WHERE id = '" . $row['websiteid'] . "' AND deleted = 0";
    $result2 = mysqli_query($connect, $projectsinfo);
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $projectspack = "SELECT * FROM websites WHERE id = '" . $row2['package_id'] . "' AND deleted = 0";
        $result3 = mysqli_query($connect, $projectspack);
        $row3 = mysqli_fetch_assoc($result3);
        echo '
    <div class="col-11 col-md-11 col-lg-11 col-xl-11 mb-5">
        <div class="card h-100" style="border: 1px solid #d9d9d9 ;">
            <div class="card-header">
                <div class="float-left">
                    <i class="fa-solid fa-cart-shopping" style="padding-top: 17px;"></i> ‎ ' . $row2['name'] . '
                </div>
                <div class="float-right">
                    <a onclick="toggleVisibility(this)" id="webid" value="' . $row['websiteid'] . '"  class="btn btn-danger"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="card-body">
                <p class="mb-2">' . $row3['name'] . '</p>
                <p class="mb-0"><a value="' . $row['websiteid'] . '" onclick="submitForm(this)" target="_blank">View webstore</a></p>
                <a href="#" class="btn text-primary disabled btn-outline-primary mt-4">Logged in</a>
                ';
        if ($row2['owner'] == $_SESSION['userid']) {
            echo '
                <a href="pages/samples/error-404.php" class="btn text-secondary mt-4">Transfer</a>';
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