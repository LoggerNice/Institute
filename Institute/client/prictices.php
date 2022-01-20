<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="../dist/css/bootstrap.css" rel="stylesheet">
    <link href="../index.css" rel="stylesheet">
    <title>Практики</title>
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

        <div class="content mb-5">
            <?php 
                require_once("../server/practics/list.php");
            ?>
        </div>

        <p class="fw-bold fs-5">Добавление предмета</p>
        <form action="../server/practics/add.php" method="post">
            <div class="input">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="name" id="floatingInput">
                    <label for="floatingInput">Предмет</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="professor" id="floatingInput">
                    <label for="floatingInput">Преподаватель</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="cabinet" id="floatingInput">
                    <label for="floatingInput">Аудитория</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
</body>
</html>