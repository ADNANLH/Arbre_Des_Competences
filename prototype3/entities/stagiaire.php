<?php

    class Stagiaire{

        private $Id;
        private $Nom;
        private $CNE;
        private $VilleNom;

        function setId($Id){
            $this->Id = $Id;
        }
        
        function getId(){
            return $this->Id;
        }
        
        function setNom($Nom){
            $this->Nom = $Nom;
        }

        function getNom(){
            return $this->Nom;
        }

        function setCNE($CNE){
            $this->CNE = $CNE;
        }

        function getCNE(){
            return $this->CNE;
        }

        function setVilleNom($VilleNom){
            $this->VilleNom = $VilleNom;
        }

        function getVilleNom(){
            return $this->VilleNom;
        }

    }

?>