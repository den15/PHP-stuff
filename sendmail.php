<?php
$to = "denis@collison.ie";
$subject = "The Answer to Life!";
$message = "Hello! This is a simple email message.";
$from = "denis@collison.ie";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>