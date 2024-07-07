<!DOCTYPE html>
<html lang="en">

<head>
    <title>Storeify</title>
    <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/45266fece3.js" crossorigin="anonymous"></script>
    <style>
        #myDiv,
        #transferModal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            padding: 20px;
        }

        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>

<body>
    <?php

    use FontLib\Table\Type\head;

    include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
    ?>
    <div class="container-fluid">

        <header class="page-title">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 my-3">
                    <h1 style="margin-left:50px;">Os Seus Projetos</h1>
                </div>
            </div>
        </header>

        <!-- Delete Confirmation Modal -->
        <div id="myDiv">
            <div class="card h-100">
                <div class="card-header">
                    <div class="float-left">
                        <i class="fa-solid fa-ban" style="padding-top: 17px;"></i> ‎ Apagar Projeto
                    </div>
                </div>
                <div class="card-body">
                    <p class="mb-0">Tem a certeza que deseja apagar?</p>
                    <div style="margin-top: 2rem; text-align: right;">
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="">
                            <button type="button" class="btn text" onclick="toggleVisibility('myDiv')">Não</button>
                            <button type="submit" class="btn btn-danger">Sim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transfer Modal -->
        <div id="transferModal">
            <div class="card h-100">
                <div class="card-header">
                    <div class="float-left">
                        <i class="fa-solid fa-exchange-alt" style="padding-top: 17px;"></i> ‎ Transferir Projeto
                    </div>
                </div>
                <div class="card-body">
                    <form id="transferForm" action="transfer.php" method="post">
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="newOwner">Novo Proprietário:</label>
                            <input type="number" id="newOwner" name="newOwner" class="form-control" required>
                        </div>
                        <div style="margin-top: 2rem; text-align: right;">
                            <button type="button" class="btn text" onclick="toggleVisibility('transferModal')">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Transferir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal-overlay" id="modalOverlay"></div>

        <script>
            function toggleVisibility(elementId) {
                var modal = document.getElementById(elementId);
                var overlay = document.getElementById('modalOverlay');
                if (modal.style.display === "none") {
                    modal.style.display = "block";
                    overlay.style.display = "block";
                } else {
                    modal.style.display = "none";
                    overlay.style.display = "none";
                }
            }

            function showDeleteModal(websiteId) {
                document.getElementsByName('id')[0].value = websiteId;
                toggleVisibility('myDiv');
            }

            function showTransferModal(websiteId) {
                document.querySelector('#transferModal input[name="id"]').value = websiteId;
                toggleVisibility('transferModal');
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

        <?php
        $projects = "SELECT websiteid FROM members WHERE memberid = '" . $_SESSION['userid'] . "'";
        $result = mysqli_query($connect, $projects);
        $total = mysqli_num_rows($result);

        echo '<br><div class="row2" style="margin-left: 100px;">';
        for ($i = 0; $i < $total; $i++) {
            $row = mysqli_fetch_assoc($result);
            $projectsinfo = "SELECT * FROM websites WHERE id = '" . $row['websiteid'] . "' AND deleted = 0";
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
                                <a onclick="showDeleteModal(' . $row['websiteid'] . ')" id="webid" value="' . $row['websiteid'] . '" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="mb-0"><a value="' . $row['websiteid'] . '" onclick="submitForm(this)" target="_blank">Ver dashboard da loja</a></p>';
                if ($row2['owner'] == $_SESSION['userid']) {
                    echo '<a href="#" class="btn text-primary btn-outline-primary mt-4" onclick="showTransferModal(' . $row['websiteid'] . ')">Transferir</a>';
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
                            <h3>Criar loja online</h3>
                            <p class="mb-2">‎</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        </div>';
        ?>

</body>

</html>