<?php
$access_token = 'gEP1ipvGGe7y9z/OD5qWsCTocFG/rOVQ3Gp1mlmXKqx4omWPQTkjWOHNzqjQP80ucbLwejiCOKKgegIoAbWfNC0cwt381R6QkxVoyLDnDN48xtw6mNo/QfgHVTqdztTh3SsHtGSIH3AgRvYrsuprzAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
