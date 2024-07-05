<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="/favicon.png">
  <title>Storeify</title>
  <link rel="shortcut icon" href="/storeify/assets/images/logo.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="/css/app.css?id=a9978fd18e4bebcdba4d">
  <link rel="stylesheet" href="../assets/css/default.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/45266fece3.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="col">

    <header class="page-title">
      <div class="row no-gutters align-items-center">
        <div class="col-12">
          <h1 class="my-0 mb-2">O seu Projeto</h1>
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
                    <label for="project_name">Como gostaria de nomear o seu projeto?</label>
                    <input id="project_name" type="text" class="form-control input-lg" name="project_name" autocomplete="off" placeholder="Insira o nome do seu novo projeto" value="" maxlength="50">
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12">
                  <div class="form-group mb-0">
                    <label class="d-flex text-sm text-gray pt-1 pb-0 mb-0" for="gdpr-clause">
                      <input type="checkbox" class="form-check-inline" id="gdpr-clause" value="1" name="gdpr_clause" required="">

                      <span>
                        Li e aceito os <a href="/storeify/terms.php">Termos de Serviço</a>, a <a href="/storeify/privacy.php">Política de Privacidade</a> e as <a href="https://eur-lex.europa.eu/legal-content/EN/TXT/HTML/?uri=CELEX:32021D0915&">Cláusulas Contratuais Padrão da UE.</a>
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
                  <a href="/storeify/404.php" class="btn btn-quad">Voltar</a>
                  <button type="submit" class="btn btn-primary">Continuar</button>
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