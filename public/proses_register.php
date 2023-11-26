<?php
include "config/connection.php";

$nama_lengkap_user = $_POST['nama_lengkap_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);

//cek username
$sql_cek_username = mysqli_query($connect, "SELECT * FROM `user` WHERE username = '$username';") or die(mysqli_error($connect));

if (mysqli_num_rows($sql_cek_username) > 0) { //jika data sudah ada
    echo "<script>
    alert('Username Sudah Tedaftar...');
    window.location.href='index.php';
    </script>";
} else {
    $query = mysqli_query($connect, "INSERT INTO user (nama_lengkap_user, username, password) VALUES ('$nama_lengkap_user', '$username', '$password')");
    echo "<script>
    alert('Berhasil Register...');
    window.location.href='index.php';
    </script>";
}
