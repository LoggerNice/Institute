<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="../dist/css/bootstrap.css" rel="stylesheet">
    <link href="../index.css" rel="stylesheet">
    <title>Экзамены</title>

    <style>
        .accordion-item {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }
        
        .accordion-item-header:first-child {
            border-top: 1px solid #ced4da;
        }

        .accordion-item-header {
            border-top: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 10px 15px;
            background: none;
            color: black;
            cursor: pointer;
        }

        .accordion-item-content {
            background: #fff;
            transition: opacity .4s ease;
            visibility: hidden;
            margin-top: 20px;
            height: 0;
            opacity: 0;
        }

        .accordion-item.show .accordion-item-content {
            padding: 0 20px 20px 20px;
            visibility: visible;
            height: auto;
            opacity: 1;
        }

        .accordion-item.show .accordion-item-header {
            background: #3498db;
            color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }
    </style>
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
                        <a class="nav-link" href="prictices.php">Практики</a>
                        <a class="nav-link active" href="exams.php">Экзамены</a>
                    </div>
                    </div>
                </div>
            </nav>
        </div>

        <div id="accordion" class="accordion mb-5">
            <div class="accordion-item mb-2">
                <div class="accordion-item-header">
                    Зачеты
                </div>
                <div class="accordion-item-content">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php 
                        require_once("../server/exams/offset.php");
                    ?>
                </div>
                </div>
            </div>

            <div class="accordion-item mb-2">
                <div class="accordion-item-header">
                    Экзамены
                </div>
                <div class="accordion-item-content">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php 
                        require_once("../server/exams/exam.php");
                    ?>
                </div>
                </div>
            </div>

            <div class="accordion-item mb-2">
                <div class="accordion-item-header">
                    Курсовые работы
                </div>
                <div class="accordion-item-content">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php 
                        require_once("../server/exams/course.php");
                    ?>
                </div>
                </div>
            </div>
        </div>

        <script>
            var accordion = (function (element) {

            var _getItem = function (elements, className) { // функция для получения элемента с указанным классом
                var element = undefined;
                elements.forEach(function (item) {
                if (item.classList.contains(className)) {
                    element = item;
                }
                });
                return element;
            };

            return function () {
                var _mainElement = {}, // .accordion
                _items = {}, // .accordion-item
                _contents = {}; // .accordion-item-content 


                var _actionClick = function (e) {
                if (!e.target.classList.contains('accordion-item-header')) { // прекращаем выполнение функции если кликнули не по заголовку
                    return;
                }
                e.preventDefault();   // Отменям стандартное действие
                // получаем необходимые данные
                var header = e.target,
                    item = header.parentElement,
                    itemActive = _getItem(_items, 'show');

                if (itemActive === undefined) { // добавляем класс show к элементу (в зависимости от выбранного заголовка)
                    item.classList.add('show');
                } else {
                    // удаляем класс show у ткущего элемента
                    itemActive.classList.remove('show');
                    // если следующая вкладка не равна активной
                    if (itemActive !== item) {
                    // добавляем класс show к элементу (в зависимости от выбранного заголовка)
                    item.classList.add('show');
                    }
                }
                },
                _setupListeners = function () {
                    // добавим к элементу аккордиона обработчик события click
                    _mainElement.addEventListener('click', _actionClick);
                };

                return {
                init: function (element) {
                    _mainElement = (typeof element === 'string' ? document.querySelector(element) : element);
                    _items = _mainElement.querySelectorAll('.accordion-item');
                    _setupListeners();
                }
                }

            }
            })();

            var accordion1 = accordion();
            accordion1.init('#accordion');
        </script>

        <p class="fw-bold fs-5">Добавление работы</p>
        <form action="../server/exams/add.php" method="post">
            <div class="input">
                <div class="form-floating mb-2">
                    <select class="form-select" id="inputGroupSelect01" name="type">
                        <option value="Экзамен">Экзамен</option>
                        <option value="Зачет">Зачет</option>
                        <option value="Курсовая">Курсовая работа</option>
                    </select>
                    <label for="floatingInput">Тип экзамена</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="name" id="floatingInput">
                    <label for="floatingInput">Предмет</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="date" class="form-control" name="date">
                    <label for="inputDate">Дата</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="number" class="form-control" name="ball" id="floatingInput">
                    <label for="floatingInput">Балл</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
</body>
</html>