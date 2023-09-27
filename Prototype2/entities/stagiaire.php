<?php

    class Stagiaire{

        private $Id;
        private $Nom;
        private $CNE;

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

    }

?>