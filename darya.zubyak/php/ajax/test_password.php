<?php

function validStrong( $pas)
{
    $reg = array(
        "/[a-z]+[A-Z]+[1-9]+/", 
        "/[a-z]+[1-9]+[A-Z]+/",  
        "/[A-Z]+[a-z]+[1-9]+/", 
        "/[A-Z]+[1-9]+[a-z]+/",  
        "/[1-9]+[a-z]+[A-Z]+/", 
        "/[1-9]+[A-Z]+[a-z]+/"
        );  
    $result = false;
    if ( strlen($pas) >= 8)
    {
        for ($i=0; $i <= 5; $i+=1)
        {
            if  ( preg_match( $reg[$i], $pas) )
            {
                $result = true;
            }
        } 
    }
    return  $result;
}

function validWeak($pas)
{
    $reg = array(
        "/^[a-z]*$/",
        "/^[A-Z]*$/",
        "/^[1-9]*$/"
        );
    $result = false;
    for ($i=0; $i <= 2; $i+=1)
    {
        if  ( preg_match( $reg[$i], $pas) )
        {
            $result = true;
        }
    }
    if ( ( strlen($pas) <= 6) or ($result && strlen($pas) <= 8) ) 
    {
        return  true;
    }
    else
    {
        return  false;
    }
}

header("Content-type: text/plain; UTF-8");
$password = $_POST["password"];
if ( validStrong( $password) )
{
    echo "strong";    
}
else
{
    if ( validWeak( $password) )
    {
        echo "weak";
    }
    else
    {
        echo "good";
    }
}

?>
