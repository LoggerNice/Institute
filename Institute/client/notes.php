<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="../dist/css/bootstrap.css" rel="stylesheet">
    <link href="../index.css" rel="stylesheet">
    <title>Заметки</title>
    <script src="../dist/js/bootstrap.js"></script>
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
                        <a class="nav-link active" href="notes.php">Заметки</a>
                        <a class="nav-link" href="prictices.php">Практики</a>
                        <a class="nav-link" href="exams.php">Экзамены</a>
                    </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="content">
            <p class="fw-bold fs-5">Добавление заметки</p>
            <form action="../server/notes/add.php" method="post">
                <div class="input">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="title" id="floatingInput">
                        <label for="floatingInput">Название</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="description" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Описание</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Добавить</button>
            </form>

            <div class="list-group list">
                <?php 
                    require_once("../server/notes/notes.php");
                ?>
            </div>
        </div>
    </div>
</body>
</html>