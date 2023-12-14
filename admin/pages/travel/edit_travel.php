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
    <script src="https://cdn.tiny.cloud/1/l17bkui8wk8wg0e7jxwczbqlu26kl09t28ayh11jg5usgeo8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

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
                            <h1 class="m-0">Edit Tempat Wisata</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="data_travel.php">Tempat Wisata</a></li>
                                <li class="breadcrumb-item active">Edit Data Tempat Wisata</li>
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
                                    Form Edit Tempat Wisata
                                </div>
                                <div class="card-body">
                                    <?php
                                    include '../../../public/config/connection.php';
                                    $query = mysqli_query($connect, "SELECT * FROM traveling as t join kategori as k on t.id_kategori = k.id_nama_kategori join daerah as d on t.id_daerah = d.id_nama_daerah where `id` = '$_GET[id]';");
                                    while ($data = mysqli_fetch_array($query)) {
                                        $id = $data['id'];
                                        $nama_tempat = $data['nama_tempat'];
                                        $gambar = $data['gambar'];
                                        $deskripsi = $data['deskripsi'];
                                        $price = $data['price'];
                                        $fasilitas = $data['fasilitas'];
                                        $id_kategori = $data['id_kategori'];
                                        $id_daerah = $data['id_daerah'];
                                        $lokasi = $data['lokasi'];
                                    ?>

                                        <!-- Form Edit Data Start -->
                                        <form action="f_edit_travel.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data" name="form-edit" id="form-edit">
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Tempat Wisata</label>
                                                <div class="form-group col-sm-10">
                                                    <input type="text" name="nama_tempat" value="<?php echo $nama_tempat ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Gambar</label>
                                                <div class="form-group col-sm-10">
                                                    <img src="<?php echo $gambar ?>" width="300px" alt="">
                                                    <input type="file" name="fileToUpload" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Deskripsi</label>
                                                <div class="form-group col-sm-10">
                                                    <textarea type="text" id="mytextarea" name="deskripsi" class="form-control"><?php echo $deskripsi ?></textarea>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Harga</label>
                                                <div class="form-group col-sm-10">
                                                    <input type="number" name="price" value="<?php echo $price ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Fasilitas</label>
                                                <div class="form-group col-sm-10">
                                                    <textarea type="text" id="mytextarea" name="fasilitas" class="form-control"><?php echo $fasilitas ?></textarea>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-sm-2 col-form-label">Kategori</label>
                                                <div class="form-group col-sm-10">
                                                    <select class="form-select" name="kategori" id="kategori">
                                                        <option value='' <?php if ($id_kategori == '') echo 'selected'; ?>>Kategori yang dipilih tidak ada!</option>
                                                        <?php
                                                        // Fetch data from the "items" table
                                                        $query = mysqli_query($connect, "SELECT * FROM kategori");
                                                        if (mysqli_num_rows($query) > 0) {
                                                            while ($data = mysqli_fetch_array($query)) {
                                                                $selected = ($data['id_nama_kategori'] == $id_kategori) ? 'selected' : '';
                                                                echo "<option value='" . $data["id_nama_kategori"] . "'$selected>" . $data["nama_kategori"] . "</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row mb-4">
                                                <label class="col-sm-2 col-form-label">Daerah</label>
                                                <div class="form-group col-sm-10">
                                                    <select class="form-select" name="daerah" id="daerah">
                                                        <option value='' <?php if ($id_daerah == '') echo 'selected'; ?>>Kategori yang dipilih tidak ada!</option>
                                                        <?php
                                                        // Fetch data from the "items" table
                                                        $query = mysqli_query($connect, "SELECT * FROM daerah");
                                                        if (mysqli_num_rows($query) > 0) {
                                                            while ($data = mysqli_fetch_array($query)) {
                                                                $selected = ($data['id_nama_daerah'] == $id_daerah) ? 'selected' : '';
                                                                echo "<option value='" . $data["id_nama_daerah"] . "'$selected>" . $data["nama_daerah"] . "</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-sm-2 col-form-label">Lokasi Google Maps</label>
                                                <div class="form-group col-sm-10">
                                                    <input type="text" name="lokasi" value="<?php echo htmlspecialchars($lokasi) ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div style="text-align: center;">
                                                <input type="submit" id="submitBtn" value="Simpan" class="btn btn-primary">
                                                <a href="data_travel.php" class="btn btn-danger">Kembali</a>
                                            </div>
                                        </form>
                                        <!-- Form Edit Data End -->

                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->
        </div>
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
                    nama_tempat: {
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