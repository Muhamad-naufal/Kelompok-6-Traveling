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
                                    <a href="data_kategori.php" class="nav-link active">
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
                                    <a href="../like/data_like.php" class="nav-link">
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
                            <h1 class="m-0">Edit Kategori</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../data.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="data_admin.php">Data Kategori</a></li>
                                <li class="breadcrumb-item active">Edit Data Kategori</li>
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
                                <div class="card-header bg-dark">
                                    Form Edit Kategori
                                </div>
                                <div class="card-body">
                                    <?php

                                    include '../../../public/config/connection.php';

                                    $adm = mysqli_query($connect, "SELECT * from `kategori` where `id_nama_kategori`='$_GET[id_nama_kategori]'");
                                    while ($b = mysqli_fetch_array($adm)) {
                                        $id = $b["id_nama_kategori"];
                                        $nama_kategori = $b["nama_kategori"];
                                    }
                                    ?>

                                    <!-- Form Edit Data Start -->
                                    <form action="f_edit.php?id_nama_kategori=<?php echo $id ?>" method="post" name="form-edit" id="form-edit">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Nama Kategori</label>
                                            <div class="form-group col-sm-10">
                                                <input type="text" name="nama_kategori" value="<?php echo $nama_kategori ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div style="text-align: center;">
                                            <input type="submit" id="submitBtn" value="Simpan" class="btn btn-primary" onclick="return confirm('Data Akan Diupdate?')">
                                            <a href="data_kategori.php" class="btn btn-danger">Kembali</a>
                                        </div>
                                    </form>
                                    <!-- Form Edit Data End -->

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
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    form.submit();
                }
            });
            $('#form-edit').validate({
                rules: {
                    nama_kategori: {
                        required: true,
                    },
                },
                messages: {
                    nama_kategori: {
                        required: "Masukkan edit nama kategori terlebih dahulu",
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

</body>

</html>