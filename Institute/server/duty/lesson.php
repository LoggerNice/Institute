<?php
    require_once("../server/connect.php");

    $id = $_GET['id'];

    $query = "SELECT * FROM `duty` WHERE `practic_id` = '$id'";
    $practics = mysqli_query($connection, $query);
    $practics = mysqli_fetch_all($practics);
    
    if(count($practics) <= 0) {
        ?>
        <p>Долгов нет</p>
        <?php
    } 
    else {
        foreach($practics as $practic) {

            $query = "SELECT * FROM `duty` WHERE `practic_id` = 'id'";
            $dept = mysqli_query($connection, $query);
            $dept = mysqli_fetch_assoc($dept);

            ?>
            <li class="list-group-item d-flex p-2 bd-highlight justify-content-between">
                <div class="p-2 bd-highlight">
                    <input class="form-check-input me-1" type="checkbox" value="">
                </div>
                <div class="bd-highlight" style="padding: 0.5rem 0.5rem 0.5rem 0;">
                    <?= $practic[2] ?>
                </div>
                <div class="ms-auto p-2 bd-highlight">
                    Deadline: <?= $practic[3] ?>
                </div>
            </li>
            <?php
        }
    }
?>