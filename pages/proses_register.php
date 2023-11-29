<?php

include "../public/config/connection.php";

// get variable from form input
$nama_lengkap_user = $_POST['nama_lengkap_user'];
$username = $_POST['username'];
$password = $_POST['password']; //

// Check if the username already exists
$sql_cek_username = mysqli_query($connect, "SELECT * FROM `user` WHERE username = '$username';");

if (mysqli_num_rows($sql_cek_username) > 0) {
    // Username already exists, show alert and redirect
    echo "<script> alert('Username Sudah Tedaftar...');
    window.location.href='../index.php';
    </script>";
} else {
    // Insert the new user data into the database
    $query = mysqli_query($connect, "INSERT INTO user (nama_lengkap_user, username, password) VALUES ('$nama_lengkap_user', '$username', '$password')");
    echo "<script> alert('Berhasil Register...');
    window.location.href='../index.php';
    </script>";
}
