
<?php
if (isset($_POST['submitted'])) {
	$i1=($_REQUEST['input1']);
	$i2=$_REQUEST['input2'];
	$op=$_REQUEST['operator'];
	$re=$_REQUEST['result'];	
	if (is_numeric ($i1) && is_numeric ($i2) && isset ($op)) {
		if ($op=='M') {
			$re=$i1*$i2;}
		elseif ($op=='D') {
		$re=$i1/$i2;}
		elseif ($op=='A') {
			$re=$i1+$i2;}
			elseif ($op=='S') {
				$re=$i1-$i2;}
			} else {
				echo "ohh my god you are literally a natural disaster";
				}	
				}
				?>
				<h2><b>Result:</h2></b><table border="1"><tr><td><?php echo $re ?></td></tr></table>
<h1><b>Calculator:</h1></b><br /><br /><br />
<form action="calculator.php" method="post"/>
<p>Input1:<input type="txt" name ="input1" size="10" maxlength="10"/></p>
<p>Multiply:<input type="radio" name ="operator"value="M" size="1" maxlength="1"/>
	Divide:<input type="radio" name ="operator"value="D" size="1" maxlength="1"/>
	Add:<input type="radio" name ="operator"value="A" size="1" maxlength="1"/>
	Subtract:<input type="radio" name ="operator"value="S" size="1" maxlength="1"/></p>
<p>Input2:<input type="txt" name ="input2" size="10" maxlength="10"/></p>
<p><input type="submit" name ="submit" value="calculate"/></p>
<p><Input type="hidden" name="submitted" value="1"/></form>