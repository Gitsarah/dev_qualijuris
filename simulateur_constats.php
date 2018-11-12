<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Simluateur Qualijuris</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="cyan-skin">
    <!--Main Navigation-->
    <header>
        <nav class="navbar sticky-top navbar-dark ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../img/logoqualijuris@1X.png" height="50" alt="qualijuris performance efficacité confiance">
                </a>
                <h1 class="navbar-text white-text h1-responsive">
                    Simulateur Qualijuris
                </h1>
                
            </div>
        </nav>
    <!--intro-->
    <?php include("includes/intro_simulateur.php")?>
    <!--/intro-->
    </header>
    <!--Main Navigation-->
    <!--Main layout-->
    <main class="mt-5 pb-5">
        <section class="container">
            <h2 class="h2 h2-responsive text-center mb-5">Estimation du coût des états des lieux</h2>
            <form id="simulateur" class="mb-5" novalidate>
                <div class="form-row">
                  <div class="col-sm">
                    <label for="codepostal">Lieu du constat</label>
                      <a class="ml-1"><i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" title="Veuillez indiquer le code postal pour le lieu du constat"></i></a>
                    <input type="text" class="form-control" id="codepostal" placeholder="code postal" required maxlength=5 pattern="[0-9]">
                      <span class="error" aria-live="polite"></span>
                  </div>

                 <div class="col-sm">
                     <label for="duree">Durée du constat en minutes</label>
                     <a class="ml-1"><i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" title="Veuillez indiquer des minutes Ex si 2h00 indiqué 120mn"></i></a>
                     <input class="form-control" type="number" min="60" step="30" value="60" id="duree">
                </div>
                </div>
              <fieldset class="form-group">
                <legend>Urgent<a class="ml-1"><i class="fa fa-info-circle" aria-hidden="true" data-html="true" data-toggle="tooltip" title="Si oui le constat doit être réalisé sous 48 heures. <br />Si non le constat à plus de 48 heures"></i></a></legend>
                  
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="urgentRadio" id="oui" value="oui" required>
                    <label class="form-check-label" for="oui">oui</label>
                </div>
                <div class="form-check form-check-inline">
                
                    <input type="radio" class="form-check-input" name="urgentRadio" id="non" value="non" required>
                    <label class="form-check-label" for="non">non</label>
                </div>

              </fieldset>

              <button type="submit" class="btn btn-primary">Calculez</button>
                <div class="status"></div>
            </form>
<p><a href="#" data-toggle="tooltip" title="Default tooltip">you probably</a>
haven't heard of them. Photo booth beard raw denim letterpress vegan messenger</p>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </section>
    </main>
    <!--Main layout-->
    
    <!--Footer-->
   <?php include("includes/footerSimulateur.php")?>
    <!--Footer-->
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Simulator JQuery -->
    <script type="text/javascript" src="js/simultor.js"></script>
    <script> 
        // Tooltips Initialization
    $('[data-toggle="tooltip"]').tooltip()
    </script>

</body>

</html>