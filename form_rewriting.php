<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Техническое задание по рерайтинг</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container technical-task">
    <div class="row">
        <h2 class="text-center">Техническое задание <br>по рерайтингу</h2>
        <form action="/mailsend_rewriting.php" method="post" id="tt-rewriting">
            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="tt-company-name" class="control-label">1.Название компании (если есть)</label>
                    <input type="text" class="form-control" id="tt-company-name" placeholder="BomBear" name="tt-company-name">
                </div>
                <div class="form-group">
                    <label for="tt-contacts" class="control-label">2.Контактные данные (телефон, @mail, skype)</label>
                    <input type="text" class="form-control" id="tt-contacts" placeholder="+7 (000) 111-11-11; example@example.ru; yourlogin111" name="tt-contacts">
                </div>
                <div class="form-group">
                    <label for="tt-text-theme" class="control-label">3.Тематика текста</label>
                    <input type="text" class="form-control" id="tt-text-theme" placeholder="Авто" name="tt-text-theme">
                </div>
                <div class="form-group">
                    <label for="tt-target-group" class="control-label">4.Целевая аудитория текста</label>
                    <input type="text" class="form-control" id="tt-target-group" placeholder="Мужчины 25-35 лет с автомобилем" name="tt-target-group">
                </div>
                <div class="form-group">
                    <label for="tt-rewriting-goals" class="control-label">5.Для каких целей Вам требуется рерайтинг текста?</label>
                    <input type="text" class="form-control" id="tt-rewriting-goals" placeholder="Обзор продукта" name="tt-rewriting-goals">
                </div>
                <div class="radio">
                    <label class="control-label radio-label" for="tt-text-rewriting-yes">6.Есть ли у Вас материалы для рерайтинга?</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="rewriting-material" id="tt-text-rewriting-yes" value="Yes">Да
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="rewriting-material" id="tt-text-rewriting-no" value="No">Нет
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-symbol-number" class="control-label">7.Количество символов (примерно)</label>
                    <input type="number" class="form-control" id="tt-symbol-number" placeholder="2000-2500" name="tt-symbol-number">
                </div>
                <div class="radio">
                    <label class="control-label radio-label" for="tt-text-compact-yes">8.Возможно ли увеличение или уменьшение объема статьи?</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-text-compact" id="tt-text-compact-yes" value="option1">Да
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-text-compact" id="tt-text-compact-no" value="option2">Нет
                    </label>
                </div>
            </div>

            <!-- second row -->

            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="tt-links-to-texts" class="control-label">9.Укажите ссылки на тексты, которые Вам нравятся и которые можно рассматривать  в качестве удачного примера</label>
                    <textarea placeholder="http://text.bombear.ru" class="form-control" rows="4" id="tt-links-to-texts" name="tt-links-to-texts"></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-words-excluded" class="control-label">10.Слова-исключения (возможно, есть слова, которые не стоит употреблять в статье)</label>
                    <textarea placeholder="Суперский,  нереальный, крутотень" class="form-control" id="tt-words-excluded" name="tt-words-excluded"></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-text-place" class="control-label">11.Ссылка на место размещения текста</label>
                    <input type="text" class="form-control" id="tt-text-place" placeholder="http://text.bombear.ru" name="tt-text-place">
                </div>
                <div class="form-group">
                    <label for="tt-text-style" class="control-label">12.Стиль написания (деловой, ироничный, с элементами юмора, провокационный, новостной и так далее)</label>
                    <input type="text" class="form-control" id="tt-text-style" placeholder="Деловой, ироничный, с  элементами юмора, провокационный, новостной" name="tt-text-style">
                </div>
                <div class="radio">
                    <label for="tt-headers-yes" class="control-label radio-label">13.Нужны ли подзаголовки?</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-headers" id="tt-headers-yes" value="Yes">Да
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-headers" id="tt-headers-no" value="No">Нет
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-deadline" class="control-label">14.Пожелания относительно сроков подготовки материала</label>
                    <textarea placeholder="До 12-00 пятницы 01.01.16г" class="form-control" name="tt-deadline" rows="2" id="tt-deadline"></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-additional" class="control-label">15.Дополнительные пожелания</label>
                    <textarea placeholder="Дополнительные пожелания" class="form-control" id="tt-additional" name="tt-additional"></textarea>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="hidden" value="Техническое задание по рерайтингу" name="cat">
                    <input type="file" value="Прикрепить файл">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Отправить" name="submit-copy">
                </div>
            </div>
        </form>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="plugin/Lava-Lamp-master/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="plugin/Lava-Lamp-master/js/jquery.lavalamp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/send.js"></script>
<script src="js/plugins-scroll.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>