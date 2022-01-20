<?php
    require_once("../server/connect.php");

    $query = "SELECT * FROM `notes`";
    $notes = mysqli_query($connection, $query);
    $notes = mysqli_fetch_all($notes);

    if(count($notes) <= 0) {
        ?>
        <p class="fw-bold fs-4">Заметок нет</p>
        <?php
    } 
    else {
        foreach($notes as $note) {
            ?>
            <div class="block d-flex mb-2">
                <a href="./comments.php?id=<?= $note[0] ?>" class="list-group-item list-group-item-action rounded" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?= $note[1] ?></h5>
                    <small><?= $note[3] ?></small>
                    </div>
                    <p class="mb-1"><?= $note[2] ?></p>
                </a>
                <a href="../server/notes/delete.php?id=<?= $note[0] ?>" class="text-white btn btn-danger ms-2 rounded" style="text-decoration: none; padding-top: 1.5rem;">Удалить</a>
            </div>
            <?php
        }
    }
?>