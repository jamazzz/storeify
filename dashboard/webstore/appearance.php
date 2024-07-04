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
            <h1 class="my-0">Appearance</h1>
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
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center"><img src="<?php echo isset($row['logo']) ? $row['logo'] : '/storeify/assets/images/logo.png'; ?>" alt="Favicon" class="w-75" style="max-width: 100px; border-radius: 50px;"></div>
              <div class="col-12 col-xl-10 col-lg-9 align-self-center my-3 my-lg-0">
                <h4>Logo</h4>
                <p class="m-0">Provide a logo that will be displayed on your webstore.</p>
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
                  font-family: sans-poppins;
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
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
                <i class="fa-solid  fa-signature" style="transform: scale(3);"></i>
              </div>
              <div class=" col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4>Name</h4>
                <p class="m-0">Customize the Name of your webstore.</p>
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
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
                <i class="fa-solid  fa-server" style="transform: scale(3);"></i>
              </div>
              <div class=" col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4>Domain</h4>
                <p class="m-0">Customize the domain of your webstore.</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <div class="row no-gutters">
              <form action="/storeify/changeSubdomain.php" method="POST" id="myForm">
                <input type="text" name="subdomain" id="subdomain" class="form-control" style="max-width: 480px;" value="<?php echo str_replace(' ', '', $row['subdomain']); ?>">
              </form>

              <script>
                document.getElementById('subdomain').addEventListener('keypress', function(event) {
                  if (event.key === 'Enter') {
                    event.preventDefault();
                    document.getElementById('myForm').submit();
                  }
                });
              </script>

            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="card row-mt">
        <br>
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
                <i class="fa-solid fa-object-group" style="transform: scale(3);"></i>
              </div>
              <div class=" col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4>Template</h4>
                <p class="m-0">Customise the layout of your webstore using our selection of templates or create your own.</p>
              </div>
            </div>
          </div>
          <br>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <small class="text-muted text-uppercase font-weight-bold d-block mb-2">Abstract Template</small>
            <div class="w-100"></div>
            <a class="btn btn-primary mr-lg-1" style="margin-right: 5px; background-color: #007bff; color: #fff;">Template 1</a>
            <a class="btn" style="margin-right: 5px; background-color: #414141;" disabled onmouseover="this.style.borderColor='#414141';" onmouseout="this.style.borderColor='transparent';">Template 2</a>
            <a class="btn" style="margin-right: 5px; background-color: #414141;" disabled onmouseover="this.style.borderColor='#414141';" onmouseout="this.style.borderColor='transparent';">Template 3</a>
            <a class="btn" style="margin-right: 5px; background-color: #414141;" disabled onmouseover="this.style.borderColor='#414141';" onmouseout="this.style.borderColor='transparent';">Template 4</a>
          </div>
        </div>
        <br>
      </div>
      <br>
      <div class="card row-mt">
        <div class="card-body row d-flex w-100 align-self-center">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
                <input id="color" type="text" style="width: 50px; height: 50px; border-radius: 25%;" readonly onclick="window.location.href='/storeify/changeTheme.php'">
                <?php
                echo ('<script>document.getElementById("color").style.backgroundColor = "' . $row['dark_color'] . '";</script>');
                echo ('<script>document.getElementById("color").innerText = "' . $row['dark_color'] . '";</script>');
                ?>
              </div>
              <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">

                <h4>Theme</h4>
                <p class="m-0">Customise your template's colour scheme via pre-built themes or create your own.</p>
              </div>
            </div>
          </div>
          <br>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <div class="w-100"></div>
            <script>
              const colors = [{
                  r: 0xe4,
                  g: 0x3f,
                  b: 0x00
                },
                {
                  r: 0xfa,
                  g: 0xe4,
                  b: 0x10
                },
                {
                  r: 0x55,
                  g: 0xcc,
                  b: 0x3b
                },
                {
                  r: 0x09,
                  g: 0xad,
                  b: 0xff
                },
                {
                  r: 0x6b,
                  g: 0x0e,
                  b: 0xfd
                },
                {
                  r: 0xe7,
                  g: 0x0d,
                  b: 0x86
                },
                {
                  r: 0xe4,
                  g: 0x3f,
                  b: 0x00
                }
              ];
              document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('color-wheel').addEventListener('click', function(e) {
                  var rect = e.target.getBoundingClientRect();
                  //Compute cartesian coordinates as if the circle radius was 1
                  var x = 2 * (e.clientX - rect.left) / (rect.right - rect.left) - 1;
                  var y = 1 - 2 * (e.clientY - rect.top) / (rect.bottom - rect.top);
                  //Compute the angle in degrees with 0 at the top and turning clockwise as expected by css conic gradient
                  var a = ((Math.PI / 2 - Math.atan2(y, x)) / Math.PI * 180);
                  if (a < 0) a += 360;
                  //Map the angle between 0 and number of colors in the gradient minus one
                  a = a / 360 * (colors.length - 1); //minus one because the last item is at 360° which is the same as 0°
                  //Compute the colors to interpolate
                  var a0 = Math.floor(a) % colors.length;
                  var a1 = (a0 + 1) % colors.length;
                  var c0 = colors[a0];
                  var c1 = colors[a1];
                  //Compute the weights and interpolate colors
                  var a1w = a - Math.floor(a);
                  var a0w = 1 - a1w;
                  var color = {
                    r: c0.r * a0w + c1.r * a1w,
                    g: c0.g * a0w + c1.g * a1w,
                    b: c0.b * a0w + c1.b * a1w
                  };
                  //Compute the radius
                  var r = Math.sqrt(x * x + y * y);
                  if (r > 1) r = 1;
                  //Compute the white weight, interpolate, and round to integer
                  var cw = r < 0.8 ? (r / 0.8) : 1;
                  var ww = 1 - cw;
                  color.r = Math.round(color.r * cw + 255 * ww);
                  color.g = Math.round(color.g * cw + 255 * ww);
                  color.b = Math.round(color.b * cw + 255 * ww);
                  //Compute the hex color code and apply it
                  var xColor = rgbToHex(color.r, color.g, color.b);
                  document.getElementById('color').innerText = xColor;
                  document.getElementById('color').style.backgroundColor = xColor;
                  fetch('/storeify/changeTheme.php', {
                      method: 'POST',
                      headers: {
                        'Content-Type': 'application/json'
                      },
                      body: JSON.stringify({
                        color: xColor
                      })
                    })
                    .then(response => response.text())
                    .then(result => {
                      location.reload();
                    })
                    .catch(error => {
                      console.error('Error:', error);
                    });
                });
              });

              function componentToHex(c) {
                var hex = c.toString(16);
                return hex.length == 1 ? "0" + hex : hex;
              }

              function rgbToHex(r, g, b) {
                return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
              }
            </script>
            <style>
              #color-wheel {
                width: 120px;
                height: 120px;
                background: radial-gradient(white, transparent 80%),
                  conic-gradient(#e43f00, #fae410, #55cc3b, #09adff, #6b0efd, #e70d86, #e43f00);
                border-radius: 50%;
              }
            </style>
            <div id="color-wheel" style="margin-left: 100px;"></div>
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
              <div class="col-12 col-xl-10 col-lg-9 align-self-center row-mt-mobile my-3 my-lg-0">
                <h4 style="margin-left: -820px;">Home Page [Tailwind CSS / Markdown]</h4>
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
          <a id="btn" class="btn btn-primary text-center align-self-center" style="max-width: 1500px; margin-left:14px;">Save</a>
        </div>
      </div>
      <br>

      <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/turndown/dist/turndown.min.js"></script>

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const Editor = toastui.Editor;
          const editor = new Editor({
            el: document.querySelector('#editor'),
            height: '400px',
            initialEditType: 'markdown',
            previewStyle: 'vertical',
            theme: 'dark',
            initialValue: '<?php echo empty($_SESSION['mdpack']) ? "" : $_SESSION['mdpack']; ?>',
            hideModeSwitch: true
          });

          const createButton = document.getElementById('btn');
          createButton.addEventListener('click', function() {
            const content = {
              md: editor.getMarkdown(),
              html: editor.getHTML()
            };
            fetch('/storeify/updateHome.php', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                  content: content
                })
              })
              .then(response => response.text())
              .then(result => {
              })
              .catch(error => {
                console.error('Error:', error);
              });
          });
        });
      </script>



    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>