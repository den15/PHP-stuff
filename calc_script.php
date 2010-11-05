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