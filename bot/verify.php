<?php  

$access_token = 'bGKlq8QPOhXRch00ew28f/Bs6U5L+QjkcfLjP9xPvFoP8di2Mr9g4eQR7BgELt8cMKXFFsEEDCufUfXnZkBrKEdIj8ujCI/rA45gDXv0K5Ane/g1VqY98k7TH8eR/QRcCX43SvH3QOCop2ONb+KC4AdB04t89/1O/w1cDnyilFU=';
       
$url = 'https://api.line.me/v1/oauth/verify';


$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;