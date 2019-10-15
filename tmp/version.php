<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
$api_request = file_get_contents('https://api.truckersmp.com/v2/version');
$api_response =  "[" . $api_request . "]";
$array = json_decode($api_request, true);
$version = $array["name"];
$atsversion = $array["supported_game_version"];
$etsversion = $array["supported_ats_game_version"];
echo "Current TruckersMP Version: " . $version . " Suported Game Versions: ATS - " . $atsversion . " ETS2 - " . $etsversion . " | Command In Beta";
?>
