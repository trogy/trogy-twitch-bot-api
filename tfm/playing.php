<?php
//Trogy Twitch Bot API (C) 2021 Marc Anderson
$api_request = file_get_contents('https://beta.radiocloud.pro/api/public/v1/song/currentt');
$api_response =  "[" . $api_request . "]";
$array = json_decode($api_request, true);
$artist = $array["artist"];
$title = $array["title"];
echo "Current Song: " . $artist . " - " . $title;
 ?>
