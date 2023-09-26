<?php


    class Stagiaire{

        private $id;
        private $Nom;
        private $Cne;
        private $Type;

        function setId($id){
            $this->id = $id;
        }
        
        function getId(){
            return $this->id;
        }
        
        function setNom($Nom){
            $this->Nom = $Nom;
        }

        function getNom(){
            return $this->Nom;
        }

        function setCne($Cne){
            $this->Cne = $Cne;
        }

        function getCne(){
            return $this->Cne;
        }
        function setType($Type){
            $this->Type = $Type;
        }

        function getType(){
            return $this->Type;
        }
    }

?>