<?php
class StudentDAO{
    private $db;
    private $databaseConnectionObj;

    //  Connect to the database. Create an instance of database object.
    
   public function __construct()
   {
       $this->databaseConnectionObj = new DatabaseConnection();
       $this->db = $this->databaseConnectionObj->connect();
   }
  
   /**
     * Get All students
     *
     * @return array
     */

      public function GetAllStudents()
      {
  
          $sql = "SELECT * FROM Student";
          $raw_result = $this->db->prepare($sql);
          if (!$raw_result->execute()) {
              $raw_result = null;
              exit();
          }
          $allTraineesData = $raw_result->fetchAll(PDO::FETCH_ASSOC);
          $dataArr = [];
          foreach ($allTraineesData as $data) {
              $traineeInfo = new Student($data['Id'], $data['Name'], $data['Email'], $data['DateOfBirth']);
              array_push($dataArr, $traineeInfo);
          }
  
          return $dataArr;
      }

   

}

?>