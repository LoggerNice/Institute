<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="../dist/css/bootstrap.css" rel="stylesheet">
    <link href="../index.css" rel="stylesheet">
    <title>Комментарии</title>
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

        <p class="fw-bold fs-5">Список комментариев</p>
        <div class="content mb-5">
            <?php 
                require_once("../server/comments/list.php");
            ?>
        </div>

        <p class="fw-bold fs-5">Добавление комментария</p>
        <form action="../server/comments/add.php" method="post">
            <div class="input">
                <input hidden value="<?= $_GET['id']; ?>" name="note_id"/>
                <div class="form-floating">
                    <textarea class="form-control" name="text" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Ваш комментарий</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
</body>
</html>