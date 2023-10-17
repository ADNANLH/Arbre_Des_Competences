<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="sidebar-mini">
    <div class="wrapper">
       
        <?php 
          include_once "./layouts/navbar.php";
          include_once "./layouts/sidebar.php" ;
        ?>
        
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Compétences</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            
                          <a href="./ajouter-competence.php" class="btn btn-primary"><i class="fas fa-plus"></i>Ajouter</a>
                            
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Référence</th>
                                        <th>Nom</th>
                                        <th>Déscription</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Obtenez toutes les compétences -->
                                    <tr>
                                        <td>C1</td>
                                        <td>Maquette</td>
                                        <td>Maquetter une application mobile</td>
                                        <td>Maquetter une application mobile Maquetter une application mobile Maquetter une application mobile Maquetter une application mobile</td>
                                        <td>
                                            <a href="./modifier-competence.php?Id=1" class="btn btn-xs btn-primary">Modifier</a>
                                            <button class="btn btn-xs btn-danger swalDefaultSuccess" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td>C2</td>
                                      <td>Base Données</td>
                                        <td>Manipuler une base de données - perfectionnement</td>
                                        <td class="description">Manipuler une base de données -  perfectionnement perfectionnement perfectionnement perfectionnement </td>
                                        <td>
                                            <a href="./modifier-competence.php?Id=2" class="btn btn-xs btn-primary">Modifier</a>
                                            <button class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td>C3</td>
                                      <td>back-end</td>
                                        <td>Développer la partie back-end d'une application we</td>
                                        <td>Développer la partie back-end d'une application we</td>
                                        <td>
                                            <a href="./modifier-competence.php?Id=3" class="btn btn-xs btn-primary">Modifier</a>
                                            <button class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td>C4</td>
                                      <td>gestion</td>
                                        <td>Collaborer à la gestion d'un projet informatique e</td>
                                        <td>Collaborer à la gestion d'un projet informatique e</td>
                                        <td>
                                            <a href="./modifier-competence.php?Id=4" class="btn btn-xs btn-primary">Modifier</a>
                                            <button class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td>C5</td>
                                      <td>Mobile native</td>
                                        <td>Développer une application mobile native, avec And</td>
                                        <td>Développer une application mobile native, avec And</td>
                                        <td>
                                            <a href="./modifier-competence.php?Id=5" class="btn btn-xs btn-primary">Modifier</a>
                                            <button class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td>C6</td>
                                      <td>tests</td>
                                        <td>Préparer et exécuter les plans de tests d'une appl</td>
                                        <td>Préparer et exécuter les plans de tests d'une appl</td>
                                        <td>
                                            <a href="./modifier-competence.php?Id=6" class="btn btn-xs btn-primary">Modifier</a>
                                            <button class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td>C7</td>
                                      <td>déploiement</td>
                                        <td>Préparer et exécuter le déploiement d'une applicat</td>
                                        <td>Préparer et exécuter le déploiement d'une applicat</td>
                                        <td>
                                            <a href="./modifier-competence.php?Id=7" class="btn btn-xs btn-primary">Modifier</a>
                                            <button class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
                                        </td>
                                    </tr>

                                    <!-- en skills -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->

        <!-- main Js -->
        <script src="./asset/JS/main.js"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap 5 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
      <script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

   
    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

 
  
  });
</script>
    </div>
    <!-- /.wrapper -->
</body>

</html>