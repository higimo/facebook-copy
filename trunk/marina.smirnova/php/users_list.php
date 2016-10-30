<?php
    require_once( "includes/common.inc.php" );
    isSession();
    $currentMes = getPageOfUsers();
	
    $vars = array(
        'title' => "User List",
        'content' => getContentOfTable( $currentMes ),
        'navigation' => navigation( getPage(), getTotalPages() ),
        'topMenu' => createMenu(),
        'mail' => getUserEmail( $_SESSION['user_id'] )
	);
    $vars['content'] = getView('users_list.tpl', $vars);
    buildLayout('main.tpl', $vars);
?>