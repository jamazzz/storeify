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