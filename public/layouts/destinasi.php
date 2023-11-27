<?php
include "public/config/connection.php";
$query = mysqli_query($connect, "SELECT * FROM traveling as t 
JOIN kategori as k ON t.id_kategori = k.id_nama_kategori 
JOIN daerah as d ON t.id_daerah = d.id_nama_daerah 
ORDER BY t.id DESC LIMIT 5");
?>

<div class="container-xxl py-5 destination">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Destinasi</h6>
            <h1 class="mb-5">Destinasi Populer</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <?php
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-lg-6 col-md-12 wow zoomIn kotakan-kategori" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="pages/single-page.php?id=<?php echo $data['id'] ?>">
                                <img class="img-fluid mt-3" src="admin/pages/travel/<?php echo $data['gambar'] ?>" width="100%">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2"><?php echo $data['nama_kategori'] ?></div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"><?php echo $data['nama_daerah'] ?></div>
                                <h3 style="background: transparent !important; position:relative; z-index:1"><?php echo $data['nama_tempat'] ?></h3>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>