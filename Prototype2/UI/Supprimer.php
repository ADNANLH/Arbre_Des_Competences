<?php
    require '../Managment/StagiaireManagment.php';


if(isset($_GET['Id'])){

       // Trouver tous les employés depuis la base de données 
       $stagiaireManager = new StagiaireManagment($conn);
       $Id = $_GET['Id'] ;
       $stagiaireManager->Delete($Id);
       header('Location: ../index.php');
}
?>