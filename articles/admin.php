<?php
session_start();

if (!isset($_SESSION['user']))
{
    header('location: '.APP_ROOT.'/articles/login.php');
};
?>

<p> you made it to the admin page <?= $_SESSION['user']?>!</p>