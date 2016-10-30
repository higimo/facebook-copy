<?php
    require_once( './include/common.inc.php' );
    $comment = (( isset( $_GET['comment'] ) AND ( $_GET['comment'] == 'error' )) ? 'User not found!' : '');
    $vars = array( 'COMMENT' => $comment );
    $form = parseTemplate( 'login.tpl', $vars );
    $vars = array( 'TITLE' => 'Login', 'FORM' => $form );
    build( $vars );
?>