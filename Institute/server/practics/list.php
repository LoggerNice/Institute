<?php
    require_once("../server/connect.php");

    $query = "SELECT * FROM `practics`";
    $practics = mysqli_query($connection, $query);
    $practics = mysqli_fetch_all($practics);

    if(count($practics) <= 0) {
        ?>
        <p class="fw-bold fs-4">Практик нет</p>
        <?php
    } 
    else {
        foreach($practics as $practic) {

            $query = "SELECT count(id) FROM `duty` WHERE `practic_id` = '$practic[0]'";
            $dept = mysqli_query($connection, $query);
            $dept = mysqli_fetch_assoc($dept);

            ?>
            <div class="block d-flex mb-2">
                <a href="./practic.php?id=<?= $practic[0] ?>" class="list-group-item list-group-item-action rounded" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?= $practic[1] ?></h5>
                        <small>Долгов: <?= $dept['count(id)'] ?></small>
                    </div>
                    <p class="mb-1">Преподаватель: <?= $practic[2] ?></p>
                    <small>Аудитория: <?= $practic[3] ?></small>
                </a>
                <a href="../server/practics/delete.php?id=<?= $practic[0] ?>" class="text-white btn btn-danger ms-2 rounded" style="text-decoration: none; padding-top: 2rem;">Удалить</a>
            </div>
            <?php
        }
    }
?>