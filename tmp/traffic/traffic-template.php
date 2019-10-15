<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
$game = $_GET['game'];
$server = $_GET['server'];
$api_request = file_get_contents('https://api.truckyapp.com/v2/traffic/top?game=' . $game . '&server=' . $server);
$api_response =  "[" . $api_request . "]";
echo $api_response;
echo '<hr>';
$array = json_decode($api_request, true);
echo var_dump($array);
echo '<hr>';

?>
