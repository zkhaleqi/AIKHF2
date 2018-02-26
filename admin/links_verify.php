<?php
include 'dbcon.php';
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST['submit']))
{


$title = $_POST['title'];
$url = $_POST['url'];

$sql = mysql_query("INSERT INTO `flinks` (`title`, `url`) VALUES ('$title', '$url');"); 

if(isset($_POST['submit']))
{

echo '    <script>
	window.location = "links_add.php"; 
    </script>
   ';
}
else
{
echo ' <script> 
	alert("Link not Added!");
	window.location = "links_add.php"; 
    </script>';
}
}
?>      

   
   