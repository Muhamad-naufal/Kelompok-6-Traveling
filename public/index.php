<?php include 'layouts/head.php' ?>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php include 'layouts/topbar.php' ?>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <?php include 'layouts/navbar.php' ?>
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