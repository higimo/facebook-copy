<?php
    require_once( "includes/common.inc.php" );
    exitSession();
    $vars = array( 
        'title' => "Exit",
        'topMenu' => createMenu(),
        'content' => "GoodBye! See you later!"
    );
    buildLayout('main.tpl', $vars);
?>