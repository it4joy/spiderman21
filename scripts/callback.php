<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['callbackname']) && !empty($_POST['callbackphone'])) {
		$to = 'muhorin.anton@mail.ru';
		$body = "\nИмя: {$_POST['callbackname']}\nТелефон: {$_POST['callbackphone']}\n\n";
		mail($to, "Заявка на обратный звонок", $body, "From: {$_POST['callbackphone']}");
    }
}

?>