<?php 
    include "Vehicule.php";

    //Voiture.php
    class VoitureEssence extends Vehicule {

        private $immatriculation;
        private $couleur;
        private $marque;

        //constructeur
        public function  __construct($uneCouleur, $uneImmatriculation, $uneMarque) { 
            $this->couleur = $uneCouleur;
            $this->immatriculation = $uneImmatriculation;
        }

        //Getter & Setter
        public function  getImmatriculation() {
            $this->immatriculation;
        }
        
        public function  setImmatriculation($immat) {
            //1.NTU vérifier $immat via une expression regulière
            $this->immatriculation = $immat; 
        }

        public function  getCouleur() {}
        public function  getMarque() {}
        public function  setMarque() {}
        public function  setCouleur($couleur) {
            //NTU
            $this->couleur = $couleur;
        }

        public function avancer() {
            for($i=0; $i<50; $i++) {
                $this->injecterEssence();
                $this->allumerBougie(); 
            }
        }
        public function reculer() {}
        
        private function injecterEssence() {
            .....
        } 
        private function allumerBougie() {}

    }