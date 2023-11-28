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
    <link rel="stylesheet" href="../../components/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../components/css/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../components/css/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../components/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../components/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../components/css/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../components/css/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.tiny.cloud/1/l17bkui8wk8wg0e7jxwczbqlu26kl09t28ayh11jg5usgeo8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <style>
        .card {
            max-width: 400px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        #submitBtn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        #submitBtn:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader Start -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../components/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- Preloader End -->

        <!-- Navbar Start -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../proses_logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>
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
                        <a href="" class="d-block" style="text-decoration: none;"><?php echo $_SESSION["username"] ?></a>
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
                                    <a href="../kategori/data_kategori.php" class="nav-link ">
                                        <i class="nav-icon fas fa-list"></i>
                                        <p>Kategori</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data_travel.php" class="nav-link active">
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
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- Sidebar Menu End -->

            </div>
            <!-- Sidebar Start -->

        </aside>
        <!-- Main Sidebar Container End -->

        <!-- Content Wrapper Page Start -->
        <div class="content-wrapper">
            <!-- Header Content Start -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Data Tempat Wisata</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../data.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="data_travel.php">Data Tempat Wisata</a></li>
                                <li class="breadcrumb-item active">Tambah Data Tempat Wisata</li>
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
                            <center>
                                <div class="card" style="max-width: 1300px;">
                                    <div class="card-header">
                                        Tambahkan Data Tempat Wisata
                                    </div>
                                    <div class="card-body">
                                        <form action="f_tambah_travel.php" method="post" enctype="multipart/form-data" name="form-tambah" id="form-tambah">>
                                            <div class="form-group">
                                                <label for="nama_tempat">Tempat Wisata</label>
                                                <input type="text" class="form-control" name="nama_tempat">
                                            </div>

                                            <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <input type="file" class="form-control" name="fileToUpload">
                                            </div>

                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <textarea id="mytextarea" type="text" class="form-control" name="deskripsi"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="price">Harga</label>
                                                <input type="number" class="form-control" name="price">
                                            </div>

                                            <div class="form-group">
                                                <label for="fasilitas">Fasilitas</label>
                                                <textarea id="mytextarea" type="text" class="form-control" name="fasilitas_text"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="id_kategori">Kategori</label>
                                                <select class="form-control mt-3" name="kategori" id="kategori">
                                                    <?php
                                                    // Fetch data from the "items" table
                                                    include '../../../public/config/connection.php';
                                                    $query = mysqli_query($connect, "SELECT * FROM kategori");
                                                    if (mysqli_num_rows($query) > 0) {
                                                        while ($data = mysqli_fetch_array($query)) {
                                                            echo "<option value='" . $data["id_nama_kategori"] . "'>" . $data["nama_kategori"] . "</option>";
                                                        }
                                                    } else {
                                                        echo "<option value=''>No items available</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="id_daerah">Daerah</label>
                                                <select class="form-control mt-3 mb-3" name="daerah" id="daerah">
                                                    <?php
                                                    // Fetch data from the "items" table
                                                    include '../../../public/config/connection.php';
                                                    $query = mysqli_query($connect, "SELECT * FROM daerah");
                                                    if (mysqli_num_rows($query) > 0) {
                                                        while ($data = mysqli_fetch_array($query)) {
                                                            echo "<option value='" . $data["id_nama_daerah"] . "'>" . $data["nama_daerah"] . "</option>";
                                                        }
                                                    } else {
                                                        echo "<option value=''>No items available</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="price">Lokasi Google Maps</label>
                                                <input type="text" class="form-control" name="lokasi" required>
                                            </div>

                                            <input type="submit" id="submitBtn" value="Save" onclick="alert('Data Berhasil Disimpan!')">
                                        </form>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

        </div>
    </div>

    <!-- jQuery -->
    <script src="../../components/js/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../components/js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../../components/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../components/js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../components/js/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../../components/js/jquery.vmap.min.js"></script>
    <script src="../../components/js/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../components/js/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../components/js/moment.min.js"></script>
    <script src="../../components/js/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../components/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../components/js/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../components/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../components/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../components/js/dashboard.js"></script>

    <!-- JS Validasi -->
    <script src="../../components/js/jquery-validation/jquery.validate.min.js"></script>

    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    form.submit();
                }
            });
            $('#form-tambah').validate({
                rules: {
                    nama_tempat: {
                        required: true,
                    },
                    fileToUpload: {
                        required: true,
                    },
                    deskripsi: {
                        required: true,
                    },
                    price: {
                        required: true,
                    },
                    fasilitas_text: {
                        required: true,
                    },
                    kategori: {
                        required: true,
                    },
                    daerah: {
                        required: true,
                    },
                    lokasi: {
                        required: true,
                    },
                },
                messages: {
                    nama_tempat: {
                        required: "Masukkan nama kategori terlebih dahulu",
                    },
                    fileToUpload: {
                        required: "Masukkan nama kategori terlebih dahulu",
                    },
                    deskripsi: {
                        required: "Masukkan deskripsi terlebih dahulu",
                    },
                    price: {
                        required: "Masukkan price terlebih dahulu",
                    },
                    fasilitas_text: {
                        required: "Masukkan fasilitas terlebih dahulu",
                    },
                    kategori: {
                        required: "Masukkan kategori terlebih dahulu",
                    },
                    daerah: {
                        required: "Masukkan daerah terlebih dahulu",
                    },
                    lokasi: {
                        required: "Masukkan lokasi terlebih dahulu",
                    }
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