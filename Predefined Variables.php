<!Doctype html PUBLIC "=//W3C//
DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/
xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="content-type"
	content="text/html; charset=iso-8859-1" />
	<title>Predefined Variables</title>
<head>
<body style="background-color:yellow">
<?php # Script 1.5 Predefined Variables.php
# Created October 9th 2010
# Created by Denis Collison
# Script 1.5 - predefined.php
$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];
Echo "<p>You are running the file:<br /><b>$file</b>,</p>\n";
Echo "<p>The User running the script is:<br /><b>$user</b>,</p>\n";
Echo "<p>The Server being used is:<br /><b>$server</b>,</p>\n";
?>
</body>
</html>