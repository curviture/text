<?php

header('Content-Type: application/json');

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

if(isset($_POST['username']) && isset($_POST['phone']) && isset($_POST['taxingsystem']) && isset($_POST['companybudget']) && isset($_POST['companytaxes'])){

    $message ='<p><strong>Name: </strong>'.$_POST['username'].'<p><strong>Phone: </strong>'.$_POST['phone'].'<p><strong>Taxing System: </strong>'.$_POST['taxingsystem'].'<p><strong>Company Budget: </strong>'.$_POST['companybudget'].'<p><strong>Company Taxes: </strong>'.$_POST['companytaxes'];

    mailsend('gevorg@bombear.ru', 'no-replay@admin.ru', 'ѕисьмо с сайта', $message, 'sitename');

    echo json_encode(['success'=>true]);
}

echo json_encode(['success'=>false]);