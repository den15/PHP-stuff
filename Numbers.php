<!Doctype html PUBLIC "=//W3C//
DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/
xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="content-type"
	content="text/html; charset=iso-8859-1" />
	<title>Numbers</title>
<head>
<body style="background-color:yellow">
<?php # Script 1.6 Numbers.php
# Created October 9th 2010
# Created by Denis Collison
# Script 1.6 - Numbers.php
$QuantityWine = 34;
$PriceWine = 9.80;
$PriceWine = number_format ($PriceWine, 2);
$tax = 0.07;
$TotalPurchases = $QuantityWine*$PriceWine*(1+$tax);
$TotalPurchases = number_format ($TotalPurchases, 2);
echo '<p>Your total purchases of wine was <b>$QuantityWine</b> <em>bottles</em> at a
<em>price</em> of <b>\$$PriceWine</b>per bottle, giving
 a total purchase price of <b>\$$TotalPurchases';

/*
<b>$QuantityWine</b>"<p>$"."$TotalPurchases"; 
*/
?>
</body>
</html>