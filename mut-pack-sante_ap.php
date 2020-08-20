<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pack Santé</title>
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
                    <div class="row lightblue-bg p-5 align-items-center header-detail-mutuelle">
                      <div class="col-lg-8">
                        <h1 class="white">Pack Santé<br>- la surcomplémentaire -</h1>
                        <p>Tu as déjà une mutuelle parentale ou d’entreprise?</p>
                        <p>La SMENO a pensé au Pack Santé pour te permettre de bénéficier de remboursements complémentaires à ta mutuelle de base. Profite d’un accès à un service de téléconsultation en illimité ainsi que 100 € de forfait annuel à choisir parmi les prestations ci-contre : </p>
                      </div>
                      <div class="offset-lg-1 col-lg-3 white-bg text-center p-3 pastille">
                        <span class="lightblue strong ff-fredoka a-partir">Pour</span><br>
                        <span class="lightblue strong ff-fredoka prix ">30€</span><br>
                        <span class="lightblue strong ff-fredoka mois">par an seulement</span>
                      </div>
                    </div>

                    <!-- FIN TITRE DESKTOP -->

                    <!-- FIL D'ARIANE -->
                    <div class="row d-none d-xl-block pl-4 pt-4">
                      <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-smeno">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item" aria-current="page">Nos Mutuelles</li>
                            <li class="breadcrumb-item active" aria-current="page">Pack santé</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <!-- CONTENU-->
                        <!--  TITRE MOBILE-->
                        <div class="row d-block d-lg-none margin-0">
                            <div class="col-12 green-bg white p-3 text-center titre-pack-sante">
                                <h1 color="text-center">Pack Santé</h1>
                                <h3>- la surcomplémentaire -</h3>
                                <p class="white">pour <strong>30€ / an</strong>seulement</p>
                            </div>
                            <div class="col-12 text-center pt-5">
                              <p>Tu as déjà une mutuelle parentale ou d’entreprise?</p>
                              <p>
                              La SMENO a pensé au Pack Santé pour te permettre de bénéficier de <strong>remboursements complémentaires</strong> à ta mutuelle de base. Profite d’un accès à un service de téléconsultation en illimité ainsi que <br>
                              <span class="fs-20 strong"> 100 € de forfait annuel</span><br>
                              à choisir parmi les prestations ci-contre :
                            </p>
                            </div>
                        </div>
                        <!-- FIN TITRE MOBILE -->
                    <hr>
                    <div class="container pt-lg-3 pl-lg-5 pb-lg-3">
                      <!-- FORFAIT SANTE -->
                      <div class="row">
                        <div class="col-12">
                          <table class="table-responsive">
                            <tbody>
                              <tr class="border-bottom">
                                <td class="col-9 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Dolor Sit Amet">Automédication</u></td>
                                <td class="col-3 strong text-right">20€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Nutrition (bilan nutritionnel et diététicien)</td>
                                <td class="col-2 strong text-right">20€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Vaccins non remboursables</td>
                                <td class="col-2 strong text-right">20€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Dolor Sit Amet">Sport</u></td>
                                <td class="col-2 strong text-right">20€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Auto-test HIV</td>
                                <td class="col-2 strong text-right">25€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Dolor Sit Amet">Contraception</u></td>
                                <td class="col-2 strong text-right">20€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Test de grossesse</td>
                                <td class="col-2 strong text-right">20€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Dolor Sit Amet">Protections hygiéniques</u></td>
                                <td class="col-2 strong text-right">20€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum Dolor Sit Amet">Montures - verres - protection contre les écrans</u></td>
                                <td class="col-2 strong text-right">20€/an</td>
                              </tr>
                              <tr>
                                <td class="col-10 p-3">Téléconsultation</td>
                                <td class="col-2 strong text-right">incluse</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- FIN FORFAIT -->
                    </div>
                    <hr>
                      <!-- TELECHARGEMENT -->
                    <div class="container pt-3 pl-lg-5">
                      <div class="row">
                        <div class="col-10 col-lg-7">
                              <p><u>télécharger la brochure</u></p>
                        </div>
                        <div class="col-2 col-lg-5">
                              <a href="#"><img src="img/download.png"/></a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-10 col-lg-7">
                              <p><u>télécharger le document d’information sur produit (IPID)</u></p>
                        </div>
                        <div class="col-2 col-lg-5">
                              <a href="#"><img src="img/download.png"/></a>
                        </div>
                      </div>
                    </div>

                    <div class="row pl-5">
                      <div class="col-lg-6 d-none d-lg-block">
                          <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase green-bg white btn-decouvrir"><a href="#">Faire une demande de devis</a></button>
                      </div>
                      <div class="col-12 col-lg-6 d-none d-lg-block">
                          <button class="w-100 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir"><a href="#">Adhérer en ligne maintenant</a></button>
                      </div>
                    </div>

                      <!-- MENTIONS LEGALES -->
                      <div class="container p-5">
                        <div class="row">
                          <div class="col-12">
                            <p class="mentions">Tarif valable du 01/10/2019 au 30/09/2020.Le Pack Santé est réservé aux personnes ayant déjà une mutuelle parentale ou d’entreprise.Les adhérents à une mutuelle SMENO, les personnes bénéficiant de la CMU et de l’ACS ne peuvent adhérer au Pack Santé.
                            </p>
                            <p class="mentions">Téléconsultation - MédecinDirect<br>
                            MédecinDirect est une plateforme de consultation médicale à distance qui met en relation patients et médecins. On parle de téléconsultation lorsque le médecin qui a pris en charge le patient souhaite demander l’avis complémentaire d’un médecin spécialiste, on parle alors de téléexpertise, à l’instar du médecin traitant qui demande l’avis d’un confrère. Ces deux services sont disponibles via MédecinDirect et permettent d’aborder tous types de problématiques de santé.
                            L’objectif est d’apporter une réponse rapide, complète et de qualité aux interrogations médicales. Il peut s’agir d’une demande d’avis, de conseil éclairé, d’orientation ou de diagnostic accompagné ou non d’une ordonnance. Cette téléconsultation vient en soutien à la médecine de terrain, dans le respect du parcours de soin et n’a pas vocation de s’y substituer.
                            </p>
                          </div>
                        </div>
                      </div>
                    <!-- FIN MENTIONS LEGALES-->
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
    <?php include 'includes/bottom-bar-pack_ap.html'; ?>
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
