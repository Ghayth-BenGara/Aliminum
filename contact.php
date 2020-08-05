<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta name = "keywords" content = "Best Aliminum">
        <meta name =  "author" contet = "Ghayth Ben Gara">
        <meta http-equiv = "refresh" content = "700">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Best Alu : Contact</title>
        <link href = "images/favicon.png" rel = "icon"  type = "image/x-icon" />
        <link href = "images/favicon.png" rel = "icon"  type = "image/x-icon" />
        <link href = "css/bootstrap.min.css" rel = "stylesheet">
        <link href = "vendors/animate/animate.css" rel = "stylesheet">
        <link href = "vendors/font-awesome/css/font-awesome.min.css" rel = "stylesheet" >
        <link href = "vendors/camera-slider/camera.css" rel = "stylesheet" >
        <link href = "vendors/owl_carousel/owl.carousel.css" rel = "stylesheet" media = "all">
        <link href = "css/style.css" rel = "stylesheet" media = "all" />
        <link href = "css/sweetalert2.css" rel = "stylesheet"/>
    </head>
    <body>
    <div class = "preloader"></div>
    <?php include_once 'php/header2.php' ?>
    <section class = "banner_area" data-stellar-background-ratio = "0.5">
        <h2>Contacter la société</h2>
        <ol class = "breadcrumb">
            <li><a href = "index.php">Accueil</a></li>
            <li><a href = "contact.php" class = "active">Contact</a></li>
        </ol>
    </section>
    <div class = "contact_map">
        <div class = "mapouter">
            <div class = "gmap_canvas">
                <iframe id = "gmap_canvas" src = "https://maps.google.com/maps?q=manzel%20abderrahmen%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder = "0" scrolling = "no" marginheight = "0" marginwidth = "0"></iframe>
            </div>
        </div>
    </div>
    <section class = "all_contact_info">
        <div class = "container">
            <div class = "row contact_row">
                <div class = "col-sm-6 contact_info">
                    <h2>Cordonnés et informations</h2>
                    <div class = "location">
                        <div class = "location_laft">
                            <a class = "f_location" href = "#">Adresse</a>
                            <a href = "#">Mobile</a>
                            <a href = "#">Fixe</a>
                            <a href = "#">Email</a>
                        </div>
                        <div class = "address">
                            <a href = "#">Rue Safta Manzel AbdelRahmen <br> 7035 Bizerte </a>
                            <a href = "#">54 577 559</a>
                            <a href = "#">72 439 259</a>
                            <a href = "#">stebestalu@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class = "col-sm-6 contact_info send_message">
                    <h2>Contacter-nous</h2>
                    <form class = "form-inline contact_box" name = "form" id = "form" method = "POST" action = "#" onsubmit = "return getForm();">
                        <input type = "text" class = "form-control input_box" name = "prenom" id = "prenom" placeholder = "Prénom *" required>
                        <input type = "text" class = "form-control input_box" name = "nom" id = "nom" placeholder = "Nom *" required>
                        <input type = "email" class = "form-control input_box" name = "email" id = "email" placeholder = "Email *" required>
                        <input type = "text" class = "form-control input_box" name = "objet" id = "objet" placeholder = "Objet *" required>
                        <textarea class = "form-control input_box" name = "message " id = "message" placeholder = "Message" required></textarea>
                        <button type = "submit" class = "btn btn-default">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include_once 'php/footer.php' ?>
        <script src = 'js/font_js.js'></script>
        <script src = "js/jquery-1.12.0.min.js"></script>
        <script src = "js/bootstrap.min.js"></script>
        <script src = "vendors/animate/wow.min.js"></script>
        <script src = "vendors/camera-slider/jquery.easing.1.3.js"></script>
        <script src = "vendors/camera-slider/camera.min.js"></script>
        <script src = "vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src = "vendors/isotope/isotope.pkgd.min.js"></script>
        <script src = "vendors/Counter-Up/jquery.counterup.min.js"></script>
        <script src = "vendors/Counter-Up/waypoints.min.js"></script>
        <script src = "vendors/owl_carousel/owl.carousel.min.js"></script>
        <script src = "vendors/stellar/jquery.stellar.js"></script>
        <script src = "js/theme.js"></script>
        <script src = "js/fonction.js"></script>
        <script src = "js/sweetalert2.all.min.js"></script>
    </body>
</html>