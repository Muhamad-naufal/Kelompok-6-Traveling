<?php
include '../../../public/config/connection.php';

// get variable from form input
$nama_tempat = $_POST["nama_tempat"];
$deskripsi = $_POST["deskripsi"];
$price = $_POST["price"];
$fasilitas = $_POST["fasilitas"];
$id_kategori = $_POST["kategori"];
$id_daerah = $_POST["daerah"];

// Upload Proses
$target_dir = "images/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
    $result = mysqli_query($connect, "INSERT INTO `traveling` (`id`, `nama_tempat`, `deskripsi`, `price`, `fasilitas`, `id_kategori`, `id_daerah`) 
VALUES ('', '$nama_tempat', '$deskripsi', '$price', '$fasilitas', '$id_kategori', '$id_daerah');");
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($connect, "INSERT INTO `traveling` (`id`, `nama_tempat`, `gambar`, `deskripsi`, `price`, `fasilitas`, `id_kategori`, `id_daerah`) 
VALUES ('', '$nama_tempat', '$target_file', '$deskripsi', '$price', '$fasilitas', '$id_kategori', '$id_daerah');");

header("Location:data_travel.php");
