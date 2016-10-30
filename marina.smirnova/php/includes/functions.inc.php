<?php
    function getParam( $a, $b, $defaultValue )
    {
    	$vars = array( 'value' => $defaultValue	);    	
        $param .= getView( "value.tpl", $vars );
        for ( $i = $a; $i <= $b; $i++ )
        {
        	$vars['value'] = $i;
            $param .= getView( "value.tpl", $vars );
        }
        return $param; 
    }

    function getContentOfTable( $currentMes )
    {
        $content = "";
        for ( $i = 0; $i < sizeof($currentMes); $i++ )
        {
            $vars = array( 
                'user_id' => $currentMes[$i]['user_id'], 	
                'first_name' => $currentMes[$i]['first_name'],
                'last_name' => $currentMes[$i]['last_name'],
                'email' => $currentMes[$i]['email']
            );
            $content .= getView( "content_table.tpl", $vars );
        }

        return $content;
    }

    function getPage()
    {
    	$totalPages = getTotalPages();
    	$page = $_GET['page'];
    	$page = intval( $page );
    	if ( empty( $page ) || $page < 0 )
    	{
    		$page = 1;
    	}
    	if ( $page > $totalPages )
    	{
    		$page = $totalPages;
    	}
    	return $page;
    }
    
    function getList( $files )
    {
    	$content = "";
    	$handle = opendir( UPLOAD_DIR );
    	if( !handle )
    	{
            return "";
    	}	
    	$j = 0;
    	for ( $i = 0; $i < sizeof( $files ); $i++ )
    	{    		
    	    if (( isset( $files[$i] ) ) && ( file_exists( UPLOAD_DIR . "/" . $files[$i]['file_name'] ) ) )
    	    {
    	    	$rating = "SELECT rating FROM file_info WHERE file_name='" . $files[$i]['file_name'] ."'";
    	    	$curRating = getQueryResults($rating);
    	    	$j++;
    	    	$email = getUserEmail( $files[$i]['user_id'] );
    	    	$vars = array(
                    'value' => ($j),
                    'email' => $email,
                    'file_name' => dbEscape( $files[$i]['file_name'] ),
                    'extension' => dbEscape( $files[$i]['extension'] ),
                    'id_file' => $i + 1,
                    'rating' => $curRating[0]['rating']
    	    	);  	    	
                $content .= getView( "content_file.tpl", $vars );
    	    }
    	}
    	closedir( $handle );
        return $content;
    }

    function navigation( $page, $totalPages )
    {    	
    	$navi;
        if ( $page != 1 )
        {
            $vars = array( 
                'page' => "1",
                'arrow1' => "<<",
                'tpage' => ( $page - 1 ),
                'arrow2' => "<"
            );
            $prevPage .= getView( "navigation.tpl", $vars );
    	}

        if ( $page != $totalPages )
        {
            $vars = array(
                'page' => ( $page + 1 ),
                'arrow1' => ">",
                'tpage' => $totalPages,
                'arrow2' => ">>"
            );
            $nextPage .= getView( "navigation.tpl", $vars );
        }	
        return $prevPage . " " . $page . " " . $nextPage;
    }

    function getUserSexOrBirth( $value, $select )
    {
    	$inputRoll = isset( $_GET[$value] ) ? $_GET[$value] : "";
    	return ( $inputRoll == $select ) ? "" : $inputRoll;
    }
    
    function getUserParam( $value )
    {
    	return isset( $_GET[$value] ) ? $_GET[$value] : "";
    }
    
    function getCurRating( $counter, $idFile )
    {

    	if ( $counter == null )
    	{
    	    return null;
    	}
    	$makeChange = getChangeRating ( $idFile );

    	$curRating = getRating ( $idFile );
    	if ( empty( $makeChange ) )
    	{
            insertChangeRating ( $idFile );
            if ($counter == -1)
            {
                $curRating = $curRating - 1;
            }
            else if ($counter == 1)
            {
                $curRating = $curRating + 1;
            }
            updateFileRating ( $curRating, $idFile );
    	}
    	return $curRating;
    }
?>