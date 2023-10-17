<!DOCTYPE html>
<html>
<head>
    <title>Fonction</title>
</head>
<body>
<?php
function sommeTableau($tableau) {
    $somme = 0;
    foreach ($tableau as $valeur) {
        $somme += $valeur;
    }
    return $somme;
}

// Exemple d'utilisation
$monTableau = array(4, 3, 8, 2);
$resultat = sommeTableau($monTableau);
echo "La somme des valeurs du tableau est : " . $resultat;
?>
</body>
</html>