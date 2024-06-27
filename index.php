<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Storeify</title>
    <meta name="description" content="Storeify" />

    <!--Inter UI font-->
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/45266fece3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
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

    <!--hero header-->
    <section class="py-7 py-md-0 bg-hero" id="home">
        <div class="container">
            <div class="row vh-md-100">
                <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto">
                    <div class="text-left">
                        <h1 class="heading-black text-capitalize">Crie rapidamente sua loja com Storeify</h1>
                        <p class="lead py-3">Storeify é uma plataforma para construir lojas de comércio online</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-2 col-12 mx-auto my-auto">
                    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                    <dotlottie-player src="https://lottie.host/e189b00e-4923-402e-a0c3-d2455737c869/1wZhX2F2TK.json" background="transparent" speed="1" style="width: 500px; height: 500px;" autoplay></dotlottie-player>
                </div>
            </div>
    </section>

    <!-- features section -->
    <div class="col-md-6 mx-auto text-center">
        <br>
        <section id="features">
            <br>
            <br>
            <h2 class="card-title pt-3">Features</h2>
            <br>
    </div>
    <div class="row mt-5">
        <div class="col-md-10 mx-auto">
            <div class="row feature-boxes">
                <div class="col-md-6 box">
                    <div class="icon-box box-primary">
                        <div class="icon-box-inner">
                            <span data-feather="edit-3" width="35" height="35"></span>
                        </div>
                    </div>
                    <h5>Easy Customization</h5>
                    <p class="text-muted">Customize your website easily with our intuitive interface. No coding skills required.</p>
                </div>
                <div class="col-md-6 box">
                    <div class="icon-box box-success">
                        <div class="icon-box-inner">
                            <span data-feather="monitor" width="35" height="35"></span>
                        </div>
                    </div>
                    <h5>Responsive Design</h5>
                    <p class="text-muted">Ensure your website looks great on all devices, from desktop to mobile.</p>
                </div>
                <div class="col-md-6 box">
                    <div class="icon-box box-danger">
                        <div class="icon-box-inner">
                            <span data-feather="layout" width="35" height="35"></span>
                        </div>
                    </div>
                    <h5>Beautiful Templates</h5>
                    <p class="text-muted">Choose from a wide range of stunning templates to make your website visually appealing.</p>
                </div>
                <div class="col-md-6 box">
                    <div class="icon-box box-info">
                        <div class="icon-box-inner">
                            <span data-feather="globe" width="35" height="35"></span>
                        </div>
                    </div>
                    <h5>Global Reach</h5>
                    <p class="text-muted">Expand your business globally with our built-in internationalization features.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    </section>
    </div>
    </section>
    </section>
    <!-- Pricing Section -->
    <section class="py-7 bg-dark section-angle top-right bottom-right">
        <div class="container">
            <section id="faq">
                <div class="row">
                    <div class="col-md-6 mx-auto divider top-divider mx-auto pt-5 text-center">
                        <h2>Frequently asked questions</h2>
                        <p class="text-muted lead">Answers to most common questions.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <h6>Can I try it for free?</h6>
                                <p class="text-muted">No, we do not offer a free trial at the moment. Unfortunately, we also do not provide refunds for our paid plans. We apologize for any inconvenience this may cause.</p>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h6>Do you have hidden fees?</h6>
                                <p class="text-muted">No, we do not have any hidden fees. Our pricing is transparent and straightforward. The only fee we charge is a 5% transaction fee on all transactions.</p>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h6>What are the payment methods you accept?</h6>
                                <p class="text-muted">We accept credit card and PayPal as payment methods.</p>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h6>How often do you release updates?</h6>
                                <p class="text-muted">We release updates regularly to ensure that our product is up-to-date and meets the needs of our users.</p>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h6>What is your refund policy?</h6>
                                <p class="text-muted">Our refund policy for subscriptions is that there are no refunds. However, for customer websites, they have the option to request a refund if there is no specific policy in place. If the refund request is valid, we will process it accordingly.</p>
                            </div>
                            <div class="col-md-6 mb-5">
                                <h6>Can I cancel my subscription?</h6>
                                <p class="text-muted">Yes, you can cancel your subscription at any time. Simply go to your account settings and follow the instructions to cancel.</p>
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