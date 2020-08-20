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
            <main class="col-12 col-6 col-xl-8">
            <!--CONTENT-->
                <!--IMAGE A LA UNE-->
                <div class="row">
                    <div class="col-12">
                        <img src="img/article/iStock-11561412971.jpg" />
                    </div>
                    <div class="tchat yellow-bg"></div>
                </div>
                <!--FIN IMAGE A LA UNE-->
                <!-- DEBUT ARTICLE -->
                    <!-- CATEROGIE ET DATE DE PUBLICATION -->
                    <div class="row">
                        <div class="col-7">
                          <p class="categorie"/><a href="#">Vie pratique & bons plans étudiants</a></p>
                        </div>
                        <div class="col-4 text-right">
                          <p>il y a 3 jours </p>
                        </div>
                    </div>
                    <!-- FIN CATEROGIE ET DATE DE PUBLICATION -->
                    <!-- TITRE ARTICLE + CONTENU -->
                    <div class="row">
                      <div class="col-12">
                        <h1 class="blue">Les galères du confinement, quand on est étudiant !</h1>
                      </div>
                      <div class="col-12">
                        <p>
                          Depuis le 16 mars, toutes les écoles et universités sont fermées jusqu’à nouvel ordre. Si certains d’entre vous en profitent pour souffler un peu, d’autres ont choisi de s’occuper en mettant les bouchées doubles sur les révisions. C’était sans compter un facteur supplémentaire : le confinement qui vient parfois contrecarrer tes projets de la journée. Petit florilège des galères du confinement quand on est étudiant.
                        </p>
                      </div>
                      <div class="col-12 col-md-6">
                        <img src="img/article/iStock-11520484661.jpg"/>

                      </div>
                    </div>
                <div class="row no-gutters">

                </div>

                <!--PARTIE BLOG-->
                <div class="row py-60">
                    <div class="col-4 col-xl-4 text-center px-xl-5">
                        <img src="img/hp/smile.png" alt="" class="w-75">
                    </div>
                    <div class="col-8 col-xl-8">
                        <h2 class="blue">Le blog<br> qui te donne<br> le smile</h2>
                    </div>
                    <div class="col-xl-8 offset-xl-4 px-4">
                        <div class="row py-xl-4 no-gutters border-bottom">
                            <div class="col-5">
                                <img src="img/hp/blog1.jpg" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-7 px-3 px-xl-5">
                                <h3 class="yellow">Enquête santé étudiante</h3>
                                <p>Temps de lecture : 5 min</p>
                                <a href="#" class="d-block text-right cta-next">Lire la suite</a>
                            </div>
                            <div class="col-xl-12 d-flex justify-content-between pt-4">
                                <span class="categorie-blog">Santé, bien-être & prévention</span>
                                <span class="date-publication font-italic">il y a 3 jours</span>
                            </div>
                        </div>
                        <div class="row py-3 py-xl-4 no-gutters border-bottom">
                            <div class="col-5">
                                <img src="img/hp/blog2.jpg" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-7 px-3 px-xl-5">
                                <h3 class="yellow">Les galères du confinement, quand on est étudiant !</h3>
                                <p>Temps de lecture : 5 min</p>
                                <a href="#" class="d-block text-right cta-next">Lire la suite</a>
                            </div>
                            <div class="col-xl-12 d-flex justify-content-between pt-4">
                                <span class="categorie-blog">Santé, bien-être & prévention</span>
                                <span class="date-publication font-italic">il y a 3 jours</span>
                            </div>
                        </div>
                        <div class="row py-3 py-xl-4 no-gutters border-bottom">
                            <div class="col-5">
                                <img src="img/hp/blog3.jpg" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-7 px-3 px-xl-5">
                                <h3 class="yellow">Santé à l'étranger, partir oui, mais bien protégé !</h3>
                                <p>Temps de lecture : 5 min</p>
                                <a href="#" class="d-block text-right cta-next">Lire la suite</a>
                            </div>
                            <div class="col-xl-12 d-flex justify-content-between pt-4">
                                <span class="categorie-blog">Santé, bien-être & prévention</span>
                                <span class="date-publication font-italic">il y a 3 jours</span>
                            </div>
                        </div>
                        <div class="row py-3 py-xl-4 no-gutters">
                            <div class="col-5">
                                <img src="img/hp/blog4.jpg" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-7 px-3 px-xl-5">
                                <h3 class="yellow">Orientation post-bac&nbsp;: où se renseigner ?</h3>
                                <p>Temps de lecture : 5 min</p>
                                <a href="#" class="d-block text-right cta-next">Lire la suite</a>
                            </div>
                            <div class="col-xl-12 d-flex justify-content-between pt-4">
                                <span class="categorie-blog">Santé, bien-être & prévention</span>
                                <span class="date-publication font-italic">il y a 3 jours</span>
                            </div>
                        </div>
                        <a href="#" class="cta-smeno arrondi-15">voir tous les articles et conseils</a>
                    </div>
                </div>
                <!--FIN PARTIE BLOG-->
                <!--ENCART NEWSLETTER-->
                <div class="row py-60 yellow-bg">
                    <div class="col-xl-6 text-center">
                        <img src="img/hp/newsletter.png" alt="inscription newsletter" class="img-fluid w-75">
                    </div>
                    <div class="col-xl-6 p-5 text-center text-xl-left">
                        <h2>Rejoins la communauté</h2>
                        <p class="white">pour rester informé de nos nouveautés et recevoir des offres totalement
                            personnalisées à ton
                            style de vie !</p>
                        <form action="">
                            <label for="news" style="display:none;">Ton adresse mail</label>
                            <input type="email" placeholder="ton adresse mail">
                            <input type="submit" value="valider">
                        </form>
                    </div>
                </div>
                <!--FIN ENCART NEWSLETTER-->
                <!--SLIDER BAS DE PAGE-->
                <div class="row py-60 blue-bg">
                    <div class="col-12">
                        <div class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-xl-6 text-center">
                                            <img src="img/hp/slide-bdp.png" alt="slide content" class="img-fluid w-75">
                                        </div>
                                        <div class="col-xl-6 text-center text-xl-left p-5">
                                            <h2>SMENO, c’est aussi...</h2>
                                            <p class="white">Nous mettons à ta disposition, différents types de services
                                                pour te
                                                simplifier la vie : </p>
                                            <h5>À la recherche d’un logement ?</h5>
                                            <p class="white">Nous proposons des résidences étudiantes équipées, proches
                                                des lieux
                                                d'études pour vivre seul ou en coloc, au meilleur prix !</p>
                                            <a href="#">en savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-xl-6 text-center">
                                            <img src="img/hp/slide-bdp.png" alt="slide content" class="img-fluid w-75">
                                        </div>
                                        <div class="col-xl-6 text-center text-xl-left p-5">
                                            <h2>SMENO, c’est aussi...</h2>
                                            <p class="white">Nous mettons à ta disposition, différents types de services
                                                pour te
                                                simplifier la vie : </p>
                                            <h3>À la recherche d’un logement ?</h3>
                                            <p class="white">Nous proposons des résidences étudiantes équipées, proches
                                                des lieux
                                                d'études pour vivre seul ou en coloc, au meilleur prix !</p>
                                            <a href="#">en savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIN SLIDER BAS DE PAGE-->
            <!-- FOOTER -->
            <?php include 'includes/footer.html'; ?>
            <!-- FIN FOOTER -->
            <!--FIN CONTENT-->
            </main>
        </div>
    </div>














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
