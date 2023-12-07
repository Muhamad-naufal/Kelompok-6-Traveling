<?php

function isUserLoggedIn()
{
    return isset($_SESSION['username_user']);
}

function redirectToLoginPage()
{
    header('Location: login.php');
    exit();
}
