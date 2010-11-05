<?php
$to = "denis@collison.ie";
$subject = "The Answer to Life!";
$message = "Hello! This is a simple email message. (Version 2.)";
$from = "denis@denis-macbook-air.local";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>