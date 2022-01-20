<?php 
    require_once("../connect.php");

    $title = $_POST['title'];
    $description = $_POST['description'];
    $dateNow = date("Y-m-d");

    $query = "INSERT INTO `notes`(`id`, `title`, `description`, `date`) VALUES (NULL, '$title', '$description', '$dateNow')";
    mysqli_query($connection, $query);
    mysqli_close($connection);

    $host  = $_SERVER['HTTP_HOST'];
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>