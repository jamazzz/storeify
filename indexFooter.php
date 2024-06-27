<!--footer-->
<footer class="py-1 divider top-divider pt-5 text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-5 mr-auto" style="margin-top: -20px;">
        <div id="map"></div>
        <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.0.3/maptiler-sdk.umd.min.js"></script>
        <link href="https://cdn.maptiler.com/maptiler-sdk-js/v2.0.3/maptiler-sdk.css" rel="stylesheet" />
        <style>
          body {
            margin: 0;
            padding: 0;
          }

          #map {
            position: absolute;
            top: 30px;
            bottom: 0;
            width: 70%;
            height: 70%;
          }
        </style>
        <script>
          maptilersdk.config.apiKey = 'lD0RziNEBnA3N16AkW8G';
          const map = new maptilersdk.Map({
            container: 'map',
            style: maptilersdk.MapStyle.STREETS,
            center: [-122.413579, 37.775604],
            zoom: 16,
            navigationControl: false,
            maptilerLogo: false
          });
        </script>
      </div>
      <div class="col-sm-2">
        <h4>Legal</h4>
        <ul class="list-unstyled">
          <li><a href="/storeify/privacy">Privacy</a></li>
          <li><a href="/storeify/terms">Terms</a></li>
          <li><a href="/storeify/refund">Refund policy</a></li>
        </ul>
      </div>
      <div class="col-sm-2">
        <h4>Help</h4>
        <ul class="list-unstyled">
          <li><a href="/storeify/index#faq">FAQ</a></li>
          <li><a href="/storeify/contacts">Contacts</a></li>
          <li><a href="/storeify/support">Support</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!--scroll to top-->
<div class="scroll-top">
  <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="assets/js/scripts.js"></script>