<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
    <!-- APPEL BOOTS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- APPEL FONT AWESOME -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
            <main class="col-12 col-6 col-xl-8">
            <!--CONTENT-->
                <!-- DEBUT PAGE -->
                    <!-- BTN ESPACE PREVENTION -->
                    <div class="row d-none d-xl-block">
                      <div class="offset-7 col-5 no-padding-lr">
                        <button class="espace-prevention ff-fredoka text-uppercase p-3 w-100">
                          <a href="#">espace prévention écoles et entreprises</a>
                        </button>
                      </div>
                    </div>

                    <!-- TITRE DESKTOP -->
                    <div class="row orange-bg p-5 align-items-center header-orange">
                      <div class="col-lg-8">
                        <h1 class="white w-75 letter-spacing text-uppercase">faq</h1>
                        <p>En quoi pouvons-nous vous aider ?</p>
                        <div class="dropdown">
                        <button class="btn dropdown-toggle w-75 blue-bg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Catégories
                        </button>
                        <div class="dropdown-menu ff-fredoka w-100" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item text-center blue border-bottom" href="#">La mutuelle</a>
                          <a class="dropdown-item text-center blue border-bottom" href="#">Les remboursements</a>
                          <a class="dropdown-item text-center blue border-bottom" href="#">L'assurance auto</a>
                          <a class="dropdown-item text-center blue border-bottom" href="#">L'assurance habitation</a>
                          <a class="dropdown-item text-center blue border-bottom" href="#">Le pack assurance</a>
                          <a class="dropdown-item text-center blue border-bottom" href="#">L'assurance santé à l'étranger</a>
                          <a class="dropdown-item text-center blue border-bottom" href="#">L'assurance ski</a>
                          <a class="dropdown-item text-center blue border-bottom" href="#">Espace personnel</a>
                          <a class="dropdown-item text-center blue border-bottom" href="#">Divers</a>
                        </div>
                        </div>
                      </div>
                    </div>

                    <!-- FIN TITRE DESKTOP -->

                    <!-- FIL D'ARIANE -->
                    <div class="row d-none d-xl-block pl-4 pt-4">
                      <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-smeno">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">faq</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <!-- CONTENU-->
                        <!--  TITRE MOBILE-->
                        <div class="row d-block d-lg-none">
                            <div class="col-12 p-3 text-center">
                                <h1 class="text-uppercase blue">faq</h1>
                                <p>En quoi pouvons-nous vous aider ?</p>
                                <div class="dropdown">
                                <button class="btn btn-outline-smeno dropdown-toggle w-100 strong ff-fredoka" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Catégories
                                </button>
                                <div class="dropdown-menu ff-fredoka w-100" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item text-center blue border-bottom" href="#">La mutuelle</a>
                                  <a class="dropdown-item text-center blue border-bottom" href="#">Les remboursements</a>
                                  <a class="dropdown-item text-center blue border-bottom" href="#">L'assurance auto</a>
                                  <a class="dropdown-item text-center blue border-bottom" href="#">L'assurance habitation</a>
                                  <a class="dropdown-item text-center blue border-bottom" href="#">Le pack assurance</a>
                                  <a class="dropdown-item text-center blue border-bottom" href="#">L'assurance santé à l'étranger</a>
                                  <a class="dropdown-item text-center blue border-bottom" href="#">L'assurance ski</a>
                                  <a class="dropdown-item text-center blue border-bottom" href="#">Espace personnel</a>
                                  <a class="dropdown-item text-center blue border-bottom" href="#">Divers</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- FIN TITRE MOBILE -->

                    <div class="container pt-lg-3 pl-lg-5 pb-lg-3">
                        <!-- OU TROUVER NUMEROS SMENO -->
                        <div class="row">
                          <div class="col-10">
                                <h4 class="blue">Où trouver mon numéro adhérent SMENO ?</h4>
                          </div>
                          <div class="col-2 text-right" id="arrow">
                                <a href="#numero-adherent" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                          </div>
                          <div id="numero-adherent" class="col-12 collapse">
                            <p>Votre numéro d’adhérent SMENO  est composé de 9 chiffres. Il se trouve :
                              <ul>
                                <li>sur vos décomptes santé;</li>
                                <li>sur votre carte Tiers Payant si vous avez adhéré à une mutuelle SMENO.</li>
                              </ul>
                            </p>
                            <p>Vous pouvez le demander soit par téléphone au 09 72 67 60 00 (appel non surtaxé) du lundi au vendredi de 9h à 18h sans interruption, en agence, sur votre espace personnel disponible sur le site smeno.com ou via l'application mobile Smeno.
                            </p>
                          </div>
                        </div>
                      <!-- OU TROUVER NUMEROS SMENO -->
                      <hr>
                      <!-- TELECHARGER ATTESTATION -->
                      <div class="row">
                        <div class="col-10">
                              <h4 class="blue">Comment télécharger mon attestation Responsabilité civile sur mon Espace personnel ?</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#telecharger-attestation" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="telecharger-attestation" class="col-12 collapse">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <!-- FIN TELECHARGER ATTESTATION -->
                      </div>
                      <hr>
                      <!-- OBTENIR ATTESTATION -->
                      <div class="row">
                        <div class="col-10">
                              <h4 class="blue">Comment obtenir une attestation dans l’espace personnel ?</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#obtenir-attestation" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="obtenir-attestation" class="col-12 collapse">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <!-- FIN OBTENIR ATTESTATION -->
                      </div>
                      <hr>
                      <!-- RESILIATION MUTUELLE -->
                      <div class="row">
                        <div class="col-10">
                              <h4 class="blue">Résiliation mutuelle étudiant, quand le contrat de mutuelle étudiant prend-il fin ?</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#resiliation" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="resiliation" class="col-12 collapse">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <!-- FIN RESILIATION MUTUELLE -->
                      </div>
                      <hr>
                      <!-- RESILIATION MUTUELLE -->
                      <div class="row">
                        <div class="col-10">
                              <h4 class="blue">Où envoyer mes demandes, réclamations, radiation ?</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#demande" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="demande" class="col-12 collapse">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <!-- FIN RESILIATION MUTUELLE -->
                      </div>
                      <hr>
                      <!-- INSCRIPTION DECOMPTE -->
                      <div class="row">
                        <div class="col-10">
                              <h4 class="blue">Comment s’inscrire aux décomptes électroniques ?</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#decompte" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="decompte" class="col-12 collapse">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <!-- FIN INSCRIPTION DECOMPTE -->
                      </div>
                      <hr>
                      <!-- SMENO TIERS PAYANT -->
                      <div class="row">
                        <div class="col-10">
                              <h4 class="blue">Le SMENO effectue-t-elle le tiers payant ?</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#tierspayant" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="tierspayant" class="col-12 collapse">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <!-- FIN SMENO TIERS PAYANT -->
                      </div>
                      <hr>
                    </div>

                    <!-- FIN CONTENU -->
                          <!-- FOOTER -->
                          <?php include 'includes/footer.html'; ?>
                          <!-- FIN FOOTER -->
                    <!--FIN CONTENT-->

                      </div>
                    </div>
                  </main>
                </div>
            </div>
        </div>

    <!-- TCHAT BOX -->
    <!-- BOTTOM BAR COMPARATEUR ET MUTUELLE -->
    <?php include 'includes/bottom-bar-contact_ap.html'; ?>
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
    <script src="js/arrow.js"></script>
    <script src="js/tooltip.js"></script>
</body>
</html>
