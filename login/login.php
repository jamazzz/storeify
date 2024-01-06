<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" id="theme-color2">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>
  <body>
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
                <li><a href="#0"><i class="ri-arrow-left-line"></i></a></li>
                <li>Alredy member?<a href="#0" class="t-signin">Sign In</a></li>
              </ul>
            </nav>
            <div class="heading">
              <h2>Sign Up</h2>
              <p>We secure your data privacy encrypted.</p>
            </div>
            <form action="">
              <p>
                <i class="ri-user-3-line"></i>
                <input type="text" placeholder="Full Name" />
              </p>
              <p>
                <i class="ri-mail-line"></i>
                <input type="text" placeholder="Email Adress" />
              </p>
              <p>
                <i class="ri-lock-line"></i>
                <i class="ri-eye-off-line"></i>
                <input type="text" placeholder="Password" />
              </p>
              <p>
                <i class="ri-lock-line"></i>
                <input type="text" placeholder="Password" />
              </p>
              <div class="actions">
                <label>
                  <input type="submit" value="Sign Up" />
                  <i class="ri-arrow-right-line"></i>
                </label>
                <p>Or</p>
                <p class="socials">
                  <button><i class="ri-facebook-line"></i></button>
                  <button><i class="ri-google-line"></i></button>
                </p>
              </div>
            </form>
          </div>

          <!--  -->
          <!--  -->
          <!--  -->
          <!--  -->

          <div class="signin">
            <nav>
              <ul>
                <li><a href="#0"><i class="ri-arrow-left-line"></i></a></li>
                <li>Don´t have an account?<a href="#0" class="t-signup">Sign Up</a></li>
              </ul>
            </nav>
            <div class="heading">
              <h2>Sign In</h2>
              <p>We secure your data privacy encrypted.</p>
            </div>
            <form action="">
            <p>
              <i class="ri-mail-line"></i>
              <input type="text" placeholder="Email Adress" />
            </p>
            <p>
              <i class="ri-lock-line"></i>
              <i class="ri-eye-off-line"></i>
              <input type="text" placeholder="Password" />
            </p>
            <div class="actions">
              <label>
                <input type="submit" value="Sign In" />
                <i class="ri-arrow-right-line"></i>
              </label>
              <p>Or</p>
              <p class="socials"></p>
              <button><i class="ri-facebook-line"></i></button>
              <button><i class="ri-google-line"></i></button>
              <p></p>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const signup = document.querySelector(".t-signup"),
          signin = document.querySelector(".t-signin"),
          addclass = document.querySelector(".site");

        signup.addEventListener("click", function () {
          addclass.className = "site signup-show";
        });

        signin.addEventListener("click", function () {
          addclass.className = "site signin-show";
        });
      });
    </script>
  </body>
</html>
