<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
$args = $_GET['args'];
if (isset($_GET['args'])){
  $argsexp = explode('-',$args);
  echo var_dump($argsexp);
  echo '<hr>';
  $game = $argsexp["0"];
  $server = $argsexp["1"];
  $api_link = 'https://api.truckyapp.com/v2/traffic/top?game=' . $game . '&server=' . $server;
  echo $api_link;
  echo '<hr>';
  $api_request = file_get_contents($api_link);
  $search = '[{"response":';
  $replace = '';
  $step1 = str_replace($search, $replace, $api_request);
  $api_response = substr($step1, 0, -1);
  echo $api_response;
  echo '<hr>';
  $array = json_decode($api_request, true);
  echo var_dump($array);
  echo '<hr>';

  $i = 0;
  $limit = 5;
  $count = count($array);
  $arraycount = 0;
  while ($i < $limit && $i < $count) {
     $data = $array[$i];
     $arraydataname = $array[$arraycount]["name"];
     $arraydataseverity = $array[$arraycount]["severity"];
     $arraydataplayers = $array[$arraycount]["players"];
     echo " | " . $arraydataname . $arraydataseverity . $arraydataplayers;

    $arraycount++;
    ++$i;
  }
  echo ' Command in beta';
}
else{
  Echo "Error in input... Game Types are ets2 ats Servers are sim1 sim2 arc1 | Command in beta ATS is not supported";
}
?>
