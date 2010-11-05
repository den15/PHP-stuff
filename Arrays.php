<!DOCTYPE html PUVLIC "-//W3C.. DTD XHTML 1.0 Transitional//EN" "http://www.w3.org
/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"
	content="text/html; charset=iso-8859-1" />
	<title>Form Feedback</title>
	<style type="text/css" title="text/css" media="all">
	.error {font-weight: bold; color: #c00}
	</style>
<head>
<body>
	<table border = "0" cellpadding = "5" cellspacing ="5" allign = "centre">
		<tr>
			<td><h2>T's Rating</h2></td>
			<td><h2>Epic Song</h2></td>
		</tr
<?php # Script 2.5 ... arrays.php #3
echo 'Months Months';
//$months = array(
//1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
// 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
//sort ($months);
// echo $months[3];
//foreach ($months as $key => $value) {
//	echo "$value,<br /br>";
//}
$tsongs = array (
	1 => 'We are so starving',
	3 => 'Know you enemy',
	6 => 'Everything is all right',
	5 => 'Indie Monster',
	2 => 'But it\'s better if you do',
	4 => 'We intertwined',
);
//echo <select name="month">
//echo <option value=January>January</option>
//echo <option value=February>February</option>
//echo <option value=March>March</option>
//</select></p>
//echo '<option value="10">';
//echo '<option value="10">';
//echo '<tr><td colspan="2" cellspacing="40"><b>In their original order:</b></td></tr>';
foreach ($tsongs as $key => $value) {
	echo "<tr><td>$key</td><td>$value</td><tr>\n";
}

ksort ($tsongs);
echo '<tr><td colspan="2"><b>Sorted by rating:</b></td></tr>';
foreach ($tsongs as $key => $value) {
	echo "<tr><td>$key</td><td>$value</td><tr>\n";
}
asort ($tsongs);
echo '<tr><td colspan="2"><b>Sorted alphabetically:</b></td></tr>';
foreach ($tsongs as $key => $value) {
	echo "<tr><td>$key</td><td>$value</td><tr>\n";
}
shuffle ($tsongs);
echo '<tr><td colspan="2"><b>And now shuffled:</b></td></tr>';
foreach ($tsongs as $key => $value) {
	echo "<tr><td>$key</td><td>$value</td><tr>\n";
}
?>
</body>
</html>