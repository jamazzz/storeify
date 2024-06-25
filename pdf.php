<?php
require_once 'dompdf/autoload.inc.php';
session_start();

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body>
  <div>
    <div class="py-4">
      <div class="px-14 py-6">
        <table class="w-full border-collapse border-spacing-0">
          <tbody>
            <tr>
              <td class="w-full align-top">
                <div>
                  <img src="https://cdn.discordapp.com/attachments/838010841231786005/1253358974221156423/brand-sample-removebg-preview.png?ex=66759101&is=66743f81&hm=6ff7f3fc7ab6e95f7941fda7eac0dae2e22937cc749de7a29ef9e611e2b17a34&" class="h-12" />
                </div>
              </td>

              <td class="align-top">
                <div class="text-sm">
                  <table class="border-collapse border-spacing-0">
                    <tbody>
                      <tr>
                        <td class="border-r pr-4">
                          <div>
                            <p class="whitespace-nowrap text-slate-400 text-right">Date</p>
                            <p class="whitespace-nowrap font-bold text-main text-right">' . $_SESSION['create_time'] . '</p>
                          </div>
                        </td>
                        <td class="pl-4">
                          <div>
                            <p class="whitespace-nowrap text-slate-400 text-right">Invoice #</p>
                            <p class="whitespace-nowrap font-bold text-main text-right">' . $_SESSION['id'] . '</p>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="px-14 py-10 text-sm text-neutral-700">
        <table class="w-full border-collapse border-spacing-0">
          <thead>
            <tr>
              <td class="border-b-2 border-main pb-3 pl-3 font-bold text-main">#</td>
              <td class="border-b-2 border-main pb-3 pl-2 font-bold text-main">Product details</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-right font-bold text-main">Price</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">Qty.</td>
              <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">VAT</td>
              <td class="border-b-2 border-main pb-3 pl-2 pr-3 text-right font-bold text-main">Subtotal + VAT</td>
            </tr>
          </thead>
          <tbody>';



