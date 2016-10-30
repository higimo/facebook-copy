<?php
    require_once( "includes/common.inc.php" );
    isSession();
    $vars = array( 
        'title' => "Recover Data",
        'topMenu' => createMenu(),
        'mail' => getUserEmail( $_SESSION['user_id'] )
    );
    $vars['content'] = getView('recovered_data.tpl', $vars);
    buildLayout('main.tpl', $vars);
?>
