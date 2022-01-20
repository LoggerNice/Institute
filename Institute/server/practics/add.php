<?php 
    require_once("../connect.php");

    $name = $_POST['name'];
    $professor = $_POST['professor'];
    $cabinet = $_POST['cabinet'];

    $query = "INSERT INTO `practics`(`id`, `name`, `professor`, `cabinet`) VALUES (NULL, '$name', '$professor', '$cabinet')";
    mysqli_query($connection, $query);
    mysqli_close($connection);

    $host  = $_SERVER['HTTP_HOST'];
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>