$html2 =
  '
            <tr>
              <td colspan="6">
                <table class="w-full border-collapse border-spacing-0">
                  <tbody>
                    <tr>
                      <td class="border-b p-3">
                        <div class="whitespace-nowrap text-slate-400">Net total:</div>
                      </td>
                      <td class="border-b p-3 text-right">
                        <div class="whitespace-nowrap font-bold text-main">' . $_SESSION['subtotal'] . ' €</div>
                      </td>
                      <td class="p-3">
                      <td class="p-3">
                        <div class="whitespace-nowrap text-slate-400">VAT total:</div>
                      </td>
                      <td class="p-3 text-right">
                        <div class="whitespace-nowrap font-bold text-main">' . $_SESSION['taxes'] . ' €</div>
                      </td>
                      <td class="bg-main p-3">
                        <div class="whitespace-nowrap font-bold text-white">Total:</div>
                      </td>
                      <td class="bg-main p-3 text-right">
                        <div class="whitespace-nowrap font-bold text-white">' . $_SESSION['total'] . ' €</div>
                      </td>
              </td>
            </tr>
          </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
      </div>
        <div class="footer">
      <div class="px-14 text-sm text-neutral-700">
        <p class="text-main font-bold">PAYMENT DETAILS</p>
        <br>
        <p>Payment ID: ' . $_SESSION['payerId'] . '</p>
        <p>Account Number: ' . $_SESSION['payeeMerchantId'] . '</p>
        <p>Email: ' . $_SESSION['payeeEmailAddress'] . '</p>
      </div>
        </div>
      <style>
        *,
        ::before,
        ::after {
          box-sizing: border-box;
          border-width: 0;
          border-style: solid;
          border-color: #e5e7eb;
        }

        ::before,
        ::after {
          --tw-content: "";
        }

        html {
          line-height: 1.5;
          -webkit-text-size-adjust: 100%;
          -moz-tab-size: 4;
          tab-size: 4;
          font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
          font-feature-settings: normal;
          font-variation-settings: normal;
        }

        body {
          margin: 0;
          line-height: inherit;
          max-width: 210mm;
          max-height: 297mm;
          margin: 0 auto;
          padding: 20px;
          background-color: #f1f5f9;
          z-index: 10000;
          height: 100vh;
        }

        html {
          background-color: rgb(36, 36, 45);
        }


        hr {
          height: 0;
          color: inherit;
          border-top-width: 1px;
        }

        abbr:where([title]) {
          -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
          font-size: inherit;
          font-weight: inherit;
        }

        a {
          color: inherit;
          text-decoration: inherit;
        }

        b,
        strong {
          font-weight: bolder;
        }

        code,
        kbd,
        samp,
        pre {
          font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
          font-size: 1em;
        }

        small {
          font-size: 80%;
        }

        sub,
        sup {
          font-size: 75%;
          line-height: 0;
          position: relative;
          vertical-align: baseline;
        }

        sub {
          bottom: -0.25em;
        }

        sup {
          top: -0.5em;
        }

        table {
          text-indent: 0;
          border-color: inherit;
          border-collapse: collapse;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
          font-family: inherit;
          font-feature-settings: inherit;
          font-variation-settings: inherit;
          font-size: 100%;
          font-weight: inherit;
          line-height: inherit;
          color: inherit;
          margin: 0;
          padding: 0;
        }

        button,
        select {
          text-transform: none;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
          -webkit-appearance: button;

          background-color: transparent;

          background-image: none;

        }

        :-moz-focusring {
          outline: auto;
        }

        :-moz-ui-invalid {
          box-shadow: none;
        }

        progress {
          vertical-align: baseline;
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
          height: auto;
        }

        [type="search"] {
          -webkit-appearance: textfield;

          outline-offset: -2px;

        }

        ::-webkit-search-decoration {
          -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
          -webkit-appearance: button;

          font: inherit;

        }

        summary {
          display: list-item;
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
          margin: 0;
        }

        fieldset {
          margin: 0;
          padding: 0;
        }

        legend {
          padding: 0;
        }

        ol,
        ul,
        menu {
          list-style: none;
          margin: 0;
          padding: 0;
        }

        dialog {
          padding: 0;
        }

        textarea {
          resize: vertical;
        }

        input::placeholder,
        textarea::placeholder {
          opacity: 1;

          color: #9ca3af;

        }

        button,
        [role="button"] {
          cursor: pointer;
        }

        :disabled {
          cursor: default;
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
          display: block;

          vertical-align: middle;

        }

        img,
        video {
          max-width: 100%;
          height: auto;
        }

        [hidden] {
          display: none;
        }

        *,
        ::before,
        ::after {
          --tw-border-spacing-x: 0;
          --tw-border-spacing-y: 0;
          --tw-translate-x: 0;
          --tw-translate-y: 0;
          --tw-rotate: 0;
          --tw-skew-x: 0;
          --tw-skew-y: 0;
          --tw-scale-x: 1;
          --tw-scale-y: 1;
          --tw-pan-x: ;
          --tw-pan-y: ;
          --tw-pinch-zoom: ;
          --tw-scroll-snap-strictness: proximity;
          --tw-gradient-from-position: ;
          --tw-gradient-via-position: ;
          --tw-gradient-to-position: ;
          --tw-ordinal: ;
          --tw-slashed-zero: ;
          --tw-numeric-figure: ;
          --tw-numeric-spacing: ;
          --tw-numeric-fraction: ;
          --tw-ring-inset: ;
          --tw-ring-offset-width: 0px;
          --tw-ring-offset-color: #fff;
          --tw-ring-color: rgb(59 130 246 / 0.5);
          --tw-ring-offset-shadow: 0 0 #0000;
          --tw-ring-shadow: 0 0 #0000;
          --tw-shadow: 0 0 #0000;
          --tw-shadow-colored: 0 0 #0000;
          --tw-blur: ;
          --tw-brightness: ;
          --tw-contrast: ;
          --tw-grayscale: ;
          --tw-hue-rotate: ;
          --tw-invert: ;
          --tw-saturate: ;
          --tw-sepia: ;
          --tw-drop-shadow: ;
          --tw-backdrop-blur: ;
          --tw-backdrop-brightness: ;
          --tw-backdrop-contrast: ;
          --tw-backdrop-grayscale: ;
          --tw-backdrop-hue-rotate: ;
          --tw-backdrop-invert: ;
          --tw-backdrop-opacity: ;
          --tw-backdrop-saturate: ;
          --tw-backdrop-sepia: ;
        }

        ::backdrop {
          --tw-border-spacing-x: 0;
          --tw-border-spacing-y: 0;
          --tw-translate-x: 0;
          --tw-translate-y: 0;
          --tw-rotate: 0;
          --tw-skew-x: 0;
          --tw-skew-y: 0;
          --tw-scale-x: 1;
          --tw-scale-y: 1;
          --tw-pan-x: ;
          --tw-pan-y: ;
          --tw-pinch-zoom: ;
          --tw-scroll-snap-strictness: proximity;
          --tw-gradient-from-position: ;
          --tw-gradient-via-position: ;
          --tw-gradient-to-position: ;
          --tw-ordinal: ;
          --tw-slashed-zero: ;
          --tw-numeric-figure: ;
          --tw-numeric-spacing: ;
          --tw-numeric-fraction: ;
          --tw-ring-inset: ;
          --tw-ring-offset-width: 0px;
          --tw-ring-offset-color: #fff;
          --tw-ring-color: rgb(59 130 246 / 0.5);
          --tw-ring-offset-shadow: 0 0 #0000;
          --tw-ring-shadow: 0 0 #0000;
          --tw-shadow: 0 0 #0000;
          --tw-shadow-colored: 0 0 #0000;
          --tw-blur: ;
          --tw-brightness: ;
          --tw-contrast: ;
          --tw-grayscale: ;
          --tw-hue-rotate: ;
          --tw-invert: ;
          --tw-saturate: ;
          --tw-sepia: ;
          --tw-drop-shadow: ;
          --tw-backdrop-blur: ;
          --tw-backdrop-brightness: ;
          --tw-backdrop-contrast: ;
          --tw-backdrop-grayscale: ;
          --tw-backdrop-hue-rotate: ;
          --tw-backdrop-invert: ;
          --tw-backdrop-opacity: ;
          --tw-backdrop-saturate: ;
          --tw-backdrop-sepia: ;
        }

        .fixed {
          position: fixed;
        }

        .bottom-0 {
          bottom: 0px;
        }

        .left-0 {
          left: 0px;
        }

        .table {
          display: table;
        }

        .h-12 {
          height: 3rem;
        }

        .w-1\/2 {
          width: 50%;
        }

        .w-full {
          width: 100%;
        }

        .border-collapse {
          border-collapse: collapse;
        }

        .border-spacing-0 {
          --tw-border-spacing-x: 0px;
          --tw-border-spacing-y: 0px;
          border-spacing: var(--tw-border-spacing-x) var(--tw-border-spacing-y);
        }

        .whitespace-nowrap {
          white-space: nowrap;
        }

        .border-b {
          border-bottom-width: 1px;
        }

        .border-b-2 {
          border-bottom-width: 2px;
        }

        .border-r {
          border-right-width: 1px;
        }

        .border-main {
          border-color: #5c6ac4;
        }

        .bg-main {
          background-color: #5c6ac4;
        }

        .bg-slate-100 {
          background-color: #f1f5f9;
        }

        .p-3 {
          padding: 0.75rem;
        }

        .px-14 {
          padding-left: 3.5rem;
          padding-right: 3.5rem;
        }

        .px-2 {
          padding-left: 0.5rem;
          padding-right: 0.5rem;
        }

        .py-10 {
          padding-top: 2.5rem;
          padding-bottom: 2.5rem;
        }

        .py-3 {
          padding-top: 0.75rem;
          padding-bottom: 0.75rem;
        }

        .py-4 {
          padding-top: 1rem;
          padding-bottom: 1rem;
        }

        .py-6 {
          padding-top: 1.5rem;
          padding-bottom: 1.5rem;
        }

        .pb-3 {
          padding-bottom: 0.75rem;
        }

        .pl-2 {
          padding-left: 0.5rem;
        }

        .pl-3 {
          padding-left: 0.75rem;
        }

        .pl-4 {
          padding-left: 1rem;
        }

        .pr-3 {
          padding-right: 0.75rem;
        }

        .pr-4 {
          padding-right: 1rem;
        }

        .text-center {
          text-align: center;
        }

        .text-right {
          text-align: right;
        }

        .align-top {
          vertical-align: top;
        }

        .text-sm {
          font-size: 0.875rem;
          line-height: 1.25rem;
        }

        .text-xs {
          font-size: 0.75rem;
          line-height: 1rem;
        }

        .font-bold {
          font-weight: 700;
        }

        .italic {
          font-style: italic;
        }

        .text-main {
          color: #5c6ac4;
        }

        .text-neutral-600 {
          color: #525252;
        }

        .text-neutral-700 {
          color: #404040;
        }

        .text-slate-300 {
          color: #cbd5e1;
        }

        .text-slate-400 {
          color: #94a3b8;
        }

        .text-white {
          color: #fff;
        }

        @page {
          margin: 0;
        }

        @media print {
          body {
            -webkit-print-color-adjust: exact;
          }
        }
.footer {
    position: fixed;
    bottom: 20;
    width: 100%;
}
      </style>  </body>

</html>';

$html3 = $html . $_SESSION['finalTable'] . $html2;

$dompdf->loadHtml($html3);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream('generated_pdf.pdf', ['Attachment' => false]);

$format = $_SESSION['id'] . "_" . $_SESSION['create_time'] . '.pdf';
$directory = $_SERVER['DOCUMENT_ROOT'] . '/storeify/store/invoices/';
$filePath = $directory . $format;

file_put_contents($filePath, $dompdf->output());
