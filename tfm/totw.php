<?php
//A Simple API to grab the current playing track from Truckers.FM
$api_request = file_get_contents('https://panel.truckers.fm/api/totw');
$api_response =  "[" . $api_request . "]";
$array = json_decode($api_request, true);
$link = $array["url"];
echo "Vote for TFM track of the week here: " . $link;
 ?>
