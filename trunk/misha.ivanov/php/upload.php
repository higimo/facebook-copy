<?php
    require_once( './include/common.inc.php' );
    checkLogin();
    if ( isset( $_GET['error'] ) )
    {
        switch ( $_GET['error'] )
        {
            case 'ok':    $comment = 'File is uploaded.'; break;
            case 'error': $comment = 'Error! File is not uploaded.'; break;
            default:      $comment = '';
        }
    }
    else
    {
        $comment = '';
    }
    $vars = array( 'COMMENT' => $comment );
    $upload = parseTemplate( 'upload.tpl', $vars );
    $vars = array( 'TITLE' => 'Send Data', 'FORM' => $upload );
    build( $vars );
?>