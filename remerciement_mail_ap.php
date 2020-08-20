<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merci pour votre message</title>
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
                    <!-- REMERCIEMENT -->
                    <div class="row green-bg p-5 align-items-center">
                        <div class="col-12 col-lg-6 pb-3">
                          <img src="img/merci-email.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-left">
                            <h1 class="white">Ton message a bien été envoyé !</h1>
                            <p class="white">Un conseiler te répondra dans les plus brefs délais </p>
                        </div>
                    </div>
                    <!-- FIN REMERCIEMENT-->
                    <!-- INSCRIPTION NEWSLETTER -->
                    <div class="row orange-bg p-5 align-items-center d-flex">
                        <div class="col-12 col-lg-6 pb-3 order-lg-2 text-center">
                          <img src="img/newsletter.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-lg-6 text-center text-lg-left order-lg-1">
                          <h1 class="white">Rejoins la communauté</h1>
                          <p class="white">pour rester informé de nos nouveautés et recevoir des offres totalement personnalisées à ton style de vie ! </p>
                          <form>
                            <input type="email" class="form-control newsletter" id="newsletter" placeholder="ton adresse email">
                            <button type="submit" class="btn white-bg border-radius-smeno mt-4 lien-faq">Valider</button>
                          </form>
                        </div>
                    </div>
                    <!-- FOOTER -->
                    <?php include 'includes/footer.html'; ?>
                    <!-- FIN FOOTER -->
              </main>
        </div>
    </div>

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
    <script src="js/arrow.js"></script>
    <script src="js/tooltip.js"></script>
</body>
</html>
