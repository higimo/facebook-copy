<?php
    require_once( './include/common.inc.php' );
    if ( isset( $_SESSION['user_id'] ) )
    {
        session_start();        
    }
    if ( isset( $_GET['comment'] ) )
    {
        switch ( $_GET['comment'] ) {
          case 'error':      $comment = 'Incorrect data!'; break;
          case 'ok':         $comment = 'Data are successfully kept.'; break;
          case 'email_copy': $comment = 'The user with such E-mail already exists.'; break;
          case 'error_db':   $comment = 'Error database. User has not saved.'; break;
          default:           $comment = '';
        }
    }
    else
    {
        $comment = '';
    }
    $vars = array( 'COMMENT' => $comment );
    $form = parseTemplate( 'form.tpl', $vars );
    $vars = array( 'TITLE' => 'Sign in', 'COMMENT' => $comment, 'FORM' => $form );
    build( $vars );
?>