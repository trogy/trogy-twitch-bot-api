<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
$api_request = file_get_contents('https://api.truckersmp.com/v2/servers');
$search = '{"error":"false","response":';
$step1 = str_replace($search, $replace, $api_request);
$step2 = substr($step1, 0, -1);
$api_response = $step2;
$array = json_decode($api_response, true);
$i = 0;
$limit = 10;
$count = count($array);
$arraycount = 0;
while ($i < $limit && $i < $count) {
   $data = $array[$i];
   $arraydatagame = $array[$arraycount]["game"];
   $arraydatashortname = $array[$arraycount]["shortname"];
   $arraydataplayers = $array[$arraycount]["players"];
   $arraydatamaxplayers = $array[$arraycount]["maxplayers"];
   $arraydataspeedlimiter = $array[$arraycount]["speedlimiter"];
   $arraydataevent = $array[$arraycount]["event"];
   echo '[' . $arraydatagame . ']';
   echo ' ';
  echo '[' . $arraydatashortname . ']';
  echo ' - ';
  echo 'Players: ' . $arraydataplayers . ' / ' . $arraydatamaxplayers;
  if($arraydataspeedlimiter == 'true'){
  echo ' - ';
  echo 'Limited';
  echo ' - ';
  }
  else{

  }
  if($arraydataevent == 'true'){
  echo 'Event';
  echo ' - ';
  }
  else{

  }
  echo '  |  ';


  $arraycount++;
  ++$i;
}
echo 'Command in beta';
  ?>
