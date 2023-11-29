<?php
include "public/config/connection.php";
$query = mysqli_query($connect, "SELECT * FROM kategori join traveling as t on t.id_kategori = kategori.id_nama_kategori group by kategori.id_nama_kategori");
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Kategori</h6>
            <h1 class="mb-5">Kategori Destinasi</h1>
        </div>
        <div class="row g-4">
            <?php
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3" style="background: url('admin/pages/travel/<?php echo $data['gambar'] ?>'); background-position: center center;">
                        <div class="p-4">
                            <a href="pages/detail_kategori.php?id_nama_kategori=<?php echo $data['id_nama_kategori'] ?>">
                                <h5 class="kategori-tulisan">
                                    <?php echo $data['nama_kategori'] ?>
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>