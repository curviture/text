<?php
header('Content-Type: application/json');

@session_start();

if(isset($_SERVER['HTTP_REFERER'])){
    if($_SESSION["referer"] == '') $_SESSION["referer"] = $_SERVER['HTTP_REFERER'];
}

$referer = (isset($_SESSION["referer"]))? $_SESSION["referer"]  : 'Реферальная ссылка не определена';

if (stristr($referer, 'yandex.ru')) { $search = 'text='; $crawler = 'Yandex'; }
if (stristr($referer, 'rambler.ru')) { $search = 'words='; $crawler = 'Rambler'; }
if (stristr($referer, 'google.ru')) { $search = 'q='; $crawler = 'Google'; }
if (stristr($referer, 'google.com')) { $search = 'q='; $crawler = 'Google'; }
if (stristr($referer, 'mail.ru')) { $search = 'q='; $crawler = 'Mail.Ru'; }
if (stristr($referer, 'bing.com')) { $search = 'q='; $crawler = 'Bing'; }
if (stristr($referer, 'qip.ru')) { $search = 'query='; $crawler = 'QIP'; }

if (isset($crawler)){
    $phrase = urldecode($referer);
    preg_match('/'.$search.'([^&]*)', $phrase.'&', $phrase_k);
    $phrase = $phrase_k[1];
    $referer =  $crawler;
}

if(isset($crawler)){
    $ref = 'Ключи: '.$phrase.' Источник: '.$referer;
}else{
    $ref = 'Источник: '.$referer;
}



function mailsend($to, $from, $subject, $message, $sitename) {
    $headers[] ="MIME-Version: 1.0";
    $headers[] ="Content-Type: text/html; charset=utf-8";
    $from ='=?UTF-8?B?'.base64_encode($sitename).'?=<'.$from.'>';
    $headers[] ="From: ".$from;
    $headers[] ="Reply-To: ".$from;
    $headers[] ="Return-Path: ".$from;
    $headers[] ="X-Mailer: PHP/" . phpversion();
    $headers[]= "X-Priority:  3 (Normal)";
    $headers[]= "X-MSMail-Priority: Normal";
    $headers[]= "Importance: High";
    $header=implode("\r\n", $headers);
    if (mail($to, $subject, $message, $header)) {
        echo json_encode(['success'=>true]);
    } else {
        echo json_encode(['success'=>false]);
    }
}

if(true || isset($_FILES['tech_file']['tmp_name'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["tech_file"]["tmp_name"]);

    $message ='<p><strong>Техническое задание для продающего текста : </strong>'.$_POST['cat'].
        '<p><strong>Название компании: </strong>'.$_POST['tt-company-name'].
        '<p><strong>Контактные данные: </strong>'.$_POST['tt-contacts'].
        '<p><strong>Сфера деятельности компании: </strong>'.$_POST['tt-company-field'].
        '<p><strong>Тематика материала: </strong>'.$_POST['tt-text-theme'].
        '<p><strong>Вид продающего текста (о каком именно тексте идет речь): </strong>'.$_POST['tt-text-type'].
        '<p><strong>Где будет размещен текст?(ссылка на сайт, макет): </strong>'.$_POST['tt-text-place'].
        '<p><strong>Укажите ссылки на тексты, которые Вам нравятся и которые можно рассматривать в качестве примера удачного материала: </strong>'.$_POST['tt-text-like'].
        '<p><strong>Размер текста (примерное количество печатных знаков/или листа A4 ): </strong>'.$_POST['tt-symbol-number'].
        '<p><strong>Основной продукт (товар, услуга): </strong>'.$_POST['tt-main-product'].
        '<p><strong>Целевая аудитория текста (основные покупатели): </strong>'.$_POST['tt-target-group'].
        '<p><strong>Компании-конкуренты (укажите 2-3 основных конкурентов, наименование компаний, их слабые и сильные стороны, ссылки и т.п.): </strong>'.$_POST['tt-product-char'].
        '<p><strong>Слова-исключения (возможно, есть слова, которые не стоит употреблять в статье): </strong>'.$_POST['tt-word-exclude'].
        '<p><strong>Есть ли у продукта (товара, услуги) уникальные качества или отличия? : </strong>'.$_POST['tt-product-unique'].
        '<p><strong>Какую идею Вы желаете донести до потребителя с помощью текста? : </strong>'.$_POST['tt-text-idea'].
        '<p><strong>Информация, которая обязательно должна быть отражена в тексте : </strong>'.$_POST['tt-product-info'].
        '<p><strong>Стиль написания : </strong>'.$_POST['tt-text-style'].
        '<p><strong>Пожелания относительно сроков подготовки материала : </strong>'.$_POST['tt-deadline'].
        '<p><strong>Дополнительные пожелания: </strong>'.$_POST['tt-additional'].
        '<p><strong>Реферальная :</strong>'.$ref;

    mailsend('gevorg@bombear.ru', 'no-replay@admin.ru', 'Письмо с сайта', $message, 'sitename');

    header('Location: http://text.bombear.ru/form_filled.php');

}