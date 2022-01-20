<?php
    require_once("../server/connect.php");

    $id = $_GET['id'];

    $query = "SELECT `name` FROM `practics` WHERE `id` = '$id'";
    $lesson = mysqli_query($connection, $query);
    $lesson = mysqli_fetch_assoc($lesson);
    
    echo $lesson['name'];
?>