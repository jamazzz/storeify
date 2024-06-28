<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp1.php';
  ?>
  <main role="main" id="main">
    <div class="container-fluid">

      <div>
        <header class="page-title">
          <div class="row no-gutters d-flex align-items-center">
            <div class="col-12 col-md-6">
              <h1 class="my-0">Create Package</h1>
            </div>
            <div class="col-12 col-lg-6 text-left text-lg-right"><a target="_blank" href="https://docs.tebex.io/store/key-features/how-to-create-packages" class="btn btn-info">Help</a> <a href="/" class="btn btn-quad">Back</a></div>
          </div>
        </header>
        <form>
          <div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-lg-8 col-xl-9">
                    <div class="form-group">
                      <div class="clearfix">
                        <div class="float-left"><label>Name</label></div>
                        <div class="float-right"><i data-toggle="tooltip" title="" class="fa fa-question-circle" data-original-title="Create a short name for your package to gain your customer's attention"></i> <!----></div>
                      </div> <input type="text" placeholder="VIP Upgrade" class="form-control">
                    </div>
                    <div class="form-group">
                      <div class="clearfix">
                        <div class="float-left"><label>Description</label></div>
                        <div class="float-right"><i data-toggle="tooltip" title="" class="fa fa-question-circle" data-original-title="We may disable a package, category or your entire store if you need to provide more information or to comply with our Terms of Service."></i> <!----></div>
                      </div>
                      <p class="text-sm mb-2">Explain to your customers what they're receiving when they purchase this package and how they will receive it</p>
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
                        <div class="fr-wrapper show-placeholder" dir="auto" style="max-height: 300px; overflow: auto;">
                          <div class="fr-element fr-view" dir="auto" contenteditable="true" aria-disabled="false" spellcheck="true">
                            <p><br></p>
                          </div><span class="fr-placeholder" style="margin-top: 0px; padding-top: 0px; padding-left: 0px; margin-left: 0px; padding-right: 0px; margin-right: 0px;">Tell your customers about this package and how will it improve their experience on your game. Remember to include any specific instructions (such as needing to create a ticket in Discord if required).</span>
                        </div>
                      </div><textarea style="display: none;"></textarea>
                    </div>
                    <div class="row">
                      <div class="col col-md-6">
                        <div class="form-group">
                          <div class="clearfix">
                            <div class="float-left"><label>Category</label></div>
                            <div class="float-right"><i data-toggle="tooltip" title="" class="fa fa-question-circle" data-original-title="This is the category that your package will appear within on your webstore"></i> <!----></div>
                          </div>
                          <div class="vue-treeselect vue-treeselect--single vue-treeselect--searchable vue-treeselect--open-below" placeholder="Please select a category for this package"><!---->
                            <div class="vue-treeselect__control">
                              <div class="vue-treeselect__value-container">
                                <div class="vue-treeselect__placeholder vue-treeselect-helper-zoom-effect-off">Please select a category for this package</div>
                                <div class="vue-treeselect__input-container"><input type="text" autocomplete="off" tabindex="0" class="vue-treeselect__input"></div>
                              </div>
                              <div class="vue-treeselect__control-arrow-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.362 292.362" class="vue-treeselect__control-arrow">
                                  <path d="M286.935 69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952 0-9.233 1.807-12.85 5.424C1.807 72.998 0 77.279 0 82.228c0 4.948 1.807 9.229 5.424 12.847l127.907 127.907c3.621 3.617 7.902 5.428 12.85 5.428s9.233-1.811 12.847-5.428L286.935 95.074c3.613-3.617 5.427-7.898 5.427-12.847 0-4.948-1.814-9.229-5.427-12.85z"></path>
                                </svg></div>
                            </div>
                            <div class="vue-treeselect__menu-container" style="z-index: 999;"><!----></div>
                          </div>
                        </div>
                      </div>
                      <div class="col col-md-6"><!----></div>
                    </div> <!---->
                  </div>
                  <div class="col-12 col-xl-3 col-lg-4 mt-3 mt-lg-0">
                    <div>
                      <div class="clearfix">
                        <div class="float-left"><label>Image</label></div>
                        <div class="float-right"><i data-toggle="tooltip" title="" class="fa fa-question-circle" data-original-title="Recommended max height of 165px"></i> <!----></div>
                      </div>
                      <div class="text-center">
                        <div class="card">
                          <div class="card-body">
                            <div><i class="fal fa-image fa-3x"></i>
                              <h6 class="mt-3 mb-4">No image uploaded</h6> <span class="btn btn-outline-primary btn-file">
                                Upload <input type="file" name="image-file" class="upload-image"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> <!---->
                  </div>
                </div>
              </div>
            </div>
            <div class="row row-mt">
              <div class="col-12">
                <div class="card">
                  <div class="card-body py-3 pl-4 border-bottom">
                    <ul role="tablist" class="nav nav-pills">
                      <li role="presentation" class="nav-item"><a id="pricing-tab" data-toggle="tab" href="#pricing" role="tab" aria-controls="pricing" aria-selected="true" class="nav-link active">Pricing</a></li>
                      <li role="presentation" class="nav-item"><a id="limits-tab" data-toggle="tab" href="#limits" role="tab" aria-controls="limits" aria-selected="false" class="nav-link">Limits</a></li>
                      <li role="presentation" class="nav-item"><a id="restrictions-tab" data-toggle="tab" href="#restrictions" role="tab" aria-controls="restrictions" aria-selected="false" class="nav-link">Restrictions</a></li>
                      <li role="presentation" class="nav-item"><a id="visibility-tab" data-toggle="tab" href="#visibility" role="tab" aria-controls="visibility" aria-selected="false" class="nav-link">Visibility</a></li>
                      <li role="presentation" class="nav-item"><a id="gifting-tab" data-toggle="tab" href="#gifting" role="tab" aria-controls="gifting" aria-selected="false" class="nav-link">Gifting</a></li>
                      <li role="presentation" class="nav-item"><a id="variables-tab" data-toggle="tab" href="#variables" role="tab" aria-controls="variables" aria-selected="false" class="nav-link">Variables</a></li>
                      <li role="presentation" class="nav-item"><a id="goal-tab" data-toggle="tab" href="#goal" role="tab" aria-controls="goal" aria-selected="false" class="nav-link">Goal</a></li>
                      <li role="presentation" class="nav-item"><a id="upselling-tab" data-toggle="tab" href="#upselling" role="tab" aria-controls="upselling" aria-selected="false" class="nav-link">Upselling</a></li> <!---->
                    </ul>
                  </div>
                  <div class="card-body p-0">
                    <div id="myTabContent" class="tab-content">
                      <div id="pricing" role="tabpanel" aria-labelledby="pricing-tab" class="tab-pane show active">
                        <div class="row">
                          <div class="col col-md-6">
                            <div class="form-group mb-0">
                              <div class="clearfix">
                                <div class="float-left"><label>Price</label></div>
                                <div class="float-right"><i data-toggle="tooltip" title="" class="fa fa-question-circle" data-original-title="This is the amount your customers will pay when purchasing your package"></i> <!----></div>
                              </div>
                              <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">€</span></div> <input type="text" placeholder="4.99" class="form-control"> <!---->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row mt-3">
                          <div class="col-md-6">
                            <div class="value-group"><label>Recurring Payment</label> <select name="type" class="custom-select">
                                <option value="single">Only charge the customer once</option>
                                <option value="subscription">Charge a recurring subscription</option>
                                <option value="both">Allow one off charge &amp; recurring subscription</option>
                              </select></div>
                          </div>
                          <div class="col-md-6">
                            <div class="clearfix">
                              <div class="float-left"><label>Remove From Customer After</label></div>
                              <div class="float-right"><!----> <!----></div>
                            </div>
                            <div>
                              <div class="input-group"><input type="text" placeholder="Never remove the package" disabled="disabled" class="form-control bg-black-cf">
                                <div class="input-group-append"><button type="button" class="btn btn-gray-300">Configure</button></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="variables" role="tabpanel" aria-labelledby="variables-tab" class="tab-pane">
                        <div placeholder="Don't provide the customer with any customisation options." multiple="multiple" clearable="true" class="form-group">
                          <div style="display: none;">
                            <div class="clearfix">
                              <div class="float-left"><label>Variables</label></div>
                              <div class="float-right"><i data-toggle="tooltip" title="" class="fa fa-question-circle" data-original-title="Allow customers to customise their packages such as selecting the colour of item they'd receive upon purchase"></i> <!----></div>
                            </div>
                            <div class="vue-treeselect vue-treeselect--multi vue-treeselect--searchable vue-treeselect--open-below"><!---->
                              <div class="vue-treeselect__control">
                                <div class="vue-treeselect__value-container">
                                  <div class="vue-treeselect__multi-value">
                                    <div class="vue-treeselect__placeholder vue-treeselect-helper-zoom-effect-off">Don't provide the customer with any customisation options.</div>
                                    <div class="vue-treeselect__input-container"><input type="text" autocomplete="off" tabindex="0" class="vue-treeselect__input" style="width: 5px;">
                                      <div class="vue-treeselect__sizer"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="vue-treeselect__control-arrow-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.362 292.362" class="vue-treeselect__control-arrow">
                                    <path d="M286.935 69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952 0-9.233 1.807-12.85 5.424C1.807 72.998 0 77.279 0 82.228c0 4.948 1.807 9.229 5.424 12.847l127.907 127.907c3.621 3.617 7.902 5.428 12.85 5.428s9.233-1.811 12.847-5.428L286.935 95.074c3.613-3.617 5.427-7.898 5.427-12.847 0-4.948-1.814-9.229-5.427-12.85z"></path>
                                  </svg></div>
                              </div>
                              <div class="vue-treeselect__menu-container" style="z-index: 999;"><!----></div>
                            </div>
                          </div>
                          <div class="text-center"><i class="fal fa-th-list fa-3x mb-3"></i>
                            <p class="py-2">Allow customisation of this package during checkout by using variables.</p> <a href="/variables" target="_blank" class="btn btn-primary">Create A Variable</a>
                          </div>
                        </div>
                      </div>
                      <div id="goal" role="tabpanel" aria-labelledby="goal-tab" class="tab-pane">
                        <div placeholder="Don't assign this package to a community goal." clearable="true" class="form-group">
                          <div style="display: none;">
                            <div class="clearfix">
                              <div class="float-left"><label>Community Goal</label></div>
                              <div class="float-right"><i data-toggle="tooltip" title="" class="fa fa-question-circle" data-original-title="Assign the earnings of this package towards a community goal."></i> <!----></div>
                            </div>
                            <div class="vue-treeselect vue-treeselect--single vue-treeselect--searchable vue-treeselect--open-below"><!---->
                              <div class="vue-treeselect__control">
                                <div class="vue-treeselect__value-container">
                                  <div class="vue-treeselect__placeholder vue-treeselect-helper-zoom-effect-off">Don't assign this package to a community goal.</div>
                                  <div class="vue-treeselect__input-container"><input type="text" autocomplete="off" tabindex="0" class="vue-treeselect__input"></div>
                                </div>
                                <div class="vue-treeselect__control-arrow-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.362 292.362" class="vue-treeselect__control-arrow">
                                    <path d="M286.935 69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952 0-9.233 1.807-12.85 5.424C1.807 72.998 0 77.279 0 82.228c0 4.948 1.807 9.229 5.424 12.847l127.907 127.907c3.621 3.617 7.902 5.428 12.85 5.428s9.233-1.811 12.847-5.428L286.935 95.074c3.613-3.617 5.427-7.898 5.427-12.847 0-4.948-1.814-9.229-5.427-12.85z"></path>
                                  </svg></div>
                              </div>
                              <div class="vue-treeselect__menu-container" style="z-index: 999;"><!----></div>
                            </div>
                          </div>
                          <div class="text-center"><i class="fal fa-th-list fa-3x mb-3"></i>
                            <p class="py-2">Let your customers work towards a community wide reward by creating a goal.</p> <a href="/community-goals" target="_blank" class="btn btn-primary">Create A Community
                              Goal</a>
                          </div>
                        </div>
                      </div>
                      <div id="limits" role="tabpanel" aria-labelledby="limits-tab" class="tab-pane">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group"><label class="text-capitalize">Global Limit</label>
                              <div>
                                <div class="input-group"><input type="text" placeholder="Do not impose a global limit on this package" disabled="disabled" class="form-control">
                                  <div class="input-group-append"><button type="button" class="btn btn-secondary">Configure</button></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group"><label class="text-capitalize">User Limit</label>
                              <div>
                                <div class="input-group"><input type="text" placeholder="Do not impose a user limit on this package" disabled="disabled" class="form-control">
                                  <div class="input-group-append"><button type="button" class="btn btn-secondary">Configure</button></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-v-67562c67="" class="card mt-3">
                          <div data-v-67562c67="" class="card-body p-3">
                            <div data-v-67562c67="" class="row d-flex align-items-center">
                              <div data-v-67562c67="" class="col-12 col-md-10">Do not include packages that have been removed from customers when calculating limits.</div>
                              <div data-v-67562c67="" class="col-12 col-md-2 text-center"><label data-v-67562c67="" class="switch d-flex align-self-center mb-0 mt-3 mt-md-0 float-md-right"><input data-v-67562c67="" type="checkbox"> <span data-v-67562c67="" class="slider"></span></label></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="restrictions" role="tabpanel" aria-labelledby="restrictions-tab" class="tab-pane">
                        <div class="row">
                          <div class="col">
                            <div class="form-group"><label>Required Packages</label>
                              <div class="vue-treeselect vue-treeselect--multi vue-treeselect--searchable vue-treeselect--open-below vue-treeselect--branch-nodes-disabled" multiple="multiple"><!---->
                                <div class="vue-treeselect__control">
                                  <div class="vue-treeselect__value-container">
                                    <div class="vue-treeselect__multi-value">
                                      <div class="vue-treeselect__placeholder vue-treeselect-helper-zoom-effect-off">Select a package</div>
                                      <div class="vue-treeselect__input-container"><input type="text" autocomplete="off" tabindex="0" class="vue-treeselect__input" style="width: 5px;">
                                        <div class="vue-treeselect__sizer"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="vue-treeselect__control-arrow-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.362 292.362" class="vue-treeselect__control-arrow">
                                      <path d="M286.935 69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952 0-9.233 1.807-12.85 5.424C1.807 72.998 0 77.279 0 82.228c0 4.948 1.807 9.229 5.424 12.847l127.907 127.907c3.621 3.617 7.902 5.428 12.85 5.428s9.233-1.811 12.847-5.428L286.935 95.074c3.613-3.617 5.427-7.898 5.427-12.847 0-4.948-1.814-9.229-5.427-12.85z"></path>
                                    </svg></div>
                                </div>
                                <div class="vue-treeselect__menu-container" style="z-index: 999;"><!----></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-v-67562c67="" class="card mt-3">
                          <div data-v-67562c67="" class="card-body p-3">
                            <div data-v-67562c67="" class="row d-flex align-items-center">
                              <div data-v-67562c67="" class="col-12 col-md-10">Only require the customer to have purchased one package from the selected list.</div>
                              <div data-v-67562c67="" class="col-12 col-md-2 text-center"><label data-v-67562c67="" class="switch d-flex align-self-center mb-0 mt-3 mt-md-0 float-md-right"><input data-v-67562c67="" type="checkbox"> <span data-v-67562c67="" class="slider"></span></label></div>
                            </div>
                          </div>
                        </div>
                        <div data-v-67562c67="" class="card mt-3">
                          <div data-v-67562c67="" class="card-body p-3">
                            <div data-v-67562c67="" class="row d-flex align-items-center">
                              <div data-v-67562c67="" class="col-12 col-md-10">Do not allow the customer to increase the quantity of this package when purchasing.</div>
                              <div data-v-67562c67="" class="col-12 col-md-2 text-center"><label data-v-67562c67="" class="switch d-flex align-self-center mb-0 mt-3 mt-md-0 float-md-right"><input data-v-67562c67="" type="checkbox"> <span data-v-67562c67="" class="slider"></span></label></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="visibility" role="tabpanel" aria-labelledby="visibility-tab" class="tab-pane">
                        <div class="row">
                          <div class="col-md-6">
                            <div data-v-69eb5e9c="" class="form-group">
                              <div class="clearfix" data-v-69eb5e9c="">
                                <div class="float-left"><label>Publish On Webstore From</label></div>
                                <div class="float-right"><i data-toggle="tooltip" title="" class="fa fa-question-circle" data-original-title="Set an optional time for when this package should appear on your store"></i> <!----></div>
                              </div>
                              <div data-v-69eb5e9c="" class="input-group"><input data-v-69eb5e9c="" type="text" data-input="true" placeholder="n/a" class="form-control flatpickr-input" readonly="readonly"> <!----></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div data-v-69eb5e9c="" class="form-group">
                              <div class="clearfix" data-v-69eb5e9c="">
                                <div class="float-left"><label>Remove From Webstore After</label></div>
                                <div class="float-right"><i data-toggle="tooltip" title="" class="fa fa-question-circle" data-original-title="Set an optional time for when this package should be removed from your store"></i> <!----></div>
                              </div>
                              <div data-v-69eb5e9c="" class="input-group"><input data-v-69eb5e9c="" type="text" data-input="true" placeholder="n/a" class="form-control flatpickr-input" readonly="readonly"> <!----></div>
                            </div>
                          </div>
                        </div>
                        <div data-v-67562c67="" class="card mt-3">
                          <div data-v-67562c67="" class="card-body p-3">
                            <div data-v-67562c67="" class="row d-flex align-items-center">
                              <div data-v-67562c67="" class="col-12 col-md-10">Do not show this package to customers who haven't logged into the webstore.</div>
                              <div data-v-67562c67="" class="col-12 col-md-2 text-center"><label data-v-67562c67="" class="switch d-flex align-self-center mb-0 mt-3 mt-md-0 float-md-right"><input data-v-67562c67="" type="checkbox"> <span data-v-67562c67="" class="slider"></span></label></div>
                            </div>
                          </div>
                        </div>
                        <div data-v-67562c67="" class="card mt-3">
                          <div data-v-67562c67="" class="card-body p-3">
                            <div data-v-67562c67="" class="row d-flex align-items-center">
                              <div data-v-67562c67="" class="col-12 col-md-10">Do not display this package on the webstore and disable it entirely.</div>
                              <div data-v-67562c67="" class="col-12 col-md-2 text-center"><label data-v-67562c67="" class="switch d-flex align-self-center mb-0 mt-3 mt-md-0 float-md-right"><input data-v-67562c67="" type="checkbox"> <span data-v-67562c67="" class="slider"></span></label></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="gifting" role="tabpanel" aria-labelledby="gifting-tab" class="tab-pane">
                        <div data-v-67562c67="" class="card mb-3">
                          <div data-v-67562c67="" class="card-body p-3">
                            <div data-v-67562c67="" class="row d-flex align-items-center">
                              <div data-v-67562c67="" class="col-12 col-md-10">Do not allow this package to be purchased using gift cards.</div>
                              <div data-v-67562c67="" class="col-12 col-md-2 text-center"><label data-v-67562c67="" class="switch d-flex align-self-center mb-0 mt-3 mt-md-0 float-md-right"><input data-v-67562c67="" type="checkbox"> <span data-v-67562c67="" class="slider"></span></label></div>
                            </div>
                          </div>
                        </div>
                        <div data-v-67562c67="" class="card">
                          <div data-v-67562c67="" class="card-body p-3">
                            <div data-v-67562c67="" class="row d-flex align-items-center">
                              <div data-v-67562c67="" class="col-12 col-md-10">Do not allow this package to be gifted to another customer.</div>
                              <div data-v-67562c67="" class="col-12 col-md-2 text-center"><label data-v-67562c67="" class="switch d-flex align-self-center mb-0 mt-3 mt-md-0 float-md-right"><input data-v-67562c67="" type="checkbox"> <span data-v-67562c67="" class="slider"></span></label></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="upselling" role="tabpanel" aria-labelledby="upselling-tab" class="tab-pane p-0">
                        <div>
                          <div class="card border-0">
                            <div class="card-body">
                              <div class="text-center"><i class="fal fa-box-full fa-3x mb-3"></i>
                                <p class="pt-2">Upsell products to your customers during the checkout flow.</p>
                                <div class="row justify-content-center text-left">
                                  <div class="col-lg-10">
                                    <div class="card mt-3">
                                      <div class="card-body row align-items-center">
                                        <div class="col-lg-10">
                                          <p class="font-weight-bold mb-0">Additional Product</p>
                                          <p class="mb-0">Give customers the opportunity to add products to their basket during the checkout flow.</p>
                                        </div>
                                        <div class="col-lg-2 text-center text-lg-right mt-3 mt-lg-0"><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-plus-circle mr-2"></i> Add
                                          </a></div>
                                      </div>
                                    </div>
                                    <div class="card mt-3">
                                      <div class="card-body row align-items-center">
                                        <div class="col-lg-10">
                                          <p class="font-weight-bold mb-0">Increase Quantity</p>
                                          <p class="mb-0">Customers can increase the quantity of the package during the checkout flow through a quantity upsell.</p>
                                        </div>
                                        <div class="col-lg-2 text-center text-lg-right mt-3 mt-lg-0"><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-plus-circle mr-2"></i> Add
                                          </a></div>
                                      </div>
                                    </div>
                                    <div class="card mt-3">
                                      <div class="card-body row align-items-center">
                                        <div class="col-lg-10">
                                          <p class="font-weight-bold mb-0">Alternative Product</p>
                                          <p class="mb-0">Alternative upsells give customers the option of switching to a different package if they wish.</p>
                                        </div>
                                        <div class="col-lg-2 text-center text-lg-right mt-3 mt-lg-0"><a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-plus-circle mr-2"></i> Add
                                          </a></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="webhook-data" role="tabpanel" aria-labelledby="webhook-data" class="tab-pane">
                        <div class="row">
                          <div class="col col-md-6">
                            <div class="form-group">
                              <div class="clearfix">
                                <div class="float-left"><label>Custom Data</label></div>
                                <div class="float-right"><i data-toggle="tooltip" title="" class="fa fa-question-circle" data-original-title="Assign custom data to this package that will be included within webhooks. Custom data can be up to 32 characters."></i> <!----></div>
                              </div>
                              <div class="input-group mb-2"><input type="text" placeholder="Enter custom data for this package." maxlength="32" class="form-control"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div>
                <div class="row-mt">
                  <div class="card">
                    <div class="card-body text-center"><i class="fal fa-gift fa-3x mb-3"></i>
                      <p class="py-2">Configure what your customers should receive upon purchasing this package.</p> <a href="javascript:void(0);" class="btn btn-gray-300 mr-2 mb-2"><i class="fa fa-plus-circle mr-2"></i> FiveM Asset
                      </a><a href="javascript:void(0);" class="btn btn-gray-300 mr-2 mb-2"><i class="fa fa-plus-circle mr-2"></i> Game Server Commands
                      </a><a href="javascript:void(0);" class="btn btn-gray-300 mr-2 mb-2"><i class="fa fa-plus-circle mr-2"></i> Discord Actions
                      </a><a href="javascript:void(0);" class="btn btn-gray-300 mr-2 mb-2"><i class="fa fa-plus-circle mr-2"></i> File Download
                      </a><a href="javascript:void(0);" class="btn btn-gray-300 mr-2 mb-2"><i class="fa fa-plus-circle mr-2"></i> License Key
                      </a><a href="javascript:void(0);" class="btn btn-gray-300 mr-2 mb-2"><i class="fa fa-plus-circle mr-2"></i> Gift Card
                      </a>
                    </div> <!---->
                  </div>
                </div>
              </div>
            </div> <!---->
          </div>
          <div class="row-mt"><button type="submit" class="btn btn-primary">Create</button></div>
        </form>
      </div>

    </div>
  </main>
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/storeify/dashboard/dashp2.php';
  ?>