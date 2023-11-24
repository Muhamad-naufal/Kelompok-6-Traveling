<?php include 'layouts/head.php' ?>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php include 'layouts/topbar.php' ?>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <?php include 'layouts/navbar.php' ?>
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Nikmati Liburan Menyenangkan!</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Temukan wisata-wisata impianmu disini bersama kami.</p>
                        <!-- <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                        <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Kategori Start -->
    <?php include 'kategori.php' ?>
    <!-- Kategori End -->

    <!-- Package Start -->
    <?php include 'package.php' ?>
    <!-- Package End -->

    <!-- Testimonial Start -->
    <?php include 'testimonial.php' ?>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <?php include 'layouts/footer.php' ?>
    <!-- Footer End -->

    <?php include 'layouts/script.php' ?>

</body>

</html>