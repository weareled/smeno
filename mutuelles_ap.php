<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mutuelles</title>
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
                    <!-- HEADER -->
                    <div class="row d-flex justify-content-center align-items-end text-center header-mutuelle">

                      <!-- BTN ESPACE PREVENTION -->
                          <button class="espace-prevention ff-fredoka text-uppercase p-3 espace-prevention-absolute">
                            <a href="#">espace prévention écoles et entreprises</a>
                          </button>
                      <!-- FIN BTN ESPACE PREVENTION -->

                        <div class="col-12 col-lg-4 white margin-title pt-5">
                            <div class="row justify-content-center">
                              <div class="col-10 col-lg-12">
                                <h1 class="mt-10">Mutuelles étudiants et jeunes actifs</h1>
                              </div>
                              <div class="col-lg-12">
                                <p class="white">Etudiant ou jeune actif, la santé n’est pas toujours une priorité car les mutuelles sont parfois trop chères et encore trop souvent obscures. Comment s’y retrouver ? La Smeno te propose des solutions adaptées et accessibles pour trouver la formule dont tu as besoin.</p>
                                <p><a href="#" class="btn-decouvrir-site">Lire la suite</a></p>
                              </div>
                            </div>

                        </div>

                        <!-- SCROLL -->
                        <div class="col-12 pb-5">
                        <div class="scroll">
                            <a class="js-scrollTo" href="#scroll"><img src="img/scroll.png"/></a>
                        </div>
                        </div>

                    </div>
                    <!-- FIN HEADER -->

                    <!-- FIL D'ARIANE -->
                    <div class="row d-none d-xl-block">
                      <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-smeno">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="#">Mutuelles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nos mutuelles</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <!-- CONTENU -->
                    <!-- 4 ETAPES -->
                    <div class="row pt-5" id="scroll ">
                        <div class="col-12" id="etapes">
                            <img src="img/besoins-optique.png" class="img-fluid" alt="">
                            <p>En seulement 4 étapes, trouve rapidement LA mutuelle qui te correspond.</p>
                            <h2 class="blue">1 - As-tu des besoins spécifiques en optique et ou dentaire ?</h2>

                            <button>Oui</button>
                            <button>Non</button>

                        </div>
                    </div>
                    <!-- FIN 4 ETAPES -->
                    <!-- FORMULES DESKTOP -->
                    <div class="row align-items-center no-gutters">
                      <div class="col-lg-6">
                          <img src="img/mutm-desktop.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="col-lg-6 text-center p-5">
                          <h2 class="blue">Mut’ M</h2>
                          <h3 class="blue">- l’essentielle -</h3>
                          <p>Pour des consultations chez ton généraliste, des frais en pharmacie, un examen urgent de radiologie, il n’est plus nécessaire de payer cher pour être bien remboursé de ces frais de première nécessité !
                          </p>
                          <p><strong>A partir de 12,50€/mois</strong>, tu es couvert pour les frais courants de santé.
                          </p>
                          <button class="w-50 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">découvrir l'offre</a></button>
                      </div>
                    </div>

                    <div class="row align-items-center no-gutters">
                      <div class="col-lg-6 text-center p-5">
                          <h2 class="blue">Mut’ L</h2>
                          <h3 class="blue">- l’équilibrée -</h3>
                          <p>Un besoin particulier pour tes lunettes ou tes lentilles ? Une dépense dentaire à venir ou à prévoir ? Ces frais peuvent vite être élevés.
                          </p>
                          <p><strong>L’équilibrée</strong> est la solution adaptée.
                          Le prix aussi est équilibré, avec des <strong>mensualités</strong> à partir de <strong>25 euros</strong>.
                         </p>
                          <button class="w-50 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">découvrir l'offre</a></button>
                      </div>
                      <div class="col-lg-6">
                          <img src="img/mutl-desktop.jpg" class="img-fluid" alt="">
                      </div>
                    </div>

                    <div class="row align-items-center no-gutters">
                      <div class="col-lg-6">
                          <img src="img/mutxl-desktop.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="col-lg-6 text-center p-5">
                          <h2 class="blue">Mut’ XL</h2>
                          <h3 class="blue">- la confortable -</h3>
                          <p>Pour une couverture optimale de tous les soins de santé et pour être bien remboursé si tu consultes des spécialistes aux tarifs élevés, choisir la Mut XL La confortable est la solution la plus efficace. A partir de <strong>37,50 €/mois</strong> pour une couverture complète.
                          </p>
                          <button class="w-50 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">découvrir l'offre</a></button>
                      </div>
                    </div>

                    <div class="row align-items-center no-gutters">
                      <div class="col-lg-6 text-center p-5">
                          <h2 class="blue">La Perf’</h2>
                          <h3 class="blue">- Garantie hospitalisation -</h3>
                          <p>Pour les consultations de spécialistes pour une opération programmée, la prise en charge d’une chambre individuelle (et même d’un lit pour un accompagnant ! ), la formule La Perf
                          prend en charge les frais d’hospitalisation pour <strong>5,50 euros</strong> par mois. Difficile de faire moins cher et pourtant l’efficacité est au rendez-vous !
                          </p>
                          <button class="w-50 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">découvrir l'offre</a></button>
                      </div>
                      <div class="col-lg-6">
                          <img src="img/perf-desktop.jpg" class="img-fluid" alt="">
                      </div>
                    </div>


                    <!-- SLIDER FORMULES MOBILE-->
                    <div class="row py-60 d-lg-none">
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
                                                <img src="img/mutm-mobile.jpg" alt="slide content"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-xl-6 my-auto">
                                                <div class="text-center text-xl-left p-1">
                                                    <h2 class="blue">Mut’ M</h2>
                                                    <h3 class="blue">- l'essentielle -</h3>
                                                    <p>Pour des consultations chez ton généraliste, des frais en pharmacie, un examen urgent de
                                                    radiologie, il n’est plus nécessaire de payer cher pour être bien remboursé de ces frais de première nécessité !
                                                    </p>
                                                    <p>A partir de 12,50€/ mois, tu es couvert pour les frais courants de santé.
                                                    </p>
                                                    <button class="w-50 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">découvrir l'offre</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-xl-6 text-center">
                                                <img src="img/mutl-mobile.jpg" alt="slide content"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-xl-6 my-auto">
                                                <div class="text-center text-xl-left p-1">
                                                    <h2 class="blue">Mut’ L</h2>
                                                    <h3 class="blue">- l'équilibrée -</h3>
                                                    <p>Un besoin particulier pour tes lunettes ou tes lentilles ? Une dépense dentaire à venir ou à prévoir ? Ces frais peuvent vite être élevés.
                                                    </p>
                                                    <p><strong>L’équilibrée</strong> est la solution adaptée.
                                                    Le prix aussi est équilibré, avec des <strong>mensualités</strong> à partir de <strong>25 euros</strong>.
                                                    </p>
                                                    <button class="w-50 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">découvrir l'offre</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-xl-6 text-center">
                                                <img src="img/mutxl-mobile.jpg" alt="slide content"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-xl-6 my-auto">
                                                <div class="text-center text-xl-left p-1">
                                                    <h2 class="blue">Mut’ XL</h2>
                                                    <h3 class="blue">- l'essentielle -</h3>
                                                    <p>Pour une couverture optimale de tous les soins de santé et pour être bien remboursé si tu consultes des spécialistes aux tarifs élevés, choisir la Mut XL La confortable est la solution la plus efficace. A partir de <strong>37,50 €/mois</strong> pour une couverture complète.
                                                    </p>
                                                    <button class="w-50 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">découvrir l'offre</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-xl-6 text-center">
                                                <img src="img/perf-mobile.jpg" alt="slide content"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-xl-6 my-auto">
                                                <div class="text-center text-xl-left p-1">
                                                    <h2 class="blue">La Perf'</h2>
                                                    <h3 class="blue">- Garantie hospitalisation -</h3>
                                                    <p>Pour les consultations de spécialistes pour une opération programmée, la prise en charge d’une chambre individuelle (et même d’un lit pour un accompagnant ! ), la formule La Perf
                                                    prend en charge les frais d’hospitalisation pour <strong>5,50 euros</strong> par mois. Difficile de faire moins cher et pourtant l’efficacité est au rendez-vous !
                                                    </p>
                                                    <button class="w-50 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">découvrir l'offre</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN SLIDER FORMULES MOBILE-->
                    <!-- CHOISIR SMENO -->
                    <div class="row text-center align-items-center">
                        <div class="col-12 col-lg-6">
                          <img src="img/choisir-smeno.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-lg-6 p-5">
                          <h2 class="blue p-4">Les bonnes raisons de choisir une  mutuelle SMENO</h2>
                          <p>Etre malade ou avoir un accident n’arrive pas qu’aux autres. La mutuelle n’est pas obligatoire mais très utiles pour les besoins de santé courants et encore plus pour les imprévus. Pour ne pas négliger ta santé, on te propose différentes formules de garanties et des renforts pour une couverture qui réponde à ton besoin tout en préserver ton budget.
                          </p>
                          <div class="d-lg-none">
                            <h3 class="blue">Smeno en chiffres, c'est...</h3>
                            <p>4 mutuelles pour répondre à des besoins spécifiques et offrant une gamme complète de remboursements
                            </p>
                            <p>1 surcomplémentaire pour  compléter la prestation mutuelle
                            </p>
                            <p>5,50€ /mois : c'est le prix de départ pour être couvert à la Smeno.
                            </p>
                          </div>

                        </div>
                    </div>
                    <!-- FIN CHOISIR SMENO -->
                    <!-- AVANTAGE SMENO -->
                    <div class="row blue-bg py-60">
                    <div class="col-12">
                        <div class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                      </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row justify-content-center">
                                        <div class="col-8 col-xl-6 text-center">
                                            <h2 class="white">Les avantages  de la SMENO c’est...</h2>
                                        </div>
                                        <div class="col-xl-6 my-auto">
                                            <div class="p-5 text-center text-xl-left">
                                              <img src="img/responsabilite.png" alt="slide content"
                                                  class="img-fluid pb-3">
                                                <h3 class="white">Responsabilité civile et téléconsultation incluses dans 3 de nos mutuelles (M, L et XL)</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <div class="col-8 col-xl-6 text-center">
                                            <h2 class="white">Les avantages  de la SMENO c’est...</h2>
                                        </div>
                                        <div class="col-xl-6 my-auto">
                                            <div class="p-5 text-center text-xl-left">
                                              <img src="img/renfort.png" alt="slide content"
                                                  class="img-fluid pb-3">
                                                <h3 class="white">Des renforts pour personnaliser la mutuelle de ton choix</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <div class="col-8 col-xl-6 text-center">
                                            <h2 class="white">Les avantages  de la SMENO c’est...</h2>
                                        </div>
                                        <div class="col-xl-6 my-auto">
                                            <div class="p-5 text-center text-xl-left">
                                              <img src="img/formules-adaptes.png" alt="slide content"
                                                  class="img-fluid pb-3">
                                                <h3 class="white">Des formules adaptées et adaptables, des renforts au choix disponibles</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <div class="col-8 col-xl-6 text-center">
                                            <h2 class="white">Les avantages  de la SMENO c’est...</h2>
                                        </div>
                                        <div class="col-xl-6 my-auto">
                                            <div class="p-5 text-center text-xl-left">
                                              <img src="img/hp/slide-content.png" alt="slide content"
                                                  class="img-fluid pb-3">
                                                <h3 class="white">Une souscription en ligne facile, rapide et immédiate</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                    <!-- FIN AVANTAGE SMENO -->
                    <!-- SURCOMPLEMENTAIRE -->
                    <div class="row no-gutters align-items-center">
                        <div class="col-12 col-lg-6 text-center">
                            <img src="img/avantage-pack-sante.jpg" class="img-fluid pb-4" alt="">
                        </div>
                        <div class="col-12 col-lg-6 text-center">
                            <h2 class="blue">Notre surcomplémentaire</h2>
                            <h3 class="blue">- Pack santé -</h3>
                            <p>Pour compléter certains remboursements non pris en charge ailleurs comme les frais de médecines douces et bien-être, le pack santé est la surcomplémentaire idéale.
                            </p>

                            <p>Le forfait de 100 euros de remboursements inclut également la téléconsultation en illimité, l’automédication et les consultations de spécialistes en médecine douce.
                            </p>

                            <p>Avec ces forfaits innovants, dès  30 euros par an tu disposes d'une couverture supplémentaire et sans surprises.
                            </p>
                            <button class="w-50 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir">découvrir l'offre</button>
                        </div>

                    </div>
                    <!-- FIN SURCOMPLEMENTAIRE -->
                  <!-- FIN CONTENU -->
            <!-- FOOTER -->
            <?php include 'includes/footer.html'; ?>
            <!-- FIN FOOTER -->
            <!--FIN CONTENT-->
            </main>
      </div>
    </div>
    <!-- BOTTOM BAR MOBILE -->
    <div class="row d-lg-none no-gutters bottom-bar">
        <div class="col-3 border-right border-white">
          <a href="#" class="btn-bottom-bar"><img src="img/mutuelles.png" class="img-fluid" /></a>
        </div>
        <div class="col-3 border-right border-white">
          <a href="#" class="btn-bottom-bar"><img src="img/assurances.png" class="img-fluid" /></a>
        </div>
        <div class="col-3 border-right border-white">
          <a href="#" class="btn-bottom-bar"><img src="img/blog.png" class="img-fluid" /></a>
        </div>
        <div class="col-3">
          <a href="#" class="btn-bottom-bar"><img src="img/tchat.png" class="img-fluid" /></a>
        </div>
    </div>
    <!-- FIN BOTTOM BAR -->

    <!-- TCHAT BOX -->
    <div class="tchat d-none d-lg-block">
        <a href="#" class="btn-bottom-bar"><img src="img/tchat.png" class="img-fluid" /></a>
    </div>

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
