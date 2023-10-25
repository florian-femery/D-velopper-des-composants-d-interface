<!DOCTYPE html>
<html>
<head>
    <title>Fonction</title>
</head>
<body>
<?php
function genererLien($url, $titre) {
    $lien = "<a href='$url'>$titre</a>";
    return $lien;
}

// Exemple d'utilisation de la fonction
$lien = "https://www.exemple.com";
$titre = "Cliquez ici";
echo genererLien($lien, $titre);
?>
</body>
</html>