<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username_admin"])) {
    // Redirect to the login page or perform other actions
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../layouts/head.php' ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader Start -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../components/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- Preloader End -->

        <!-- Navbar Start -->
        <?php include '../../layouts/navbar.php' ?>
        <!-- Navbar End -->

        <!-- Main Sidebar Container Start -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../data.php" class="brand-link" style="text-decoration: none;">
                <img src="../../components/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Healing Yuk</span>
            </a>

            <!-- Sidebar Start -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="" class="d-block" style="text-decoration: none;"><?php echo $_SESSION["username_admin"] ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu Start -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                                    <a href="../../data.php" class="nav-link">
                                        <i class="nav-icon fas fa-chart-simple"></i>
                                        <p>Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../admin/data_admin.php" class="nav-link">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../user/data_user.php" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../daerah/data_daerah.php" class="nav-link">
                                        <i class="nav-icon fas fa-location"></i>
                                        <p>Daerah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../kategori/data_kategori.php" class="nav-link">
                                        <i class="nav-icon fas fa-list"></i>
                                        <p>Kategori</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../travel/data_travel.php" class="nav-link">
                                        <i class="nav-icon fas fa-map-location-dot"></i>
                                        <p>Tempat Wisata</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../review/data_review.php" class="nav-link">
                                        <i class="nav-icon fas fa-comment-dots"></i>
                                        <p>Review</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data_like.php" class="nav-link active">
                                        <i class="nav-icon fas fa-heart"></i>
                                        <p>Like</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- Sidebar Menu End -->
            </div>
            <!-- Sidebar End -->

        </aside>
        <!-- Main Sidebar Container End -->

        <!-- Content Wrapper Page Start -->
        <div class="content-wrapper">
            <!-- Header Content Start -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Like User</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../data.php">Home</a></li>
                                <li class="breadcrumb-item active">Data Like User</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Content End -->

            <!-- Main Content Start -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- Tabel Start -->
                                    <table id="example" class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Nama Destinasi</th>
                                                <th>Daerah</th>
                                                <th>Jumlah Like</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "../../../public/config/connection.php";
                                            $no = 1;
                                            $query = mysqli_query($connect, "SELECT t.nama_tempat, d.nama_daerah, COUNT(ul.id_user_like) AS total_like FROM traveling as t JOIN daerah as d ON t.id_daerah = d.id_nama_daerah JOIN user_like as ul ON ul.id_travel_like = t.id GROUP BY t.id ORDER BY total_like DESC");
                                            while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $data['nama_tempat']; ?></td>
                                                    <td><?php echo $data['nama_daerah']; ?></td>
                                                    <td><?php echo $data['total_like'] ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <!-- Tabel End -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

        </div>
        <!-- Content Wrapper Page End -->
    </div>

    <?php include '../../layouts/script.php' ?>

    <script>
        new DataTable('#example');
    </script>
</body>

</html>