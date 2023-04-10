<!DOCTYPE html>
<html>
    <head>
        <title>Mon CV</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/cv.css">

    </head>

    
    <body>

        <?php require_once "Config/config.php";?>
        <div class="navbar-fixed">
        <!-- Dropdown Structure -->
        
            <nav>
                <div class="nav-wrapper #212121 grey darken-4" id="nav">
                    <a href="contact.php" class="right hide-on-med-and-down" id="contact">Contact</a>
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="cv.php">CV</a></li>
                        <li>
                            <a class="dropdown-trigger" data-beloworigin="true" href="#!" data-target="dropdown1">
                                Jeux<i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>

                        
                    </ul>       
                </div>
            </nav>

            <ul id="dropdown1" class="dropdown-content dropdown-color">

                <li><a href="games/loadings/loading_blackjack.php">Blackjack</a></li>
                <li><a href="#!">pendu</a></li>
            </ul>
        </div>
        <div class="center-align">
            <img src="img/cv/cv.jpg" id="image" width="40%" height="auto" class="cv-image" />
            <div class="buttons-container">
                <button class="zoom-button" id="zoom-in">+</button>
                <button class="zoom-button" id="zoom-out">-</button>
            </div>
            <br><br>
            <a href="img/cv/cv2023.pdf" download class="waves-effect waves-light btn btn-download" id="btn-download">Télécharger mon CV</a>
        </div>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/jqueryjsmin.js" ></script>
<script src="js/materialize.min.js"></script>
<script src="js/cv.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>