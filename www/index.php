<!DOCTYPE html>
<html>
    <head>
        <title>Mon Site Web</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/styleindex.css">

    </head>

    
    <body>
        <div class="navbar-fixed">
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper #212121 grey darken-4" id="nav">
                <a href="contact.php" class="right hide-on-med-and-down" id="contact" >Contact</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="games/loadings/loading_blackjack.php">Jeux</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>  
                       
            </div>
        </nav>
        
        </div>
        
            <section >
                <div class="parallax-container">
                    <div class="parallax"><img src="img/cutimg1.jpg"></div>
                </div>
                <div class="section white">
                    <div class="row container">
                        <h1 class="header">Bienvenue sur mon site web</h1>
                        <p class="grey-text text-darken-3 lighten-3"> Ceci est la page d'accueil de mon site web.</p>
                    </div>
                </div>
                <div class="parallax-container">
                    <div class="parallax"><img src="img/cut2img1.jpg"></div>
                </div>

            </section>
            <footer>
                © Mon site web - Tous droits réservés
            </footer>
        </div>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/jqueryjsmin.js" ></script>
<script src="js/materialize.min.js"></script>
<script src="js/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

