<?php
//Calculate the sunset time for Lisbon, Portugal
//Latitude: 38.4 North
//Longitude: 9 West
//Zenith ~= 90
//offset: +1 GMT
echo("Date: " . @date("D M d Y") . "<br />");
echo("Sunset time: ");
echo(@date_sunset(time(),SUNFUNCS_RET_STRING,37.442,-122.142,90,-8)).'<br />';
echo "the local time now, is: ".(@date("h"+1":i:s A") . "<br />");
$newtime=(@date("h:i:s A"), . "<br />");
$newtime=$newtime++;
echo "in one hour from now the local time will be: ".$newtime;
?>

