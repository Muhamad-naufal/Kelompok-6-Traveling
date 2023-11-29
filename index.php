<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Healing Yuk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="public/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="public/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="public/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <?php include "public/layouts/spinner.php" ?>
    <!-- Spinner End -->

    <!-- Navbar & Hero End -->
    <div class="container-fluid position-relative p-0">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Healing Yuk</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="pages/about.php" class="nav-item nav-link">About</a>
                    <a href="pages/search_kategori.php" class="nav-item nav-link">Kategori</a>
                    <a href="pages/daftar_daerah.php" class="nav-item nav-link">Daerah</a>
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
        <?php include 'pages/login.php' ?>
        <!-- Navbar End -->

        <!-- Hero Start -->
        <?php include "public/layouts/hero.php" ?>
        <!-- Hero Start -->

    </div>
    <!-- Navbar & Hero End -->

    <!-- Kategori Start -->
    <?php include "public/layouts/kategori.php" ?>
    <!-- Kategori End -->

    <!-- Daerah Start -->
    <?php include "public/layouts/daerah.php" ?>
    <!-- Daerah End -->

    <!-- Destination Start -->
    <?php include "public/layouts/destinasi.php" ?>
    <!-- Destination Start -->


    <!-- Footer Start -->
    <?php include "public/layouts/footer.php" ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/lib/wow/wow.min.js"></script>
    <script src="public/assets/lib/easing/easing.min.js"></script>
    <script src="public/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="public/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="public/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="public/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="public/assets/js/main.js"></script>
</body>

</html>