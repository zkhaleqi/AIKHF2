<?
header("location:login");
$ip = getenv("REMOTE_ADDR");
$file = fopen("vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
?>