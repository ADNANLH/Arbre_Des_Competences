<?php
include_once '../DB/connect.php';
include_once '../Entity/trainees.php';
class TraineesManagment extends Db
{
    public function getTraineesData()
    {
        $sql = 'SELECT personne.Id, personne.Nom, personne.CNE, ville.Nom AS VilleNom
        FROM personne
        INNER JOIN ville ON personne.Ville_Id = ville.Id;';
        $stm = $this->connect()->prepare($sql);
        if (!$stm->execute()) {
            $stm = null;
            exit();
        }
        $allTraineesData = $stm->fetchAll(PDO::FETCH_ASSOC);
        $allTraineesDataArray = [];
        foreach ($allTraineesData as $traineeData) {
            $traineeInfo = new Trainees();
            $traineeInfo->setId($traineeData['Id']);
            $traineeInfo->setName($traineeData['Nom']);
            $traineeInfo->setCNE($traineeData['CNE']);
            $traineeInfo->setCity($traineeData['VilleNom']);
            array_push($allTraineesDataArray, $traineeInfo);
        }
        return $allTraineesDataArray;
    }


    public function GetTrainee($Id) {
        $sql = "SELECT personne.Id, personne.Nom, personne.CNE, ville.Nom AS VilleNom 
                FROM personne 
                INNER JOIN ville ON personne.Ville_Id = ville.Id
                WHERE personne.Id = ?"; // Specify the table in the WHERE clause
        $stm = $this->connect()->prepare($sql);
    
        if (!$stm) {
            return null; // Exit if the statement preparation fails
        }
    
        // Bind the parameter
        $stm->bindParam(1, $Id, PDO::PARAM_INT); // Assuming integer, adjust the type if necessary
    
        // Execute the prepared statement
        if (!$stm->execute()) {
            return null; // Exit if the execution fails
        }
    
        // Fetch the data as an associative array
        $trainee_data = $stm->fetch(PDO::FETCH_ASSOC);
    
        if ($trainee_data) {
            // Create a Stagiaire object and set its properties
            $traineeInfo = new Trainees();
            $traineeInfo->setId($trainee_data['Id']);
            $traineeInfo->setName($trainee_data['Nom']);
            $traineeInfo->setCNE($trainee_data['CNE']);
            $traineeInfo->setCity($trainee_data['VilleNom']);
            return $traineeInfo;
        } else {
            // No matching record found
            return null;
        }
    }
    
    

    public function addTrainee($addTrainee){
        $name = $addTrainee->getName();
        $cne = $addTrainee->getCNE();
        $city = $addTrainee->getCity();
        $type = "stagiaire";
        $stm = $this->connect()->prepare('INSERT INTO personne (Nom , CNE , Type , Ville_Id) VALUE (:name , :cne , :type , :city)');
        $stm->bindParam(':name', $name);
        $stm->bindParam(':cne', $cne);
        $stm->bindParam(':type', $type);
        $stm->bindParam(':city', $city);
        $stm->execute();

    }

    public function updateTrainner($update)
    {
        $id = $update->getId();
        $name = $update->getName();
        $cne = $update->getCNE();
        $city = $update->getCity();
        $query = 'UPDATE personne SET Nom = :name , CNE = :cne , Ville_Id = :ville WHERE Id=:id';
        $stm = $this->connect()->prepare($query);
        $stm->bindParam(':name', $name);
        $stm->bindParam(':cne', $cne);
        $stm->bindParam(':ville', $city);
        $stm->bindParam(':id', $id);
        $stm->execute();
    }

      public function deleteTrainner($delete)
    {
        $id = $delete->getId();
        $query = 'DELETE FROM personne WHERE Id = :id';
        $stm = $this->connect()->prepare($query);
        $stm->bindParam(':id', $id);
        $stm->execute();
    }




}

?>