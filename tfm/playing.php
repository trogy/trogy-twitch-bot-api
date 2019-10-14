<?php
//A Simple API to grab the current playing track from Truckers.FM
$api_request = file_get_contents('https://panel.truckers.fm/api/song/current');
$api_response =  "[" . $api_request . "]";
$array = json_decode($api_request, true);
$artist = $array["artist"];
$title = $array["title"];
echo "Current Song: " . $artist . " - " . $title;
 ?>
