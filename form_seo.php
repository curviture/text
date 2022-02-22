<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Техническое задание для SEO-текста</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container technical-task">
    <div class="row">
        <h2 class="text-center">Техническое задание <br>для SEO-текста</h2>
        <form action="/mailsend_seo.php" method="post" id="tt-seo">

            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="tt-company-name" class="control-label">1.Название компании (если есть)</label>
                    <input type="text" class="form-control" id="tt-company-name" placeholder="BomBear" name="tt-company-name">
                </div>
                <div class="form-group">
                    <label for="tt-contacts" class="control-label label-required">2.Контактные данные (телефон, @mail, skype)</label>
                    <input type="text" class="form-control" id="tt-contacts" placeholder="+7 (000) 111-11-11; example@example.ru; yourlogin111" name="tt-contacts" required>
                </div>
                <div class="form-group">
                    <label for="tt-target-theme" class="control-label">3.Тематика текста</label>
                    <input type="text" class="form-control" id="tt-target-theme" placeholder="Авто" name="tt-text-theme">
                </div>
                <div class="form-group">
                    <label for="tt-target-group" class="control-label">4.Целевая аудитория текста (основные покупатели)</label>
                    <input type="text" class="form-control" id="tt-target-group" placeholder="Мужчины 25-35 лет с автомобилей" name="tt-target-group">
                </div>
                <div class="form-group">
                    <label for="tt-symbol-number" class="control-label">5.Количество символов (примерно)</label>
                    <input type="number" class="form-control" id="tt-symbol-number" placeholder="2000-2500" name="tt-symbol-number">
                </div>
                <div class="radio">
                    <label class="control-label radio-label label-required" for="tt-text-compact-yes">6.Возможно ли увеличение или уменьшение объема статьи?</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-text-compact" id="tt-text-compact-yes" value="option1">Да
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-text-compact" id="tt-text-compact-no" value="option2">Нет
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-important-parts" class="control-label label-required">7.Моменты, которые обязательно должны быть отражены в материале
                    </label>
                    <textarea placeholder="Мощный, стильный, безопасный" class="form-control" id="tt-important-parts" name="tt-important-parts" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-text-like" class="control-label">8.Укажите ссылки на тексты, которые Вам нравятся и которые можно рассматривать в качестве примера удачного материала
                    </label>
                    <input type="text" class="form-control" id="tt-text-like" placeholder="http://text.bombear.ru" name="tt-text-like">
                </div>
                <div class="form-group">
                    <label for="tt-keywords" class="control-label">9.Укажите список ключевых слов</label>
                    <textarea placeholder="До 12-00 пятницы 01.01.16г" class="form-control" name="tt-keywords" id="tt-keywords"></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-words-excluded" class="control-label">10.Слова-исключения (возможно, есть слова, которые не стоит употреблять в статье)</label>
                    <textarea placeholder="Суперский,  нереальный, крутотень" class="form-control" id="tt-words-excluded" name="tt-words-excluded"></textarea>
                </div>
            </div>

            <!-- second row -->

            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="tt-word-repeat" class="control-label">11.Точное количество вхождений каждого слова (лучше оставить усмотрение копирайтера)
                    </label>
                    <textarea placeholder="Автомобиль BMW (3-4 вхождения)" class="form-control" id="tt-word-repeat" name="tt-word-repeat" rows="2"></textarea>
                </div>
                <div class="radio">
                    <label for="tt-word-trans" class="control-label radio-label">12.Допустимы ли словоформы (прямое, разбавленное, морфологическое вхождение)</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-word-trans" id="tt-word-trans-yes" value="Yes">Да
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-word-trans" id="tt-word-trans-no" value="No">Нет
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-text-place" class="control-label">13.Ссылка на место размещения текста	 (ссылка на сайт, макет и т. д.)</label>
                    <input type="text" class="form-control" id="tt-text-place" placeholder="http://text.bombear.ru" name="tt-text-place">
                </div>
                <div class="form-group">
                    <label for="tt-text-style" class="control-label">14.Стиль написания</label>
                    <input type="text" class="form-control" id="tt-text-style" placeholder="Деловой, ироничный, с  элементами юмора, провокационный, новостной" name="tt-text-style">
                </div>
                <div class="radio">
                    <label for="tt-headers-yes" class="control-label radio-label">15.Нужны ли подзаголовки?</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-headers" id="tt-headers-yes" value="Yes">Да
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-headers" id="tt-headers-no" value="No">Нет
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-deadline" class="control-label label-required">16.Пожелания относительно сроков подготовки материала</label>
                    <textarea placeholder="До 12-00 пятницы 01.01.16г" class="form-control" name="tt-deadline" rows="2" id="tt-deadline" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-additional" class="control-label">17.Дополнительные пожелания</label>
                    <textarea placeholder="Дополнительные пожелания" class="form-control" id="tt-additional" name="tt-additional"></textarea>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="hidden" value="Техническое задание для SEO-текста" name="cat">
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
