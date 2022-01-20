<?php 
    require_once("../connect.php");

    $practic_id = $_POST['practic_id'];
    $name = $_POST['name'];
    $deadline = $_POST['deadline'];

    $query = "INSERT INTO `duty`(`id`, `practic_id`, `name`, `deadline`) VALUES (NULL, '$practic_id', '$name', '$deadline')";
    mysqli_query($connection, $query);
    mysqli_close($connection);

    $host  = $_SERVER['HTTP_HOST'];
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>