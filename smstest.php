<?php
$token      = "Lq6HL37TaXVgn4MumziZ:o6RGEMWnUkENsbVBsb3x1OohN8pFyyOyOt6IKTaM";
$phone_number = "+971501743345";
$sms_body = "Hi Abdulsalam";
$key = base64_encode($token);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://restapi.smscountry.com/v0.1/Accounts/authKey/SMSes/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, '{
    "Text": "'.$sms_body.'",
    "Number": "'.$phone_number.'",
    "SenderId": "AD-Telebu",
    "DRNotifyUrl": "/notifyurl",
    "DRNotifyHttpMethod": "POST",
    "Tool": "API"
}');

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Authorization : Basic $key"
));

$response = curl_exec($ch);
curl_close($ch);
var_dump($response);