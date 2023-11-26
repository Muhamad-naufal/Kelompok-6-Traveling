<?php
include "config/connection.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

// echo "INSERT INTO user (nama_lengkap_user, username, password) VALUES ('$nama_lengkap_user', '$username', '$password')";

$sql = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    session_start();
    $_SESSION["username"] = $username;
    echo '<script>alert("Login berhasil"); window.location.href = "index.php";</script>';
    exit();
} else {
    // Login failed
    echo '<script>alert("Invalid username or password"); window.location.href = "index.php";</script>';
}
