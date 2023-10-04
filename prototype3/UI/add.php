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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./UI/Style/style.css">
    <title>Arbre Competences</title>
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title mb-5">Ajouter un stagiaire</h2>
        <form action="" method="POST" class="form">
            <label for="Nom">Nom Complet:</label><br>
            <input type="text" id="nom" name="Nom" required><br><br>

            <label for="CNE">CNE</label><br>
            <input type="text" id="cne" name="CNE" required><br><br>

            <button type="submit" class="btn btn-primary" name="submite">Ajouter</button>
        </form>
    </div>


</body>

</html>