<?php
include '../../../public/config/connection.php';

// get variable from form input
$nama = $_POST["nama_lengkap"];
$username_admin = $_POST["username"];
$password = $_POST["password"];


$result = mysqli_query($connect, "INSERT INTO `admin` (`id_nama_admin`, `nama_lengkap`, `username`, `password`) 
VALUES ('', '$nama', '$username_admin', '$password');");

header("Location:data_admin.php");
