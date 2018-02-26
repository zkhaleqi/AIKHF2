<?php 
$con = mysql_connect('localhost','aikhforg_dbuser','&@QFt_XT-5DT');
mysql_select_db('aikhforg_aikhfdb',$con);
if(!isset($con)) {
	die("Connection to database failed." .mysql_error());	
}
?>