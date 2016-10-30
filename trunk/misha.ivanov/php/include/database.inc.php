<?php
    function dbConnect()
    {
        $db = mysql_connect( DB_HOST.':'.DB_PORT, DB_USER, DB_PASS ) or die( 'Unable to connect to db' );
        mysql_select_db( DB_NAME, $db ) or createDB(); 
    }
    function executeQuery( $query )
    {
        mysql_query( $query );
    }
    function getQueryResults( $query )
    {
        $results = array();
        $queryResult = mysql_query( $query );
        if ( $queryResult )
        {
            while ( $assoc = mysql_fetch_assoc( $queryResult ) )
            {
                array_push( $results, $assoc );
            }
        }
        return $results;
    }
    function dbEscape( $var ) 
    {
        return mysql_real_escape_string( $var );
    }
    dbConnect();
?>
