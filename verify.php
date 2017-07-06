<?php
$access_token = 'rdDSSO7/s26869s8s8jd+E25bn1OyJ/XBtYnFqSicfl8W0v6zzZpcKSqZyUiJG2+ctuZY7iIP0P/5u7ic/HP1j4VThCWihig84h3oUpLL7KUsb5R44P/MrCeqyfh8CQZk5+A6/6hYpVE1fdneTJrtgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
