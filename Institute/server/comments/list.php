<?php
    require_once("../server/connect.php");

    $id = $_GET['id'];

    $query = "SELECT * FROM `comments` WHERE `note_id` = '$id'";
    $notes = mysqli_query($connection, $query);
    $notes = mysqli_fetch_all($notes);
    
    if(count($notes) <= 0) {
        ?>
        <p>Комментариев нет</p>
        <?php
    } 
    else {
        foreach($notes as $note) {
            ?>
            <div class="block d-flex mb-2">
                <a href="./practic.php?id=<?= $note[0] ?>" class="list-group-item list-group-item-action rounded" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Комментарий #<?= $note[0] ?></h5>
                        <small><?= $note[2] ?></small>
                    </div>
                    <p class="mb-1"><?= $note[1] ?></p>
                </a>
                <a href="../server/comments/delete.php?id=<?= $note[0] ?>" class="text-white btn btn-danger ms-2 rounded" style="text-decoration: none; padding-top: 1.5rem;">Удалить</a>
            </div>
            <?php
        }
    }
?>