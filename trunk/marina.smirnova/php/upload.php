<?php
    require_once( "includes/common.inc.php" );    
    isSession();
    $vars = array( 
        'title' => "Upload",
        'topMenu' => createMenu(),
        'mail' => getUserEmail( $_SESSION['user_id'] )
    );
    $vars['content'] = getView('upload.tpl', $vars);
    buildLayout('main.tpl', $vars);
?>
