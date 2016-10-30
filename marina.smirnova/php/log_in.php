<?php
    require_once( "includes/common.inc.php" );
    $vars = array( 
        'title' => "Log In",
        'topMenu' => createMenu(),
        'mail' => getUserEmail( $_SESSION['user_id'] )
    );
    $vars['content'] = getView('log_in.tpl', $vars);
    buildLayout('main.tpl', $vars);
?>