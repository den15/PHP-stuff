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
<?php # Script 2.4 ... handle_form.php #3
if (empty($_POST['handle'])) {
	echo 'hold your horses there... you didn\'t input your handle';
} elseif (empty($_POST['hail'])) {
		echo 'hold onto your horsefeathers now ... we need where you hail from';
	} elseif (empty($_POST['fmonth'])) {
			echo 'now this is ridiculous... no favourite month?';
			} elseif (empty($_POST['fday'])) {
					echo 'ah lads! you must have a favourite day';
				} and (empty($_POST['nofm'])) {
						echo 'O you poor dear... no family?';
					}


/*
!empty($_POST['email']) && 
!empty($_POST['comments']) &&}

!empty($_POST['gender'])) {
	echo "<p>Thank you 
	{$_POST['name']} for your comments: 
	{$_POST['comments']}
	. We will be in contact with you at {$_POST['email']} shortly.</p>";
} else {
	echo '<p class="error">Please complete the form correctly!</p>';
}
if (empty($_POST['name'])) {
	echo '<p class="error">You omitted your name!</p>';
}
if (empty($_POST['email'])) {
	echo '<p class="error">You omitted your email!</p>';
}
if (empty($_POST['gender'])) {
	echo '<p class="error">You omitted your gender!</p>';
}
if (empty($_POST['comments'])) {
	echo '<p class="error">You omitted comments!</p>';
}



if (!empty ($_REQUEST['name'])) {
	$name=$_REQUEST['name'];
} elseif (is_numeric($name)) {
	echo '<p> class="error">Gender should be either "M" or "F"!</p>';
} else {
	$name=NULL;
	echo '<p class="error">You forgot to enter your name! </p>';
	}
if (!empty ($_REQUEST['email'])) {
	$email=$_REQUEST['email'];
	} else {
	$email=NULL;
	echo '<p class="error">You forgot to enter your email address! </p>';
	}
if (!empty ($_REQUEST['comments'])) {
	$comments=$_REQUEST['comments'];
	} else {
	$comments=NULL;
	echo '<p class="error">You forgot to enter your comments! </p>';
	}
if (isset($_REQUEST['gender'])) {
	$gender=$_REQUEST['gender'];
	if ($gender=='M') {
		echo "<p>Good day, Mr $name </p>";
	} elseif ($gender=='F') {
		echo "<p>Good Day, Ms. $name, </p>";
	} else {
		$gender=NULL;
		echo '<p> class="error">Gender should be either "M" or "F"!</p>';
	}
	} else {
	$gender=NULL;
	echo '<p class="error">You forgot to select your gender!</p>';
	}
if ($name && $email && $gender && $comments) {
	echo "<p> Thank you for sending your comments:<br /br>
	<tt><b>$comments</b></tt>. We will be in contact with you at your email address: 
	<i>$email</i> shortly.";
	} else {
	echo '<p class="error">please go back and complete the form correclty!</p>';	
	}
*/
?>
</body>
</html>