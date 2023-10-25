<?php
    class Employe{
        private $nom;
        private $prenom;
        private $date_embauche;
        private $fonction;
        private $salaire;
        private $service;

        public function __construct($nom, $prenom, $date_embauche, $fonction, $salaire, $service) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date_embauche = $date_embauche;
            $this->fonction = $fonction;
            $this->salaire = $salaire;
            $this->service = $service;
        }

        public function anciennete() {
            $embauche = new DateTime($this->date_embauche);
            $today = new DateTime();
            $interval = $embauche->diff($today);
            return $interval->y;
        }

        public function calculerPrime() {
            $anciennete = $this->anciennete();
            $prime = 0.05 * $this->salaire + 0.02 * $anciennete * $this->salaire;
            return $prime;
        }

        public function envoyerOrdreTransfert(){
            $prime = $this->calculerPrime();
            $dateVersement = new DateTime(date("Y-m-d"));
            $dateVersement ->setDate(date("Y"), 11, 30);
            return "Ordre de transfert envoyé à la banque le" . $dateVersement->format("Y-m-d") . ": Montant de la prime : " . $prime . "K euros.";
        }
    }
    $employe1 = new Employe("Dupont", "Jean", "2010-02-15", "Vendeur", 30000, "Commercial");
    $employe2 = new Employe("Martin", "Alice", "2015-07-20", "Comptable", 40000, "Comptabilité");
    $employe3 = new Employe("Lefebvre", "Paul", "2018-03-10", "Caissier", 25000, "Commercial");
    $employe4 = new Employe("Garcia", "Marie", "2012-11-05", "Responsable Magasin", 45000, "Magasin");
    $employe5 = new Employe("Muller", "Thomas", "2019-09-30", "Assistant RH", 35000, "Ressources Humaines");    
?>