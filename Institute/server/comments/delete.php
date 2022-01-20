<?php
    require_once("../connect.php");

    $id = $_GET['id'];

    $query = "DELETE FROM `comments` WHERE `id` = $id";
    mysqli_query($connection, $query);
    mysqli_close($connection);

    $host  = $_SERVER['HTTP_HOST'];
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>