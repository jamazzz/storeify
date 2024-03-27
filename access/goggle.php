<html>

<body>
  <script src="https://accounts.google.com/gsi/client" async></script>
  <script>
    function parseJwt(token) {
      var base64Url = token.split('.')[1];
      var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
      var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
      }).join(''));

      return JSON.parse(jsonPayload);
    };

    function handleCredentialResponse(response) {
      var form = document.createElement("form");
      form.setAttribute("method", "post");
      form.setAttribute("action", "google2.php");
      form.style.display = "hidden";
      var token = response.credential;
      var jwt = parseJwt(token);
      var input = document.createElement("input");
      input.setAttribute("name", "credential");
      input.setAttribute("value", token);
      form.appendChild(input);
      document.body.appendChild(form);
      form.submit();
    }
    window.onload = function() {
      google.accounts.id.initialize({
        client_id: "987869037939-tb55ut12vsf3arupcsg55catf7mk6499",
        callback: handleCredentialResponse
      });
      google.accounts.id.renderButton(
        document.getElementById("buttonDiv"), {
          theme: "outline",
          size: "large",
          type: "icon",
          shape: "circle",

        }
      );
      google.accounts.id.renderButton(
        document.getElementById("buttonDiv2"), {
          theme: "outline",
          size: "large",
          type: "icon",
          shape: "circle",

        }
      );
    }
  </script>
</body>

</html>

<?php
if (isset($_POST['credential'])) {
  header('location: /storeify/access/goggle2.php');
  exit();
}
