<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
$api_request = file_get_contents('https://beta.radiocloud.pro/api/public/v1/presenter/live');
$api_response =  "[" . $api_request . "]";
$array = json_decode($api_request, true);
echo '<pre>'; print_r($array); echo '</pre>';
$show = $array["description"];
echo "Current Show: " . $show;
 ?>
