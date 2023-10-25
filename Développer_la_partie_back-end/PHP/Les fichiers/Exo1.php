<!DOCTYPE html>
<html>
<head>
    <title>Fichiers</title>
</head>
<body>
<?php
        // Remplacez "nom_du_fichier.txt" par le nom de votre fichier
        $fichier = "ncode.amorce.org_ressources_Pool_CDA_WEB_PHP_frc_liens.txt";

        // Vérifiez si le fichier existe
        if (file_exists($fichier)) {
            // Lire le contenu du fichier dans un tableau
            $contenu = file($fichier);

            // Parcourir les lignes du fichier et générer des liens
            foreach ($contenu as $ligne) {
                $ligne = trim($ligne); // Supprimer les espaces et sauts de ligne inutiles
                // Générer un lien hypertexte
                echo "<li><a href='$ligne'>$ligne</a></li>";
            }
        } else {
            echo "Le fichier n'existe pas.";
        }
?>
</body>
</html>