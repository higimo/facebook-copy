<?php
    require_once( './include/common.inc.php' );
    check();
    saveUser( $_POST );
    $user = getUserInfo( $_POST['email'] );
    if ( $user['email'] == $_POST['email'] )
    {
        makeSession( $user );
        header( 'Location: /php/sign_in.php?comment=ok' );
    }
    else
    {
        header( 'Location: /php/sign_in.php?comment=error_db' );
    }
?>