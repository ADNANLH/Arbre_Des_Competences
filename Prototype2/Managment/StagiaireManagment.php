<?php
    // require '../entities/stagiaire.php';
    if (file_exists('./entities/stagiaire.php')) {
        include './entities/stagiaire.php';
    } elseif (file_exists('../entities/stagiaire.php')) {
        include '../entities/stagiaire.php';
    } else {
        // Neither file exists, so handle the error here
        echo "Error: Stagiaire.php not found in either directory.";
    }
    
    require __DIR__ . '/../DB/connection.php';
    class StagiaireManagment {
        private $conn;
        
        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function getAllData(){
            $sql = "SELECT * FROM personne";
            $query = mysqli_query($this->conn, $sql);
            $stagiaires_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
            $stagiaires = array();

            foreach($stagiaires_data as $stagiaire_data){
                $stagiaire = new stagiaire();
                $stagiaire->SetId($stagiaire_data['Id']);
                $stagiaire->SetNom($stagiaire_data['Nom']);
                $stagiaire->SetCNE($stagiaire_data['CNE']);
                array_push($stagiaires, $stagiaire);

            }
            return $stagiaires;
        }

        public function Add($stagiaire) {
            $Nom = $stagiaire->getNom();
            $CNE = $stagiaire->getCNE();
        
            // Prepare the SQL statement with placeholders
            $sql = "INSERT INTO `personne` (`Nom`, `CNE`) VALUES (?, ?)";
            $stmt = $this->conn->prepare($sql);
        
            if (!$stmt) {
                // Handle the error here
                die("Query preparation failed: " . $this->conn->error);
            }
        
            // Bind the parameters
            $stmt->bind_param("ss", $Nom, $CNE);
        
            // Execute the prepared statement
            if ($stmt->execute()) {
                // Insertion successful
                return true;
            } else {
                // Insertion failed
                return false;
            }
        }
        
        
        
        
        
    }
   
    



?>