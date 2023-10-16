<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <script src="https://cdn.tiny.cloud/1/bpigh0eyml9mx3mvsepi4df983mqcukj87efwet58omkz4s9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body class="sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php
            include_once "./layouts/navbar.php";
            include_once "./layouts/sidebar.php";
        ?>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Ajouter une compétence</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code" placeholder="Entrer le code">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="name" placeholder="Entrer le nom">
                                </div>
                                <div class="mb-3">
                                    <label for="reference" class="form-label">Reference</label>
                                    <input type="text" class="form-control" id="reference" placeholder="Entrer le référence">
                                </div>
                                <div class="mb-3">
                                <label for="inputDescription">Déscription</label>  
                                 <textarea name="description" id="inputDescription"  placeholder="Entrer une déscription" class="form-control"></textarea>                                  </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap 5 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
        <script>
            tinymce.init({
                selector: '#inputDescription', // Use the textarea's ID
                plugins: 'advlist autolink lists link image charmap print preview anchor',
                toolbar_mode: 'floating',
            });
        </script>

    </div>
    <!-- /.wrapper -->
</body>
</html>