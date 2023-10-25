<?php
class Magasin {
    private $nom;
    private $adresse;
    private $code_postal;
    private $ville;
    private $restaurant;

    public function __construct($nom, $adresse, $code_postal, $ville, $restaurant) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->restaurant = $restaurant;
    }
}

$magasin1 = new Magasin("Magasin A", "123 Rue de la République", "75001", "Paris", "Restaurant d'entreprise");

$employe1->magasin = $magasin1;
$employe2->magasin = $magasin1;
$employe3->magasin = $magasin1;
$employe4->magasin = $magasin1;
$employe5->magasin = $magasin1;
?>