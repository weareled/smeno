<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assurance Responsabilité Civile</title>
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
                    <div class="row red-bg p-5 align-items-center header-assurance">
                      <div class="col-lg-8">
                        <h1 class="white w-75 letter-spacing">Plan santé international</h1>
                        <h3 class="white">Étudiant - Études & stages</h3>
                      </div>
                      <div class="offset-lg-1 col-lg-3 white-bg text-center p-3 pastille">
                        <span class="red strong ff-fredoka a-partir">Pour seulement</span><br>
                        <span class="red strong ff-fredoka prix ">28€</span><br>
                        <span class="red strong ff-fredoka mois">par mois</span>
                      </div>
                    </div>

                    <!-- FIN TITRE DESKTOP -->

                    <!-- FIL D'ARIANE -->
                    <div class="row d-none d-xl-block pl-4 pt-4">
                      <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-smeno">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item" aria-current="page">Assurances</li>
                            <li class="breadcrumb-item" aria-current="page"> Nos Assurances</li>
                            <li class="breadcrumb-item" aria-current="page"> Assurances séjour à l'étranger</li>
                            <li class="breadcrumb-item active" aria-current="page">Plan santé international</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <!-- CONTENU-->
                        <!--  TITRE MOBILE-->
                        <div class="row d-block d-lg-none">
                            <div class="col-12 red-bg white p-3 mb-5 text-center titre-assurance">
                                <h1 color="text-center">Plan santé international</h1>
                                <h3>- Étudiant - Études & stages -</h3>
                                <p class="white">Pour seulement <strong>28€ / mois</strong></p>
                            </div>
                        </div>
                        <!-- FIN TITRE MOBILE -->
                    <hr>
                    <div class="container pt-lg-3 pl-lg-5 pb-lg-3">
                        <!-- FRAIS DE SANTE -->
                        <div class="row">
                          <div class="col-10">
                                <h4 class="blue">Frais de santé sans franchise</h4>
                          </div>
                          <div class="col-2 text-right" id="arrow">
                                <a href="#fraisdesante" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                          </div>
                          <div id="fraisdesante" class="col-12 collapse">
                            <table class="table-responsive">
                              <tbody>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">En cas d'hospitalisation : prise en charge à 100% des frais réels</td>
                                  <td class="col-2 strong text-center">illimité</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Hors hospitalisation : prise en charge à 100% des frais réels</td>
                                  <td class="col-2 strong text-center">illimité</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Maximum soins dentaires d’urgence</td>
                                  <td class="col-2 strong text-center">300€</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Maximum soins optiques Choix du remboursement par la Sécurité sociale française : urgence</td>
                                  <td class="col-2 strong text-center">250€</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Maximum frais médicaux maternité </td>
                                  <td class="col-2 strong text-center">8000€</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      <!-- FIN FRAIS DE SANTE -->
                      <hr>
                      <!-- ASSISTANCE RAPATRIEMENT -->
                      <div class="row">
                        <div class="col-10">
                              <h4 class="blue">Assistance rapatriement</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#assistance" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="assistance" class="col-12 collapse">
                          <table class="table-responsive">
                            <tbody>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- FIN ASSISTANCE RAPATRIEMENT -->
                      <hr>
                      <!-- RESPONSABILITE CIVILE -->
                      <div class="row">
                        <div class="col-10">
                              <h4 class="blue">Responsabilité civile</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#responsabilite" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="responsabilite" class="col-12 collapse">
                          <table class="table-responsive">
                            <tbody>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Dommages corporels USA et Canada (par sinistre et par année)</td>
                                <td class="col-2 strong text-right">3000€</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Intoxication alimentaire (par sinistre et par année)</td>
                                <td class="col-2 strong text-right">1500€</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--FIN RESPONSABILITE -->
                      <hr>
                      <!-- INDIVIDUELLE ACCIDENT -->
                      <div class="row">
                        <div class="col-10">
                              <h4 class="blue">Individuelle accident</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#individuelle" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="individuelle" class="col-12 collapse">
                          <table class="table-responsive">
                            <tbody>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--FIN INDIVIDUELLE ACCIDENT  -->
                      <hr>
                      <!-- BAGAGES -->
                      <div class="row">
                        <div class="col-10">
                              <h4 class="blue">Bagages</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#bagages" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="bagages" class="col-12 collapse">
                          <table class="table-responsive">
                            <tbody>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Lorem Ipsum Dolor  Sit Amet</td>
                                <td class="col-3 strong text-right">xxx€/jour</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--FIN BAGAGES  -->
                    </div>
                    <hr>
                      <!-- TELECHARGEMENT -->
                    <div class="container pt-3 pl-lg-5">
                      <div class="row">
                        <div class="col-10 col-lg-7">
                              <p><a href="#" class="telechargement">télécharger le tableau complet des remboursements</a></p>
                        </div>
                        <div class="col-2 col-lg-5">
                              <a href="#"><img src="img/download.png"/></a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-10 col-lg-7">
                              <p><a href="#" class="telechargement">télécharger le document d’information sur produit (IPID)</a></p>
                        </div>
                        <div class="col-2 col-lg-5">
                              <a href="#"><img src="img/download.png"/></a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-10 col-lg-7">
                              <p><a href="#" class="telechargement">télécharger les conditions générales de l’assurance Plan Santé International étudiant</a></p>
                        </div>
                        <div class="col-2 col-lg-5">
                              <a href="#"><img src="img/download.png"/></a>
                        </div>
                      </div>
                    </div>
                    <!-- FIN TELECHARGEMENT -->
                    <!-- CALL TO ACTION  -->
                    <div class="row pl-5">
                      <div class="col-lg-6 d-none d-lg-block">
                          <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase green-bg white btn-decouvrir"><a href="#">déclarer un sinistre</a></button>
                      </div>
                      <div class="col-12 col-lg-6 d-none d-lg-block">
                          <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">Adhérer en ligne maintenant</a></button>
                      </div>
                    </div>
                    <!-- FIN CALL TO ACTION -->
                    <!--SLIDER MIDDLE PAGE-->
                    <div class="row red-bg py-60">
                        <div class="col-12">
                            <div class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                          </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-xl-6 text-center">
                                                <img src="img/assurance-smeno.png" alt="slide content"
                                                    class="img-fluid w-75">
                                            </div>
                                            <div class="col-xl-6 my-auto">
                                                <div class="p-5 text-center text-xl-left">
                                                    <h2 class="white">L'assurance by SMENO c’est également...</h2>
                                                    <p class="white">Une attestation délivrée immédiatement par mail dès ta soucription ! Plus rapide c’est pas possible.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-xl-6 text-center">
                                                <img src="img/assurance-smeno.png" alt="slide content"
                                                    class="img-fluid w-75">
                                            </div>
                                            <div class="col-xl-6 my-auto">
                                                <div class="p-5 text-center text-xl-left">
                                                    <h2 class="white">L'assurance by SMENO c’est également...</h2>
                                                    <p class="white">Une attestation délivrée immédiatement par mail dès ta soucription ! Plus rapide c’est pas possible.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-xl-6 text-center">
                                                <img src="img/assurance-smeno.png" alt="slide content"
                                                    class="img-fluid w-75">
                                            </div>
                                            <div class="col-xl-6 my-auto">
                                                <div class="p-5 text-center text-xl-left">
                                                    <h2 class="white">L'assurance by SMENO c’est également...</h2>
                                                    <p class="white">Une attestation délivrée immédiatement par mail dès ta soucription ! Plus rapide c’est pas possible.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FIN SLIDER MIDDLE PAGE-->

                    <!-- FIN CONTENU -->
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
    <?php include 'includes/bottom-bar-sinistre_ap.html'; ?>
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
