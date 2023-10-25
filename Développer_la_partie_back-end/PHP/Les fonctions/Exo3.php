<!DOCTYPE html>
<html>
<head>
    <title>Fonction</title>
</head>
<body>
<?php
function verifier_complexite_mot_de_passe($mot_de_passe) {
    // Vérifie la longueur du mot de passe
    if (strlen($mot_de_passe) < 8) {
        return false;
    }
    
    // Vérifie la présence d'au moins un chiffre
    if (!preg_match('/\d/', $mot_de_passe)) {
        return false;
    }
    
    // Vérifie la présence d'au moins une majuscule et une minuscule
    if (!preg_match('/[A-Z]/', $mot_de_passe) || !preg_match('/[a-z]/', $mot_de_passe)) {
        return false;
    }
    
    // Si toutes les conditions sont satisfaites, le mot de passe est valide
    return true;
}

// Exemple d'utilisation
$mot_de_passe = "TopSecret42";
if (verifier_complexite_mot_de_passe($mot_de_passe)) {
    echo "Le mot de passe est valide.";
} else {
    echo "Le mot de passe ne respecte pas les règles de complexité.";
}
?>
</body>
</html>