<?php
    require_once 'classes/Personnage.php';

    // Crée une instance de la classe Personnage:
    $p = new Personnage();

    // Définissez les attribus du personnage:
    $p->setNom("Doe");
    $p->setPrenom("John");
    $p->setAge("30");
    $p->setSexe("Masculin");

    // Affiche les attributs du personnage:
    echo "Nom : " . $p->getNom() . "<br>";
    echo "Prénom : " . $p->getPrenom() . "<br>";
    echo "Âge : " . $p->getAge() . "<br>";
    echo "Sexe : " . $p->getSexe() . "<br>";
?>