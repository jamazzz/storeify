<!DOCTYPE html>
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

      return jsonPayload;
    };

    function handleCredentialResponse(response, buttonId) {
      var form = document.createElement("form");
      form.setAttribute("method", "post");
      form.setAttribute("action", "google2.php");
      form.style.display = "hidden";
      var token = response.credential;
      var jwt = parseJwt(token);

      var input1 = document.createElement("input");
      input1.setAttribute("name", "credential");
      input1.setAttribute("value", jwt);

      form.appendChild(input1);
      document.body.appendChild(form);
      form.submit();
    }

    window.onload = function() {
      google.accounts.id.initialize({
        client_id: "987869037939-tb55ut12vsf3arupcsg55catf7mk6499",
        callback: function(response) {
          handleCredentialResponse(response, "buttonDiv3");
        }
      });

      google.accounts.id.renderButton(
        document.getElementById("buttonDiv3"), {
          theme: "outline",
          size: "large",
          type: "icon",
          shape: "pill",
          width: "450px",
        }
      );
    }
  </script>
</body>

</html>