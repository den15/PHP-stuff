<form action=test.php action=post>
<input type="text" name="test">
<input type="submit" name="submit">
<?php
if isset($_REQUEST('test')) {
	echo ($_REQUEST('test'));
	}
?>
