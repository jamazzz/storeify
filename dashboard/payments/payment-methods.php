<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include '../dashp1.php';
  ?>
  <main role="main" id="main" style="">
    <div class="container-fluid" style="">

      <header class="page-title">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
            <h1 class="my-0" style="">Payment Methods</h1>
          </div>
        </div>
      </header>
      <div class="card row-mt">
        <div class="card-body" style="">
          <div class="table-responsive">
            <table class="table w-100">
              <thead class="thead-light">
                <tr>
                  <th></th>
                  <th>Method</th>
                  <th>Countries</th>
                  <th>Currencies</th>
                  <th style="">Gateway Fee</th>
                  <th style="">Settlement Time</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/scheme-global.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>
                    <p class="mb-0">Credit/Debit Cards</p>
                    <sup class="d-inline-block">incl. Google Pay &amp; Apple Pay</sup>
                  </td>
                  <td>
                    Global
                  </td>
                  <td>
                    USD, EUR, GBP
                  </td>
                  <td>2.49% + $0.30</td>
                  <td>3 days</td>
                  <td>
                    <i class="fa fa-sync text-success" data-toggle="tooltip" data-placement="right" title="" data-original-title="This payment method supports subscriptions"></i>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/globalcards/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/paypal.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>PayPal</td>
                  <td>
                    Global
                  </td>
                  <td>
                    USD, EUR, GBP
                  </td>
                  <td>2.49% + $0.40</td>
                  <td>3 days</td>
                  <td>
                    <i class="fa fa-sync text-success" data-toggle="tooltip" data-placement="right" title="" data-original-title="This payment method supports subscriptions"></i>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/paypal/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/ideal.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>iDeal</td>
                  <td>
                    Netherlands
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>0.00% + $0.45</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/ideal/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/pix.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Pix</td>
                  <td>
                    Brazil
                  </td>
                  <td>
                    BRL
                  </td>
                  <td>2.05% + $0.20</td>
                  <td>30 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/pix/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/twint.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>TWINT</td>
                  <td>
                    Switzerland
                  </td>
                  <td>
                    CHF
                  </td>
                  <td>2.85% + $0.20</td>
                  <td>7 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/twint_mollie/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/alipay.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Alipay</td>
                  <td>
                    China
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>4.00% + $0.26</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/alipay/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/appotapay.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Appotapay</td>
                  <td>
                    Vietnam
                  </td>
                  <td>
                    VND
                  </td>
                  <td>6.20% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/appotapay/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/bancodobrasil.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Banco Do Brasil</td>
                  <td>
                    Brazil
                  </td>
                  <td>
                    BRL
                  </td>
                  <td>3.35% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/bancodobrasil/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/bancontact.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Bancontact</td>
                  <td>
                    Belgium
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>0.00% + $0.55</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/bancontact/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/belfius.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Belfius Direct Net</td>
                  <td>
                    Belgium
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>1.60% + $0.45</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/belfius/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/boletobancario.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Boleto Bancario</td>
                  <td>
                    Brazil
                  </td>
                  <td>
                    BRL
                  </td>
                  <td>3.45% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/boletobancario/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/bradesco.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Bradesco</td>
                  <td>
                    Brazil
                  </td>
                  <td>
                    BRL
                  </td>
                  <td>3.35% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/bradesco/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/circlek.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>CircleK Gift Card</td>
                  <td>
                    United States
                  </td>
                  <td>
                    USD
                  </td>
                  <td>19.50% + $0.30</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/circlek/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/cvspharmacy.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>CVS/pharmacy gift card</td>
                  <td>
                    United States
                  </td>
                  <td>
                    USD
                  </td>
                  <td>19.50% + $0.30</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/cvs/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/dana.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Dana</td>
                  <td>
                    Indonesia
                  </td>
                  <td>
                    IDR
                  </td>
                  <td>3.35% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/dana/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/dollargeneral.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Dollar General gift card</td>
                  <td>
                    United States
                  </td>
                  <td>
                    USD
                  </td>
                  <td>19.50% + $0.30</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/dollargeneral/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/efecty.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Efecty</td>
                  <td>
                    Colombia
                  </td>
                  <td>
                    COP
                  </td>
                  <td>7.10% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/efecty/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/eps.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>EPS</td>
                  <td>
                    Austria
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>2.00% + $0.45</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/eps/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/giropay.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Giropay</td>
                  <td>
                    Germany
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>2.00% + $0.45</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/giropay/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/grabpay-ph.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>GrabPay (PH)</td>
                  <td>
                    Philippines
                  </td>
                  <td>
                    PHP
                  </td>
                  <td>3.00% + $0.19</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/grabpay_PH/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/onlinebanking_ph.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Internet Banking (PH)</td>
                  <td>
                    Philippines
                  </td>
                  <td>
                    PHP
                  </td>
                  <td>2.55% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/onlinebanking_ph/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/onlinebanking_vn.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Internet Banking (VN)</td>
                  <td>
                    Vietnam
                  </td>
                  <td>
                    VND
                  </td>
                  <td>2.75% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/onlinebanking_vn/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/itau.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Itau</td>
                  <td>
                    Brazil
                  </td>
                  <td>
                    BRL
                  </td>
                  <td>3.35% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/itau/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/kakaopay.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Kakao Pay</td>
                  <td>
                    South Korea
                  </td>
                  <td>
                    KRW
                  </td>
                  <td>3.59% + $0.15</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/kakaopay/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/kbc.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>KBC/CBC</td>
                  <td>
                    Belgium
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>1.60% + $0.45</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/kbc/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/linkaja.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Linkaja</td>
                  <td>
                    Indonesia
                  </td>
                  <td>
                    IDR
                  </td>
                  <td>2.60% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/linkaja/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/mach.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>MACH</td>
                  <td>
                    Chile
                  </td>
                  <td>
                    CLP
                  </td>
                  <td>4.90% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/mach/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/mercadopago.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Mercado Pago</td>
                  <td>
                    Brazil
                  </td>
                  <td>
                    BRL
                  </td>
                  <td>4.10% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/mercadopago/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/mpconnectmx.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Mercado Pago (MX)</td>
                  <td>
                    Mexico
                  </td>
                  <td>
                    MXN
                  </td>
                  <td>5.70% + $0.20</td>
                  <td>30 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/mercadopagomx/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/mobilebanking_th.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Mobile Banking (TH)</td>
                  <td>
                    Thailand
                  </td>
                  <td>
                    THB
                  </td>
                  <td>1.20% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/mobilebanking_th/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/mobilepay.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>MobilePay</td>
                  <td>
                    <a href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Denmark, Finland">View</a>
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>2.99% + $0.30</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/mobilepay/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/momo.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Momo</td>
                  <td>
                    Vietnam
                  </td>
                  <td>
                    VND
                  </td>
                  <td>6.20% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/momo/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/multicaja.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Multicaja</td>
                  <td>
                    Chile
                  </td>
                  <td>
                    CLP
                  </td>
                  <td>5.00% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/multicaja/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/nequi.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Nequi</td>
                  <td>
                    Colombia
                  </td>
                  <td>
                    COP
                  </td>
                  <td>4.50% + $0.20</td>
                  <td>30 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/nequi/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/ovo.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Ovo</td>
                  <td>
                    Indonesia
                  </td>
                  <td>
                    IDR
                  </td>
                  <td>3.85% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/ovo/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/oxxo.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>OXXO</td>
                  <td>
                    Mexico
                  </td>
                  <td>
                    MXN
                  </td>
                  <td>4.20% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/oxxo/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/pagoefectivo.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>PagoEfectivo</td>
                  <td>
                    Peru
                  </td>
                  <td>
                    PEN
                  </td>
                  <td>4.90% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/pagoefectivo/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/pagofacil.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>PagoFacil</td>
                  <td>
                    Argentina
                  </td>
                  <td>
                    ARS
                  </td>
                  <td>4.45% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/pagofacil/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/pagosnet.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Pagosnet</td>
                  <td>
                    Bolivia
                  </td>
                  <td>
                    BOB
                  </td>
                  <td>10.15% + $0.20</td>
                  <td>30 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/pagosnet/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/paynow.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Paynow</td>
                  <td>
                    Singapore
                  </td>
                  <td>
                    SGD
                  </td>
                  <td>1.45% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/paynow/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/paysafecard.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>paysafecard</td>
                  <td>
                    <a href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Austria, Australia, Belgium, Bulgaria, Brazil, Canada, Switzerland, Cyprus, Czech Republic, Germany, Denmark, Spain, Finland, France, United Kingdom, Georgia, Gibraltar, Croatia, Hungary, Ireland, Iceland, Italy, Kuwait, Liechtenstein, Lithuania, Luxembourg, Latvia, Moldova, Montenegro, Malta, Mexico, Netherlands, Norway, New Zealand, Peru, Poland, Portugal, Paraguay, Romania, Serbia, Saudi Arabia, Sweden, Slovenia, Slovakia, Turkey, Uruguay">View</a>
                  </td>
                  <td>
                    EUR, USD, GBP
                  </td>
                  <td>12.50% + $0.00</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <a href="https://creator.tebex.io/payment-methods/paysafecard/apply" class="btn btn-outline-info">Apply</a>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/picpay.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>PicPay</td>
                  <td>
                    Brazil
                  </td>
                  <td>
                    BRL
                  </td>
                  <td>3.25% + $0.20</td>
                  <td>30 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/picpay/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/promptpay_tazapay.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>PromptPay QR</td>
                  <td>
                    Thailand
                  </td>
                  <td>
                    THB
                  </td>
                  <td>1.99% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/promptpay_tazapay/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/przelewy24.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Przelewy24</td>
                  <td>
                    Poland
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>3.00% + $0.45</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/przelewy24/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/pse.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>PSE</td>
                  <td>
                    Colombia
                  </td>
                  <td>
                    COP
                  </td>
                  <td>6.70% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/pse/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/rapipago.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>RapiPago</td>
                  <td>
                    Argentina
                  </td>
                  <td>
                    ARS
                  </td>
                  <td>4.45% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/rapipago/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/safetypay-cash.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>SafetyPay Cash</td>
                  <td>
                    <a href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Brazil, Chile, Colombia, Costa Rica, Ecuador, Guatemala, Mexico, Nicaragua, Panama, Peru, El Salvador">View</a>
                  </td>
                  <td>
                    USD
                  </td>
                  <td>6.60% + $0.60</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <a href="https://creator.tebex.io/payment-methods/paysafecard/apply" class="btn btn-outline-info">Apply</a>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/safetypay-online.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>SafetyPay Online</td>
                  <td>
                    <a href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Brazil, Chile, Colombia, Costa Rica, Ecuador, Guatemala, Mexico, Nicaragua, Panama, Peru, El Salvador">View</a>
                  </td>
                  <td>
                    USD
                  </td>
                  <td>6.60% + $0.60</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <a href="https://creator.tebex.io/payment-methods/paysafecard/apply" class="btn btn-outline-info">Apply</a>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/sencillito.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Sencillito</td>
                  <td>
                    Chile
                  </td>
                  <td>
                    CLP
                  </td>
                  <td>5.10% + $0.20</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/sencillito/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/banktransfer.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>SEPA Bank Transfer</td>
                  <td>
                    <a href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Austria, Belgium, Cyprus, Germany, Estonia, Spain, Finland, France, Greece, Ireland, Italy, Lithuania, Luxembourg, Latvia, Monaco, Malta, Netherlands, Portugal, Slovenia, Slovakia, San Marino">View</a>
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>0.00% + $0.45</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/banktransfer/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/servipag.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Servipag</td>
                  <td>
                    Chile
                  </td>
                  <td>
                    CLP
                  </td>
                  <td>5.00% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/servipag/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/shopeepay_id.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>ShopeePay (ID)</td>
                  <td>
                    Indonesia
                  </td>
                  <td>
                    IDR
                  </td>
                  <td>4.00% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/shopeepay_id/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/shopeepay_ph.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>ShopeePay (PH)</td>
                  <td>
                    Philippines
                  </td>
                  <td>
                    PHP
                  </td>
                  <td>4.50% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/shopeepay_ph/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/shopeepay_vn.webp" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>ShopeePay (VN)</td>
                  <td>
                    Vietnam
                  </td>
                  <td>
                    VND
                  </td>
                  <td>6.20% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/shopeepay_vn/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/sofort.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>SOFORT Banking</td>
                  <td>
                    <a href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Austria, Belgium, Switzerland, Germany, Spain, Italy, Netherlands, Poland">View</a>
                  </td>
                  <td>
                    EUR
                  </td>
                  <td>2.40% + $0.45</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/sofort/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/spei.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>SPEI Bank Transfers</td>
                  <td>
                    Mexico
                  </td>
                  <td>
                    MXN
                  </td>
                  <td>2.50% + $0.20</td>
                  <td>30 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/spei/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/viabaloto.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>ViaBaloto</td>
                  <td>
                    Colombia
                  </td>
                  <td>
                    COP
                  </td>
                  <td>6.00% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/viabaloto/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/vipps.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Vipps</td>
                  <td>
                    Norway
                  </td>
                  <td>
                    NOK
                  </td>
                  <td>2.99% + $0.30</td>
                  <td>3 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/vipps/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/webpay.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>WebPay</td>
                  <td>
                    Chile
                  </td>
                  <td>
                    CLP
                  </td>
                  <td>5.00% + $0.20</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/webpay/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/obucks.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>oBucks gift card</td>
                  <td>
                    Global
                  </td>
                  <td>
                    USD, CAD
                  </td>
                  <td>19.50% + $0.30</td>
                  <td>15 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/openbucks/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/webmoney.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Webmoney</td>
                  <td>
                    <a href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="Kyrgyzstan, Moldova, Tajikistan, Turkmenistan">View</a>
                  </td>
                  <td>
                    USD
                  </td>
                  <td>10.00% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" data-url="https://creator.tebex.io/payment-methods/webmoney/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/razer-gold-pin.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Razer Gold PIN</td>
                  <td>
                    Global
                  </td>
                  <td>
                    <a href="javascript:void(0);" data-toggle="tooltip" title="" data-original-title="USD, AUD, BRL, EUR, HKD, IDR, INR, MYR, NZD, PHP, SGD, THB, TWD, VND, HKD, MMK, EUR, CAD, MXN, COP, TRY">View</a>
                  </td>
                  <td>20.00% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/razergoldpin/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
                <tr class="box-configuration">
                  <td><img src="https://checkout.tebex.io//img/brands/transparent/razer-gold-wallet.png" style="max-width: 100px; padding: 12px 0;"></td>
                  <td>Razer Gold Wallet</td>
                  <td>
                    Global
                  </td>
                  <td>
                    USD, EUR
                  </td>
                  <td>20.00% + $0.25</td>
                  <td>14 days</td>
                  <td>
                  </td>
                  <td class="account-branding-update text-center">
                    <label class="switch mt-3">
                      <input type="checkbox" name="disabled" checked="" data-url="https://creator.tebex.io/payment-methods/razergoldwallet/disable">
                      <span class="slider"></span>
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </main>
  <?php
  include '../dashp2.php';
  ?>