<?php
    function getUserFromId()
    {
    	$query = "SELECT first_name, last_name, email, reemail, password, sex, birthday FROM user 
    	          WHERE user_id = '" . dbEscape( $_SESSION['user_id'] ) . "'";
    	$user = getQueryResults( $query );
    	return $user;
    }   
    
    function getUserFromEmail( $email )
    {
    	$query = "SELECT first_name, last_name, email, reemail, password, sex, birthday FROM user 
    	          WHERE email = '" . dbEscape( $email ) . "'";
    	$user = getQueryResults( $query );
    	return $user;        
    }

    function saveUser( $user )
    {
        $password = md5(dbEscape( $user['new_password'] ));
    	$query = "INSERT INTO user SET first_name = '" . dbEscape( $user['first_name'] ) ."',
    	                               last_name = '" . dbEscape( $user['last_name'] ) . "',
    	                               email = '" . dbEscape( $user['email'] ) . "',
    	                               reemail = '" . dbEscape( $user['reemail'] ) . "',
    	                               password= '" . $password . "',
    	                               sex = '" . dbEscape( $user['sex'] ) . "',
    	                               birthday = '" . dbEscape( $user['birthday'] ) . "'";
    	executeQuery( $query );
    }
    
    function saveFile( $realName, $ext )
    {
    	$query = "INSERT INTO file_info SET user_id = '" . $_SESSION['user_id'] ."',
    	                               file_name = '" . dbEscape( $realName ) . "',
                                       extension = '" . dbEscape( $ext ) . "',
                                       rating = " . 0;
    	executeQuery( $query );
    }
    
    function getListOfUsers()
    {
    	$query = "SELECT first_name, last_name, email FROM user";
    	return $user = getQueryResults( $query );
    }
    
    function getFilteredFileList( $user_email, $file_ext, $files )
    {
    	$user_id = "SELECT user_id FROM user WHERE email = '" . dbEscape( $user_email ) . "'";
    	$user = getQueryResults( $user_id );
    	if ( empty( $user_email ) )
    	{
    	    if ( empty( $file_ext ) )
    	    {
                $partOfQuery = "";
    	    }
    	    else
    	    {
                $partOfQuery = "WHERE extension='" . dbEscape( $file_ext ) ."'";
    	    }
    	}
    	else
    	{
            if ( empty( $file_ext ) )
    	    {
                $partOfQuery = "WHERE user_id='" . dbEscape( $user[0]['user_id'] ) . "'";
    	    }
    	    else
    	    {
                $partOfQuery = "WHERE user_id='" . dbEscape( $user[0]['user_id'] ) ."' AND extension='" . 
                dbEscape( $file_ext ) . "'";
            } 
    	}
    	$query = "SELECT * FROM file_info " . $partOfQuery;
    	$files = getQueryResults( $query );
    	return $files;
    }

    function getUserEmail( $user_id )
    {
    	$user_email = "SELECT email FROM user WHERE user_id = '" . dbEscape( $user_id ) . "'";
    	$user = getQueryResults( $user_email );
    	return $user[0]['email'];
    }
    function getTotalPages()
    {
    	$countOfUsers = "SELECT COUNT(*) FROM user";
    	$countOfUsers = mysql_fetch_row( executeQuery( $countOfUsers ) );
    	$totalPages = intval( ($countOfUsers[0] - 1) / MESSAGES ) + 1;
    	return $totalPages;
    }
       
    function getPageOfUsers()
    { 	
    	$page = getPage();
    	$firstMes = $page * MESSAGES - MESSAGES;
    	$currentMes = "SELECT * FROM user LIMIT " . dbEscape( $firstMes ) . ", " . dbEscape( MESSAGES );
    	$result = getQueryResults( $currentMes );   	
    	return $result;
    }

	function insertChangeRating ( $idFile )
	{
		$query = "INSERT INTO file_change SET file_id=" . dbEscape( $idFile ) . ", user_id=" . dbEscape( $_SESSION['user_id'] );
		executeQuery( $query );
	}
	
    function updateFileRating ( $curRating, $idFile )
    {
    	executeQuery( "UPDATE file_info SET rating=" . dbEscape( $curRating ) . " WHERE file_id=" . dbEscape( $idFile ) );
    }
    
    function getRating ( $idFile )
    {
    	$rating = "SELECT * FROM file_info WHERE file_id=" . dbEscape( $idFile );
    	$curRating = getQueryResults( $rating );
    	return $curRating = (int) $curRating[0]['rating'];
    }
    
    function getChangeRating ( $idFile )
    {
    	$query = "SELECT * FROM file_change WHERE file_id=" . dbEscape( $idFile ) . " AND user_id=" . dbEscape( $_SESSION['user_id']);
    	return $makeChange = getQueryResults( $query );
    }
   
    function GetName()
    {
        $query = "SELECT first_name FROM user WHERE user_id='" . dbEscape( $_SESSION['user_id'] ) . "'";
        $name = getQueryResults( $query );
        return $name[0]['first_name'];
    }

    function GetUser()
    {
        $email = isset( $_GET["your_email"] ) ? $_GET["your_email"] : "";
        $password = isset( $_GET["password"] ) ? $_GET["password"] : "";
        if ( ( !empty( $email ) ) && ( !empty( $password ) ) )
        {
            $user = "SELECT user_id FROM user WHERE email = '" . $email . "' AND password = '" . md5($password) . "'";
            $user_id = getQueryResults( $user );
            if ( !empty( $user_id[0] ) )
            {		
                $_SESSION['user_id'] = $user_id[0]['user_id'];
            }
        }
        $user_email = "SELECT email FROM user WHERE user_id = '" . dbEscape( $user_id[0]['user_id'] ) . "'";
    	$user = getQueryResults( $user_email );
    	return $user[0]['email'];

    }
?>