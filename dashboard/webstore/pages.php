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
        <div class="row no-gutters" style="">
          <div class="col-12 col-md-6">
            <h1 class="my-0">Pages</h1>
          </div>
        </div>
      </header>

      <div class="card row-mt">
        <div class="card-body row d-flex w-100 align-self-center" style="">
          <div class="description col-12 col-xl-8 col-lg-8 text-center text-lg-left">
            <div class="row align-self-center h-100">
              <div class="col-12 col-xl-2 col-lg-3 align-self-center text-center">
                <i class="fal fa-home rounded-icon bg-dark"></i>
              </div>
              <div class="col-12 col-xl-10 col-lg-9 align-self-center my-3 my-lg-0">
                <h4>Homepage</h4>
                <p class="m-0">Edit the content of your webstore's homepage.</p>
              </div>
            </div>
          </div>
          <div class="action col-12 col-xl-4 col-lg-4 align-self-center text-right row-mt-mobile mt-3 mt-xl-0">
            <button id="editHomepageButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#homepageEditorModal">Edit</button>
          </div>
        </div>
      </div>

      <div class="modal" id="homepageEditorModal" tabindex="-1" role="dialog" aria-labelledby="homepageEditorModal" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Homepage</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form method="post" action="https://creator.tebex.io/pages/homepage">
              <input type="hidden" name="_token" value="e9uf8jMUsnhNZ5bXwmQ2dJ8t2WyHE1kQ5YOpqYLo">
              <div class="modal-body">
                <div class="fr-box dark-theme fr-basic fr-top" role="application">
                  <div class="fr-toolbar dark-theme fr-desktop fr-top fr-basic"><button id="bold-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Bold (Ctrl+B)" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="bold"><i class="fal fa-bold" aria-hidden="true"></i><span class="fr-sr-only">Bold</span></button><button id="italic-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Italic (Ctrl+I)" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="italic"><i class="fal fa-italic" aria-hidden="true"></i><span class="fr-sr-only">Italic</span></button><button id="underline-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Underline (Ctrl+U)" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="underline"><i class="fal fa-underline" aria-hidden="true"></i><span class="fr-sr-only">Underline</span></button><button id="strikeThrough-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Strikethrough (Ctrl+S)" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="strikeThrough"><i class="fal fa-strikethrough" aria-hidden="true"></i><span class="fr-sr-only">Strikethrough</span></button><button id="fontFamily-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-fontFamily-1" aria-expanded="false" aria-haspopup="true" title="Font Family" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome_5l fr-selection" data-cmd="fontFamily"><i class="fal fa-font" aria-hidden="true"></i><span class="fr-sr-only">Font Family</span></button>
                    <div id="dropdown-menu-fontFamily-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="fontFamily-1" aria-hidden="true">
                      <div class="fr-dropdown-wrapper" role="presentation">
                        <div class="fr-dropdown-content" role="presentation">
                          <ul class="fr-dropdown-list" role="presentation">
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="Arial,Helvetica,sans-serif" style="font-family: Arial,Helvetica,sans-serif" title="Arial">Arial</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="Georgia,serif" style="font-family: Georgia,serif" title="Georgia">Georgia</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="Impact,Charcoal,sans-serif" style="font-family: Impact,Charcoal,sans-serif" title="Impact">Impact</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="Tahoma,Geneva,sans-serif" style="font-family: Tahoma,Geneva,sans-serif" title="Tahoma">Tahoma</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="Times New Roman,Times,serif,-webkit-standard" style="font-family: Times New Roman,Times,serif,-webkit-standard" title="Times New Roman">Times New Roman</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontFamily" data-param1="Verdana,Geneva,sans-serif" style="font-family: Verdana,Geneva,sans-serif" title="Verdana">Verdana</a></li>
                          </ul>
                        </div>
                      </div>
                    </div><button id="fontSize-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-fontSize-1" aria-expanded="false" aria-haspopup="true" title="Font Size" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome_5l fr-selection" data-cmd="fontSize"><i class="fal fa-text-height" aria-hidden="true"></i><span class="fr-sr-only">Font Size</span></button>
                    <div id="dropdown-menu-fontSize-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="fontSize-1" aria-hidden="true">
                      <div class="fr-dropdown-wrapper" role="presentation">
                        <div class="fr-dropdown-content" role="presentation">
                          <ul class="fr-dropdown-list" role="presentation">
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="8px" title="8">8</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="9px" title="9">9</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="10px" title="10">10</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="11px" title="11">11</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="12px" title="12">12</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="14px" title="14">14</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="18px" title="18">18</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="24px" title="24">24</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="30px" title="30">30</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="36px" title="36">36</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="48px" title="48">48</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="60px" title="60">60</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="72px" title="72">72</a></li>
                            <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="96px" title="96">96</a></li>
                          </ul>
                        </div>
                      </div>
                    </div><button id="color-1" type="button" tabindex="-1" role="button" title="Colors" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="color" data-popup="true"><i class="fal fa-tint" aria-hidden="true"></i><span class="fr-sr-only">Colors</span></button><button id="paragraphFormat-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-paragraphFormat-1" aria-expanded="false" aria-haspopup="true" title="Paragraph Format" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome_5l fr-selection" data-cmd="paragraphFormat"><i class="fal fa-paragraph" aria-hidden="true"></i><span class="fr-sr-only">Paragraph Format</span></button>
                    <div id="dropdown-menu-paragraphFormat-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="paragraphFormat-1" aria-hidden="true">
                      <div class="fr-dropdown-wrapper" role="presentation">
                        <div class="fr-dropdown-content" role="presentation">
                          <ul class="fr-dropdown-list" role="presentation">
                            <li role="presentation">
                              <p style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="N" title="Normal">Normal</a></p>
                            </li>
                            <li role="presentation">
                              <h1 style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="H1" title="Heading 1">Heading 1</a></h1>
                            </li>
                            <li role="presentation">
                              <h2 style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="H2" title="Heading 2">Heading 2</a></h2>
                            </li>
                            <li role="presentation">
                              <h3 style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="H3" title="Heading 3">Heading 3</a></h3>
                            </li>
                            <li role="presentation">
                              <h4 style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="H4" title="Heading 4">Heading 4</a></h4>
                            </li>
                            <li role="presentation">
                              <pre style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="PRE" title="Code">Code</a></pre>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div><button id="align-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-align-1" aria-expanded="false" aria-haspopup="true" title="Align" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome_5l" data-cmd="align"><i class="fal fa-align-left" aria-hidden="true"></i><span class="fr-sr-only">Align</span></button>
                    <div id="dropdown-menu-align-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="align-1" aria-hidden="true">
                      <div class="fr-dropdown-wrapper" role="presentation">
                        <div class="fr-dropdown-content" role="presentation">
                          <ul class="fr-dropdown-list" role="presentation">
                            <li role="presentation"><a class="fr-command fr-title" tabindex="-1" role="option" data-cmd="align" data-param1="left" title="Align Left"><i class="fal fa-align-left" aria-hidden="true"></i><span class="fr-sr-only">Align Left</span></a></li>
                            <li role="presentation"><a class="fr-command fr-title" tabindex="-1" role="option" data-cmd="align" data-param1="center" title="Align Center"><i class="fal fa-align-center" aria-hidden="true"></i><span class="fr-sr-only">Align Center</span></a></li>
                            <li role="presentation"><a class="fr-command fr-title" tabindex="-1" role="option" data-cmd="align" data-param1="right" title="Align Right"><i class="fal fa-align-right" aria-hidden="true"></i><span class="fr-sr-only">Align Right</span></a></li>
                            <li role="presentation"><a class="fr-command fr-title" tabindex="-1" role="option" data-cmd="align" data-param1="justify" title="Align Justify"><i class="fal fa-align-justify" aria-hidden="true"></i><span class="fr-sr-only">Align Justify</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="fr-btn-wrap"><button id="formatOL-1" type="button" tabindex="-1" role="button" title="Ordered List" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="formatOL"><i class="fal fa-list-ol" aria-hidden="true"></i><span class="fr-sr-only">Ordered List</span></button><button id="formatOLOptions-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-formatOLOptions-1" aria-expanded="false" aria-haspopup="true" title="Ordered List" class="fr-command fr-btn fr-dropdown fr-options fr-btn-font_awesome_5l" data-cmd="formatOLOptions"></button>
                      <div id="dropdown-menu-formatOLOptions-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="formatOLOptions-1" aria-hidden="true">
                        <div class="fr-dropdown-wrapper" role="presentation">
                          <div class="fr-dropdown-content" role="presentation">
                            <ul class="fr-dropdown-list" role="presentation">
                              <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="formatOL" data-param1="default" title="Default">Default</a></li>
                              <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="formatOL" data-param1="lower-alpha" title="Lower Alpha">Lower Alpha</a></li>
                              <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="formatOL" data-param1="lower-greek" title="Lower Greek">Lower Greek</a></li>
                              <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="formatOL" data-param1="lower-roman" title="Lower Roman">Lower Roman</a></li>
                              <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="formatOL" data-param1="upper-alpha" title="Upper Alpha">Upper Alpha</a></li>
                              <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="formatOL" data-param1="upper-roman" title="Upper Roman">Upper Roman</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fr-btn-wrap"><button id="formatUL-1" type="button" tabindex="-1" role="button" title="Unordered List" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="formatUL"><i class="fal fa-list-ul" aria-hidden="true"></i><span class="fr-sr-only">Unordered List</span></button><button id="formatULOptions-1" type="button" tabindex="-1" role="button" aria-controls="dropdown-menu-formatULOptions-1" aria-expanded="false" aria-haspopup="true" title="Unordered List" class="fr-command fr-btn fr-dropdown fr-options fr-btn-font_awesome_5l" data-cmd="formatULOptions"></button>
                      <div id="dropdown-menu-formatULOptions-1" class="fr-dropdown-menu" role="listbox" aria-labelledby="formatULOptions-1" aria-hidden="true">
                        <div class="fr-dropdown-wrapper" role="presentation">
                          <div class="fr-dropdown-content" role="presentation">
                            <ul class="fr-dropdown-list" role="presentation">
                              <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="formatUL" data-param1="default" title="Default">Default</a></li>
                              <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="formatUL" data-param1="circle" title="Circle">Circle</a></li>
                              <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="formatUL" data-param1="disc" title="Disc">Disc</a></li>
                              <li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="formatUL" data-param1="square" title="Square">Square</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div><button id="insertLink-1" type="button" tabindex="-1" role="button" title="Insert Link (Ctrl+K)" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="insertLink" data-popup="true"><i class="fal fa-link" aria-hidden="true"></i><span class="fr-sr-only">Insert Link</span></button><button id="insertImage-1" type="button" tabindex="-1" role="button" title="Insert Image (Ctrl+P)" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="insertImage" data-popup="true"><i class="fal fa-image" aria-hidden="true"></i><span class="fr-sr-only">Insert Image</span></button><button id="insertTable-1" type="button" tabindex="-1" role="button" title="Insert Table" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="insertTable" data-popup="true"><i class="fal fa-table" aria-hidden="true"></i><span class="fr-sr-only">Insert Table</span></button><button id="clearFormatting-1" type="button" tabindex="-1" role="button" title="Clear Formatting" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="clearFormatting"><i class="fal fa-eraser" aria-hidden="true"></i><span class="fr-sr-only">Clear Formatting</span></button><button id="specialCharacters-1" type="button" tabindex="-1" role="button" title="Special Characters" class="fr-command fr-btn fr-btn-text" data-cmd="specialCharacters" data-modal="true"><span style="text-align: center;">Ω</span><span class="fr-sr-only">Special Characters</span></button><button id="fullscreen-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Fullscreen" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="fullscreen"><i class="fal fa-expand" aria-hidden="true"></i><span class="fr-sr-only">Fullscreen</span></button><button id="html-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Code View" class="fr-command fr-btn fr-btn-font_awesome_5l" data-cmd="html"><i class="fal fa-code" aria-hidden="true"></i><span class="fr-sr-only">Code View</span></button>
                  </div>
                  <div style="max-height: 300px; overflow: auto;" class="fr-wrapper" dir="auto">
                    <div class="fr-element fr-view" dir="auto" contenteditable="true" aria-disabled="false" spellcheck="true">
                      <p><span style="color:rgb(0,0,0);"><strong>Thank you for visiting JZ-WORKS!<br><br>We are a team of developers that creates FiveM scripts.<br><br>If you are looking for support you can always join our <a href="http://discord.gg/Udfhh9xTjk">Discord</a> where we can help you with any doubts that you have!<br><br>You can also check our free work on our </strong><a href="https://github.com/JZ-Works"><strong>GitHub</strong></a></span></p>
                      <p><span style="color:rgb(0,0,0);"><strong><br></strong></span></p>
                      <p><span style="color:rgb(0,0,0);"><strong>&nbsp;<img src="https://dunb17ur4ymx4.cloudfront.net/wysiwyg/910429/7c78faacce8d4726f28322ffeb1ef262eab42fbd.png" width="150" height="150" alt="7c78faacce8d4726f28322ffeb1ef262eab42fbd.png" class="fr-fic fr-dii fr-draggable"></strong></span></p>
                      <h3><span style="color:rgb(0,0,0);"><strong>FiveM Asset Escrow System</strong></span></h3>
                      <p><span style="color:rgb(0,0,0);"><strong>Our resources use FiveM's NEW official asset escrow system to ensure maximum stability for your server and peace of mind for you as a server owner.&nbsp;</strong></span></p>
                      <p><br></p>
                      <p><span style="color:rgb(0,0,0);"><strong><a href="mailto:contact@codesign.pro"></a></strong></span></p>
                      <p><span style="color:rgb(0,0,0);"><strong><a href="mailto:contact@codesign.pro"></a></strong></span></p>
                      <p><span style="color:rgb(0,0,0);"><strong><img src="https://dunb17ur4ymx4.cloudfront.net/wysiwyg/910429/56b067c5e790d0dbcd52a87fc9aaf47823a5bbc9.png" alt="56b067c5e790d0dbcd52a87fc9aaf47823a5bbc9.png" width="150" height="150" class="fr-fic fr-dii fr-draggable"></strong></span></p>
                      <h3><span style="color:rgb(0,0,0);"><strong>Active Support</strong></span></h3>
                      <p><strong><span style="color:rgb(0,0,0);">Our active support team will help with any inquiries you have.</span></strong></p>
                    </div>
                  </div>
                </div><textarea class="textarea form-control" name="description" rows="10" style="width: 100%; display: none;">&lt;p&gt;&lt;span style="color:rgb(0,0,0);"&gt;&lt;strong&gt;Thank you for visiting JZ-WORKS!&lt;br /&gt;&lt;br /&gt;We are a team of developers that creates FiveM scripts.&lt;br /&gt;&lt;br /&gt;If you are looking for support you can always join our &lt;a href="http://discord.gg/Udfhh9xTjk"&gt;Discord&lt;/a&gt; where we can help you with any doubts that you have!&lt;br /&gt;&lt;br /&gt;You can also check our free work on our &lt;/strong&gt;&lt;a href="https://github.com/JZ-Works"&gt;&lt;strong&gt;GitHub&lt;/strong&gt;&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="color:rgb(0,0,0);"&gt;&lt;strong&gt;&lt;br /&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="color:rgb(0,0,0);"&gt;&lt;strong&gt;&nbsp;&lt;img src="https://dunb17ur4ymx4.cloudfront.net/wysiwyg/910429/7c78faacce8d4726f28322ffeb1ef262eab42fbd.png" width="150" height="150" alt="7c78faacce8d4726f28322ffeb1ef262eab42fbd.png" class="fr-fic fr-dii" /&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;h3&gt;&lt;span style="color:rgb(0,0,0);"&gt;&lt;strong&gt;FiveM Asset Escrow System&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;&lt;p&gt;&lt;span style="color:rgb(0,0,0);"&gt;&lt;strong&gt;Our resources use FiveM's NEW official asset escrow system to ensure maximum stability for your server and peace of mind for you as a server owner.&nbsp;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="color:rgb(0,0,0);"&gt;&lt;strong&gt;&lt;a href="mailto:contact@codesign.pro"&gt;&lt;/a&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="color:rgb(0,0,0);"&gt;&lt;strong&gt;&lt;a href="mailto:contact@codesign.pro"&gt;&lt;/a&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="color:rgb(0,0,0);"&gt;&lt;strong&gt;&lt;img src="https://dunb17ur4ymx4.cloudfront.net/wysiwyg/910429/56b067c5e790d0dbcd52a87fc9aaf47823a5bbc9.png" alt="56b067c5e790d0dbcd52a87fc9aaf47823a5bbc9.png" width="150" height="150" class="fr-fic fr-dii" /&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;h3&gt;&lt;span style="color:rgb(0,0,0);"&gt;&lt;strong&gt;Active Support&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;&lt;p&gt;&lt;strong&gt;&lt;span style="color:rgb(0,0,0);"&gt;Our active support team will help with any inquiries you have.&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;</textarea>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <header class="page-title row-mt">
        <div class="row no-gutters">
          <div class="col-12 col-md-6">
          <br>
            <h1 class="my-0">Custom Pages</h1>
          </div>
        </div>
      </header>

      <div class="card row-mt">
        <div class="card-header">
          Custom Pages
        </div>
        <div class="card-body">
          <table id="pages-table" class="table table-striped table-responsive-sm table-responsive-md">
            <thead class="thead-light">
              <tr>
                <th class="d-none d-lg-table-cell"></th>
                <th>Title</th>
                <th>URL</th>
                <th>Status</th>
                <th>Private</th>
                <th>Hidden</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody class="sequenceable" data-sequence-url="https://creator.tebex.io/pages/sequence">
              <tr data-sequence-id="601049">
                <td class="d-none d-lg-table-cell"><span href="#" class="move"><i class="fal fa-bars"></i></span></td>
                <td>Privacy Policy</td>
                <td><a href="https://jzworks.tebex.io/privacy" target="_blank">/privacy</a></td>
                <td>
                  <span class="badge badge-success">Active</span>
                </td>
                <td>
                  <span class="badge badge-success"><i class="fa fa-check"></i></span>
                </td>
                <td>
                  <span class="badge badge-success"><i class="fa fa-check"></i></span>
                </td>
                <td class="text-right">
                  <div class="btn-group">
                    <a href="https://creator.tebex.io/pages/601049" class="btn text-primary edit">Edit</a>
                    <a href="https://creator.tebex.io/pages/601049/delete" class="btn text-danger">Delete</a>
                  </div>
                </td>
              </tr>
              <tr data-sequence-id="601043">
                <td class="d-none d-lg-table-cell"><span href="#" class="move"><i class="fal fa-bars"></i></span></td>
                <td>Tebex Terms &amp; Conditions</td>
                <td><a href="https://jzworks.tebex.io/terms" target="_blank">/terms</a></td>
                <td>
                  <span class="badge badge-success">Active</span>
                </td>
                <td>
                  <span class="badge badge-danger"><i class="fal fa-times"></i></span>
                </td>
                <td>
                  <span class="badge badge-success"><i class="fa fa-check"></i></span>
                </td>
                <td class="text-right">
                  <div class="btn-group">
                    <a href="https://creator.tebex.io/pages/601043" class="btn text-primary edit">Edit</a>
                    <a href="https://creator.tebex.io/pages/601043/delete" class="btn text-danger">Delete</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </main>
  <?php
  include '../dashp2.php';
  ?>