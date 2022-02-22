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

    $message ='<p><strong>Название компании: </strong>'.$_POST['tt-company-name'].
        '<p><strong>Контактные данные: </strong>'.$_POST['tt-contacts'].
        '<p><strong>Тематика текста: </strong>'.$_POST['tt-text-theme'].
        '<p><strong>Целевая аудитория текста: </strong>'.$_POST['tt-target-group'].
        '<p><strong>Количество символов: </strong>'.$_POST['tt-symbol-number'].
        '<p><strong>Возможно ли увеличение или уменьшение объема статьи?: </strong>'.$_POST['tt-text-compact'].
        '<p><strong>.Mоменты, которые обязательно должны быть отражены в материале: </strong>'.$_POST['tt-important-moments'].
        '<p><strong>Укажите ссылки на тексты, которые Вам нравятся и которые можно рассматривать  в качестве удачного примера: </strong>'.$_POST['tt-links-to-texts'].
        '<p><strong>Слова-исключения (возможно, есть слова, которые не стоит употреблять в статье): </strong>'.$_POST['tt-words-excluded'].
        '<p><strong>Ссылка на место размещения текста: </strong>'.$_POST['tt-text-place'].
        '<p><strong>Стиль написания (деловой, ироничный, с элементами юмора, провокационный, новостной и так далее): </strong>'.$_POST['tt-headers'].
        '<p><strong>Нужны ли подзаголовки?: </strong>'.$_POST['tt-text-place'].
        '<p><strong>Пожелания относительно сроков подготовки материала : </strong>'.$_POST['tt-deadline'].
        '<p><strong>Дополнительные пожелания: </strong>'.$_POST['tt-additional'].
        '<p><strong>Реферальная :</strong>'.$ref;

    mailsend('gevorg@bombear.ru', 'no-replay@admin.ru', 'Письмо с сайта', $message, 'sitename');

    header('Location: http://text.bombear.ru/form-filled.php');
}