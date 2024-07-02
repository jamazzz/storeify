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

      <div class="card row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
              </div>
              <div class=" col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4 style="margin-left: -1100px;">Name</h4>
                <p style="margin-left: -900px;">Customize the Name of your webstore.</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
          <form method="POST" action="/storeify/createPackage.php">
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
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
              </div>
              <div class=" col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4 style="margin-left: -1100px;">Price</h4>
                <p style="margin-left: -900px;">Customize the Name of your webstore.</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <div class="row no-gutters">
              <input type="number" name="name" id="name" class="form-control" style="max-width: 480px;">
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="card row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
              </div>
              <div class=" col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
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
              </form>
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="card row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
              </div>
              <div class=" col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4 style="margin-left: -1050px;">Description</h4>
                <br>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <div class="row no-gutters">
            </div>
          </div>
          <br>
          <div id="editor"></div>


          <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
          <script>
            const Editor = toastui.Editor;
            const editor = new Editor({
              el: document.querySelector('#editor'),
              height: '400px',
              initialEditType: 'markdown',
              previewStyle: 'vertical',
              theme: 'dark',
              hideModeSwitch: true
            });

            const createButton = document.querySelector('.btn-primary');
            createButton.addEventListener('click', function() {
              const content = editor.getMarkdown();
              console.log(content);
            });
          </script>

        </div>
      </div>
      <br>

      <style>
        #drop-area,
        #drop-area2 {
          border: 2px dashed #ccc;
          border-radius: 20px;
          width: 480px;
          font-family: sans-serif;
        }

        #drop-area.highlight,
        #drop-area2.highlight {
          border-color: purple;
        }

        p {
          margin-top: 0;
        }

        .button {
          display: inline-block;
          padding: 10px;
          background: #ccc;
          cursor: pointer;
          border-radius: 5px;
          border: 1px solid #ccc;
        }

        .button:hover {
          background: #ddd;
        }

        #fileElem,
        #fileElem2 {
          display: none;
        }

        .success {
          border: 2px dashed rgb(0, 255, 0);
          border-radius: 20px;
          width: 480px;
          height: 76px;
          font-family: sans-serif;
        }

        .error {
          border: 2px dashed rgb(255, 0, 0);
          border-radius: 20px;
          width: 480px;
          height: 76px;
          font-family: sans-serif;
        }
      </style>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
      </head>

      <body>

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
                  <?php
                  if (!isset($_SESSION["thumbnail"])) {
                    echo('<div id="drop-area" class="drop-area">');
                    echo ('<input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files, this.parentElement)">');
                    echo ('<br><div class="text-center">');
                    echo ('<label for="fileElem"><i id="edit" class="fa-solid fa-download opacity-100 transition group-hover:opacity-100"></i></label>');
                  } else {
                    echo('<div style="border-color:rgb(0,255,0);" id="drop-area" class="drop-area">');
                    echo ('<input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files, this.parentElement)">');
                    echo ('<br><div class="text-center">');
                    echo ('<label for="fileElem"><i id="edit" class="fa-solid fa-check opacity-100 transition group-hover:opacity-100" style="color: rgb(0,255,0);"></i></label>');
                  }
                  ?>
                </div>
                <br>
              </div>
            </div>
          </div>
        </div>
    </div>
    <br>
    <div class="card row-mt">
      <div class="card-body row d-flex w-100 align-self-center">
        <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
          <div class="row align-self-center h-100">
            <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
              <h4 style="margin-left: -750px;">Zip File</h4>
              <p style="margin-left: -660px;">Upload your zip file here</p>
            </div>
          </div>
        </div>
        <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
          <div class="row no-gutters">
                <?php
                  if (!isset($_SESSION["zip"])) {
                    echo('<div id="drop-area2" class="drop-area2">');
                    echo ('<input type="file" id="fileElem2" multiple accept="image/*" onchange="handleFiles(this.files, this.parentElement)">');
                    echo ('<br><div class="text-center">');
                    echo ('<label for="fileElem2"><i id="edit2" class="fa-solid fa-download opacity-100 transition group-hover:opacity-100"></i></label>');
                  } else {
                    echo('<div style="border-color:rgb(0,255,0);" id="drop-area2" class="drop-area2">');
                    echo ('<input type="file" id="fileElem2" multiple accept="image/*" onchange="handleFiles(this.files, this.parentElement)">');
                    echo ('<br><div class="text-center">');
                    echo ('<label for="fileElem2"><i id="edit2" class="fa-solid fa-check opacity-100 transition group-hover:opacity-100" style="color: rgb(0,255,0);"></i></label>');
                  }
                ?>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>

    <script>
      var edit = document.getElementById('edit');
      var edit2 = document.getElementById('edit2');

      function uploadFile(file, dropArea) {
        let formData = new FormData();
        formData.append('file', file);

        fetch('/storeify/saveInfo.php', {
            method: 'POST',
            body: formData
          })
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.text();
          })
          .then(result => {
            if (dropArea.id === 'drop-area') {
              dropArea.style.borderColor = 'rgb(0, 255, 0)';
              edit.style.borderColor = 'rgb(0, 255, 0)';
              edit.classList.remove('fa-download');
              edit.classList.add('fa-check');
              document.getElementById('fileElem').disabled = true;
              edit.style.color = 'rgb(0, 255, 0)';
            } else if (dropArea.id === 'drop-area2') {
              dropArea.style.borderColor = 'rgb(0, 255, 0)';
              edit2.style.borderColor = 'rgb(0, 255, 0)';
              edit2.classList.remove('fa-download');
              edit2.classList.add('fa-check');
              edit2.style.color = 'rgb(0, 255, 0)';
              document.getElementById('fileElem2').disabled = true;
            }
            console.log(result);
          })
          .catch(error => {
            if (dropArea.id === 'drop-area') {
              dropArea.style.borderColor = 'rgb(255, 0, 0)';
              edit.style.borderColor = 'rgb(255, 0, 0)';
              edit.classList.remove('fa-download');
              edit.classList.add('fa-x');
              edit.style.color = 'rgb(255, 0, 0)';
            } else if (dropArea.id === 'drop-area2') {
              dropArea.style.borderColor = 'rgb(255, 0, 0)';
              edit2.style.borderColor = 'rgb(255, 0, 0)';
              edit2.classList.remove('fa-download');
              edit2.classList.add('fa-x');
              edit2.style.color = 'rgb(255, 0, 0)';
            }
          });
      }

      function setupDropArea(dropAreaId) {
        let dropArea = document.getElementById(dropAreaId);

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
          dropArea.addEventListener(eventName, preventDefaults, false);
        });

        ['dragenter', 'dragover'].forEach(eventName => {
          dropArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
          dropArea.addEventListener(eventName, unhighlight, false);
        });

        dropArea.addEventListener('drop', function(e) {
          let dt = e.dataTransfer;
          let files = dt.files;

          handleFiles(files, dropArea);
        }, false);
      }

      function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
      }

      function highlight(e) {
        let dropArea = e.currentTarget;
        dropArea.classList.add('highlight');
      }

      function unhighlight(e) {
        let dropArea = e.currentTarget;
        dropArea.classList.remove('highlight');
      }

      function handleFiles(files, dropArea) {
        files = [...files];
        files.forEach(file => uploadFile(file, dropArea));
      }

      setupDropArea('drop-area');
      setupDropArea('drop-area2');
    </script>
    <a class="btn btn-primary text-center align-self-center" style="width: 500px; margin-left: 32%;margin-right: 50%;">Create </a>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>