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
         
            $sql = 'SELECT personne.*, ville.VilleNom 
                FROM personne 
                INNER JOIN ville ON personne.VilleId = ville.Id;
            ';
            $query = mysqli_query($this->conn, $sql);
            $stagiaires_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
            $stagiaires = array();

            foreach($stagiaires_data as $stagiaire_data){
                $stagiaire = new stagiaire();
                $stagiaire->setId($stagiaire_data['Id']);
                $stagiaire->setNom($stagiaire_data['Nom']);
                $stagiaire->setCNE($stagiaire_data['CNE']);
                $stagiaire->setVilleNom($stagiaire_data['VilleNom']);
                array_push($stagiaires, $stagiaire);

            }
            return $stagiaires;
        }

        public function Add($stagiaire, $VilleId) {
            $Nom = $stagiaire->getNom();
            $CNE = $stagiaire->getCNE();
        
            // Prepare the SQL statement with placeholders
            $sql = "INSERT INTO `personne`(`Nom`, `CNE`, `VilleId`) VALUES ('$Nom', '$CNE', '$VilleId')";
            $stmt = $this->conn->prepare($sql);
        
            if (!$stmt) {
                // Handle the error here
                die("Query preparation failed: " . $this->conn->error);
            }
        
            // Bind the parameters
            $stmt->bind_param("ss", $Nom, $CNE, $VilleId);
        
            // Execute the prepared statement
            if ($stmt->execute()) {
                // Insertion successful
                return true;
            } else {
                // Insertion failed
                return false;
            }
        }
        
        public function Delete($Id)
        {
            $sql = "DELETE FROM personne WHERE Id = ?";
            $stmt = $this->conn->prepare($sql);
        
            if (!$stmt) {
                // Handle the error here
                die("Query preparation failed: " . $this->conn->error);
            }
        
            // Bind the parameter
            $stmt->bind_param("i", $Id);
        
            // Execute the prepared statement
            if ($stmt->execute()) {
                // Deletion successful
                return true;
            } else {
                // Deletion failed
                return false;
            }
        }

        public function DisplayEdit($Id) {
            $sql = "SELECT * FROM personne WHERE Id= ?";
            $stmt = $this->conn->prepare($sql);
        
            if (!$stmt) {
                // Handle the error here
                die("Query preparation failed: " . $this->conn->error);
            }
        
            // Bind the parameter
            $stmt->bind_param("i", $Id);
        
            // Execute the prepared statement
            if ($stmt->execute()) {
                // Get the result set
                $result = $stmt->get_result();
        
                // Check if a row was found
                if ($result->num_rows == 1) {
                    // Fetch the data as an associative array
                    $stagiaire_data = $result->fetch_assoc();
        
                    // Create a Stagiaire object and set its properties
                    $stagiaire = new Stagiaire();
                    $stagiaire->setId($stagiaire_data['Id']);
                    $stagiaire->setNom($stagiaire_data['Nom']);
                    $stagiaire->setCNE($stagiaire_data['CNE']);
        
                    return $stagiaire;
                } else {
                    // No matching record found
                    return null;
                }
            } else {
                // Query execution failed
                return null;
            }
        }
        
        public function Edit($Id, $Nom, $CNE)
        {
            // SQL query with placeholders
            $sql = "UPDATE personne SET Nom=?, CNE=? WHERE Id=?";
            $stmt = $this->conn->prepare($sql);

            if (!$stmt) {
                // Handle the error here
                die("Query preparation failed: " . $this->conn->error);
            }

            // Bind parameters
            $stmt->bind_param("ssi", $Nom, $CNE, $Id);

            // Execute the prepared statement
            if ($stmt->execute()) {
                // Update successful
                return true;
            } else {
                // Update failed
                return false;
            }
        }
        public function getVilles()
        {
            $sql = "SELECT * FROM ville";
            $query = mysqli_query($this->conn, $sql);
            $Villes_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
            $Villes = array();
        
            foreach ($Villes_data as $villeData) {
                $Villes[] = ['id' => $villeData['Id'], 'name' => $villeData['VilleNom']];
            }
        
            return $Villes;
        }
        

        
        
        
        
        
    }
   
    



?>