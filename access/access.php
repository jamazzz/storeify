<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
  <?php
  session_start();
  include $_SERVER['DOCUMENT_ROOT'] . "/storeify/access/google.php";
  ?>
  <script>
    if (performance.navigation.type === 1) {
      window.location.href = "access.php";
    }
  </script>
  <style>
    form {
      display: flex;
      flex-direction: column;
      gap: 30px;
      margin-top: 30px;
    }
  </style>
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
              <li><a href="/storeify/index.php"><i class="ri-arrow-left-line"></i></a></li>
              <li>Não tem uma conta? <a class="t-signin">Registe-se</a></li>
            </ul>
          </nav>
          <div class="heading">
            <h2>Iniciar sessão</h2>
            <p>Protegemos a privacidade dos seus dados com encriptação.</p>
          </div>
          <form action="login.php" method="post">
            <p>
              <i class="ri-mail-line"></i>
              <input type="text" id="emailoruser" name="emailoruser" placeholder="Endereço de Email ou Nome de Utilizador" required autocomplete="off" />
            </p>
            <p>
              <i class="ri-lock-line"></i>
              <i id="toggleIcon2" class="ri-eye-off-line icon" onclick="toggleIcon2()"></i>
              <input id="password" name="password" type="password" placeholder="Palavra-passe" required autocomplete="off" />
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
            <nav>
              <ul>
                <a href="forgot.php" class="t-signin" style="color: var(--primary); text-decoration: hidden; font-size: 14px;">Esqueceu-se da palavra-passe?</a>
              </ul>
            </nav>

            <style>
              .t-signin:hover {
                text-decoration: underline;
              }
            </style>
            <p class="invisible">
              <i class="ri-user-3-line"></i>
              <input type="text" placeholder="EG" />
            </p>
            <p class="invisible">
              <i class="ri-user-3-line"></i>
              <input type="text" placeholder="EG" />
            </p>
            <div class="actions">
              <label>
                <input type="submit" value="Iniciar Sessão" />
                <i class="ri-arrow-right-line"></i>
              </label>
              <p>Ou</p>
          </form>
          <p class="socials">
            <!-- <button type="button"><i class="ri-facebook-line"></i></button> -->
            <button id="buttonDiv" type="button" style="margin-top: 10px;"></button>
          </p>
        </div>
      </div>
      <!--  -->
      <!--  -->
      <!--  -->
      <!--  -->
      <div class="signin">
        <nav>
          <ul>
            <li><a href="/storeify/index.php"><i class="ri-arrow-left-line"></i></a></li>
            <li>Já é membro? <a class="t-signup">Iniciar sessão</a></li>
          </ul>
        </nav>
        <div class="heading">
          <h2>Registe-se</h2>
          <p>Protegemos a privacidade dos seus dados com encriptação.</p>
        </div>
        <form action="register.php" method="post">
          <div class="container2" style="display: flex; flex-wrap: nowrap;">
            <i class="ri-user-3-line" style="padding-right:10px; color: #a4b0be; line-height: 40px; border-width: 0 0 2px; border-style: solid; border-color: #e6e6ed;"></i>
            <input type="text" id="fname" name="fname" placeholder="Primeiro Nome" required autocomplete="off" style="margin-right: 10px; font-family: inherit; flex: 1; outline: 0; line-height: 40px; border-width: 0 0 2px; border-style: solid; border-color: #e6e6ed;" />
            <i class="ri-user-3-line" style="padding-right:10px; margin-left: 10px;color: #a4b0be; line-height: 40px; border-width: 0 0 2px; border-style: solid; border-color: #e6e6ed;"></i>
            <input type="text" id="lname" name="lname" placeholder="Apelido" required autocomplete="off" style="font-family: inherit; flex: 1; outline: 0; line-height: 40px; border-width: 0 0 2px; border-style: solid; border-color: #e6e6ed;" />
          </div>
          <p>
            <i class="ri-mail-line"></i>
            <input type="email" name="email" id="email" placeholder="Endereço de Email" required autocomplete="off" />
          </p>
          <p>
            <i class="ri-lock-line"></i>
            <i id="toggleIcon" class="ri-eye-off-line icon" onclick="toggleIcon()"></i>
            <input id="password2" name="password2" type="password" placeholder="Palavra-passe" required autocomplete="off" />
          </p>
          <script>
            function toggleIcon() {
              var iconElement = document.getElementById('toggleIcon');
              var passwordInput = document.getElementById('password2');
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
            <input id="password3" type="password" name="password3" placeholder="Confirme a Palavra-passe" required autocomplete="off" />
          </p>
          <div class="actions">
            <label>
              <input type="submit" value="Registar" />
              <i class="ri-arrow-right-line"></i>
            </label>
            <p>Ou</p>
        </form>
        <p class="socials">
          <!-- <button type="button"><i class="ri-facebook-line"></i></button> -->
          <button id="buttonDiv2" name="buttonDiv2" type="button" style="margin-top: 20px;"></button>
        </p>
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
    </div>
  </div>
  </div>

  <?php
  if (isset($_SESSION['register'])) {
    unset($_SESSION['register']);
    echo '<script>';
    echo 'sessionStorage.setItem("signupOrSignin", "signup");';
    echo '</script>';
  }
  // if (isset($_SESSION['oldfname']) || isset($_SESSION['oldlname']) || isset($_SESSION['oldemail'])) {
  //   echo '<script>';
  //   echo 'document.addEventListener("DOMContentLoaded", function() {';
  //   echo 'document.getElementById("fname").value = "' . $_SESSION['oldfname'] . '";';
  //   echo 'document.getElementById("lname").value = "' . $_SESSION['oldlname'] . '";';
  //   echo 'document.getElementById("email").value = "' . $_SESSION['oldemail'] . '";';
  //   echo '});';
  //   echo '</script>';
  //   echo ($_SESSION['oldemail']);
  // }
  ?>

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
  </script>
  <script src="assets/js/scripts.js"></script>
</body>

</html>