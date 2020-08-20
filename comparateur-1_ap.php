<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Perf'</title>
    <!-- APPEL BOOTS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- APPEL CUSTOM -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom_ap.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutters">
            <!--DESKTOP MENU-->
            <?php include 'includes/desktop-menu.html'; ?>
            <!--FIN DESKTOP MENU-->
            <!--MOBILE MENU-->
            <?php include 'includes/mobile-menu.html'; ?>
            <!--FIN MOBILE MENU-->
            <!-- FIXED MOBILE MENU -->
            <?php include 'includes/fixed-mobile-menu.html'; ?>
            <!-- FIN FIXED MOBILE MENU -->
            <main class="col-12 col-6 col-xl-8 pl-xl-3">
            <!--CONTENT-->
                <!-- DEBUT PAGE -->
                    <!-- BTN ESPACE PREVENTION -->
                    <div class="row d-none d-xl-block">
                      <div class="offset-8 col">
                        <button class="espace-prevention ff-fredoka text-uppercase p-3">
                          <a href="#">espace prévention écoles et entreprises</a>
                        </button>
                      </div>
                    </div>
                    <!-- FIL D'ARIANE -->
                    <div class="row d-none d-xl-block">
                      <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-smeno">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item" aria-current="page">Nos Mutuelles</li>
                            <li class="breadcrumb-item active" aria-current="page">Comparateurs</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <!-- COMPARATEUR -->
                    <div class="row">
                        <div class="col-12 no-padding-lr">
                          <!-- Nav tabs -->
                              <ul class="nav nav-tabs nav-pills nav-fill">
                                <li class="nav-item">
                                  <a class="nav-link active" data-toggle="tab" href="#mutm">Mut'M</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#mutl">Mut'L</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#mutxl">Mut'XL</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#perf">La Perf'</a>
                                </li>
                              </ul>

                              <!-- Tab pane -->
                              <div class="tab-content">
                                <!-- MUT M -->
                                <div id="mutm" class="container tab-pane active"><br>
                                  <div class="col-12 p-lg-5">
                                    <h1 class="lightblue text-center text-lg-left">La Mut'M</h1>
                                    <h3 class="lightblue text-center text-lg-left">- L'essentiel -</h3>
                                    <p class="pt-3 pb-3 text-center text-lg-left">A partir de <strong>12,50€ / mois</strong></p>
                                    <ul class="list-check">
                                      <li class="check"><strong>Téléconsultation</strong></li>
                                      <li class="check">Remboursement des <strong>soins les + courants</strong></li>
                                      <li class="check">Prise en charge de <strong>l’hospitalisation</strong></li>
                                      <li class="check"><strong>Pas d’avance d’argent</strong> grâce au <strong>tiers payant gratuit</strong></li>
                                    </ul>
                                  </div>
                                  <div class="row d-none d-lg-block">
                                    <div class="col-lg-12">
                                        <button class="w-100 p-3 mt-3 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">Adhérer maintenant en ligne</a></button>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-6 d-none d-lg-block">
                                        <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase green-bg white btn-decouvrir"><a href="#">Faire une demande de devis</a></button>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase green-bg white btn-decouvrir"><a href="#">Consulter le détail de l'offre</a></button>
                                    </div>
                                  </div>
                                </div>
                                <!--  FIN MUT M -->
                                <!-- MUT L -->
                                <div id="mutl" class="container tab-pane fade"><br>
                                  <div class="col-12 p-lg-5">
                                    <h1 class="lightblue text-center text-lg-left">La Mut'l</h1>
                                    <h3 class="lightblue text-center text-lg-left">- L'équilibré -</h3>
                                    <p class="pt-3 pb-3 text-center text-lg-left">A partir de <strong>25€ / mois</strong></p>
                                    <ul class="list-check">
                                      <li class="check"><strong>190€ de forfait / an </strong>à dépenser en : contraception, médecine douce, sport, nutrition, protection hygiénique,... </li>
                                      <li class="check">Prise en charge des séances de <strong>kiné, d’orthophonistes et de l’orthopédie</strong></li>
                                      <li class="check">Remboursement des frais <strong>optiques et dentaires</strong></li>
                                      <li class="check"><strong>Téléconsultation</strong></li>
                                      <li class="check">Remboursement des <strong>soins les + courants</strong></li>
                                      <li class="check">Prise en charge de <strong>l’hospitalisation</strong></li>
                                      <li class="check">Possibilité d’ajouter des <strong>renforts optique/dentaire</strong> (à partir de 6€/mois) et (à partir de 3€/mois)</li>
                                    </ul>
                                  </div>
                                  <div class="row d-none d-lg-block">
                                    <div class="col-lg-12">
                                        <button class="w-100 p-3 mt-3 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">Adhérer maintenant en ligne</a></button>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-6 d-none d-lg-block">
                                        <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase green-bg white btn-decouvrir"><a href="#">Faire une demande de devis</a></button>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase green-bg white btn-decouvrir"><a href="#">Consulter le détail de l'offre</a></button>
                                    </div>
                                  </div>
                                </div>
                                <!--  FIN MUT L -->
                                <!--  MUT XL -->
                                <div id="mutxl" class="container tab-pane fade"><br>
                                  <div class="col-12 p-lg-5">
                                    <h1 class="lightblue text-center text-lg-left">La Mut'xl</h1>
                                    <h3 class="lightblue text-center text-lg-left">- la confortable -</h3>
                                    <p class="pt-3 pb-3 text-center text-lg-left">À partir de <strong>37,50€ / mois</strong></p>
                                    <ul class="list-check">
                                      <li class="check"><strong>Dépassement d’honoraires</strong></li>
                                      <li class="check"><strong>290€ de forfait/an</strong> à dépenser en : contraception, médecine douce, sport, nutrition, protection hygiénique,... </li>
                                      <li class="check">Prise en charge des séances de <strong>kiné, d’orthophonistes et de l’orthopédies</strong></li>
                                      <li class="check">Remboursement des <strong>frais optiques et dentaires</strong></li>
                                      <li class="check"><strong>Téléconsultation</strong></li>
                                      <li class="check">Remboursement des <strong>soins les + courants</strong></li>
                                      <li class="check">Possibilité d’ajouter des <strong>renforts optique/dentaire</strong> (à partir de 6€/mois) et <strong>hospitalisation</strong> (à partir de 3€/mois)</li>
                                      <li class="check"><strong>Pas d’avance d’argent</strong> grâce au <strong>tiers payant gratuit</strong></li>
                                    </ul>
                                  </div>
                                  <div class="row d-none d-lg-block">
                                    <div class="col-lg-12">
                                        <button class="w-100 p-3 mt-3 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">Adhérer maintenant en ligne</a></button>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-6 d-none d-lg-block">
                                        <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase green-bg white btn-decouvrir"><a href="#">Faire une demande de devis</a></button>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase green-bg white btn-decouvrir"><a href="#">Consulter le détail de l'offre</a></button>
                                    </div>
                                  </div>
                                </div>
                                <!--   FIN MUT XL -->
                                <!-- PERF -->
                                <div id="perf" class="container tab-pane fade"><br>
                                  <div class="col-12 p-lg-5">
                                    <h1 class="lightblue text-center text-lg-left">La Perf</h1>
                                    <h3 class="lightblue text-center text-lg-left">- garantie hospitalisation -</h3>
                                    <p class="pt-3 pb-3 text-center text-lg-left">À partir de <strong>5,50€ / mois</strong></p>
                                    <ul class="list-check">
                                      <li class="check">Prise en charge de la <strong>contraception d’urgence</strong></li>
                                      <li class="check">Prise en charge de l’<strong>hospitalisation</strong></li>
                                      <li class="check">Possibilité d’ajouter un <strong>renfort Confort Hospit’</strong> à 3€/mois</li>
                                    </ul>
                                  </div>
                                  <div class="row d-none d-lg-block">
                                    <div class="col-lg-12">
                                        <button class="w-100 p-3 mt-3 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">Adhérer maintenant en ligne</a></button>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-6 d-none d-lg-block">
                                        <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase green-bg white btn-decouvrir"><a href="#">Faire une demande de devis</a></button>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase green-bg white btn-decouvrir"><a href="#">Consulter le détail de l'offre</a></button>
                                    </div>
                                  </div>
                                </div>
                                <!-- FIN PERF -->
                              </div>
                            </div>
                        </div>
                          <!-- FIN COMPARATEUR -->
                          <!-- FOOTER -->
                          <?php include 'includes/footer.html'; ?>
                          <!-- FIN FOOTER -->
                          <!--FIN CONTENT-->
                    </div>
                    </main>

          </div>


        </div>
    </div>

    <!-- BOTTOM BAR COMPARATEUR ET MUTUELLE -->
    <?php include 'includes/bottom-bar-devis_ap.html'; ?>
    <!-- FIN BOTTOM BAR -->

    <!-- TCHAT BOX -->
    <?php include 'includes/tchat-box.html'; ?>
    <!-- FIN TCHAT BOX -->


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
</body>
</html>
