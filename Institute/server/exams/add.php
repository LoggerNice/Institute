<?php 
    require_once("../connect.php");

    $type = $_POST['type'];
    $name = $_POST['name'];
    $data = $_POST['date'];
    $ball = $_POST['ball'];

    $query = "INSERT INTO `exams`(`id`, `type`, `name`, `date`, `ball`) VALUES (NULL, '$type', '$name', '$data', '$ball')";
    mysqli_query($connection, $query);
    mysqli_close($connection);

    $host  = $_SERVER['HTTP_HOST'];
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>