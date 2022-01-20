<?php
    require_once("../server/connect.php");

    $query = "SELECT * FROM `exams` WHERE `type` = 'Курсовая'";
    $courses = mysqli_query($connection, $query);
    $courses = mysqli_fetch_all($courses);

    if(count($courses) <= 0) {
        ?>
        <p class="fw-bold fs-5 ms-3">Курсовых нет</p>
        <?php
    } 
    else {
        foreach($courses as $cours) {
            ?>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $cours[2] ?></h5>
                        <p class="card-text">Дата сдачи: <?= $cours[3] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Количество баллов: <?= $cours[4] ?></small>
                    </div>
                </div>
            </div>
            <?php
        }
    }
?>