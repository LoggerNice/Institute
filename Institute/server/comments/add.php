<?php 
    require_once("../connect.php");

    $note_id = $_POST['note_id'];
    $text = $_POST['text'];
    $dateNow = date("Y-m-d");

    $query = "INSERT INTO `comments`(`id`, `text`, `date`, `note_id`) VALUES (NULL, '$text', '$dateNow', '$note_id')";
    mysqli_query($connection, $query);
    mysqli_close($connection);

    $host  = $_SERVER['HTTP_HOST'];
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>