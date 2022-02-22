<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Техническое задание для продающего текста</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container technical-task">
    <div class="row">
        <h2 class="text-center">Техническое задание <br>для продающего текста</h2>
        <form action="/mailsend_text_seller.php" method="post" id="tt-text-seller">

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
                    <label for="tt-company-field" class="control-label">3.Сфера деятельности компании</label>
                    <input type="text" class="form-control" id="tt-company-field" placeholder="Продажа автомобилей" name="tt-company-field">
                </div>
                <div class="form-group">
                    <label for="tt-target-theme" class="control-label">4.Тематика материала</label>
                    <input type="text" class="form-control" id="tt-target-theme" placeholder="Авто" name="tt-text-theme">
                </div>
                <div class="form-group">
                    <label for="tt-text-type" class="control-label">5.Вид продающего текста (о каком именно тексте идет речь)</label>
                    <input type="text" class="form-control" placeholder="Для лендинг страницы, текст для буклета, текст для наружной рекламы (улица) или рекламы на ТВ и т.п." name="tt-text-type" id="tt-text-type" >
                </div>
                <div class="form-group">
                    <label for="tt-text-place" class="control-label">6.Где будет размещен текст?(ссылка на сайт, макет)
                    </label>
                    <input type="text" class="form-control" placeholder="http://text.bombear.ru " name="tt-text-place" id="tt-text-place">
                </div>
                <div class="form-group">
                    <label for="tt-text-like" class="control-label">7.Укажите ссылки на тексты, которые Вам нравятся и которые можно рассматривать в качестве примера удачного материала
                    </label>
                    <input type="text" class="form-control" id="tt-text-like" placeholder="http://text.bombear.ru" name="tt-text-like">
                </div>
                <div class="form-group">
                    <label for="tt-symbol-number" class="control-label">8.Размер текста (примерное количество печатных знаков/или листа A4 )
                    </label>
                    <input type="text" class="form-control" id="tt-symbol-number" placeholder="2000-2500, 1 лист" name="tt-symbol-number">
                </div>
                <div class="form-group">
                    <label for="tt-main-product" class="control-label">9.Основной продукт (товар, услуга)</label>
                    <input type="text" class="form-control" id="tt-main-product" placeholder="Авто" name="tt-main-product">
                </div>
                <div class="form-group">
                    <label for="tt-target-group" class="control-label">10.Целевая аудитория текста (основные покупатели)</label>
                    <input type="text" class="form-control" id="tt-target-group" placeholder="Мужчины 25-35 лет с автомобилей" name="tt-target-group">
                </div>
            </div>

            <!-- second row -->

            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="tt-company-con" class="control-label">11.Компании-конкуренты (укажите 2-3 основных конкурентов, наименование компаний, их слабые и сильные стороны, ссылки и т.п.)</label>
                    <input type="text" class="form-control" id="tt-company-con" placeholder="https://www.yandex.ru/ , https://www.google.ru/" name="tt-company-con">
                </div>
                <div class="form-group">
                    <label for="tt-product-char" class="control-label">12.Перечислите основные качества Вашего продукта</label>
                    <textarea placeholder="Мощный, стильный, безопасный" class="form-control" id="tt-product-char" name="tt-product-char" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-word-exclude" class="control-label">13.Слова-исключения (возможно, есть слова, которые не стоит употреблять в статье)</label>
                    <textarea placeholder="Суперский,  нереальный, крутотень" class="form-control" id="tt-word-exclude" name="tt-word-exclude"></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-product-unique" class="control-label">14.Есть ли у продукта (товара, услуги) уникальные качества или отличия?</label>
                    <input type="text" class="form-control" id="tt-product-unique" placeholder="Уникальный внешний вид" name="tt-product-unique">
                </div>
                <div class="form-group">
                    <label for="tt-text-idea" class="control-label">15.Какую идею Вы желаете донести до потребителя с помощью текста?</label>
                    <textarea placeholder="Заинтересоваться товаром, приобрести его" class="form-control" id="tt-text-idea" name="tt-text-idea" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-product-info" class="control-label required">16.Информация, которая обязательно должна быть отражена в тексте</label>
                    <input type="text" class="form-control" id="tt-product-info" placeholder="Мощность двигателя, особенности коробки передач" name="tt-product-info" required>
                </div>
                <div class="form-group">
                    <label for="tt-text-style" class="control-label">17.Стиль написания</label>
                    <input type="text" class="form-control" id="tt-text-style" placeholder="Деловой, ироничный, с  элементами юмора, провокационный, новостной" name="tt-text-style">
                </div>
                <div class="form-group">
                    <label for="tt-deadline" class="control-label required">18.Пожелания относительно сроков подготовки материала </label>
                    <input type="text" class="form-control" id="tt-deadline" placeholder="До 12-00 пятницы 01.01.16г" name="tt-deadline" required>
                    <div class="form-group">
                        <label for="tt-additional" class="control-label">19.Дополнительные пожелания</label>
                        <textarea placeholder="Дополнительные пожелания" class="form-control" id="tt-additional" name="tt-additional" rows="2"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="hidden" value="Техническое задание для продающего текста" name="cat">
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
