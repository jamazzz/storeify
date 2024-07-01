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
            <div class="row no-gutters">
              <form action="/storeify/changeName.php" method="POST" id="myForm2">
                <input type="text" name="name" id="name" class="form-control" style="max-width: 480px;" value="<?php echo $row['name']; ?>">
              </form>

              <script>
                document.getElementById('name').addEventListener('keypress', function(event) {
                  if (event.key === 'Enter') {
                    event.preventDefault();
                    document.getElementById('myForm2').submit();
                  }
                });
              </script>

            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="card row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class=" col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
              <h4 style="margin-left: -720px;">Thumbnail</h4>
              <p style="margin-left: -630px;">Upload your thumbnail here</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <div class="row no-gutters">
              <style>
                #drop-area {
                  border: 2px dashed #ccc;
                  border-radius: 20px;
                  width: 480px;
                  font-family: sans-serif;
                }

                #drop-area.highlight {
                  border-color: purple;
                }

                p {
                  margin-top: 0;
                }

                #gallery img {
                  width: 150px;
                  vertical-align: middle;
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

                #fileElem {
                  display: none;
                }
              </style>
              <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
              <div id="drop-area">
                <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
                <br>
                <div class="text-center">
                  <label for="fileElem"><i class="fa-solid fa-download opacity-50 transition group-hover:opacity-100"></i></label>
                </div>
                <br>
              </div>
              <script>
                let dropArea = document.getElementById('drop-area');

                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                  dropArea.addEventListener(eventName, preventDefaults, false);
                });

                function preventDefaults(e) {
                  e.preventDefault();
                  e.stopPropagation();
                }

                ['dragenter', 'dragover'].forEach(eventName => {
                  dropArea.addEventListener(eventName, highlight, false);
                });

                ['dragleave', 'drop'].forEach(eventName => {
                  dropArea.addEventListener(eventName, unhighlight, false);
                });

                function highlight(e) {
                  dropArea.classList.add('highlight');
                }

                function unhighlight(e) {
                  dropArea.classList.remove('highlight');
                }

                dropArea.addEventListener('drop', handleDrop, false);

                function handleDrop(e) {
                  let dt = e.dataTransfer;
                  let files = dt.files;

                  handleFiles(files);
                }

                function handleFiles(files) {
                  files = [...files];
                  files.forEach(uploadFile);
                }

                function uploadFile(file) {
                  let formData = new FormData();
                  formData.append('fileElem', file);

                  fetch('/storeify/changeLogo.php', {
                      method: 'POST',
                      body: formData
                    })
                    .then(response => response.text())
                    .then(result => {
                      location.reload();
                    })
                    .catch(error => {
                      console.error('Error:', error);
                    });
                }
              </script>


            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="card row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class=" col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4 style="margin-left: -750px;">Zip File</h4>
                <p style="margin-left: -660px;">Upload your zip file here</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <div class="row no-gutters">
              <style>
                #drop-area2 {
                  border: 2px dashed #ccc;
                  border-radius: 20px;
                  width: 480px;
                  font-family: sans-serif;
                }

                #drop-area.highlight {
                  border-color: purple;
                }

                p {
                  margin-top: 0;
                }

                #gallery img {
                  width: 150px;
                  vertical-align: middle;
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

                #fileElem {
                  display: none;
                }
              </style>
              <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
              <div id="drop-area2">
                <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
                <br>
                <div class="text-center">
                  <label for="fileElem"><i class="fa-solid fa-download opacity-50 transition group-hover:opacity-100"></i></label>
                </div>
                <br>
              </div>
              <script>
                let dropArea2 = document.getElementById('drop-area2');

                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                  dropArea2.addEventListener(eventName, preventDefaults, false);
                });

                function preventDefaults(e) {
                  e.preventDefault();
                  e.stopPropagation();
                }

                ['dragenter', 'dragover'].forEach(eventName => {
                  dropArea2.addEventListener(eventName, highlight, false);
                });

                ['dragleave', 'drop'].forEach(eventName => {
                  dropArea2.addEventListener(eventName, unhighlight, false);
                });

                function highlight(e) {
                  dropArea2.classList.add('highlight');
                }

                function unhighlight(e) {
                  dropArea2.classList.remove('highlight');
                }

                dropArea2.addEventListener('drop', handleDrop, false);

                function handleDrop(e) {
                  let dt = e.dataTransfer;
                  let files = dt.files;

                  handleFiles(files);
                }

                function handleFiles(files) {
                  files = [...files];
                  files.forEach(uploadFile);
                }

                function uploadFile(file) {
                  let formData = new FormData();
                  formData.append('fileElem', file);

                  fetch('/storeify/changeLogo.php', {
                      method: 'POST',
                      body: formData
                    })
                    .then(response => response.text())
                    .then(result => {
                      location.reload();
                    })
                    .catch(error => {
                      console.error('Error:', error);
                    });
                }
              </script>


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
      <a class="btn btn-primary text-center align-self-center" style="width: 500px; margin-left: 32%;margin-right: 50%;">Create </a>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>