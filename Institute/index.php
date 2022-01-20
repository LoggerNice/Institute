<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <title>Институт</title>
    <script src="dist/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Институт</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Расписание</a>
                        <a class="nav-link" href="client/notes.php">Заметки</a>
                        <a class="nav-link" href="client/prictices.php">Практики</a>
                        <a class="nav-link" href="client/exams.php">Экзамены</a>
                    </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="content">
            <?php 
                require_once("client/timetable.php");
            ?>
        </div>
    </div>
</body>
</html>