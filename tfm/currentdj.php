<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
$api_request = file_get_contents('https://panel.truckers.fm/api/summary');
$search = '{"status":"success","result":{"next":';
$step1 = str_replace($search, $replace, $api_request);
$step2 = substr($step1, 0, -3);
$api_response =  "[" . $step2 . "]";
echo $api_response;
echo "<hr>";
$array = json_decode($api_response, true);
echo var_dump($array);
echo "<hr>";
$link = $array[""];
 ?>
