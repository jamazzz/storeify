<!DOCTYPE html>
<html lang="en" class="h-100 hrzljutf idc0_350">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="/favicon.png">
  <title>Project Type</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="/css/app.css?id=a9978fd18e4bebcdba4d">
  <link rel="stylesheet" href="assets/css/select.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/45266fece3.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="col">

    <header class="page-title">
      <div class="row no-gutters align-items-center">
        <div class="col-12">
          <h1 class="my-0 mb-2">Your Project</h1>
          <span>Tell us a few details about your business, so we can create your project</span>
        </div>
      </div>
    </header>

    <div class="row">
      <div class="col-12">
        <form action="newwebsite.php" method="post">
          <div class="card">
            <div class="card-body p-5">
              <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="form-group mb-0">
                    <label for="project_name">What would you like to name your project?</label>
                    <input id="project_name" type="text" class="form-control input-lg" name="project_name" placeholder="Enter the name of your new project" value="" maxlength="50">
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12">
                  <div class="form-group mb-0">
                    <label class="d-flex text-sm text-gray pt-1 pb-0 mb-0" for="gdpr-clause">
                      <input type="checkbox" class="form-check-inline" id="gdpr-clause" value="1" name="gdpr_clause" required="">

                      <span>
                        I have read and accepted the <a href="pages/samples/error-404.html">Acceptable Use Policy</a>, <a href="pages/samples/error-404.html">Privacy Policy</a> &amp; <a href="pages/samples/error-404.html">EU Standard Contractual Clauses.</a>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 text-center text-md-left"></div>
                <div class="col-md-6 text-center text-md-right mt-4 mt-md-0">
                  <a href="pages/samples/error-404.html" class="btn btn-quad">Back</a>
                  <button type="submit" class="btn btn-primary">Continue</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>