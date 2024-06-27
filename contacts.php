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
              <a class="nav-link page-scroll" href="/storeify/index#features">
                <i class="fas fa-star" style="margin-right: 5px;"></i> Features
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="/storeify/index#faq">
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
      <section id="contacts"></section>
      <div class="row">
        <div class="col-md-6 mx-auto divider mx-auto pt-5 text-center">
          <h2>Contact Information</h2>
          <p class="text-muted lead">Get in touch with us.</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-10 mx-auto">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h5>Email</h5>
              <p class="text-muted">storeify@gmail.com</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Phone Number</h5>
              <p class="text-muted">+1 123-456-7890</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Address</h5>
              <p class="text-muted">123 Main Street, City, State, Country</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Social Media</h5>
              <ul class="list-unstyled">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
              </ul>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Customer Support</h5>
              <p class="text-muted">support@storeify.com</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Sales Inquiries</h5>
              <p class="text-muted">sales@storeify.com</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Office Hours</h5>
              <p class="text-muted">Monday - Friday: 9 AM - 6 PM</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Frequently Asked Questions</h5>
              <p class="text-muted">Visit our <a href="#">FAQ page</a> for answers to common questions.</p>
            </div>
            <div class="col-md-12 mb-5">
              <h5>Company Description</h5>
              <p class="text-muted">Storeify is a leading e-commerce platform providing customers with a wide range of products at competitive prices. Our mission is to deliver an exceptional online shopping experience by offering high-quality products, excellent customer service, and innovative solutions. Whether you're looking for the latest electronics, fashion trends, or home essentials, Storeify has something for everyone. Contact us today to learn more about our offerings and how we can help meet your needs.</p>
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