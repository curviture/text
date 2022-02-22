<?php
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
			exit('{"success": "ok"}');
		} else {
			exit('{"success": "error"}');
		}
	}

	if($_GET['email'] != "" || $_GET['phone'] != "") {
        $message ='<p><strong>Название формы: </strong>'.$_GET['cat'].'</p>                  
                    <p><strong>Имя: </strong>'.$_GET['name'].'</p>
                    <p><strong>Телефон: </strong>'.$_GET['phone'].'</p>
                    <p><strong>Email: </strong>'.$_GET['email'].'</p>
                    <p><strong>Количество символов: </strong>'.$_GET['count'].'</p>
                    <p><strong>Стоимость: </strong>'.$_GET['price'].'</p>
                    <p><strong>Время выполнения: </strong>'.$_GET['time'].'</p>
                    <p><strong>Дней: </strong>'.$_GET['day'].'</p>
                    <p><strong>Выбор ниши: </strong>'.$_GET['nish'].'</p>
                    <p><strong>Сайт: </strong>'.$_GET['site'].'</p>';
	
	   mailsend('gevorg@bombear.ru', 'no-replay@bombear.ru', 'Письмо с сайта', $message, 'Text');
        
        exit('{"success": "ok"}');
	} else {
		exit('{"success": "error"}');
	}
?>
