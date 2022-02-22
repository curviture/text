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
        '<p><strong>1.Название компании: </strong>'.$_POST['tt-company-name'].
        '<p><strong>2.Контактные данные: </strong>'.$_POST['tt-contacts'].
        '<p><strong>3.Тематика текста: </strong>'.$_POST['tt-text-theme'].
        '<p><strong>4.Целевая аудитория текста (основные покупатели): </strong>'.$_POST['tt-target-group'].
        '<p><strong>5.Количество символов (примерно): </strong>'.$_POST['"tt-symbol-number'].
        '<p><strong>6.Возможно ли увеличение или уменьшение объема статьи?: </strong>'.$_POST['tt-important-parts'].
        '<p><strong>7.Моменты, которые обязательно должны быть отражены в материале: </strong>'.$_POST['tt-text-like'].
        '<p><strong>8.Укажите ссылки на тексты, которые Вам нравятся и которые можно рассматривать в качестве примера удачного материала: </strong>'.$_POST['tt-text-like'].
        '<p><strong>9.Укажите список ключевых слов: </strong>'.$_POST['tt-keywords'].
        '<p><strong>10.Слова-исключения (возможно, есть слова, которые не стоит употреблять в статье): </strong>'.$_POST['tt-words-excluded'].
        '<p><strong>11.Точное количество вхождений каждого слова (лучше оставить усмотрение копирайтера): </strong>'.$_POST['tt-word-repeat'].
        '<p><strong>12.Допустимы ли словоформы (прямое, разбавленное, морфологическое вхождение): </strong>'.$_POST['tt-word-trans'].
        '<p><strong>13.Ссылка на место размещения текста	 (ссылка на сайт, макет и т. д.) : </strong>'.$_POST['tt-text-style'].
        '<p><strong>14.Стиль написания: </strong>'.$_POST['tt-text-idea'].
        '<p><strong>15.Нужны ли подзаголовки?: </strong>'.$_POST['tt-headers'].
        '<p><strong>16.Пожелания относительно сроков подготовки материала: </strong>'.$_POST['tt-deadline'].
        '<p><strong>17.Дополнительные пожелания: </strong>'.$_POST['tt-additional'].
        '<p><strong>18.Реферальная :</strong>'.$ref;

    mailsend('gevorg@bombear.ru', 'no-replay@admin.ru', 'Письмо с сайта', $message, 'sitename');

    header('Location: http://text.bombear.ru/form_filled.php');

}