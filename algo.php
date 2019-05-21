<?php
$to = "abjjgp3@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: grbandon@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$message,$headers,$parameters);

?>