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
        <div class="container">
            <section id="best-features" class="text-center py-4">
            
            <div class="row">
                <div class="col-md">
                    <div class="card py-2 px-2 mb-4">
                        <div class="card-body">
                            <a class="waves-light hoverable" href="simulateur_constats.php" role="button" aria-pressed="true"><i class="fa fa-camera fa-4x red-text" aria-hidden="true"></i></a>
                            <h3 class="pt-3">Constats</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card py-2 px-2 mb-4">
                        <div class="card-body">
                            <a class="waves-light hoverable" href="#" role="button" aria-pressed="true"><i class="fa fa-euro fa-4x red-text" aria-hidden="true"></i></a>
                            <h3 class="pt-3">Impayés</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card py-2 px-2 mb-4">
                        <div class="card-body">
                            <a class="waves-light hoverable" href="#" role="button" aria-pressed="true"><i class="fa fa-key fa-4x red-text" aria-hidden="true"></i></a>
                            <h3 class="pt-3">loyers impayés</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>    
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
</body>

</html>
