<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href=".../public/assets/./public/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../public/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../public/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Healing Yuk</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="../index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="search_kategori.php" class="nav-item nav-link">Kategori</a>
                    <a href="daftar_daerah.php" class="nav-item nav-link active">Daerah</a>
                </div>
                <div class="register-login d-flex align-items-center">
                    <?php
                    session_start();

                    if (isset($_SESSION['username'])) {
                    ?>
                        <span class="badge bg-success">Hai, <?= $_SESSION['username'] ?></span>&nbsp;

                        <a href="proses_logout.php" class="me-3">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>

                    <?php } else { ?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3">
                            <i class="fas fa-user"></i>&nbsp; Login/Register
                        </a>
                    <?php } ?>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Daerah</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Daerah</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Daerah</h6>
                <h1 class="mb-5">Daerah Destinasi</h1>
            </div>
            <?php
            include "../public/config/connection.php";
            $query = mysqli_query($connect, "SELECT t.gambar, d.id_nama_daerah, d.nama_daerah, MAX(t.id) as id, MAX(t.nama_tempat) as nama_tempat, MAX(t.id_kategori) as id_kategori, MAX(k.nama_kategori) as nama_kategori
FROM traveling as t 
JOIN kategori as k ON t.id_kategori = k.id_nama_kategori 
JOIN daerah as d ON t.id_daerah = d.id_nama_daerah 
GROUP BY d.id_nama_daerah
ORDER BY MAX(t.id) DESC LIMIT 5");
            ?>
            <div class="row g-4">
                <?php
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item daerah rounded pt-3" style="background: url('../admin/pages/travel/<?php echo $data['gambar'] ?>'); 
                                background-position: center center;">
                            <div class="p-4">
                                <a href="search_daerah.php?id_nama_daerah=<?php echo $data['id_nama_daerah'] ?>">
                                    <h5 class="kategori-tulisan daerah-tulisan"><?php echo $data['nama_daerah'] ?></h5>
                                    <!-- Tambahkan kolom-kolom lain yang ingin ditampilkan -->
                                </a>
                            </div>
                        </div>
                    </div>
                <?php      } ?>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <?php include "../public/layouts/footer.php" ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/assets/lib/wow/wow.min.js"></script>
    <script src="../public/assets/lib/easing/easing.min.js"></script>
    <script src="../public/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../public/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../public/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../public/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../public/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../public/assets/js/main.js"></script>
</body>

</html>