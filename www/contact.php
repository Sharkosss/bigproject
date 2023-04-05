<!DOCTYPE html>
<html>
<head>
    <title>Me contacter</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/stylepage.css">
    <meta charset="UTF-8">
</head>
<body>
    <div id="main">
        <div class="navbar colornav navbar-fixed">
            <nav> 
                <div class="nav-wrapper colornav accent-2 ">
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="#">Jeux</a></li>
                        <li style="margin-right: 0;"><a href="contact.php">Me contacter</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <section>
            <h1>Me contacter</h1>
            <?php if (isset($message_envoye)) { ?>
            <div class="success-message"><?php echo $message_envoye; ?></div>
            <?php unset($message_envoye); } ?>

            <form action="" method="post">
                <input type="text" name="name" placeholder="Nom" required /><br />
                <input type="email" name="email" placeholder="Email" required /><br />
                <textarea name="message" placeholder="Votre message" required></textarea><br />
                <input type="submit" name="submit" value="Envoyer" class="oval-button" />
            </form>
        </section>
        <footer>
            © Mon site web - Tous droits réservés
        </footer>
    </div>
</body>
</html>
