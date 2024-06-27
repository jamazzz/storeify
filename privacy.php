<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Knight - Free Bootstrap 4 Product Landing Page Template</title>
  <meta name="description" content="Knight is a beautiful Bootstrap 4 template for product landing pages." />

  <!--Inter UI font-->
  <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

  <!--vendors styles-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/45266fece3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <!-- Bootstrap CSS / Color Scheme -->
  <link rel="stylesheet" href="assets/css/default.css" id="theme-color">
</head>

<body>
  <?php
  session_start();
  session_unset();
  session_destroy();
  ?>
  <!--navigation-->
  <section class="smart-scroll">
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand heading-black" href="index.php">
          <img src="/storeify/assets/images/logo.png" alt="" style="height: 141px; width: 100px; margin-top: -15px;">
          Storeify
        </a>
        <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-th"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#features">
                <i class="fas fa-star" style="margin-right: 5px;"></i> Features
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#faq">
                <i class="fas fa-question-circle" style="margin-right: 5px;"></i> FAQ
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll d-flex flex-row align-items-center" href="access/access.php">
                <i class="fas fa-user" style="margin-right: 5px;"></i> Log in
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </section>

  <section class="py-7 bg-dark section-angle top-right bottom-right">
    <div class="container">
      <section id="privacy"></section>
      <div class="row">
        <div class="col-md-6 mx-auto divider mx-auto pt-5 text-center">
          <h2>Privacy Policy</h2>
          <p class="text-muted lead">Our commitment to your privacy.</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-10 mx-auto">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h6>What information do we collect?</h6>
              <p class="text-muted">We collect personal information such as your name, email address, and contact details when you sign up for an account or make a purchase on our website.</p>
            </div>
            <div class="col-md-6 mb-5">
              <h6>How do we use your information?</h6>
              <p class="text-muted">We use the information we collect to provide and improve our services, process transactions, and communicate with you about your account and orders.</p>
            </div>
            <div class="col-md-6 mb-5">
              <h6>Do we share your information with third parties?</h6>
              <p class="text-muted">We do not sell, trade, or otherwise transfer your personal information to third parties without your consent. However, we may share your information with trusted third-party service providers who assist us in operating our website and conducting our business.</p>
            </div>
            <div class="col-md-6 mb-5">
              <h6>How do we protect your information?</h6>
              <p class="text-muted">We implement a variety of security measures to maintain the safety of your personal information. We use encryption technology, secure servers, and regular malware scanning to protect your data.</p>
            </div>
            <div class="col-md-6 mb-5">
              <h6>What are your rights?</h6>
              <p class="text-muted">You have the right to access, update, and delete your personal information. You can also opt-out of receiving marketing communications from us. Please contact us if you would like to exercise any of these rights.</p>
            </div>
            <div class="col-md-6 mb-5">
              <h6>Changes to our Privacy Policy</h6>
              <p class="text-muted">We may update our Privacy Policy from time to time. Any changes will be posted on this page, and the date of the last update will be indicated at the top of the page.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/indexFooter.php';
  ?>
</body>

</html>