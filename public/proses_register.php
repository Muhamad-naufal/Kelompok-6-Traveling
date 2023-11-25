<?php
include "config/connection.php";

$nama_lengkap_user = $_POST['nama_lengkap_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);

// echo "INSERT INTO user (nama_lengkap_user, username, password) VALUES ('$nama_lengkap_user', '$username', '$password')";

$query = mysqli_query($connect, "INSERT INTO user (nama_lengkap_user, username, password) VALUES ('$nama_lengkap_user', '$username', '$password')");

if ($query) {
    echo "<script>
    alert('Berhasil Register...');
    window.location.href='index.php';
    </script>";
} else {
    echo "<script>
    alert('Email atau password salah...');
    window.location.href='index.php';
    </script>";
}
