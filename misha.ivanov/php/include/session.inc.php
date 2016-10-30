<?php
    session_start();
    function makeSession( $user )
    {
        session_name( 'my site sesion' );
        session_start();
        $_SESSION['user_id'] = $user['user_id'];        
    }
    function checkUser()
    {
        $user = getUserInfo( $_POST['email'] );
        if ( isset( $user ) AND ( $_POST['password'] == $user['password'] ))
        {
            makeSession( $user );
            header( 'Location: /php/sign_in.php' );
            exit;
        }
    }
    function checkLogin()
    {
        if ( !isset( $_SESSION['user_id'] ) )
        {
            header( 'Location: /php/login.php' );
            exit;
        }
        else
        {
            session_start();
        }
    }
    function userExit()
    {
        unset( $_SESSION['user_id'] );
        session_destroy();
    }
?>