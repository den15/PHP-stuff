<?php
function getLocalTimezone()
{
    $iTime = time();
    $arr = @localtime($iTime);
    $arr[5] += 1900;
    $arr[4]++;
    $iTztime = gmmktime($arr[2], $arr[1], $arr[0], $arr[4], $arr[3], $arr[5], $arr[8]);
    $offset = doubleval(($iTztime-$iTime)/(60*60));
    $zonelist =
    array
    (
        'Kwajalein' => -12.00,
        'Pacific/Midway' => -11.00,
        'Pacific/Honolulu' => -10.00,
        'America/Anchorage' => -9.00,
        'America/Los_Angeles' => -8.00,
        'America/Denver' => -7.00,
        'America/Tegucigalpa' => -6.00,
        'America/New_York' => -5.00,
        'America/Caracas' => -4.30,
        'America/Halifax' => -4.00,
        'America/St_Johns' => -3.30,
        'America/Argentina/Buenos_Aires' => -3.00,
        'America/Sao_Paulo' => -3.00,
        'Atlantic/South_Georgia' => -2.00,
        'Atlantic/Azores' => -1.00,
        'Europe/Dublin' => 0,
        'Europe/Belgrade' => 1.00,
        'Europe/Minsk' => 2.00,
        'Asia/Kuwait' => 3.00,
        'Asia/Tehran' => 3.30,
        'Asia/Muscat' => 4.00,
        'Asia/Yekaterinburg' => 5.00,
        'Asia/Kolkata' => 5.30,
        'Asia/Katmandu' => 5.45,
        'Asia/Dhaka' => 6.00,
        'Asia/Rangoon' => 6.30,
        'Asia/Krasnoyarsk' => 7.00,
        'Asia/Brunei' => 8.00,
        'Asia/Seoul' => 9.00,
        'Australia/Darwin' => 9.30,
        'Australia/Canberra' => 10.00,
        'Asia/Magadan' => 11.00,
        'Pacific/Fiji' => 12.00,
        'Pacific/Tongatapu' => 13.00
    );
    $index = array_keys($zonelist, $offset);
    if(sizeof($index)!=1)
        return false;
    return $index[0];
}
date_default_timezone_set(getLocalTimezone());
echo getLocalTimezone().'<br />';
//Calculate the sunrise time for Lisbon, Portugal
//Latitude: 38.4 North
//Longitude: 9 West
//Zenith ~= 90
//offset: +1 GMT
//$zone = $_GET['zone'];
//if($zone == 'chicago') $tz = 'America/Chicago';
//else if($zone == 'dublin') $tz = 'Europe/Dublin';
//date_default_timezone_set($tz);
//echo $tz;
//date_default_timezone_set("America/Chicago");
//$newdate = mktime(0,0,0,date()"D" "m"+1 "d" "Y") . "<br />");
//echo $newdate;
for ($i=1; $i<=12; $i++) {
	$newdate = mktime(0,0,0,date("m")+$i,date("d"),date("Y"));
	echo "in $i month/s from now, when the date is: ".date("d/m/Y", $newdate).' ';
	$s1 = (date_sunset($newdate));
	$s2 = (date_sunset($newdate, SUNFUNCS_RET_DOUBLE));
	echo 'sunset will be at:'.' ';
	echo $s1.'<br />';
}

///*
//$zone = $_GET['zone'];
//if($zone == 'chicago') $tz = 'America/Chicago';
//else if($zone == 'dublin') $tz = 'Europe/Dublin';
//date_default_timezone_set($tz);

//And then you can add "?zone=dublin" to the URL and it'll do the right thing.

//37.442° 122.142
//*/
?>