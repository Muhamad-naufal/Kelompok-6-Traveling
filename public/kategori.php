<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Category</h6>
            <h1 class="mb-5"></h1>
        </div>
        <div class="row g-4">
            <?php
            include "../public/config/connection.php";
            $query = mysqli_query($connect, "SELECT * FROM kategori");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="kategori-item rounded pt-3">
                        <div class="p-4">
                            <center>
                                <h5><?php echo $row['nama_kategori'] ?></h5>
                            </center>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>