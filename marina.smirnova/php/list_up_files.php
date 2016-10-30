<?php
    require_once( "includes/common.inc.php" );
    isSession();
    $vars = array( 
        'title' => "List",
        'topMenu' => createMenu(),
        'mail' => getUserEmail( $_SESSION['user_id'] )
    );
    $vars['content'] = getView('list_up_files.tpl', $vars);
    buildLayout('main.tpl', $vars);
?>