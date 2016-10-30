<?php
    require_once( "includes/common.inc.php" );
    $vars = array( 
        'title' => "Barley-break",
        'topMenu' => createMenu(),
        'mail' => getUserEmail( $_SESSION['user_id'] )
    );
    $vars['content'] = getView('barley_break.tpl', $vars);
    buildLayout('main.tpl', $vars);
?>