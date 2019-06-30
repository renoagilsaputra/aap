<?php

    session_start();

    include "../../config/config.php";

    if(empty($_SESSION ['id_admin'])) {

        redir('../../auth/');

    }

    $id_admin = $_SESSION ['id_admin'];

    $adm = "SELECT * FROM admin WHERE id_admin = '$id_admin'";

    $admm = $conn->query($adm);

    $am = $admm->fetch_array();
 
?>


<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>AAP | User</title>

    
    <!-- Shortcut Icon -->
    
    <link rel="icon" href="../../asset/img/icon.png">
    
    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- iCheck -->

    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">

    <!-- Morris chart -->

    <link rel="stylesheet" href="plugins/morris/morris.css">

    <!-- jvectormap -->

    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">

    <!-- Date Picker -->

    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">

    <!-- Daterange picker -->

    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">

    <!-- bootstrap wysihtml5 - text editor -->

    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- Google Font: Source Sans Pro -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- CSS Document -->

    <link rel="stylesheet" href="../../asset/css/style-admin.css">
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">


        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">

            <!-- Left navbar links -->

            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>

                </li>


            </ul>


            <!-- Right navbar links -->

            <ul class="navbar-nav ml-auto">



                <li class="nav-item">

                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i

            class="fa fa-th-large"></i></a>

                </li>

            </ul>

        </nav>

        <!-- /.navbar -->


        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Brand Logo -->

            <a href="" class="brand-link">

      <img src="/aap/asset/img/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"

           style="opacity: .8">

      <span class="brand-text font-weight-light">Panel User</span>

    </a>


            <!-- Sidebar -->

            <div class="sidebar">

                <!-- Sidebar user panel (optional) -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="image">

                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

                    </div>

                    <div class="info">

                        <a href="#" class="d-block"><?= ucfirst($am ['username']); ?></a>

                    </div>

                </div>


                <!-- Sidebar Menu -->

                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->

                        <li class="nav-item menu-open">

                            <a href="../admin/" class="nav-link active">

              <i class="nav-icon fa fa-dashboard"></i>

              <p>Dashboard</p>

            </a>

                        </li>

                        <li class="nav-item has-treeview">

                            <a href="#" class="nav-link">

              <i class="nav-icon fa fa-book"></i>

              <p>

                Posting

                <i class="right fa fa-angle-left"></i>

              </p>

            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">

                                    <a href="?page=posting" class="nav-link">

                  <i class="fa fa-pencil nav-icon"></i>

                  <p>Tambah</p>

                </a>

                                </li>

                                <li class="nav-item">

                                    <a href="?page=wisata" class="nav-link">

                  <i class="fa fa-database nav-icon"></i>

                  <p>Wisata</p>

                </a>


                                </li>

                                <li class="nav-item">

                                    <a href="?page=kuliner" class="nav-link">

                  <i class="nav-icon fa fa-database"></i>

                  <p>Kuliner</p>

                </a>

                                </li>

                            </ul>

                        </li>

                       <li class="nav-item">

                            <a href="?page=komentar" class="nav-link">

              <i class="nav-icon fa fa-comments"></i>

              <p>Komentar</p>

            </a>

                        </li>

                        

                        <li class="nav-item">

                            <a href="?page=logout" onclick="return confirm('Yakin?')" class="nav-link">

              <i class="nav-icon fa fa-sign-out"></i>

              <p>Logout</p>

            </a>

                        </li>

                </nav>

                <!-- /.sidebar-menu -->

            </div>

            <!-- /.sidebar -->

        </aside>


        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">

            <!-- Content Header (Page header) -->

            <div class="content-header">

                <div class="container-fluid">

                    <div class="row mb-2">

                        <div class="col-sm-6">

                            <h1 class="m-0 text-dark">Dashboard</h1>

                        </div>

                        <!-- /.col -->

                        <div class="col-sm-6">

                            <ol class="breadcrumb float-sm-right">

                                <li class="breadcrumb-item"><a href="../admin/"><i class="fa fa-dashboard"></i></a></li>

                                <li class="breadcrumb-item active">

                                    <?php

                                        error_reporting(0);

                                        switch($_GET ['page']) {

                                        case 'posting' : echo 'posting'; break;

                                        case 'posting_del' : echo 'posting_del'; break;

                                        case 'posting_edit' : echo 'posting_edit'; break;

                                        case 'wisata' : echo 'wisata'; break;

                                        case 'kuliner' : echo 'kuliner'; break;

                                        case 'komentar' : echo 'komentar'; break;

                                        case 'komentar_del' : echo 'komentar_del'; break;
                                        
                                
                                        default : echo "home";

                                        }

                                    ?>

                                </li>

                            </ol>

                        </div>

                        <!-- /.col -->

                    </div>

                    <!-- /.row -->

                </div>

                <!-- /.container-fluid -->

            </div>

            <!-- /.content-header -->


            <!-- Main content -->

            <section class="content">

                <div class="container-fluid">

                    <!-- Small boxes (Stat box) -->

                    <div class="row">

                        <div class="col-lg-3 col-6">

                            <!-- small box -->

                            <div class="small-box bg-info">

                                <div class="inner">

                                   
                                    <h3>&nbsp;</h3>


                                    <p>Wisata</p>

                                </div>

                                <div class="icon">

                                    <i class="ion ion-bag"></i>

                                </div>

                                <a href="?page=wisata" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                            </div>

                        </div>

                        <!-- ./col -->

                        <div class="col-lg-3 col-6">

                            <!-- small box -->

                            <div class="small-box bg-success">

                                <div class="inner">
                                    
