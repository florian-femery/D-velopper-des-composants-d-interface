<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire</title>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entreprise = $_POST["entreprise"];
    $contacter = $_POST["contacter"];
    $adresse = $_POST["adresse"];
    $cp = $_POST["cp"];
    $Ville = $_POST["Ville"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $environnement = $_POST["choix"];

    // Validation des données (exemple : vérifier si les champs obligatoires sont remplis)
    if (empty($entreprise) || empty($contacter) || empty($cp)) {
        echo "Tous les champs obligatoires doivent être remplis.";
                // Rediriger l'utilisateur vers le formulaire
                header("Location: Formulaire.php");
    } else {
        // Vous pouvez effectuer ici le traitement des données ou l'enregistrement dans une base de données
        // Par exemple, vous pouvez envoyer un e-mail, enregistrer les données dans une base de données, etc.

        // Pour cet exemple, nous allons simplement afficher les données à l'utilisateur
        echo "<h2>Données reçues du formulaire :</h2>";
        echo "<p><b>Société : </b> $entreprise</p>";
        echo "<p><b>Personne à contacter : </b> $contacter</p>";
        echo "<p><b>Adresse de l'entreprise : </b> $adresse</p>";
        echo "<p><b>Code Postal : </b> $cp</p>";
        echo "<p><b>Ville : </b> $Ville</p>";
        echo "<p><b>E-mail : </b> $mail</p>";
        echo "<p><b>Téléphone : </b> $tel</p>";
        echo "<p><b>Environnement technique du projet : </b> $environnement</p>";
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}
?>
    <body>
<hr>
        <h1>gg</h1>
        <p><a href="Formulaire.php">Retour au formulaire</a></p>

<hr>  
    </body>
</html>