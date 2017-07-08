<?php
	if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])){
		
		$headers = 'From: кто то ';
		
		$theme = "Новое сообщение";
		
		$letter = 'Данные сообщение: ';
		$letter .= 'Имя: '.$_POST['name'].'\r\n';
		$letter .= 'Мыло: '.$_POST['email'].'\r\n';
		$letter .= 'Сообщение: '.$_POST['message'].'\r\n';
		
		mail('skyover@rambler.ru', $theme, $letter, $headers);
	} else{
		header('location:/thankyou.php');
		}
 ?>