<?php
$apiKey = '13608460956743e276cefc30c231e53a-us16'; // your mailchimp API KEY here
$listId = '7b3ddf6ed7'; // your mailchimp LIST ID here
$double_optin=false;
$send_welcome=false;
$email_type = 'html';
$email = $_POST['newsletter_email'];
$submit_url = "http://us16.api.mailchimp.com/1.3/?method=listSubscribe"; // try https
$data = array(
    'email_address'=>$email,
    'apikey'=>$apiKey,
    'id' => $listId,
    'double_optin' => $double_optin,
    'send_welcome' => $send_welcome,
    'email_type' => $email_type
);
$payload = json_encode($data);
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $submit_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($payload));
 
$result = curl_exec($ch);
curl_close ($ch);
$data = json_decode($result);
if ($data->error){
    echo $data->error;
} else {
    echo 'Ваш e-mail успешно добавлен';
}
?>