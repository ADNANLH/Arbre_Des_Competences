<?php

require 'Managment/StagiaireManagment.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </style>
</head>

<body>
    <div class="container">
        <h2>Arbre des Competences</h2>
        <a class="btn btn-light" href="./UI/add.php">Ajouter</a>
        <table>
            <tr>
                <th>Id</th>
                <th>Nom et Prénom</th>
                <th>CNE</th>
            </tr>
            <?php
            foreach ($stagiaires as $stagiaire) {
            ?>
                <tr>
                    <td><?= $stagiaire->getId() ? $stagiaire->getId() : "Null" ?></td>
                    <td><?= $stagiaire->getNom() ? $stagiaire->getNom() : "Null" ?></td>
                    <td><?= $stagiaire->getCNE() ? $stagiaire->getCNE() : "Null"; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>


</body>

</html>