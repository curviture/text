<?php
header('Content-Type: application/json');

@session_start();

if(isset($_SERVER['HTTP_REFERER'])){
    if($_SESSION["referer"] == '') $_SESSION["referer"] = $_SERVER['HTTP_REFERER'];
}

$referer = (isset($_SESSION["referer"]))? $_SESSION["referer"]  : '����������� ������ �� ����������';

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
    $ref = '�����: '.$phrase.' ��������: '.$referer;
}else{
    $ref = '��������: '.$referer;
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

    $message ='<p><strong>����������� ������� ��� ���������� ������ : </strong>'.$_POST['cat'].
        '<p><strong>�������� ��������: </strong>'.$_POST['tt-company-name'].
        '<p><strong>���������� ������: </strong>'.$_POST['tt-contacts'].
        '<p><strong>����� ������������ ��������: </strong>'.$_POST['tt-company-field'].
        '<p><strong>�������� ���������: </strong>'.$_POST['tt-text-theme'].
        '<p><strong>��� ���������� ������ (� ����� ������ ������ ���� ����): </strong>'.$_POST['tt-text-type'].
        '<p><strong>��� ����� �������� �����?(������ �� ����, �����): </strong>'.$_POST['tt-text-place'].
        '<p><strong>������� ������ �� ������, ������� ��� �������� � ������� ����� ������������� � �������� ������� �������� ���������: </strong>'.$_POST['tt-text-like'].
        '<p><strong>������ ������ (��������� ���������� �������� ������/��� ����� A4 ): </strong>'.$_POST['tt-symbol-number'].
        '<p><strong>�������� ������� (�����, ������): </strong>'.$_POST['tt-main-product'].
        '<p><strong>������� ��������� ������ (�������� ����������): </strong>'.$_POST['tt-target-group'].
        '<p><strong>��������-���������� (������� 2-3 �������� �����������, ������������ ��������, �� ������ � ������� �������, ������ � �.�.): </strong>'.$_POST['tt-product-char'].
        '<p><strong>�����-���������� (��������, ���� �����, ������� �� ����� ����������� � ������): </strong>'.$_POST['tt-word-exclude'].
        '<p><strong>���� �� � �������� (������, ������) ���������� �������� ��� �������? : </strong>'.$_POST['tt-product-unique'].
        '<p><strong>����� ���� �� ������� ������� �� ����������� � ������� ������? : </strong>'.$_POST['tt-text-idea'].
        '<p><strong>����������, ������� ����������� ������ ���� �������� � ������ : </strong>'.$_POST['tt-product-info'].
        '<p><strong>����� ��������� : </strong>'.$_POST['tt-text-style'].
        '<p><strong>��������� ������������ ������ ���������� ��������� : </strong>'.$_POST['tt-deadline'].
        '<p><strong>�������������� ���������: </strong>'.$_POST['tt-additional'].
        '<p><strong>����������� :</strong>'.$ref;

    mailsend('gevorg@bombear.ru', 'no-replay@admin.ru', '������ � �����', $message, 'sitename');

    header('Location: http://text.bombear.ru/form_filled.php');

}