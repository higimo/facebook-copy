<?php 
    $pass = $_GET['new_password'];
    $len = strlen($pass);
    $check = 0;

    if ( preg_match ( '/[a-zA-Z]{3,}/', $pass ) )
    {
    	$check = $check + 1;
    }
    if ( ( preg_match ( '/[0-9]{3,}/', $pass ) ) && ( $len > 8 ) )
    {
        $check = $check + 1;
    }
    if ( ( preg_match ( '/[ ]{1,}/', $pass ) ) && ( $len > 8 ) )
    {
    	$check = $check + 1;
    }
    echo $check;
?>