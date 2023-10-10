<?php

require 'Managment/StagiaireManagment.php';
$stagiaireManager = new StagiaireManagment($conn);
$stagiaires = $stagiaireManager->getAllData();
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
        <h2 class="title mb-5">Arbre des Competences</h2>
        <a class="btn btn-primary  mb-5" href="./UI/add.php">Ajouter</a>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Nom et Prénom</th>
                <th>CNE</th>
                <th>Ville</th>
                <th>Actions</th>
            </tr>
            <?php
            foreach ($stagiaires as $stagiaire) {
            ?>
                <tr>
                    <th><?= $stagiaire->getId() ? $stagiaire->getId() : "Null" ?></th>
                    <td><?= $stagiaire->getNom() ? $stagiaire->getNom() : "Null" ?></td>
                    <td><?= $stagiaire->getCNE() ? $stagiaire->getCNE() : "Null"; ?></td>
                    <td><?= $stagiaire->getVilleNom() ? $stagiaire->getVilleNom() : "Null"; ?></td>
                    <td>
                        <a class="btn btn-warning " href="./UI/Modifier.php?Id=<?php echo $stagiaire->getId() ?>">Modifier</a>
                        <a class="btn btn-danger" href="./UI/Supprimer.php?Id=<?php echo $stagiaire->getId() ?>">Supprimer</a>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>


</body>

</html>