<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Qui sommes-nous ?</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <!-- A PROPOS -->
                    <div class="row text-center text-md-left">
                      <div class="col-12 py-3">
                        <h1 class="blue">Smeno - À propos</h1>
                      </div>
                      <div class="col-12">
                        <p>
                          Depuis de nombreuses années, la SMENO est un groupe mutualiste qui a fait de son métier l’accompagnement des jeunes. Chaque jour, nous mettons nos compétences et notre expérience au service des étudiants et des jeunes actifs pour leur apporter une aide personnalisée dans tous leurs projets. À travers un réseau de professionnels et de partenaires dans tous les secteurs concernant la jeunesse, la SMENO perpétue une longue tradition de qualité, proximité et de disponibilité auprès de son public.
                        </p>
                      </div>
                    <!-- FIN A PROPOS -->
                    <!-- ASSURANCE POUR TOUS -->
                    <div class="row text-center text-md-left align-items-center justify-content-center">
                      <div class="col-12 col-md-6 pb-3">
                        <img src="img/qui-sommes-nous-2-desktop.jpg" class="img-fluid"/>
                      </div>
                      <div class="col-10 col-md-6 pl-lg-5 pr-lg-5">
                        <h2 class="blue">Des assurances pour tous, à toutes les étapes de la vie</h2>
                        <p>
                          Parce que chaque individu et chaque parcours de vie est différent, la SMENO a à cœur de proposer des contrats d’assurance personnalisés. Habitation, déplacements, loisirs, voyages : pour tous les besoins des jeunes, du lycée à la vie active, nous répondons présent.
                        </p>
                         <p>
                          Ce n’est pas tout : la SMENO propose une assurance santé internationale à destination de celles et ceux qui souhaitent poursuivre leurs études, trouver un stage ou un job, ou tout simplement partir en vacances à l’étranger.
                        </p>
                        <button class="w-75 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir">découvrir nos offres de mutuelle</button>
                      </div>
                    </div>
                    <!-- FIN ASSURANCE POUR TOUS -->
                    <!-- OFFRE SUR MESURE -->
                    <div class="row d-flex text-center text-md-left align-items-center justify-content-center">
                      <div class="col-12 col-md-6 py-3 order-lg-2">
                        <img src="img/qui-sommes-nous-1-desktop.jpg" class="img-fluid"/>
                      </div>
                      <div class="col-10 col-md-6 order-lg-1 pl-lg-5 pr-lg-5">
                        <h2 class="blue">Une offre de mutuelle sur mesure</h2>
                        <p>
                          À la différence d’une entreprise à but lucratif, une mutuelle met l’humain au premier plan. Par le biais des valeurs d’entraide et de solidarité, la SMENO accompagne le développement personnel et professionnel des jeunes, de la scolarité à l’entrée dans la vie active.
                        </p>
                        <p>
                          Pour apporter une réponse personnalisée à chaque individu, nous avons développé quatre formules adaptées à des besoins et des budgets différents. À partir de 5,50 € par mois, les jeunes bénéficient d’une protection efficace et de l’appui de notre équipe en cas de difficultés.
                        </p>
                        <button class="w-75 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir">découvrir nos offres de mutuelle</button>
                      </div>
                    </div>
                  <!-- FIN OFFRE SUR MESURE -->
                  <!-- PREVENTION -->
                  <div class="row d-flex text-center text-md-left align-items-center justify-content-center">
                    <div class="col-12 col-md-6 align-items-center py-3 align-items-center">
                      <img src="img/qui-sommes-nous-3-desktop.jpg" class="img-fluid"/>
                    </div>
                    <div class="col-10 col-md-6 pl-lg-5 pr-lg-5">
                      <h2 class="blue">La prévention au cœur de nos actions</h2>
                      <p>
                        Depuis de nombreuses années, nous avons mis sur pied un formidable réseau de partenaires, avec lesquels nous travaillons pour assurer l’information et la sensibilisation des jeunes. Dans les écoles, les lycées, sur les campus, mais aussi en milieu professionnel, nos intervenants communiquent autour des différents aspects de la vie des jeunes et des bons comportements à adopter. Hygiène de vie, santé, vie affective et sexuelle, études, travail : jour après jour, la SMENO joue un rôle actif dans la prévention auprès de la jeunesse.
                      </p>
                      <button class="w-75 p-3 mt-3 mb-5 font-weight-bold text-uppercase orange-bg white btn-decouvrir">découvrir nos offres de mutuelle</button>
                    </div>
                </div>
                <!-- FIN PREVENTION -->
          </div>


          <!--SLIDER LA SMENO C'EST AUSSI-->
          <div class="row green-bg pt-3 pb-5">
              <div class="col-12">
                  <div class="carousel slide" data-ride="carousel-Back">
                          <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <div class="row justify-content-center">
                                <div class="col-6 col-lg-12 pt-5 text-center white">
                                    <h2>La SMENO c’est aussi</h2>
                                </div>
                                <div class="col-10 col-lg-8 text-center white">
                                    <p class="white">Nous travaillons au quotidien pour vous proposer des services complémentaires mais nécessaires pour accompagner les jeunes.</p>
                                </div>
                              </div>

                              <div class="row justify-content-center align-items-center">
                                <div class="col-xl-6 text-center p-3">
                                    <img src="img/smenup.png" alt="slide content"
                                          class="img-fluid w-75">
                                </div>
                                <div class="col-10 col-xl-6 text-center text-lg-left">
                                  <h3 class="font-weight-bold white">
                                    Smenup accompagne les jeunes  dans leur orientation
                                  </h3>
                                  <p class="white">
                                    C’est pour aider les jeunes dans leur parcours que nous avons créé Smen Up, une méthode d’accompagnement personnalisé leur permettant de mieux connaître leurs atouts et leur personnalité. Ils peuvent ainsi s’orienter vers des domaines d’activité dans lesquels ils s’épanouiront et réaliseront leur potentiel.
                                  </p>
                                  <p class="pb-5"><a href="#" class="btn-decouvrir-site">découvrir le site</a></p>
                                </div>
                              </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row justify-content-center">
                              <div class="col-6 col-xl-6 pt-5 text-center text-xl-left white">
                                  <h2>La SMENO c’est aussi</h2>
                              </div>
                              <div class="col-10 col-xl-6 text-center text-xl-left white">
                                  <p class="white">Nous travaillons au quotidien pour vous proposer des services complémentaires mais nécessaires pour accompagner les jeunes.</p>
                              </div>

                              <div class="col-xl-6 text-center p-3">
                                  <img src="img/smenup.png" alt="slide content"
                                        class="img-fluid w-75">
                              </div>
                              <div class="col-10 col-xl-6 text-center">
                                <p class="font-weight-bold white">
                                  Smenup accompagne les jeunes dans leur orientation
                                </p>
                                <p class="white">
                                  C’est pour aider les jeunes dans leur parcours que nous avons créé Smen Up, une méthode d’accompagnement personnalisé leur permettant de mieux connaître leurs atouts et leur personnalité. Ils peuvent ainsi s’orienter vers des domaines d’activité dans lesquels ils s’épanouiront et réaliseront leur potentiel.
                                </p>
                                <p class="pb-5"><a href="#" class="btn-decouvrir-site">découvrir le site</a></p>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--FIN SLIDER LA SMENO C'EST AUSSI-->
          <!-- NOS VALEURS À VOTRE SERVICE -->
          <!-- PREVENTION -->
          <div class="row d-flex pt-5 text-center text-md-left align-items-center justify-content-center">
            <div class="col-10 col-lg-12 pl-lg-5 pr-lg-5">
              <h2 class="blue pb-3">Nos valeurs à votre service</h2>
              <p class="pb-3">
                Smeno, toujours plus proche de vous !
                Depuis des années, la SMENO est à l’écoute des étudiants et des jeunes actifs. Avec bienveillance, ouverture et simplicité, notre équipe travaille au quotidien pour trouver des solutions pour vous aider à avancer, quels que soient vos projets. Le bien-être et l’épanouissement de tous ceux que nous accompagnons reste notre plus belle récompense.
              </p>
              <div class="row">
                <div class="col-6 col-lg-3 text-center blue">
                  <img src="img/engagement.jpg" class="img-fluid" alt="">
                  <h4 class="pt-3">L'engagement</h4>
                </div>
                <div class="col-6 col-lg-3 text-center blue">
                  <img src="img/audace.jpg" class="img-fluid" alt="">
                  <h4 class="pt-3">L'audace</h4>
                </div>
                <div class="col-6 col-lg-3 text-center blue">
                  <img src="img/innovation.jpg" class="img-fluid" alt="">
                  <h4 class="pt-3">L'innovation</h4>
                </div>
                <div class="col-6 col-lg-3 text-center blue">
                  <img src="img/proximite.jpg" class="img-fluid" alt="">
                  <h4 class="pt-3">La proximité</h4>
                </div>
              </div>

            </div>
        </div>
        <!-- FIN PREVENTION -->
            <!-- FOOTER -->
            <?php include 'includes/footer.html'; ?>
            <!-- FIN FOOTER -->
            <!--FIN CONTENT-->
            </main>
        </div>
    </div>

    <!-- TCHAT BOX -->
    <!-- BOTTOM BAR COMPARATEUR ET MUTUELLE -->
    <?php include 'includes/bottom-bar-mutuelles_ap.html'; ?>
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
