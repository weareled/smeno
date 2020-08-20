<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Mut'M</title>
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
                        <h1 class="white">La Mut'M<br>- l'essentielle -</h1>
                        <p>Étudiant ou jeune actif, à la recherche d’une bonne complémentaire santé avec un budget limité ? La Mutuelle M t’accompagne pour toutes tes consultations chez un généraliste ou un spécialiste, à hauteur de 100% selon les secteurs. Tout ça à partir de 12,5€/mois ! </p>
                      </div>
                      <div class="offset-lg-1 col-lg-3 white-bg text-center p-3 pastille">
                        <span class="lightblue strong ff-fredoka a-partir">À partir de</span><br>
                        <span class="lightblue strong ff-fredoka prix ">12,25€</span><br>
                        <span class="lightblue strong ff-fredoka mois">par mois</span>
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
                            <li class="breadcrumb-item active" aria-current="page">La Perf'</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <!-- CONTENU-->
                        <!--  TITRE MOBILE-->
                        <div class="row d-block d-lg-none margin-0">
                            <div class="col-12 lightblue-bg white p-3 text-center titre-mutuelle">
                                <h1 color="text-center">La Mut'M</h1>
                                <h3>- l'essentielle -</h3>
                                <p class="white">À partir de <strong>12,50€ / mois</strong></p>
                            </div>
                            <div class="col-12 text-center pt-5">
                              <p>Étudiant ou jeune actif, à la recherche d’une bonne complémentaire santé avec un budget limité ? La Mutuelle M t’accompagne pour toutes tes consultations chez un généraliste ou un spécialiste, à hauteur de 100% selon les secteurs. Tout ça à partir de 12,5€/mois ! </p>
                            </div>
                        </div>
                        <!-- FIN TITRE MOBILE -->
                    <hr>
                    <div class="container pt-lg-3 pl-lg-5 pb-lg-3">
                        <!-- SOINS MEDICAUX -->
                        <div class="row">
                          <div class="col-10">
                                <h4>Soins médicaux & pharmacie</h4>
                          </div>
                          <div class="col-2 text-right" id="arrow">
                                <a href="#soinsmedicaux" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                          </div>
                          <div id="soinsmedicaux" class="col-12 collapse">
                            <table class="table-responsive">
                              <tbody>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Généralistes / spécialistes (consultation, visites) si médecin <u data-toggle="tooltip" data-placement="top" title="Option Pratique Tarifaire Maîtrisée, si le médecin consulté est signataire du contrat OPTAM, les dépassements d’honoraires sont limités.">OPTAM</u></td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Généralistes / spécialistes (consultation, visites) si médecin non <u data-toggle="tooltip" data-placement="top" title="Option Pratique Tarifaire Maîtrisée, si le médecin consulté est signataire du contrat OPTAM, les dépassements d’honoraires sont limités.">OPTAM</u></td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Pharmacie</td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Analyses / laboratoires</td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Radiologie </td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                                <tr>
                                  <td class="col-10 p-3">Prothèses auditives </td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      <!-- FIN SOINS MEDICAUX -->
                      <hr>
                      <!-- HOSPITALISATION -->
                      <div class="row">
                        <div class="col-10">
                              <h4>Hospitalisation</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#hospitalisation" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="hospitalisation" class="col-12 collapse">
                          <table class="table-responsive">
                            <tbody>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Médicale / maternité / chirurgicale si médecin <u data-toggle="tooltip" data-placement="top" title="Option Pratique Tarifaire Maîtrisée, si le médecin consulté est signataire du contrat OPTAM, les dépassements d’honoraires sont limités.">OPTAM</u></td>
                                <td class="col-2 strong text-right">100%</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Médicale / maternité / chirurgicale si médecin non <u data-toggle="tooltip" data-placement="top" title="Option Pratique Tarifaire Maîtrisée, si le médecin consulté est signataire du contrat OPTAM, les dépassements d’honoraires sont limités.">OPTAM</u></td>
                                <td class="col-2 strong text-right">100%</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Forfait journalier hospitalier illimité</td>
                                <td class="col-3 strong text-right">20€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Forfait journalier psychiatrie illimité      </td>
                                <td class="col-2 strong text-right">15€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Forfait naissance</td>
                                <td class="col-2 strong text-right">150€/jour</td>
                              </tr>
                              <tr>
                                <td class="col-10 p-3">Participation forfaitaire de 24€ sur les actes > 120€ </td>
                                <td class="col-2 strong text-right">incluse</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- FIN HOSPITALISATION -->
                      <hr>
                      <!-- GARANTIE -->
                      <div class="row">
                        <div class="col-10">
                              <h4>Garanties</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#garantie" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="garantie" class="col-12 collapse">
                          <table class="table-responsive">
                            <tbody>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Accès Téléconsultaion - Médecindirect</td>
                                <td class="col-2 strong text-right">incluse</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Responsabilité civile</td>
                                <td class="col-2 strong text-right">incluse</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Europ Assistance 24h/24 et 7J/7</td>
                                <td class="col-2 strong text-right">incluse</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--FIN GARANTIE -->
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
                              <p><a href="#" class="telechargement">télécharger les conditions générales Responsabilité civile et Europ assistance</a></p>
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
                      <!-- CONTENU REASSURANCE-->
                    <div class="container-fluid padding-top-0">
                      <div class="row d-flex align-items-center">
                        <div class="col-12 col-lg-6">
                          <img src="img/principaux-soins.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-lg-6 p-3">
                          <h2 class="blue pt-4 pb-4">Quels sont les principaux soins assurés dans l’offre Mutuelle M ?</h2>
                          <p>La SMENO te suis dans tes démarches de santé les plus importantes : avec la Mut M, tu profites de garanties complémentaires adaptées aux budgets les plus serrés tout en te garantissant une couverture des dépenses de santé les plus courantes.
                          </p>
 <p>La garantie Mut M te permet, pour une visite chez le généraliste par exemple, de combler le remboursement de la sécurité sociale, qui ne dépasse pas 16,50€ pour une consultation à 25€. La Smeno te rembourse la différence.
                          </p>
                          <p>De la même manière, elle vient combler la part de la sécurité sociale sur l’achat de tes médicaments en pharmacie mais aussi les prises de sang et les analyses en laboratoire : pas besoin d’avancer d’argent !
 La formule M et toutes nos offres mutuelles te permettent de bénéficier de la <strong>téléconsultation</strong> : Pas besoin de se déplacer et attendre une heure dans la salle d’attente pour soigner ton rhume ! Accessible H24 et 7/7.
                          </p>
                          <p>L’offre M t’assure aussi un remboursement complet de tes frais de séjours hospitaliers en complétant la part prise en charge par la sécurité sociale. Par exemple, tu tombes à vélo en allant à la FAC et tu te casses le bras. Dommage ! L’hôpital te facture 1 journée d’hospitalisation à 2238€. La sécurité sociale rembourse 1790€, et la Mutuelle Mut M prend en charge le reste, 448€, et tout ça sans avancer l’argent ! 
                          </p>

                          <p>Pour les actes de radiologie, la prise en charge de l’offre M permet un remboursement allant jusqu’à 100% - contre seulement 70% par la sécurité sociale.
                          </p>

                          <p>Info importante pour faire ton choix : Avec la mutuelle Mut M, et à partir de seulement 12,75€/mois, tu bénéficies aussi de la responsabilité civile (assurance obligatoire !).
                          En résumé, des économies, la sécurité adaptée à tes besoins, un budget mieux contrôlé et moins de démarches en perspectives !
                          </p>
                        </div>
                      </div>
                    </div>

                      <!-- FIN CONTENU REASSURANCE-->
                      <!-- MENTIONS LEGALES -->
                      <!-- FIN MENTIONS LEGALES-->
                      <div class="container p-5">
                        <div class="row">
                          <div class="col-12">
                            <p class="mentions">Les garanties sont exprimées hors régimes spéciaux, dans la limite des frais réellement engagés et dans le cadre du respect du parcours de soins. Si vous êtes étudiant(e) de - de 28 ans, vous devez justifier de votre statut en fournissant à la SMENO une copie de votre carte étudiante ou d’une attestation de l’établissement d’enseignement supérieur avant le 31/10/2019. Ces tarifs comprennent le montant des taxes reversées à l’Etat.  Les taux de remboursement de la mutuelle s’appliquent sur les bases de remboursement de la Sécurité Sociale française en vigueur à la date de l’Assemblée Générale du 16/03/2019. Les modifications des taux ou bases de remboursement de la Sécurité Sociale consécutives à la publication de nouveaux décrets ultérieures à cette date ne sauraient engager la SMENO. Le montant du remboursement ne peut être supérieur au montant des frais réellement engagés. Les prestations sont exprimées en pourcentage de la base de remboursement de la Sécurité Sociale ou en euros.
                            </p>

                            <p class="mentions">Les garanties exprimées en % nécessitent et incluent le remboursement des prestations par le régime obligatoire de Sécurité Sociale. Les soins exclus de la prise en charge sont précisés à l’article 11 du Règlement Mutualiste.
                            </p>

                            <p class="mentions">Les montants des forfaits indiqués correspondent à une adhésion du 01/10 au 30/09/19, à partir du 01/11/19 le montant des forfaits est calculé au prorata temporis de la durée du contrat à l’exception du forfait naissance qui n’est pas proratisé. Les forfaits sont fractionnables et remboursés sur présentation de factures acquittées selon le nombre de mois cotisables. Toutes les dispositions contractuelles sont précisées dans le Règlement Mutualiste disponible sur smeno.com.
                            </p>

                            <p class="mentions">*Une carence d’un mois à compter de la date d’effet s’appliquera au contrat, la Perf’, ayant une date d’effet au plus tôt au 01/11/2019. Une participation forfaitaire de 24€ sur les actes supérieurs à 120€ est incluse.
                            </p>
                          </div>
                        </div>
                      </div>

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
    <script src="js/arrow.js"></script>
    <script src="js/tooltip.js"></script>
</body>
</html>
