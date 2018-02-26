<?php 
// $con = mysql_connect('localhost','root','');
// mysql_select_db('aikhf',$con);
// if(!isset($con)) {
// 	die("Connection to database failed." .mysql_error());	
// }

$dsn = 'mysql:host=localhost;dbname=aikhf';

$db = new PDO($dsn, 'root', '');
?>