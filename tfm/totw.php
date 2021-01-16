<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
$api_request = file_get_contents('https://beta.radiocloud.pro/api/public/v1/totw');
$api_response =  "[" . $api_request . "]";
$array = json_decode($api_request, true);
$link = $array["url"];
echo "Vote for TFM track of the week here: " . $link;
 ?>
