<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
  // Redirect to the login page or perform other actions
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Healing Yuk | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/25db4f44a1.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="components/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="components/css/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="components/css/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="components/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="components/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="components/css/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="components/css/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="components/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link active">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="proses_logout.php" class="nav-link">Logout</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="components/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Healing Yuk</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="" class="d-block"><?php echo $_SESSION["username"] ?></a>
          </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Data Master
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="data.php" class="nav-link active">
                    <i class="nav-icon fas fa-chart-simple"></i>
                    <p>Data</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/admin/data_admin.php" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/user/data_user.php" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/daerah/data_daerah.php" class="nav-link">
                    <i class="nav-icon fas fa-location"></i>
                    <p>Daerah</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/kategori/data_kategori.php" class="nav-link">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Kategori</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/travel/data_travel.php" class="nav-link">
                    <i class="nav-icon fas fa-map-location-dot"></i>
                    <p>Tempat Wisata</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/review/data_review.php" class="nav-link">
                    <i class="nav-icon fas fa-comment-dots"></i>
                    <p>Review</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
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
              <h1 class="m-0">Data Master</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="data.php">Home</a></li>
                <li class="breadcrumb-item active">Data Master</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="components/js/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="components/js/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="components/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="components/js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="components/js/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="components/js/jquery.vmap.min.js"></script>
  <script src="components/js/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="components/js/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="components/js/moment.min.js"></script>
  <script src="components/js/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="components/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="components/js/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="components/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="components/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="components/js/dashboard.js"></script>
</body>

</html>