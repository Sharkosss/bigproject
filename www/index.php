<!DOCTYPE html>
<html>
    <head>
        <title>Portfoleo</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/styleindex.css">

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

                <li>
                    <a class="dropdown-trigger" data-beloworigin="true" href="#!" data-target="dropdown2">
                        Projects<i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>

                
            </ul>       
        </div>
    </nav>

    <ul id="dropdown1" class="dropdown-content dropdown-color">
        <style> 
        .dropdown-color {
            background-color: #212121 !important;
            }
        .dropdown-content a {
            color: white !important;
            }
        </style>
        <li><a href="games/loadings/loading_blackjack.php">Blackjack</a></li>
        <li><a href="games/loadings/loading_pendu.php">Pendu</a></li>
    </ul>

    <ul id="dropdown2" class="dropdown-content dropdown-color2">
        <style> 
        .dropdown-color2 {
            background-color: #212121 !important;
            }
        .dropdown-content a {
            color: white !important;
            }
        </style>
        <?php
        // $sql = "SELECT * FROM project";
        // $pre = $pdo -> prepare($sql);
        // $projects = $pre->fetchall(PDO::FETCH_ASSOC);

        // foreach($projects as $project){
        ?> 
        <li><a href="<? echo $project['id']?>"><? echo $project['projectname']?></a></li>
        <?php
        // }
        ?>
    </ul>
    

        
        </div>
        
            <section >
                <div class="parallax-container">
                    <div class="parallax"><img src="img/cutimg1.jpg"></div>
                </div>
                <div class="section white">
                    <div class="row container">
                        <h1 class="header">Bienvenue sur mon portfolio !</h1>
                        <div class="row">
                            <div class="col s12 m6 l4">
                                <img src="img/GRISEY.jpg" alt="Grisey Léo" id="grisey">
                            </div>
                            <div class="col s12 m6 l7">
                                <p class="grey-text text-darken-3 lighten-3"> 
                                    Bonjour et bienvenue sur mon portfolio! Je suis Léo Grisey, un étudiant passionné de cybersécurité âgé de 18 ans et résidant dans la ville de Lyon. Actuellement en première année à Guardia, je suis déterminé à acquérir toutes les compétences nécessaires pour devenir un expert en sécurité informatique.
                                    <br>
                                    <br>
                                    En dehors des cours, je suis également très actif et je m'implique dans différentes activités. J'aime la musique et je joue de la basse depuis plusieurs années. J'adore aussi les sports de plein air comme la randonnée, le parkour et le hand. J'ai également participé à plusieurs compétitions de jeux en ligne, notamment des tournois de jeux de stratégie.
                                    <br>
                                    <br>
                                    Je suis un travailleur acharné et je suis constamment à la recherche de nouveaux défis pour améliorer mes compétences en cybersécurité. J'aime également travailler en équipe et je crois que la collaboration est essentielle pour réussir dans ce domaine.
                                    <br>
                                    <br>
                                    Si vous cherchez un professionnel passionné, compétent et dévoué dans le domaine de la cybersécurité, je suis votre homme! N'hésitez pas à me contacter pour discuter de tout projet ou opportunité que vous pourriez avoir en tête
                                    <br>
                                    <br>
                                    Merci de votre intérêt et j'espère avoir l'occasion de discuter avec vous prochainement.
                                </p>
                            </div>
                            <div class="socialmedia col s12 m12">
                                <br>
                                <br>
                                <h2 class="socialmediatitle grey-text text-darken-3 lighten-3" > Ou me retrouver ? </h2>
                                <br>
                                <div class="socialmediapictures col s12 m4 l4" >
                                <a href="https://github.com/requinxv" > <img src="img/github.png" alt="requinxv" id="pictures"></a>
                                    <br>
                                    <a href="https://github.com/Sharkosss" id="color"> requinxv </a> 
                                    <br>
                                    <br>
                                </div>
                                <div class="socialmediapictures col s12 m4 l4">
                                    <a href="https://github.com/Sharkosss" > <img src="img/github.png" alt="Sharkosss" id="pictures" > </a>
                                    <br>
                                    <a href="https://github.com/Sharkosss" id="color"> Sharkosss </a>
                                    <br>
                                    <br>
                                </div>
                                <div class="socialmediapictures col s12 m4 l4">
                                    <a href="https://www.linkedin.com/in/l%C3%A9o-grisey-6035a6241" > <img src="img/linkedin.png" alt="Sharkosss" id="pictures" > </a>
                                    <br>
                                    <a href="https://www.linkedin.com/in/l%C3%A9o-grisey-6035a6241" id="color" > Léo </a>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
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

