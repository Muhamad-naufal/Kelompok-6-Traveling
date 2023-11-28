<?php
include "public/config/connection.php";
$query = mysqli_query($connect, "SELECT t.gambar, d.id_nama_daerah, d.nama_daerah, MAX(t.id) as id, MAX(t.nama_tempat) as nama_tempat, MAX(t.id_kategori) as id_kategori, MAX(k.nama_kategori) as nama_kategori
FROM traveling as t 
JOIN kategori as k ON t.id_kategori = k.id_nama_kategori 
JOIN daerah as d ON t.id_daerah = d.id_nama_daerah 
GROUP BY d.id_nama_daerah
ORDER BY MAX(t.id) DESC LIMIT 5");
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Daerah</h6>
            <h1 class="mb-5">Kota Destinasi</h1>
        </div>
        <div class="row g-4">
            <?php
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3" style="background: url('admin/pages/travel/<?php echo $data['gambar'] ?>'); background-position: center center;">
                        <div class="p-4">
                            <a href="pages/search_daerah.php?id_nama_daerah=<?php echo $data['id_nama_daerah'] ?>">
                                <h5 class="kategori-tulisan"><?php echo $data['nama_daerah'] ?></h5>
                                <!-- Tambahkan kolom-kolom lain yang ingin ditampilkan -->
                            </a>
                        </div>
                    </div>
                </div>
       <?php      } ?>
        </div>
    </div>
</div>