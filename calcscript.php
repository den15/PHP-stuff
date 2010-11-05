<?php
//if (isset($_SESSION['views']))
//{	$_SESSION['views']=$_SESSION['views']+1;
//}
//	else
//	{	$_SESSION['views']=1;
//	echo "Views=". $_SESSION['views'];
//	}
if (isset($_POST['submitted']))
{	$i1=($_REQUEST['input1']);
	$i2=$_REQUEST['input2'];
	$op=$_REQUEST['operator'];
	$re=$_REQUEST['result'];	
	if (is_numeric ($i1) && is_numeric ($i2) && isset ($op));
	{	switch ($op)
		{
			case 'M';
			$re=$i1*$i2;
			break;
			case 'D';
			$re=$i1/$i2;
			break;
			case 'A';
			$re=$i1+$i2;
			break;
			case 'S';
			$re=$i1-$i2;
			break;
		}
		echo "error2";
	}
}
?>
$to = "someone@example.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "someonelse@example.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";