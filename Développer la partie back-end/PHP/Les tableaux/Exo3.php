<!DOCTYPE html>
<html>
<head>
    <title>Tableaux</title>
</head>
<body>
    <h1>Liste des Régions et Départements</h1>
    <?php
    // Création du tableau associatif des régions et départements
    $regions_departements = array(
        "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );
    

    // Trier le tableau associatif par ordre alphabétique des régions
    ksort($regions_departements);

    // Afficher la liste des régions suivie du nom des départements
    echo "<h2>Liste des Régions et Départements (par ordre alphabétique) :</h2>";
    foreach ($regions_departements as $region => $departements) {
        echo "<p><strong>$region</strong>: " . implode(", ", $departements) . "</p>";
    }

    // Afficher la liste des régions suivie du nombre de départements
    echo "<h2>Liste des Régions et Nombre de Départements :</h2>";
    foreach ($regions_departements as $region => $departements) {
        $nombre_departements = count($departements);
        echo "<p><strong>$region</strong>: $nombre_departements départements</p>";
    }
    ?>
</body>
</html>