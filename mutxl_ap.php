<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Mut'XL</title>
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
                        <h1 class="white">La Mut'XL<br>- la confortable -</h1>
                        <p>Comment choisir ta mutuelle et t’assurer d’être bien couvert pour les dépenses courantes de santé ou les gros coups dur ? La Mutuelle XL te permet de bénéficier de notre garantie la plus sécurisante ! Une couverture tout terrain ! 2 renforts sont aussi disponibles : optique/dentaire ou hospitalisation. </p>
                      </div>
                      <div class="offset-lg-1 col-lg-3 white-bg text-center p-3 pastille">
                        <span class="lightblue strong ff-fredoka a-partir">À partir de</span><br>
                        <span class="lightblue strong ff-fredoka prix ">38,25€</span><br>
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
                            <li class="breadcrumb-item active" aria-current="page">La Mut'XL</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <!-- CONTENU-->
                        <!--  TITRE MOBILE-->
                        <div class="row d-block d-lg-none margin-0">
                            <div class="col-12 lightblue-bg white p-3 text-center titre-mutuelle">
                                <h1 color="text-center">La Mut'XL</h1>
                                <h3>- la confortable -</h3>
                                <p class="white">À partir de <strong>38,25€ / mois</strong></p>
                            </div>
                            <div class="col-12 text-center pt-5">
                              <p>Comment choisir ta mutuelle et t’assurer d’être bien couvert pour les dépenses courantes de santé ou les gros coups dur ? La Mutuelle XL te permet de bénéficier de notre garantie la plus sécurisante ! Une couverture tout terrain ! 2 renforts sont aussi disponibles : optique/dentaire ou hospitalisation. </p>
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
                                  <td class="col-2 strong text-center">150%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Généralistes / spécialistes (consultation, visites) si médecin non <u data-toggle="tooltip" data-placement="top" title="Option Pratique Tarifaire Maîtrisée, si le médecin consulté est signataire du contrat OPTAM, les dépassements d’honoraires sont limités.">OPTAM</u></td>
                                  <td class="col-2 strong text-center">130%</td>
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
                                <tr class="border-bottom">
                                  <td class="col-10 p-3"><u data-toggle="tooltip" data-placement="top" title="Option Pratique Tarifaire Maîtrisée, si le médecin consulté est signataire du contrat OPTAM, les dépassements d’honoraires sont limités.">Actes techniques médicaux/échographie médecin OPTAM</u></td>
                                  <td class="col-2 strong text-center">150%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3"><u data-toggle="tooltip" data-placement="top" title="Option Pratique Tarifaire Maîtrisée, si le médecin consulté est signataire du contrat OPTAM, les dépassements d’honoraires sont limités.">Actes techniques médicaux/échographie médecin non OPTAM</u></td>
                                  <td class="col-2 strong text-center">130%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Orthopédie / autres appareillages (bandages, semelles orthopédiques) </td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Orthopédie / autres appareillages (bandages, semelles orthopédiques) </td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Infirmiers / kiné / orthophonistes et autres auxiliaires médicaux </td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Petits appareillages / orthèses </td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Prothèses auditives </td>
                                  <td class="col-2 strong text-center">100%</td>
                                </tr>
                                <tr class="border-bottom">
                                  <td class="col-10 p-3">Frais de transport (taxi, ambulance, VSL et voiture particulière)</td>
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
                        <div id="hospitalisation" class="col-12 collapse no-padding-lr">
                          <table class="table-responsive">
                            <thead>
                                 <tr>
                                   <th></th>
                                   <th></th>
                                   <th class="bluesky-bg text-center">RENFORT</th>
                                 </tr>
                               </thead>
                            <tbody>
                              <tr class="border-bottom">
                                <td class="col-8 p-3">Médicale / maternité / chirurgicale si médecin <u data-toggle="tooltip" data-placement="top" title="Option Pratique Tarifaire Maîtrisée, si le médecin consulté est signataire du contrat OPTAM, les dépassements d’honoraires sont limités.">OPTAM</u></td>
                                <td class="col-2 strong text-right">150%</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">275 %</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3">Médicale / maternité / chirurgicale si médecin non <u data-toggle="tooltip" data-placement="top" title="Option Pratique Tarifaire Maîtrisée, si le médecin consulté est signataire du contrat OPTAM, les dépassements d’honoraires sont limités.">OPTAM</u></td>
                                <td class="col-2 strong text-right">130%</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">200 %</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum dolor sit amet">Forfait journalier hospitalier </u>illimité</td>
                                <td class="col-2 strong">20€/jour</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">-</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3">Forfait journalier psychiatrie illimité</td>
                                <td class="col-2 strong text-center">15€/jour</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">-</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum dolor sit amet">Forfait chambre particulière </u></td>
                                <td class="col-2 strong">40€/jour</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">55€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum dolor sit amet">Indemnité hospitalière</u>(TV, téléphone...)</td>
                                <td class="col-2 strong">15€/jour</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">35€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum dolor sit amet">Forfait naissance</u> </td>
                                <td class="col-2 strong text-center text-right">150€/an</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">-</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum dolor sit amet">Forfait accompagnant</u> </td>
                                <td class="col-2 strong text-center text-right">-</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">25€/jour</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3">Participation forfaitaire de 24€ sur les actes > 120€ </td>
                                <td class="col-2 strong text-right">incluse</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- FIN HOSPITALISATION -->
                      </div>
                      <hr>
                      <!-- OPTIQUE /DENTAIRE -->
                      <div class="row">
                        <div class="col-10">
                              <h4>Optique / Dentaire</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#optique" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="optique" class="col-12 collapse no-padding-lr">
                          <table class="table-responsive">
                            <thead>
                                 <tr>
                                   <th></th>
                                   <th></th>
                                   <th class="bluesky-bg text-center">RENFORT</th>
                                 </tr>
                               </thead>
                            <tbody>
                              <tr class="border-bottom">
                                <td class="col-8 p-3">Equipement optique : Montures et verres / lentilles</td>
                                <td class="col-2 strong text-right">200%</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">250%</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3"><u data-toggle="tooltip" data-placement="top" title="Option Pratique Tarifaire Maîtrisée, si le médecin consulté est signataire du contrat OPTAM, les dépassements d’honoraires sont limités.">Forfait équipement simple (1 monture +
                                2 verres simples)</u></td>
                                <td class="col-2 strong p-2 text-right">130€ tous les 2 ans</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">180€ tous les 2 ans</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum dolor sit amet">Forfait équipement mixte (1 monture + 1 verre simple + 1 verre complexe) </u>illimité</td>
                                <td class="col-2 strong p-2 text-right">205€ tous les 2 ans</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">255€ tous les 2 ans</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3"><u data-toggle="tooltip" data-placement="top" title="Lorem Ipsum dolor sit amet">Forfait équipement complexe (1 monture + 2 verres complexes)</u></td>
                                <td class="col-2 strong p-2 text-right">280€ tous les 2 ans</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">330€ tous les 2 ans</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3">Forfait lentilles</td>
                                <td class="col-2 strong">100€/an</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">150€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3">Soins dentaires</td>
                                <td class="col-2 strong">200%</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">250%</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3">Orthodontie</td>
                                <td class="col-2 strong">125%</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">125% + forfait de 80€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-8 p-3">Prothèses + forfait prothèses remboursables</td>
                                <td class="col-2 strong p-2 text-right">225%</td>
                                <td class="col-2 bluesky-bg p-2 strong text-right">250% + forfait de 130€/an</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- FIN OPTIQUE -->
                      </div>
                      <hr>
                      <!-- FORFAIT SANTE -->
                      <div class="row">
                        <div class="col-10">
                              <h4>Forfait santé</h4>
                        </div>
                        <div class="col-2 text-right" id="arrow">
                              <a href="#forfaitsante" data-toggle="collapse"><i id="icon" class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="forfaitsante" class="col-12 collapse">
                          <p class="ff-fredoka fs-18">290€/an de forfait santé à choisir parmi les prestations suivantes : </p>
                          <table class="table-responsive">
                            <tbody>
                              <tr class="border-bottom">
                                <td class="col-9 p-3">Contraception</td>
                                <td class="col-3 strong text-right">80€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Auto test HIV</td>
                                <td class="col-2 strong text-right">25€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Test de grossesse</td>
                                <td class="col-2 strong text-right">10€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Médecine douce (homéopathie, ostéopathie, chiropractie, pédicure, acupuncture)</td>
                                <td class="col-2 strong text-right">60€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Nutrition (bilan nutritionnel, diététicien)</td>
                                <td class="col-2 strong text-right">60€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Sport (inscription à une course, participation à l'inscription à une salle de sport)</td>
                                <td class="col-2 strong text-right">40€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Vaccins non remboursables</td>
                                <td class="col-2 strong text-right">100€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Automédication (comprend la prise en charge de tous les médicaments non remboursés (Exception faite des produits de parapharmacie type crème, maquillage)</td>
                                <td class="col-2 strong text-right">30€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Protections hygiéniques (serviettes hygiéniques, tampons, cups et culottes de règles)</td>
                                <td class="col-2 strong text-right">30€/an</td>
                              </tr>
                              <tr class="border-bottom">
                                <td class="col-10 p-3">Protection contre les écrans (paire de lunettes anti lumière bleue)</td>
                                <td class="col-2 strong text-right">30€/an</td>
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
                    <div class="container-fluid">
                      <div class="row d-flex align-items-center">
                        <div class="col-12 col-lg-6">
                          <img src="img/garanties-completes.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-lg-6 p-3">
                          <h2 class="blue pt-4 pb-4">Mut XL, des garanties complètes </h2>
                          <p>À partir de 38,25 € par mois, la complémentaire santé Mut XL – La confortable, est idéale pour une couverture optimale de vos frais de santé. 
                          </p>
                          <p>Tu en verras vite l’utilité, en particulier si ton médecin pratique des dépassements d’honoraires – c’est-à-dire des tarifs supérieurs à la moyenne. Mut XL compense ces majorations appliquées bien souvent par les spécialistes comme les gynécologues ou les kinés. 
                          </p>
                          <p>Tes Radios, médicaments ou analyses sont remboursés à 100 %. 
                          </p>
                        </div>
                      </div>
                      <div class="row d-flex align-items-center">
                      <div class="col-12 col-lg-6 order-sm-2">
                          <img src="img/se-proteger.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-lg-6 pl-lg-5 order-sm-1">
                          <h2 class="blue pt-4 pb-4">Se protéger coûte  que coûte </h2>
                          <p>Tu vis à 300% ? Et pourtant, un accident suivi d’une hospitalisation peut bien alourdir ton budget. La complémentaire santé Mut XL rembourse à hauteur de 150 % et même jusqu’à 275 % avec le renfort hospitalisation. 
                          </p>
                          <p>La SMENO couvre 200 % du tarif de remboursement accordé par la Sécurité sociale sur les verres et montures, mais aussi sur les soins dentaires. Pour des lunettes avec équipement simplement par exemple, la Smeno te rembourse jusqu’à 130€ tous les 2 ans et pour un équipement complexe jusqu’à 280€.
                          </p>
                          <p>Avec un renfort optique, le forfait lentilles passe de 100 €/an à 150 €/an et tes remboursements pour les soins dentaires 200% du tarif de la Sécurité sociale. 
                          Tu peux personnaliser ta formule XL avec les renforts complémentaires en optique, dentaire ou hospitalisation. La Smeno s’adapte à tes besoins de santé.
                          </p>
                        </div>
                      </div>
                      <div class="row d-flex align-items-center">
                        <div class="col-12 col-lg-6">
                          <img src="img/remboursement-soins.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-lg-6 p-3">
                          <h2 class="blue pt-4 pb-4">Les remboursements sur les soins non pris en charge par la sécurité sociale </h2>
                          <p>La mutuelle Mut XL te permet de bénéficier d’un forfait de 290€/an sur certaines prestations santé sur ce qui n’est pas pris en charge par la sécurité sociale, comme : certaines contraceptions, l’automédication, le suivi par un diététicien, l’Auto test HIV, les protections hygiéniques, certains vaccins non remboursés. Les médecines douces comme l’homéopathie, l'ostéopathie ou par exemple la chiropractie ou l’acupuncture sont également pris en charge dans ta formule XL.
                          </p>
                          <p>Pas le temps pour une consultation ? Médecindirect, c’est un service de téléconsultation très pratique car disponible à tout moment et en illimitée quel que soit ton forfait mutuelle.
                          L’adhésion à la Mut XL te permet aussi de bénéficier de l’assurance responsabilité civile et d’Europe assistance 24h/24 et 7j/7. 
                          </p>
                        </div>
                      </div>
                    </div>
                      <!-- FIN CONTENU REASSURANCE-->
                      <!-- MENTIONS LEGALES -->
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