<h3>&nbsp;</h3>

                                    
<p>Kuliner</p>
                                </div>
                                
<div class="icon">
                                    <i class="ion ion-stats-bars"></i>

                                </div>

                                <a href="?page=kuliner" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                            </div>

                        </div>

                        <!-- ./col -->

                        <div class="col-lg-3 col-6">

                            <!-- small box -->

                            <div class="small-box bg-warning">

                                <div class="inner">
                                    
<h3>&nbsp;</h3>

                                    
<p>Komentar</p>
                                
</div>
                                
<div class="icon">
                                    <i class="fa fa-comments"></i>
                                
</div>
                                <a href="?page=komentar" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            
</div>
                        
</div>
                        
<!-- ./col -->
                        
<div class="col-lg-3 col-6">

                            <!-- small box -->

                            <div class="small-box bg-danger">

                                <div class="inner">

                                    <h3>&nbsp;</h3>


                                    <p>Admin</p>

                                </div>

                                <div class="icon">

                                    <i class="ion ion-pie-graph"></i>

                                </div>

                                <a href="?page=admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>

                            </div>

                        </div>

                        <!-- ./col -->

                    </div>

                    <!-- /.row -->

                    <!-- Main row -->


                    <!-- Left col -->

                    <!-- Wrapper -->

                    <section class="col-lg- connectedSortable">

                        <?php

                            error_reporting(0);

                            switch($_GET ['page']) {

                                case 'posting' : include 'pages/posting.php'; break;

                                case 'posting_del' : include 'pages/posting_del.php'; break;

                                case 'posting_edit' : include 'pages/posting_edit.php'; break;

                                case 'wisata' : include 'pages/wisata.php'; break;

                                case 'kuliner' : include 'pages/kuliner.php'; break;

                                case 'komentar' : include 'pages/komentar.php'; break;

                                case 'komentar_del' : include 'pages/komentar_del.php'; break;

                                case 'admin' : include 'pages/admin.php'; break;

                                case 'admin_add' : include 'pages/admin_add.php'; break;

                                case 'admin_del' : include 'pages/admin_del.php'; break;
                                case 'logout' : include '../../auth/logout.php'; break;

                                
                                
                                default : include "pages/home.php";

                            }

                        ?>

                    </section>


                    <!-- /.container-fluid -->

            </section>

            <!-- /.content -->

            </div>

            <!-- /.content-wrapper -->

            <footer class="main-footer">

                <strong>Copyright &copy; <?= date('Y') ?> All About Purwokerto</strong>. All rights reserved.

                <div class="float-right d-none d-sm-inline-block">

                    <b>Version</b> 3.0.0-alpha

                </div>

            </footer>


            <!-- Control Sidebar -->

            <aside class="control-sidebar control-sidebar-dark">

                <!-- Control sidebar content goes here -->

            </aside>

            <!-- /.control-sidebar -->

        </div>

        <!-- ./wrapper -->


        <!-- jQuery -->

        <script src="plugins/jquery/jquery.min.js"></script>

        <!-- jQuery UI 1.11.4 -->

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

        <script>

            $.widget.bridge('uibutton', $.ui.button)

        </script>

        <!-- Bootstrap 4 -->

        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

        <script src="plugins/morris/morris.min.js"></script>

        <!-- Sparkline -->

        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>

        <!-- jvectormap -->

        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <!-- jQuery Knob Chart -->

        <script src="plugins/knob/jquery.knob.js"></script>

        <!-- daterangepicker -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>

        <script src="plugins/daterangepicker/daterangepicker.js"></script>

        <!-- datepicker -->

        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>

        <!-- Bootstrap WYSIHTML5 -->

        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

        <!-- Slimscroll -->

        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>

        <!-- FastClick -->

        <script src="plugins/fastclick/fastclick.js"></script>

        <!-- AdminLTE App -->

        <script src="dist/js/adminlte.js"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

        <script src="dist/js/pages/dashboard.js"></script>

        <!-- AdminLTE for demo purposes -->

        <script src="dist/js/demo.js"></script>

        <!-- CK Editor -->

        <script src="plugins/ckeditor/ckeditor.js"></script>

        <script>

            $(function() {

                // Replace the <textarea id="editor1"> with a CKEditor

                // instance, using default configuration.

                ClassicEditor

                    .create(document.querySelector('#editor1'))

                    .then(function(editor) {

                        // The editor instance

                    })

                    .catch(function(error) {

                        console.error(error)

                    })


                // bootstrap WYSIHTML5 - text editor


                $('.textarea').wysihtml5({

                    toolbar: {

                        fa: true

                    }

                })

            })

        </script>

</body>


</html>