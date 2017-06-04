<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['contactname']) && !empty($_POST['contactphone'])) {
		$to = 'muhorin.anton@mail.ru';
		$body = "\nИмя: {$_POST['contactname']}\nТелефон: {$_POST['contactphone']}\n\n";
		mail($to, "Сообщение из формы заявки", $body, "From: {$_POST['contactphone']}");
    }
}

?>