<?php

function dbConnect()
{
    $link = mysql_connect(DB_HOST.":".MYSQL_PORT, DB_USER, DB_PASS);
    if (!$link) 
    {
        die('Not connected : ' . mysql_error());
    }
    else    
    {
        $dbSelected = mysql_select_db(DB_NAME, $link);
        if ( !$dbSelected )
        {
            echo mysql_error();
            die();
        } 
    }
}
 
function executeQuery($query)
{
    mysql_query($query); 
}

function getQueryResults($query)
{
    $result = array();
    $queryResult = mysql_query($query);
    if ($queryResult)
    {
        while ( $assoc = mysql_fetch_assoc( $queryResult ) )
        {
            array_push( $result, $assoc );
        } 
    }  
    return $result;  
}

function dbEscape($var)
{
    return mysql_real_escape_string($var);
}

dbConnect();                     
?>