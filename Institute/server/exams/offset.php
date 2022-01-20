<?php
    require_once("../server/connect.php");

    $query = "SELECT * FROM `exams` WHERE `type` = 'Зачет'";
    $offsets = mysqli_query($connection, $query);
    $offsets = mysqli_fetch_all($offsets);

    if(count($offsets) <= 0) {
        ?>
        <p class="fw-bold fs-5 ms-3">Зачетов нет</p>
        <?php
    } 
    else {
        foreach($offsets as $offset) {
            ?>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $offset[2] ?></h5>
                        <p class="card-text">Дата сдачи: <?= $offset[3] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Количество баллов: <?= $offset[4] ?></small>
                    </div>
                </div>
            </div>
            <?php
        }
    }
?>