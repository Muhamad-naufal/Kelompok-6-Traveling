<?php
include '../../../public/config/connection.php';

// get variable from form input
$nama = $_POST["nama_lengkap"];
$userna = $_POST["username_admin"];
$pass = md5($_POST["password"]);

$result = mysqli_query($connect, "UPDATE `admin` set `nama_lengkap` = '$nama', `username_admin` = '$userna', `password` = '$pass'where `id_nama_admin` = '$_GET[id_nama_admin]'");

header("Location:data_admin.php");
