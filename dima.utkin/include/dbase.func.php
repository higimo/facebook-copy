<?php
    include "db.func.php";
    
    function getQueryResults( $query )
    {
        $link = dbConnect();
        $results = array();
        $queryResult = mysqli_query($link, $query );
        if ( $queryResult )
        {
            while ( $assoc = mysqli_fetch_assoc( $queryResult ) )
            {
                array_push( $results, $assoc );
            }
        }
        return $results;
    }
    
    
    function escapeSql( $sql )
    {
        $link = dbConnect();
        $sql = mysqli_real_escape_string( $link, $sql );  /// тут косяк!!!!
        return $sql;
    }

    function getUser( $mail )
    {
        $query = "SELECT *FROM user WHERE mail='".$mail."';";
        $users = getQueryResults( $query );
        return $users['0'];
    }
    
    function findUser( $mail, $pass )
    {
        $mail = escapeSql( $mail );
        $pass = escapeSql( $pass );
        $query = "SELECT *FROM user WHERE mail='".$mail."' AND pass='".$pass."';";
        $users = getQueryResults( $query );
        return $users['0'];
    }

    function getUserInfo( $mail )
    {
        $query = "SELECT * FROM  `user` WHERE mail =  'damir@gmail.com'";
        $users = getQueryResults( $query );
        return $users['0'];
    }

    function executeQuery( $query )
    {
        $link = dbConnect();
        mysqli_query( $link, $query ); 
    }
    
    function saveUser( $user )
    {
        $query = "INSERT INTO `user` VALUES";
        $query = $query."('".escapeSql( $user['firstname'] )."',
                          '".escapeSql( $user['lastname'] )."', 
                          '".$user['bday']."', 
                          '".$user['sex']."', 
                          '".md5( $user['pass'] )."', 
                          '".escapeSql( strtolower( $user['mail'] ) )."');";
        executeQuery( $query );
    }
    
    function getFiles($mail)
    {
            $query = "SELECT `file` FROM `file` WHERE mail='".$mail."'";
            $result = getQueryResults( $query );
            return $result;
    }

    function getAllFiles()
    {
            $query = "SELECT * FROM `file`";
            $result = getQueryResults( $query );
            return $result;
    }
    
    function writeFiles( $mail, $name )
    {
        $query = "INSERT INTO  `site`.`file` VALUES ('".$mail."',  '".$name."');";
        executeQuery( $query );
    }
    
    function getUserList( $last, $next )
    {

        $query = "SELECT firstname, lastname, mail FROM `user` LIMIT ".$last.", ".$next."";
        $result = getQueryResults( $query );
        return $result;
    }
    function getAllUserList()
    {

        $query = "SELECT firstname, lastname, mail FROM `user`";
        $result = getQueryResults( $query );
        return $result;
    }
?>