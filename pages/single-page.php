<?php
include "../public/config/connection.php";
$query = mysqli_query($connect, "SELECT * FROM traveling as t join kategori as k on 
t.id_kategori = k.id_nama_kategori join daerah as d on t.id_daerah = d.id_nama_daerah
where id = '$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $data['nama_tempat'] ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Bootsrtap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="../index.php" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Healing Yuk</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="../index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="pages/search_kategori.php" class="nav-item nav-link">Kategori</a>
                    <a href="pages/daftar_daerah.php" class="nav-item nav-link">Daerah</a>
                </div>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Login/Register</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Daerah Destinasi</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Daerah</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="../admin/pages/travel/<?php echo $data['gambar'] ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Detail Destinasi</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary"><?php echo $data['nama_tempat'] ?></span></h1>
                    <p class="mb-4"><?php echo $data['deskripsi'] ?></p>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h3>Fasilitas</h3>
                    <p><?php echo $data['fasilitas'] ?></p>
                </div>
                <div class="col-md-6">
                    <h3>HTM</h3>
                    <p>Rp. <?php echo number_format($data['price'], 2, '.', ','); ?></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="lokasi mt-3">
                <h3>Lokasi</h3>
                <?php echo $data['lokasi'] ?>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Recommend -->
    <div class="container">
        <div class="row">
            <h3>Recommended Destinations</h3>
            <?php
            // Query untuk mendapatkan rekomendasi destinasi berdasarkan daerah atau kategori
            $recommendQuery = mysqli_query($connect, "SELECT * FROM traveling WHERE id_daerah = '{$data['id_daerah']}' OR id_kategori = '{$data['id_kategori']}' ORDER BY RAND() LIMIT 3");

            // Loop untuk menampilkan rekomendasi destinasi
            while ($recommendData = mysqli_fetch_array($recommendQuery)) {
            ?>
                <div class="card mb-4" style="width: 18rem;">
                    <img src="../admin/pages/travel/<?php echo $recommendData['gambar'] ?>" class="card-img-top mt-1 img-fluid" style="width: 45vh; height:30vh;" alt="<?php echo $recommendData['nama_tempat'] ?>">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $recommendData['nama_tempat'] ?></h6>
                        <p class="card-text"><?php echo substr($recommendData['deskripsi'], 0, 100) . '...'; ?></p>
                        <a href="detail.php?id=<?php echo $recommendData['id']; ?>" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- End Recommend -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>