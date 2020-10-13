<?php
require "vendor/autoload.php";
$access_token = 'gEP1ipvGGe7y9z/OD5qWsCTocFG/rOVQ3Gp1mlmXKqx4omWPQTkjWOHNzqjQP80ucbLwejiCOKKgegIoAbWfNC0cwt381R6QkxVoyLDnDN48xtw6mNo/QfgHVTqdztTh3SsHtGSIH3AgRvYrsuprzAdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'c3fb8206378c783f96e16a8734bc175a';
$idPush = 'U5f1f465878da239ae222ddadac5a442d'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
