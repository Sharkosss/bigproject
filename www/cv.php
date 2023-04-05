<?php 

// Connexion à la base de données
$db = mysqli_connect("localhost", "username", "password", "database_name");

// Requête SQL pour récupérer les données du CV
$sql = "SELECT * FROM cv";
$result = mysqli_query($db, $sql);

// Récupération et affichage des données du CV
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p>Nom: " . $row["name"]. "</p>";
        echo "<p>Email: " . $row["email"]. "</p>";
        echo "<p>Expérience professionnelle: " . $row["experience"]. "</p>";
        echo "<p>Compétences: " . $row["skills"]. "</p>";
    }
} else {
    echo "Aucun CV trouvé";
}

mysqli_close($db);
?>