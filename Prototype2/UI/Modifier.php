<?php

    require '../Managment/StagiaireManagment.php';

    if(isset($_GET['Id'])){
        $Id = $_GET['Id'] ;
        $stagiaireManager = new StagiaireManagment($conn);
        $Stagiaire = $stagiaireManager->DisplayEdit($Id);

    }
     
    if(isset($_POST['Modifier'])){
        $Id = $_POST['Id'];
        $Nom = $_POST['Nom'];
        $CNE = $_POST['CNE'];
        $stagiaireManager->Edit($Id, $Nom, $CNE);
        header('Location: ../index.php');
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
        <h2 class="title mb-5">Modifier le stagiaire <?php echo $Stagiaire->getNom()?></h2>
        <form action="" method="POST" class="form">
            <label for="Id">Id :</label><br>
            <input type="text" id="id" name="Id" value="<?php echo $Stagiaire->getId()?>" readonly><br><br>

            <label for="Nom">Nom Complet :</label><br>
            <input type="text" id="nom" name="Nom" value="<?php echo $Stagiaire->getNom()?>"><br><br>

            <label for="CNE">CNE :</label><br>
            <input type="text" id="cne" name="CNE" value="<?php echo $Stagiaire->getCNE()?>" ><br><br>

            <button type="submit" class="btn btn-primary" name="Modifier">Modifier</button>
        </form>
    </div>


</body>

</html>