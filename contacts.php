<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Storeify | Contactos</title>
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />

  <!--Inter UI font-->
  <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

  <!--vendors styles-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/45266fece3.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
  <!-- Bootstrap CSS / Color Scheme -->
  <link rel="stylesheet" href="assets/css/default.css" id="theme-color">
</head>

<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/indexNavbar.php';
  ?>

  <section class="py-7 bg-dark section-angle top-right bottom-right">
    <div class="container">
      <section id="contacts"></section>
      <div class="row">
        <div class="col-md-6 mx-auto divider mx-auto pt-5 text-center">
          <h2>Informações de Contato</h2>
          <p class="text-muted lead">Entre em contato conosco.</p>
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
              <h5>Número de Telefone</h5>
              <p class="text-muted">+351 932 101 234</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Endereço</h5>
              <p class="text-muted">149 9th St, San Francisco, CA 94103, Estados Unidos</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Redes Sociais</h5>
              <ul class="list-unstyled">
                <li><a href="https://www.facebook.com/">Facebook</a></li>
                <li><a href="https://www.x.com">Twitter</a></li>
                <li><a href="https://www.instagram.com/">Instagram</a></li>
              </ul>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Suporte ao Cliente</h5>
              <p class="text-muted">suporte@storeify.com</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Consultas de Vendas</h5>
              <p class="text-muted">vendas@storeify.com</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Horário de Funcionamento</h5>
              <p class="text-muted">Segunda - Sexta: 9h - 18h</p>
            </div>
            <div class="col-md-6 mb-5">
              <h5>Perguntas Frequentes</h5>
              <p class="text-muted">Visite nossa <a href="/storeify/index.php#faq">página de FAQ</a> para respostas a perguntas comuns.</p>
            </div>
            <div style="width:900px;">
              <h5>Localização</h5>
              <div id="map"></div>
              <style>
                #map {
                  width: 900px;
                  height: 300px;
                }
              </style>
              <link href="https://cdn.maptiler.com/maptiler-sdk-js/v2.0.3/maptiler-sdk.css" rel="stylesheet" />
              <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.0.3/maptiler-sdk.umd.min.js"></script>
              <script>
                maptilersdk.config.apiKey = 'lD0RziNEBnA3N16AkW8G';
                const map = new maptilersdk.Map({
                  container: 'map',
                  center: [-122.4138, 37.7758],
                  zoom: 16,
                });
              </script>
              <style>
                maplibregl-control-container {
                  display: none;
                }
              </style>
            </div>
          </div>
        </div>
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