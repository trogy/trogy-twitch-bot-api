<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
$inputcheck = array("ets2-sim1","ets2-sim2","ets2-arc1");
$args = $_GET['args'];
  foreach ($inputcheck as $ic) {
    if ($args == $ic) {
      $argsexp = explode('-',$args);
      $game = $argsexp["0"];
      $server = $argsexp["1"];
      $api_link = 'https://api.truckyapp.com/v2/traffic/top?game=' . $game . '&server=' . $server;
      $api_request = file_get_contents($api_link);
      $search = '{"response":';
      $replace = '';
      $step1 = str_replace($search, $replace, $api_request);
      $api_response = substr($step1, 0, -1);
      $array = json_decode($api_response, true);
      $i = 0;
      $limit = 5;
      $count = count($array);
      $arraycount = 0;
        while ($i < $limit && $i < $count) {
          $data = $array[$i];
          $arraydataname = $array[$arraycount]["name"];
          $arraydataseverity = $array[$arraycount]["severity"];
          $arraydataplayers = $array[$arraycount]["players"];
            if ($arraydataseverity === 'Fluid'){
              echo $arraydataname . " Low " . $arraydataplayers . " | ";
            }
            else{
              echo $arraydataname . " " . $arraydataseverity . " " . $arraydataplayers . " | ";
            }
            $arraycount++;
            ++$i;
            }
            echo ' Command in beta ATS is not supported';
      
      else{
    Echo "Error in input... Game Types are ets2 ats Servers are sim1 sim2 arc1 FORMAT QUERY AS GAME-SERVER | Command in beta ATS is not supported";
    throw new Exception('Invalid Input Type');
    }
}


//if (isset($_GET['args'])){
//}


?>
