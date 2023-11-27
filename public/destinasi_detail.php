<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    // Redirect to the login page or perform other actions
    header("Location: login.php");
    exit();
}
include 'layouts/head.php';
include 'layouts/topbar.php';
?>

<body>
    <?php
    include "../public/config/connection.php";
    $query = mysqli_query($connect, "SELECT * FROM traveling as t join daerah as d on t.id_daerah = d.id_nama_daerah join kategori as k on t.id_kategori = k.id_nama_kategori where t.id = '$_GET[id]'");
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <?php include 'layouts/navbar.php' ?>
            <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                            <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo $row['nama_tempat'] ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Pilihan Destinasi Start -->
        <section class="choose pt-6 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content">
                            <div id="highlight" class="mb-2">
                                <div class="single-full-title border-b mb-2 pb-2">
                                    <div class="single-title">
                                        <h2 class="mb-1"><?php echo $row['nama_tempat'] ?></h2>
                                    </div>
                                </div>

                                <div class="description-images mb-4">
                                    <img src="../admin/pages/travel/<?php echo $row['gambar'] ?>" alt="" class="w-100 rounded">
                                </div>

                                <div class="description mb-2">
                                    <h4>Deskripsi</h4>
                                    <hr>
                                    <p><?php echo $row['deskripsi'] ?></p>
                                </div>

                                <div class="description mt-2">
                                    <h4>Fasilitas</h4>
                                    <hr>
                                    <p>
                                        <?php echo $row['fasilitas'] ?>
                                    </p>
                                </div>
                                <div class="description mt-2">
                                    <h4>Lokasi</h4>
                                    <hr>
                                    <p>
                                        <?php echo $row['lokasi'] ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Form Testimonial Start -->
                            <!-- Form Testimonial Start -->
                            <div id="single-add-review?" class="single-add-review pt-2">
                                <h4>Testimonial</h4>
                                <hr>
                                <form action="f_testi.php?username=<?php echo $_SESSION["username"]; ?>" method="POST">
                                    <!-- Add a hidden input field for the username -->
                                    <input type="hidden" name="username" value="<?php echo $_SESSION["username"]; ?>">
                                    <input type="hidden" name="id_travel" value="<?php echo $row['id']; ?>">

                                    <div class="row g-3 mb-3">
                                        <div class="col-md-6">
                                            <!-- Display the username as readonly -->
                                            <input type="text" value="<?php echo $_SESSION["username"]; ?>" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="testimonial"></textarea>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary px-3 border-end" style="border-radius: 3px">
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- sidebar start -->
                    <div class="col-lg-4">
                        <div class="sidebar-sticky">
                            <div class="popular-post sidebar-item mb-4 mt-3">
                                <div class="sidebar-tabs">
                                    <div class="post-tabs">
                                        <h3 class="title-serupa">Wisata Serupa</h3>
                                        <hr>
                                        <div class="tab-content" id="postsTabContent1">
                                            <div aria-labelledby="popular-tab" class="tab-pane fade active show" id="popular" role="tabpanel">
                                                <article class="post mb-2 border-b pb-2">
                                                    <div class="s-content d-flex align-items-center justify-space-between">
                                                        <div class="sidebar-image w-25 me-3 rounded">
                                                            <a href=""><img src="assets/img/package-1.jpg" alt="" width="100"></a>
                                                        </div>
                                                        <div class="content-list w-75">
                                                            <h5 class="mb-1"><a href="">Monas</a></h5>
                                                            <p style="font-size: 13px;">Jl. Basuki Rahmat</p>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sidebar end -->

                </div>
            </div>
        </section>
        <!-- Pilihan Destinasi Start -->

        <!-- Footer Start -->
        <?php include 'layouts/footer.php' ?>
        <!-- Footer End -->

        <?php include 'layouts/script.php' ?>
    <?php
    }
    ?>
</body>

</html>