<?php

    function startSession()
    {
        if( !empty( $_SESSION['user_id'] ) )
        {
            unset( $_SESSION['user_id'] );
            session_destroy(); 
        }
        session_name( 'new_session' );
        session_start();
    }
	
    function isSession()
    {
        if ( empty( $_SESSION['user_id'] ) )
        {
            echo '<script language="javascript">window.location.href = \'/php/log_in.php\';</script>';
        }
    }
   
    function exitSession()
    {
        unset( $_SESSION['user_id'] );
        session_destroy();	
    }
?>