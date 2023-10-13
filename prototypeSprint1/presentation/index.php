<?php
include_once '../DB/connect.php';
include_once '../DB/traineesManagment.php';
include_once '../DB/cities.php';
include_once '../Entity/trainees.php';

$traineesData = new TraineesManagment();
$traineesInfo = $traineesData->getTraineesData();

$citiesNamesData = new Cities();
$citiesNamesList = $citiesNamesData->getCitiesList();
$countTrainees = new TraineesManagment();
// $theCountResult = $countTrainees->countTrainnes();
if(isset($_POST['confirm_Data'])){
    $addTrainee = new Trainees();
    $addTrainee->setId($_POST['personId']);
    $addTrainee->setName($_POST['name']);
    $addTrainee->setCNE($_POST['cne']);
    $addTrainee->setCity($_POST['city']);
    $traineesData->addTrainee($addTrainee);
}


if (isset($_POST['confirm_delete'])) {
    $delete = new Trainees();
    $delete->setId($_POST['delete_id']);
    $traineesData->deleteTrainner($delete);
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
    <div class="container mt-5">
        <div class="text-center">
            <button type="button" class="btn btn-primary mb-5 add_new">Add New Trainer</button>
            <button class="btn btn-warning" id="view_Chart">Chart View</button>
        </div>
    </div>
    <section class="mb-5 hide" id="hide">
        <div class="container mt-5">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="hidden" id="person_Id" name="personId">
                    <label for="nom">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="cne">CNE</label>
                    <input type="text" class="form-control" id="cne" name="cne" required>
                </div>
                <div class="form-group">
                    <label for="ville">City</label>
                    <select class="form-control" id="city_selector" name="city" required>
                        <option value="">Select a Ville</option>
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
                <input type="submit" name="confirm_Data" class="btn btn-primary" id="confirm" value="Confirm">
            </form>
        </div>
    </section>
    <section class="table__body" id="table_View">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>CNE</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($traineesInfo as $traineeInfo) { ?>
                    <tr>
                        <td>
                            <?= $traineeInfo->getId() ? $traineeInfo->getId() : "null" ?>
                        </td>
                        <td>
                            <?= $traineeInfo->getName() ? $traineeInfo->getName() : "null" ?>
                        </td>
                        <td>
                            <?= $traineeInfo->getCNE() ? $traineeInfo->getCNE() : "null" ?>
                        </td>
                        <td>
                            <?= $traineeInfo->getCity() ? $traineeInfo->getCity() : "null" ?>
                        </td>
                        <td>
                            <form action="" method="POST">
                                <a class="btn btn-warning " href="./modifier.php?Id=<?= $traineeInfo->getId() ?>">Modifier</a>
                                <input type="hidden" name="delete_id" value="<?= $traineeInfo->getId() ?>">
                                <input type="submit" class="btn btn-danger" name="confirm_delete" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

    </section>

  

    <div class="" id="chartContainer" style="height: 370px; width: 100%;"></div>


    
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
    </script>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Trainner Cities"
                },
                axisY: {
                    title: "Trainner count"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0.## Trainner",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</body>
</html>