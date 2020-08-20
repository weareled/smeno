<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
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
                        <h1 class="white letter-spacing text-uppercase">Contact</h1>
                        <p class="w-50">Une question ou un soucis ? <br>As-tu pensé à consulter notre FAQ ? <br>La réponse s’y trouve peut-être !</p>
                        <button class="btn white-bg btn-faq mb-3"><a href="#" class="ff-fredoka lien-faq"/>Voir la faq</a></button>
                        <p class="w-100">Tu n'as pas trouvé ta réponse dans les FAQ ou sur le site ? <br>Contacte-nous via ce formulaire en remplissant tous les champs pour qu'on puisse t'apporter la réponse la plus complète. Nous te répondrons très rapidement !</p>
                      </div>
                    </div>

                    <!-- FIN TITRE DESKTOP -->

                    <!-- FIL D'ARIANE -->
                    <div class="row d-none d-xl-block pl-4 pt-4">
                      <div class="col-12">
                        <nav aria-label="breadcrumb" class="breadcrumb-smeno">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <!-- CONTENU-->
                        <!--  TITRE MOBILE-->
                        <div class="row d-block d-lg-none">
                            <div class="col-12 p-3 text-center">
                                <h1 class="text-uppercase blue">Contact</h1>
                                <p>Une question ou un soucis ?<br> As-tu pensé à consulter notre FAQ ? <br>La réponse s’y trouve peut-être !</p>
                                <p>Tu n'as pas trouvé ta réponse dans les FAQ ou sur le site ? Contacte-nous via ce formulaire en remplissant tous les champs pour qu'on puisse t'apporter la réponse la plus complète. Nous te répondrons très rapidement !
                                </p>
                            </div>
                        </div>
                        <!-- FIN TITRE MOBILE -->

                    <div class="container pt-lg-3 pl-lg-5 pb-lg-3">
                        <!-- FORMULAIRE -->
                        <div class="row">
                            <div class="col-12">
                                <form>
                                  <div class="row">
                                    <div class="col-lg-6 mb-4">
                                      <label for="nom" class="blue ff-fredoka strong">Nom</label>
                                      <input type="text" class="form-control text-center" id="nom">
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                      <label for="prenom" class="blue ff-fredoka strong">Prénom</label>
                                      <input type="text" class="form-control text-center" id="prenom">
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                      <label for="mail" class="blue ff-fredoka strong">Adresse mail*</label>
                                      <input type="email" class="form-control" id="mail" placeholder="pour recevoir la confirmation de ta souscription">
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                      <label for="telephone" class="blue ff-fredoka strong">Téléphone*</label>
                                      <input type="phone" class="form-control text-center" id="telephone">
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                      <label for="propos" class="blue ff-fredoka strong">Je vous contacte à propos*</label>
                                      <select class="form-control" id="propos">
                                        <option>de mon contrat</option>
                                        <option>Lorem Ipsum dolor sit</option>
                                        <option>Lorem Ipsum dolor sit</option>
                                        <option>Lorem Ipsum dolor sit</option>
                                      </select>
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                      <label for="sujet" class="blue ff-fredoka strong">A quel sujet?*</label>
                                      <select class="form-control" id="sujet">
                                        <option>Je change de situation (rattachement d'un conjoint / enfant, fin de droits)</option>
                                        <option>Lorem Ipsum dolor sit</option>
                                        <option>Lorem Ipsum dolor sit</option>
                                        <option>Lorem Ipsum dolor sit</option>
                                      </select>
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                      <label for="comment" class="blue ff-fredoka strong">Message*</label>
                                      <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                      <label for="fichierjoint" class="blue ff-fredoka strong">Joindre un fichier</label>
                                      <input type="file" class="form-control-file text-center" id="fichierjoint" multiple>
                                      <p>(Fichiers acceptés : jpg, png, pdf, doc, docx, odt, 2Mo maximum). Pour un traitement plus rapide de votre demande pensez à joindre vos factures.</p>
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                      <label for="numeroSMENO" class="blue ff-fredoka strong">Numéro SMENO ou de sécurité sociale*</label>
                                      <input type="text" class="form-control text-center" id="numeroSMENO">
                                    </div>
                                    <div class="col-12 col-lg-12 mb-4 text-center text-lg-right">
                                      <button type="submit" class="btn orange-bg pl-5 pr-5 mb-2 border-radius-smeno">Envoyer</button>
                                    </div>
                                  </div>
                                </form>
                                <div class="row">
                                  <div class="col-12">
                                    <p class="mentions">Ces coordonnées nous permettront exclusivement de répondre à votre demande.
                                    </p>
                                    <p class="mentions">Elles ne seront ni conservées, ni réutilisées pour une autre finalité.</p>
                                    <p class="mentions">Le traitement des informations vous concernant a été déclaré à la CNIL pour la gestion de nos fichiers clients / prospects. Les destinataires des informations vous concernant sont les services de la SMENO, SMENO Assurances, les établissements de la Sécurité sociale, les organismes bancaires pour les informations permettant les règlements et leur gestion. Conformément à la loi « informatique et libertés » du 06 Janvier 1978 modifiée le 6 aout 2004, vous disposez d'un droit d'accès, de rectification, d'opposition et de suppression des données collectées vous concernant. Vous pouvez exercer vos droits en envoyant un courrier postal à l'adresse suivante : SMENO – Service client – CS 90027 59046 Lille Cedex ou par e-mail cliquez ici.</p>
                                     </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <!-- FIN FORMULAIRE -->
                        <!-- FIN CONTENU -->
                              <!-- FOOTER -->
                              <?php include 'includes/footer.html'; ?>
                              <!-- FIN FOOTER -->
                        <!--FIN CONTENT-->
                    </div>



                      </div>
                    </div>
                  </main>
                </div>
            </div>
        </div>

        <!-- BOTTOM BAR COMPARATEUR ET MUTUELLE -->
        <?php include 'includes/bottom-bar-contact2_ap.html'; ?>
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
