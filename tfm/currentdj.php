<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
$api_request = file_get_contents('https://panel.truckers.fm/api/summary');
$api_response =  "[" . $api_request . "]";
echo $api_response;
echo "<hr>";
$array = json_decode($api_request, true);
echo var_dump($array);
echo "<hr>";
$link = $array[""];
 ?>
