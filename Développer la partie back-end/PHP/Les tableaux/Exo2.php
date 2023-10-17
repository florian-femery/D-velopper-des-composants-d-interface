<!DOCTYPE html>
<html>
<head>
    <title>Tableaux</title>
</head>
<body>
    <h1>Liste des Capitales et des Pays</h1>
    <?php
    // Création du tableau associatif des pays et capitales
    $capitales = array(
        "Bucarest" => "Roumanie",
        "Bruxelles" => "Belgique",
        "Oslo" => "Norvège",
        "Ottawa" => "Canada",
        "Paris" => "France",
        "Port-au-Prince" => "Haïti",
        "Port-d'Espagne" => "Trinité-et-Tobago",
        "Prague" => "République tchèque",
        "Rabat" => "Maroc",
        "Riga" => "Lettonie",
        "Rome" => "Italie",
        "San José" => "Costa Rica",
        "Santiago" => "Chili",
        "Sofia" => "Bulgarie",
        "Alger" => "Algérie",
        "Amsterdam" => "Pays-Bas",
        "Andorre-la-Vieille" => "Andorre",
        "Asuncion" => "Paraguay",
        "Athènes" => "Grèce",
        "Bagdad" => "Irak",
        "Bamako" => "Mali",
        "Berlin" => "Allemagne",
        "Bogota" => "Colombie",
        "Brasilia" => "Brésil",
        "Bratislava" => "Slovaquie",
        "Varsovie" => "Pologne",
        "Budapest" => "Hongrie",
        "Le Caire" => "Egypte",
        "Canberra" => "Australie",
        "Caracas" => "Venezuela",
        "Jakarta" => "Indonésie",
        "Kiev" => "Ukraine",
        "Kigali" => "Rwanda",
        "Kingston" => "Jamaïque",
        "Lima" => "Pérou",
        "Londres" => "Royaume-Uni",
        "Madrid" => "Espagne",
        "Malé" => "Maldives",
        "Mexico" => "Mexique",
        "Minsk" => "Biélorussie",
        "Moscou" => "Russie",
        "Nairobi" => "Kenya",
        "New Delhi" => "Inde",
        "Stockholm" => "Suède",
        "Téhéran" => "Iran",
        "Tokyo" => "Japon",
        "Tunis" => "Tunisie",
        "Copenhague" => "Danemark",
        "Dakar" => "Sénégal",
        "Damas" => "Syrie",
        "Dublin" => "Irlande",
        "Erevan" => "Arménie",
        "La Havane" => "Cuba",
        "Helsinki" => "Finlande",
        "Islamabad" => "Pakistan",
        "Vienne" => "Autriche",
        "Vilnius" => "Lituanie",
        "Zagreb" => "Croatie"
    );

    // Afficher la liste des capitales par ordre alphabétique suivie du nom du pays
    echo "<h2>Liste des Capitales par ordre alphabétique:</h2>";
    asort($capitales);
    foreach ($capitales as $pays => $capitale) {
        echo "$capitale - $pays<br>";
    }

    // Afficher la liste des pays par ordre alphabétique suivie du nom de la capitale
    echo "<h2>Liste des Pays par ordre alphabétique:</h2>";
    ksort($capitales);
    foreach ($capitales as $pays => $capitale) {
        echo "$pays - $capitale<br>";
    }

    // Afficher le nombre de pays dans le tableau
    echo "<h2>Nombre de pays dans le tableau:</h2>";
    echo count($capitales);

    // Supprimer les capitales ne commençant pas par la lettre 'B'
    foreach ($capitales as $pays => $capitale) {
        if (substr($capitale, 0, 1) != 'B') {
            unset($capitales[$pays]);
        }
    }

    // Afficher le contenu du tableau après la suppression
    echo "<h2>Capitales restantes après suppression des non-'B':</h2>";
    foreach ($capitales as $pays => $capitale) {
        echo "$pays - $capitale<br>";
    }
    ?>
</body>
</html>
