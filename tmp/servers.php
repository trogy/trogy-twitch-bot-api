<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
$api_request = file_get_contents('https://api.truckersmp.com/v2/servers');
$search = '{"error":"false","response":';
$step1 = str_replace($search, $replace, $api_request);
$step2 = substr($step1, 0, -1);
 $api_response = $step2;
 echo $api_response;
 echo "<hr>";
var_dump(json_decode($api_response, true));
 echo "<hr>";


$array = json_decode($api_response, true);
$i = 0;
$limit = 10;
$count = count($array);
$arraycount = 0;

while ($i < $limit && $i < $count) {
   $data = $array[$i];
   $arraydataname = $array[$arraycount]["name"];
   $arraydatashortname = $array[$arraycount]["shortname"];
  echo $arraydataname;
  echo '<br>';
  echo $arraydatashortname;
  echo '<br>';
  echo '<hr>';

  $arraycount++;
  ++$i;
}
  ?>
