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
}

?>