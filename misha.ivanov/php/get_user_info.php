<?php
    require_once( './include/common.inc.php' );
    checkLogin();
    $isNotUser = ( isset( $_GET['comment'] ) and ( $_GET['comment'] == 'error' ) );
    $comment = ( $isNotUser ? 'User not found!' : '');
    $vars = array( 'COMMENT' => $comment );
    $form = parseTemplate( 'request.tpl', $vars );
    $vars = array( 'TITLE' => 'Request', 'COMMENT' => $comment, 'FORM' => $form  );
    build( $vars );
?>