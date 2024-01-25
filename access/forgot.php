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
        <?php if (!isset($_SESSION['email']) && !isset($_SESSION['verify'])) { ?>
          <div class="signup">
            <nav>
              <ul>
                <li><a href="access.php"><i class="ri-arrow-left-line"></i></a></li>
              </ul>
            </nav>
            <div class="heading">
              <h2>Account Recovery</h2>
              <p>We secure your data privacy encrypted.</p>
            </div>
            <form class="form2" action="forgotcode.php" method="post">
              <p>
                <i class="ri-mail-line"></i>
                <input type="text" id="recoveremail" name="recoveremail" placeholder="Email Address" required autocomplete="off" style="font-size:13.3px;font-family: 'Poppins';text-align:left;border-radius:0%; width: 400px;">
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
        <?php } else if (isset($_SESSION['email']) && !isset($_SESSION['verify'])) { ?>
          <div class="signup">
            <nav>
              <ul>
                <form action="forgotcode2.php" method="post">
                  <button style="background-color:transparent; border:transparent;">
                    <li><a><i class="ri-arrow-left-line"></i></a></li>
                  </button>
                </form>
              </ul>
            </nav>
            <div class="heading">
              <h2>Account Recovery</h2>
              <p>We secure your data privacy encrypted.</p>
            </div>
            <form class="form1" action="verify.php" method="post">
              <p>
              <div class="square" id="square1">
                <input type="text" name="input1" maxlength="1" oninput="connectInputs('square1', 'square2')" onkeydown="handleBackspace('square1', 'square2', event)" />
              </div>
              <div class="square" id="square2">
                <input type="text" name="input2" maxlength="1" oninput="connectInputs('square2', 'square3')" onkeydown="handleBackspace('square2', 'square1', event)" />
              </div>
              <div class="square" id="square3">
                <input type="text" name="input3" maxlength="1" oninput="connectInputs('square3', 'square4')" onkeydown="handleBackspace('square3', 'square2', event)" />
              </div>
              <div class="square" id="square4">
                <input type="text" name="input4" maxlength="1" oninput="connectInputs('square4', 'square5')" onkeydown="handleBackspace('square4', 'square3', event)" />
              </div>
              <div class="square" id="square5">
                <input type="text" name="input5" maxlength="1" oninput="connectInputs('square5', 'square6')" onkeydown="handleBackspace('square5', 'square4', event)" />
              </div>
              <div class="square" id="square6">
                <input type="text" name="input6" maxlength="1" onkeydown="handleBackspace('square6', 'square5', event)" />
              </div>
              </p>
              <div class="actions">
                <label>
                  <input type="submit" value="Sign In">
                  <i class="ri-arrow-right-line"></i>
                </label>
              </div>
            </form>
            <form action="forgotcode.php" method="post">
              <div class="actions">
                <label>
                  <input type="text" id="recoveremail2" name="recoveremail2" style="display: none;">
                  <input type="submit" value="Resend">
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
          <?php
        } else if (isset($_SESSION['email']) && isset($_SESSION['verify'])) { ?>
            <div class="signup">
              <nav>
                <ul>
                  <li><a href="access.php"><i class="ri-arrow-left-line"></i></a></li>
                </ul>
              </nav>
              <div class="heading">
                <h2>Account Recovery</h2>
                <p>We secure your data privacy encrypted.</p>
              </div>
              <form class="form2" action="verify.php" method="post">
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
          <?php } ?>
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
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const signup = document.querySelector(".t-signup"),
      signin = document.querySelector(".t-signin"),
      addclass = document.querySelector(".site");

    const storedState = sessionStorage.getItem("signupOrSignin");
    if (storedState === "signup") {
      addclass.className = "site signup-show";
    } else if (storedState === "signin") {
      addclass.className = "site signin-show";
    }

    signup.addEventListener("click", function() {
      addclass.className = "site signup-show";
      sessionStorage.setItem("signupOrSignin", "signup");
    });

    signin.addEventListener("click", function() {
      addclass.className = "site signin-show";
      sessionStorage.setItem("signupOrSignin", "signin");
    });
  });

  function connectInputs(currentSquareId, nextSquareId) {
    const currentInput = document
      .getElementById(currentSquareId)
      .querySelector("input");
    const nextInput = document
      .getElementById(nextSquareId)
      .querySelector("input");

    if (currentInput.value !== "") {
      nextInput.focus();
    }
  }

  function handleBackspace(currentSquareId, prevSquareId, event) {
    const currentInput = document
      .getElementById(currentSquareId)
      .querySelector("input");
    const prevInput = document
      .getElementById(prevSquareId)
      .querySelector("input");

    if (
      event.key === "Backspace" &&
      currentInput.value === "" &&
      currentSquareId !== "square1"
    ) {
      prevInput.focus();
    }
  }

  function handleArrowKeys(currentSquareId, event) {
    const currentInput = document
      .getElementById(currentSquareId)
      .querySelector("input");

    if (event.key === "ArrowRight") {
      const nextSquareId =
        "square" + (parseInt(currentSquareId.substring(6)) + 1);
      const nextInput = document
        .getElementById(nextSquareId)
        .querySelector("input");

      if (nextInput) {
        nextInput.focus();
      }
    } else if (event.key === "ArrowLeft") {
      const prevSquareId =
        "square" + (parseInt(currentSquareId.substring(6)) - 1);
      const prevInput = document
        .getElementById(prevSquareId)
        .querySelector("input");

      if (prevInput) {
        prevInput.focus();
      }
    }
  }

  document.addEventListener("keydown", function(event) {
    const focusedElement = document.activeElement;

    if (
      focusedElement.tagName === "INPUT" &&
      focusedElement.parentElement.classList.contains("square")
    ) {
      const currentSquareId = focusedElement.parentElement.id;
      handleArrowKeys(currentSquareId, event);
    }
  });
</script>

</html>