<?php
session_start();
?>

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
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="destinasi.php" class="nav-item nav-link">Destination</a>
            </div>
            <div class="register-login d-flex align-items-center">
                <?php
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
</div>

<?php include 'login.php' ?>