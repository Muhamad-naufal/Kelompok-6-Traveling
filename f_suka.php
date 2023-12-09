<?php
include 'public/config/connection.php';

if (isset($_POST['travelId']) && isset($_POST['userId'])) {
    $travelId = $_POST['travelId'];
    $userId = $_POST['userId'];

    // Check if the user has already liked the article
    $query = "SELECT * FROM user_like WHERE id_travel_like = $travelId AND id_user_like = $userId";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        // Unlike the article
        $deleteQuery = "DELETE FROM user_like WHERE id_travel_like = $travelId AND id_user_like = $userId";
        mysqli_query($connect, $deleteQuery);
        echo 'unliked';
    } else {
        // Like the article
        $insertQuery = "INSERT INTO user_like (id_travel_like, id_user_like) VALUES ($travelId, $userId)";
        mysqli_query($connect, $insertQuery);
        echo 'liked';
    }
}
