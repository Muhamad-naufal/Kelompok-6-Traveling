<?php
include '../public/config/connection.php';

// get variable from form input
$review = $_POST["komentar"];
$id = $_POST["id"];

$result = mysqli_query($connect, "INSERT INTO `review` (`id_travel`, `review`) VALUES ('$id', '$review')");

header("Location: single-page.php?id=$id");
exit;
