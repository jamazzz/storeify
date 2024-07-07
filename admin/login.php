<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Design by foolishdeveloper.com -->
  <title>Storeify | Admin</title>
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!--Stylesheet-->
  <style media="screen">
    *,
    *:before,
    *:after {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      width: 100vh;
      height: 100svh;
      background: #010101;
      background: radial-gradient(#1a1b1e, #0f1013);
    }


    .background .shape {
      height: 200px;
      width: 200px;
      position: absolute;
      border-radius: 50%;
    }

    form {
      height: 430px;
      width: 430px;
      background-color: rgba(255, 255, 255, 0.13);
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      border-radius: 10px;
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
      padding: 50px 35px;
    }

    form * {
      font-family: 'Poppins', sans-poppins;
      color: #ffffff;
      letter-spacing: 0.5px;
      outline: none;
      border: none;
    }

    form h3 {
      font-size: 32px;
      font-weight: 500;
      line-height: 42px;
      text-align: center;
    }

    label {
      display: block;
      margin-top: 30px;
      font-size: 16px;
      font-weight: 500;
    }

    input {
      display: block;
      height: 43px;
      width: 100%;
      border-radius: 3px;
      background-color: transparent;
      padding: 0 10px;
      margin-top: 8px;
      font-size: 14px;
      text-align: center;
      font-weight: bold;
      font-size: 20px;
    }

    .newinput {
      display: block;
      height: 50px;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.07);
      border-radius: 3px;
      padding: 0 10px;
      text-align: left;
      margin-top: 8px;
      font-size: 14px;
      font-weight: bold;
      z-index: -1;
    }

    .squareinput {
      display: block;
      height: 50px;
      width: 100%;
      background-color: transparent;
      text-align: center;
      margin-top: 8px;
      font-size: 14px;
      font-weight: bold;
    }

    ::placeholder {
      color: #e5e5e5;
      text-align: left;
    }

    button {
      margin-top: 30px;
      width: 100%;
      background-color: #ffffff;
      color: #080710;
      padding: 15px 0;
      font-size: 18px;
      font-weight: 600;
      border-radius: 5px;
      cursor: pointer;
    }

    .square {
      width: 45px;
      height: 60px;
      margin: 5px;
      border: 1.5px solid #e5e5e5;
      background-color: rgba(255, 255, 255, 0.07);
      display: inline-flex;
      position: relative;
      border-radius: 10%;
    }

    .actions {
      text-align: center;
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
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . "/storeify/essencial.php");
  if (!isset($_SESSION["phase"])) {
    $_SESSION["phase"] = 1;
  }

  if ($_SESSION["phase"] == 1) {
    echo ('
    <form action="adminlogin.php" method="post">
    <h3>Login</h3>
    <br><br>
    <input type="text" autocomplete="off" placeholder="Email" id="eoru" name="eoru" class="newinput">
    <br>
    <input type="password" autocomplete="off" placeholder="Palavra-passe" id="pass" name="pass" class="newinput">
    <br>    ');
    if (isset($_SESSION['errormsg'])) {
      echo ('<h5 style="color: red; text-align: left;">' . $_SESSION['errormsg'] . '</h5>');
      echo ('<script>setTimeout(function() { document.querySelector("h5").style.display = "none"; }, 3000);</script>');
      unset($_SESSION['errormsg']);
    }
    echo ('<button type="submit">Iniciar Sessão</button>
  </form>');
  } elseif ($_SESSION['phase'] == 2) {
    echo ('
    <form class="form1" action="../access/verify.php" method="post">
    <p>
    <h3>Insira o OTP enviado para o seu e-mail</h3>
    <br><br>
    <br>
    <div class="square squareinput" id="square1">
      <input type="text" name="input1" id="input1" oninput="connectInputs(\'square1\', \'square2\')" onkeydown="handleBackspace(\'square1\', \'square2\', event)" />
    </div>
    <div class="square squareinput" id="square2">
      <input type="text" name="input2" id="input2" oninput="connectInputs(\'square2\', \'square3\')" onkeydown="handleBackspace(\'square2\', \'square1\', event)" />
    </div>
    <div class="square squareinput" id="square3">
      <input type="text" name="input3" id="input3" oninput="connectInputs(\'square3\', \'square4\')" onkeydown="handleBackspace(\'square3\', \'square2\', event)" />
    </div>
    <div class="square squareinput" id="square4">
      <input type="text" name="input4" id="input4" oninput="connectInputs(\'square4\', \'square5\')" onkeydown="handleBackspace(\'square4\', \'square3\', event)" />
    </div>
    <div class="square squareinput" id="square5">
      <input type="text" name="input5" id="input5" oninput="connectInputs(\'square5\', \'square6\')" onkeydown="handleBackspace(\'square5\', \'square4\', event)" />
    </div>
    <div class="square squareinput" id="square6">
    <input type="text" name="input6" id="input6" maxlength="1" oninput="connectInputs(\'square6\', \'square7\')" onkeydown="handleBackspace(\'square6\', \'square5\', event)" />
  </div>
    <div class="square2" id="square7">
    <input type="text" name="input7" onkeydown="handleBackspace(\'square7\', \'square6\', event)" style="color: transparent; position: fixed; bottom: 0; left: 0; visibility: hidden;" />
  </div>
    </p>
    <div class="actions">
      <label>
        <input class="newinput" type="submit" value="Entrar">
        <i class="ri-arrow-right-line"></i>
            </label>
            <br>
            <h5 style="color: white; text-align: center;">Não recebeu o código? <a href="/storeify/access/forgotcode.php">Reenviar</a></h5>
    </div> 
  </form>
    ');
  }
  ?>
  <script>
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

    document.addEventListener("paste", function(event) {
      const focusedElement = document.activeElement;

      if (
        focusedElement.tagName === "INPUT" &&
        focusedElement.parentElement.classList.contains("square")
      ) {
        const currentSquareId = focusedElement.parentElement.id;
        const pasteData = (event.clipboardData || window.clipboardData).getData("text");

        for (let i = 0; i < pasteData.length; i++) {
          const nextSquareId = "square" + (parseInt(currentSquareId.substring(6)) + i);
          const nextInput = document
            .getElementById(nextSquareId)
            .querySelector("input");

          if (nextInput) {
            nextInput.value = pasteData[i];
          }
        }

        event.preventDefault();
      }
    });
  </script>
</body>

</html>