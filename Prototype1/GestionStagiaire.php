<?php
    include './Stagiaire.php';

    class GestionStagiaire{
        private $serverName = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname  = "Projet1-Prototype1";
        private $charset = "utf8mb4";
        private $pdo;

        public function __construct(){
            $this->serverName = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "Projet1-Prototype1";
            $this->charset = "utf8mb4";

            //connection to the database
            try {
                $DB_con = "mysql:host=" . $this->serverName . ";dbname=" . $this->dbname . ";charset=" . $this->charset;
                $this->pdo = new PDO($DB_con, $this->username, $this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "is connected";
                return $this->pdo;
            } catch (PDOException $e) {
                // die("Failed to connect with MySQL: " . $e->getMessage());
                echo "Failed to connect with MySQL: " . $e->getMessage();
            }
        }

        public function getStagiaire(){
            $sql = "Select * from personne  WHERE Type = 'stagiaire'
            ";
            


            
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $StagiairesData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $Stagiaires = array();

            foreach($StagiairesData as $StagiaireData){
                $Stagiaire = new Stagiaire ;
                $Stagiaire->setId($StagiaireData['id']);
                $Stagiaire->setNom($StagiaireData['Nom']);
                $Stagiaire->setCne($StagiaireData['Cne']);
                $Stagiaire->setType($StagiaireData['Type']);
                array_push($Stagiaires, $Stagiaire);
            }
            return $Stagiaires;
        }
       

    }
?>