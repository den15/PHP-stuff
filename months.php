<form handle = "months.php">
<?php

echo 'Months: ';
echo '<br>';
$months = array('1'=>'January', 'Februaryfebruary', 'March');
echo '<select name = "month">';
echo '<option value=Jan>January</option>';
echo '<option value=Feb>February</option>';
echo '<option value=Mar>March</option>';
echo '</select></p>';
echo '<br>';
echo '<select name = "month2">';
foreach ($months as $key => $value) {
	echo "<option value = \"$key\">$value</option>\n";
}
echo '</select>';
echo '<br>';
echo '<br>';
echo '<input type = "submit" name = "submit" value = "submit Now!">';
echo '<br>';
echo '<br>';
if (isset ($_POST['submitted'])) {
if ($month2 =="January") {
	echo "$month2";
} else {
	echo 'bad';
}
}
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
?>