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
    <style>
    .font-red {
    color: red;
    font-weight: bold; /* You can add more styling if needed */
}

</style>
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
                            <h1 class="m-0">Modifier une compétence</h1>
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
                                    <input type="text" class="form-control" id="code" placeholder="C1" value="C1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="reference" class="form-label">Reference <span class="font-red">*</span></label>
                                    <input type="text" class="form-control" id="reference" placeholder="Maquette" value="Maquette" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nom <span class="font-red">*</span></label>
                                    <input type="text" class="form-control" id="name" placeholder="Maquetter une application mobile	" value="Maquetter une application mobile" required>
                                </div>
                                <div class="mb-3">
                                <label for="inputDescription">Déscription</label>  
                                 <textarea name="description" id="inputDescription"  placeholder="Maquetter une application mobile	 Maquetter une application mobile	 Maquetter une application mobile	" class="form-control" required></textarea>                                  </div>
                                <button type="submit" class="btn btn-primary">Modifier</button>
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