<?php

    require '../Managment/StagiaireManagment.php';
    function getAllCities($pdo) {
        $villes = array();
        
        // SQL query using placeholders
        $sql = "SELECT * FROM ville";
        
        // Prepare the SQL statement
        $stmt = $pdo->prepare($sql);
        
        // Execute the prepared statement
        $stmt->execute();
        
        // Fetch the results as an associative array
        $villes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $villes;

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
            <label for="nom">Nom et Prénom:</label>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="cne">CNE</label>
            <input type="text" id="cne" name="cne" required><br><br>

            <label for="ville">Ville</label>
            <select id="ville" name="ville" required>
                <?php
                // Fetch and populate cities with their IDs dynamically
                $conn = $dbConnection->getConnection();
                $villes = getAllCities($conn);

                foreach ($villes as $ville) {
                    $villeId = $ville['Id'];
                    $villeNom = $ville['Ville'];
                    echo "<option value='$villeId'>$villeNom</option>";
                }
                ?>
            </select><br><br>

            <button name="submite">Ajouter</button>
        </form>
    </div>


</body>

</html>