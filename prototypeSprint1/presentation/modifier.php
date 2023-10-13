<?php 
include_once '../DB/connect.php';
include_once '../DB/traineesManagment.php';
include_once '../DB/cities.php';
include_once '../Entity/trainees.php';
$citiesNamesData = new Cities();
$citiesNamesList = $citiesNamesData->getCitiesList();
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $traineesData = new TraineesManagment();
        $traineeInfo = $traineesData->GetTrainee($Id);
            
    }

    if (isset($_POST['Update'])) {

        $update = new Trainees();
        $update->setId($_POST['personId']);
        $update->setName($_POST['name']);
        $update->setCNE($_POST['cne']);
        $update->setCity($_POST['city']);
        $traineesData->updateTrainner($update);
        header('Location: ./index.php');

    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Add Person</title>
</head>
<body>
    
    <section class="mb-5 " >
    <div class="container mt-5">
    <form action="" method="POST">
        <div class="form-group">
            <input type="hidden" id="person_Id" name="personId" value="<?= $traineeInfo->getId() ?>">
            <label for="nom">Name</label>
            <input type="text" class="form-control" id="name" value="<?= $traineeInfo->getName() ?>" name="name" required>
        </div>
        <div class="form-group">
            <label for="cne">CNE</label>
            <input type="text" class="form-control" id="cne" name="cne" value="<?= $traineeInfo->getCNE()  ?>" required>
        </div>
        <div class="form-group">
            <label for="ville">City</label>
            <select class="form-control" id="city_selector" name="city" required>
                <option value=""><?= $traineeInfo->getCity()  ?></option>
                <?php
                foreach ($citiesNamesList as $cityName) {
                    ?>
                    <option value="<?php echo $cityName['Id']; ?>">
                        <?php echo $cityName['Nom'] ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>
        <input type="submit" name="Update" class="btn btn-primary" id="confirm" value="Confirm">
    </form>
</div>

    </section>
</body>
    