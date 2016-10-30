<?php
    function dbConnect()
    {
        $db = mysql_connect( DB_HOST . ":" . MYSQL_PORT, DB_USER, DB_PASS )
        or die( "Unaible to connect to DB" );
        mysql_select_db( DB_NAME, $db )
        or die( "Unaible to select DB" );
    }
	
    dbConnect();
	
    function executeQuery( $query )
    {
        return mysql_query( $query ); 
    }
	
    function getQueryResults( $query )
    {
        $results = array();
        $queryResult = executeQuery( $query );
        if ( $queryResult )
    	{
            while( $assoc = mysql_fetch_assoc( $queryResult ) )
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
?>
	