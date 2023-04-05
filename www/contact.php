<?php
//Traitement du formulaire
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Connexion à la base de données
    $db = mysqli_connect("localhost", "root", "root", "contact");

    // Insertion des données du formulaire
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    mysqli_query($db, $sql);

    mysqli_close($db);
    $message_envoye = "Votre message a été envoyé avec succès !";
}

?>
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

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper #212121 grey darken-4" id="nav">
                <a href="contact.php" class="right hide-on-med-and-down" id="contact" >Contact</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#">Jeux</a></li>
                    
                </ul>
            </div>
        </nav>
    </div>
    <div id="main">
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
    
    
        <footer class="footer">
            © Mon site web - Tous droits réservés
        </footer>
    </div>

</body>
</html>
