<?php
    require_once( './include/common.inc.php' );
    if ( isset( $_GET['email'] ) )
    {
        $userInfo = getUserInfo( $_GET['email'] );
    }
    if ( isset( $_GET['user_id'] ) )
    {
        $userInfo = getUserInfoId( $_GET['user_id'] );
    }
    if ( $userInfo == '' )
	  {
        header( 'Location: /php/get_user_info.php?comment=error' );
        exit;
    }
   	else
	  {
        $lists = getData( $userInfo );
    }
    $vars = array( 'LIST' => $lists );
    $form = parseTemplate( 'respond.tpl', $vars );
    $vars = array( 'TITLE' => 'Respond', 'FORM' => $form );
    build( $vars );
?>