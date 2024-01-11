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
  <script>
    if (performance.navigation.type === 1) {
      window.location.href = "access.php";
    }
  </script>
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
              <li>Don´t have an account ? <a class="t-signin">Sign Up</a></li>
            </ul>
          </nav>
          <div class="heading">
            <h2>Sign In</h2>
            <p>We secure your data privacy encrypted.</p>
          </div>
          <form action="login.php" method="post">
            <p>
              <i class="ri-mail-line"></i>
              <input type="text" id="email" name="email" placeholder="Email Adress" required autocomplete="off"/>
            </p>
            <p>
              <i class="ri-lock-line"></i>
              <i id="toggleIcon2" class="ri-eye-off-line icon" onclick="toggleIcon2()"></i>
              <input id="password" name="password" type="password" placeholder="Password" required autocomplete="off"/>
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
                <input type="submit" value="Sign In" />
                <i class="ri-arrow-right-line"></i>
              </label>
              <p>Or</p>
          </form>
          <p class="socials">
            <button type="button"><i class="ri-facebook-line"></i></button>
            <button type="button"><i class="ri-google-line"></i></button>
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
            <li>Alredy member ? <a class="t-signup">Sign In</a></li>
          </ul>
        </nav>
        <div class="heading">
          <h2>Sign Up</h2>
          <p>We secure your data privacy encrypted.</p>
        </div>
        <form action="register.php" method="post">
          <div class="container2" style="display: flex; flex-wrap: nowrap;">
            <i class="ri-user-3-line" style="padding-right:10px; color: #a4b0be; line-height: 40px; border-width: 0 0 2px; border-style: solid; border-color: #e6e6ed;"></i>
            <input type="text" id="fname" name="fname" placeholder="First Name"required autocomplete="off" style="margin-right: 10px; font-family: inherit; flex: 1; outline: 0; line-height: 40px; border-width: 0 0 2px; border-style: solid; border-color: #e6e6ed;" />
            <i class="ri-user-3-line" style="padding-right:10px; margin-left: 10px;color: #a4b0be; line-height: 40px; border-width: 0 0 2px; border-style: solid; border-color: #e6e6ed;"></i>
            <input type="text" id="sname" name="sname" placeholder="Second Name"required autocomplete="off" style="font-family: inherit; flex: 1; outline: 0; line-height: 40px; border-width: 0 0 2px; border-style: solid; border-color: #e6e6ed;" />
          </div>
          <p>
            <i class="ri-mail-line"></i>
            <input type="text" name="email" placeholder="Email Adress" required autocomplete="off"/>
          </p>
          <p>
            <i class="ri-lock-line"></i>
            <i id="toggleIcon" class="ri-eye-off-line icon" onclick="toggleIcon()"></i>
            <input id="password2" name="password2" type="password" placeholder="Password" required autocomplete="off"/>
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
            <input id="password3" type="password" name="password3" placeholder="Password" required autocomplete="off"/>
          </p>
          <div class="actions">
            <label>
              <input type="submit" value="Sign Up" />
              <i class="ri-arrow-right-line"></i>
            </label>
            <p>Or</p>
        </form>
        <p class="socials">
          <button type="button"><i class="ri-facebook-line"></i></button>
          <button type="button"><i class="ri-google-line"></i></button>
        </p>
      </div>
    </div>
  </div>
  <nav>
    <ul id="moon-icon" style="list-style: none; margin: 0; padding: 0; position: absolute; bottom: 10px; right: 10px; z-index: 0;">
      <li><a><i class="ri-moon-line"></i></a></li>
    </ul>
  </nav>
  </div>
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
</body>

</html>