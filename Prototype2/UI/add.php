<?php



    require '../Managment/StagiaireManagment.php';

    if (!empty($_POST)) {
        // Create a new StagiaireManagment instance
        $stagiaireManager = new StagiaireManagment($conn);

        // Create a new Stagiaire instance and set its properties
        $stagiaire = new Stagiaire();
        $stagiaire->setNom($_POST['Nom']);
        $stagiaire->setCNE($_POST['CNE']);

        // Call the Add method of StagiaireManagment with the Stagiaire instance
        $result = $stagiaireManager->Add($stagiaire);

        if ($result) {
            // Insertion successful
            header("Location: ../index.php");
        } else {
            // Insertion failed, handle the error as needed
            echo "Insertion failed.";
        }
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./UI/Style/style.css">
    <title>Arbre Competences</title>
   
    
</head>

<body>
    <div class="container">
        <h2>Ajouter un stagiaire</h2>
        <form action="" method="POST">
            <label for="Nom">Nom Complet:</label>
            <input type="text" id="nom" name="Nom" required><br><br>

            <label for="CNE">CNE</label>
            <input type="text" id="cne" name="CNE" required><br><br>

            <button type="submit" name="submite">Ajouter</button>
        </form>
    </div>


</body>

</html>