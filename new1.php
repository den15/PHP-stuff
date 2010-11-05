<html>
<body>
<?php
echo (getLocalTimezone());
?>
</body>
</html>


")
$s1 = (date_sunset(time()));
$s2 = (date_sunset(time(), SUNFUNCS_RET_DOUBLE));
echo 'Sunset will be'.' ';
if ($s2