<?php
    require_once("../server/connect.php");

    $query = "SELECT * FROM `exams` WHERE `type` = 'Экзамен'";
    $exams = mysqli_query($connection, $query);
    $exams = mysqli_fetch_all($exams);

    if(count($exams) <= 0) {
        ?>
        <p class="fw-bold fs-5 ms-3">Экзаменов нет</p>
        <?php
    } 
    else {
        foreach($exams as $exam) {
            ?>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $exam[2] ?></h5>
                        <p class="card-text">Дата сдачи: <?= $exam[3] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Количество баллов: <?= $exam[4] ?></small>
                    </div>
                </div>
            </div>
            <?php
        }
    }
?>