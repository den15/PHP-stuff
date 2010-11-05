<!DOCTYPE html PUVLIC "-//W3C.. DTD XHTML 1.0 Transitional//EN" "http://www.w3.org
/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"
	content="text/html; charset=iso-8859-1" />
	<title>Form Feedback</title>
<head>
<body>
<?php # Script 2.2 ... handle_form.php
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$comments =$_REQUEST['comments'];
echo "<p>Thank you, <b>$name</b> for the following comments:<br />
<tt>$comments</tt></p>
<p>We will reply to you at:<br />
<i>$email</i>.</p>\n";
?>
</body>
</html>