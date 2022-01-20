<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="../dist/css/bootstrap.css" rel="stylesheet">
    <link href="../index.css" rel="stylesheet">
    <title>Долги</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">Институт</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" aria-current="page" href="../index.php">Расписание</a>
                            <a class="nav-link" href="notes.php">Заметки</a>
                            <a class="nav-link active" href="prictices.php">Практики</a>
                            <a class="nav-link" href="exams.php">Экзамены</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="d-flex bd-highlight">
            <p class="fw-bold fs-5 me-auto">Список долгов</p>
            <p class="bd-highlight align-self-center">
                <?php 
                    require_once("../server/practics/select_lesson.php");
                ?>
            </p>
        </div>
        <div class="content mb-5">
            <ul class="list-group">
                <?php 
                    require_once("../server/duty/lesson.php");
                ?>
            </ul>
        </div>

        <p class="fw-bold fs-5">Добавление практики</p>
        <form action="../server/duty/add.php" method="post">
            <div class="input">
                <input hidden value="<?= $_GET['id']; ?>" name="practic_id"/>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="name" id="floatingInput">
                    <label for="floatingInput">Название</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="date" class="form-control" name="deadline">
                    <label for="inputDate">Срок сдачи</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
</body>
</html>