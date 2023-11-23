<?php
include '../../../public/config/connection.php';

// get variable from form input
$namadaerah = $_POST["nama_daerah"];

$result = mysqli_query($connect, "INSERT INTO `daerah` (`id_nama_daerah`, `nama_Daerah`) 
VALUES ('', '$namadaerah');");

header("Location:data_daerah.php");
