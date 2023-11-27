<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Pilihan Wisata</h6>
            <h1 class="mb-5">Destination</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            include "../public/config/connection.php";
            $query = mysqli_query($connect, "SELECT * FROM traveling as t join daerah as d on t.id_daerah = d.id_nama_daerah join kategori as k on t.id_kategori = k.id_nama_kategori order by t.id DESC LIMIT 3");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="../admin/pages/travel/<?php echo $row['gambar'] ?>" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row['nama_tempat'] ?></small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Rp. <?php echo number_format($row['price'], 2, '.', ','); ?></h3>
                            <span class="badge text-bg-success"><?php echo $row['nama_kategori'] ?></span>
                            <p><?php echo substr($row['deskripsi'], 0, 200); ?>...</p>
                            <p><?php echo $row['nama_daerah'] ?></p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="destinasi_detail.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>