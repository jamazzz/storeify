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
      <section id="refund"></section>
      <div class="row">
        <div class="col-md-6 mx-auto divider mx-auto pt-5 text-center">
          <h2>Refund Policy</h2>
          <p class="text-muted lead">Information about our refund policy.</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-10 mx-auto">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h6>Can I get a refund?</h6>
              <p class="text-muted">Unfortunately, we do not offer refunds for our paid plans. We apologize for any inconvenience this may cause.</p>
            </div>
            <div class="col-md-6 mb-5">
              <h6>What is your refund policy?</h6>
              <p class="text-muted">Our refund policy for subscriptions is that there are no refunds. However, for customer websites, they have the option to request a refund if there is no specific policy in place. If the refund request is valid, we will process it accordingly.</p>
            </div>
            <div class="col-md-6 mb-5">
              <h6>How can I request a refund?</h6>
              <p class="text-muted">To request a refund for a customer website, please contact our support team and provide the necessary details. We will review your request and process it accordingly.</p>
            </div>
            <div class="col-md-6 mb-5">
              <h6>What are the conditions for a refund?</h6>
              <p class="text-muted">The conditions for a refund may vary depending on the specific policy in place for the customer website. Please refer to the refund policy provided for your website or contact our support team for more information.</p>
            </div>
            <div class="col-md-6 mb-5">
              <h6>Can I cancel my subscription?</h6>
              <p class="text-muted">Yes, you can cancel your subscription at any time. Simply go to your account settings and follow the instructions to cancel.</p>
            </div>
            <div class="col-md-6 mb-5">
              <h6>Do you have any hidden fees?</h6>
              <p class="text-muted">No, we do not have any hidden fees. Our pricing is transparent and straightforward.</p>
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