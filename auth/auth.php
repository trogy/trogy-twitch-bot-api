<?php
//Trogy Twitch Bot API (C) 2019 Marc Anderson
require ('config.php');
$apikey = $_GET["apikey"];
$apikeyclean = mysqli_real_escape_string($link, $apikey);
$query = "SELECT apikey FROM api WHERE apikey = $apikeyclean";
$mysqliquery = mysqli_query($link, $query) or die(mysqli_error($link));
while($row = mysql_fetch_array($query)) {
    echo $row['apikey'];
}
 ?>
