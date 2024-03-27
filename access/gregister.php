<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet">
  <style>
    .square {
      width: 47px;
      height: 60px;
      margin: 5px;
      border: 1.5px solid #a4b0be;
      background-color: #ffffff;
      display: inline-flex;
      position: relative;
      border-radius: 10%;
    }

    input {
      width: 100%;
      background-color: #ffffff;
      border: 2px solid #a4b0be;
      height: 100%;
      border: none;
      outline: none;
      text-align: center;
      font-size: 1.2em;
      border-radius: 10%;
      line-height: 28px;
      color: black;
    }

    .actions {
      text-align: center;
    }

    .form2 {
      display: flex;
      flex-direction: column;
      gap: 30px;
      margin-top: 30px;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
      appearance: textfield;
    }
  </style>
</head>

<body>
  <?php session_start(); ?>
  <div id="page" class="site">
    <div class="container">
      <div class="theform">
        <div class="play">
          <div class="wrapper">
            <div class="card one"></div>
            <div class="card two"></div>
            <div class="card three"></div>
            <div class="card four"></div>
            <div class="card five"></div>
          </div>
        </div>
        <div class="signup">
          <nav>
            <ul>
              <li><a href="access.php"><i class="ri-arrow-left-line"></i></a></li>
            </ul>
          </nav>
          <div class="heading">
            <h2>Password</h2>
            <p>We secure your data privacy encrypted.</p>
          </div>
          <form class="form2" action="register.php" method="post">
            <p>
              <i class="ri-lock-line"></i>
              <i style="left: 29%;" id="toggleIcon2" class="ri-eye-off-line icon" onclick="toggleIcon2()"></i>
              <input id="password" name="password" type="password" placeholder="Password" required autocomplete="off" style="font-size:13.3px;font-family: 'Poppins';text-align:left;border-radius:0%; width: 400px;" />
            </p>
            <script>
              function toggleIcon2() {
                var iconElement = document.getElementById('toggleIcon2');
                var passwordInput = document.getElementById('password');
                if (iconElement.classList.contains('ri-eye-off-line')) {
                  iconElement.classList.remove('ri-eye-off-line');
                  iconElement.classList.add('ri-eye-line');
                  passwordInput.type = 'text';
                } else {
                  iconElement.classList.remove('ri-eye-line');
                  iconElement.classList.add('ri-eye-off-line');
                  passwordInput.type = 'password';
                }
              }
            </script>
            <p>
              <i class="ri-lock-line"></i>
              <input id="password2" name="password2" type="password" placeholder="Password" required autocomplete="off" style="font-size:13.3px;font-family: 'Poppins';text-align:left;border-radius:0%; width: 400px;" />
            </p>
            <div class="actions">
              <label>
                <input type="submit" value="Sign In">
                <i class="ri-arrow-right-line"></i>
              </label>
            </div>
            <?php
            if (isset($_SESSION["errormsg"])) {
              echo "<br><span id='errormsg' style='color: red'>" . $_SESSION["errormsg"] . "</span>";
              unset($_SESSION["errormsg"]);
            ?>
              <script>
                countdown();
              </script>
            <?php
            }
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <nav>
    <ul id="moon-icon" style="list-style: none; margin: 0; padding: 0; position: absolute; bottom: 10px; right: 10px; z-index: 0;">
      <li><a><i class="ri-moon-line"></i></a></li>
    </ul>
  </nav>
</body>

</html>