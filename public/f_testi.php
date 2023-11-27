<?php
include 'config/connection.php';

// get variable from form input
$idnamatravel = $_POST["id_travel"];
$idnamauser = $_POST["id_nama_user"];
$testi = $_POST["testimonial"];

$result = mysqli_query($connect, "INSERT INTO `review` (`id_nama_review`, `id_travel`, `id_user`, `review`) 
VALUES ('', '$idnamatravel', '$idnamauser' ,'$testi');");
