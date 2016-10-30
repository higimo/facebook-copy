<?php
    require_once( "includes/common.inc.php" );
    
    $user_email = isset( $_GET["name_of_user"] ) ? $_GET["name_of_user"] : "";
    $file_ext = isset( $_GET["file_ext"] ) ? $_GET["file_ext"] : "";
    $files = array();
    
    $files = getFilteredFileList( $user_email, $file_ext, $files );
    $content = getList( $files );
    $vars = array(
        'title' => "List",
        'conlist' => $content,
        'topMenu' => createMenu(),
        'mail' => getUserEmail( $_SESSION['user_id'] ) 
    );
    $vars['content'] = getView('get_list.tpl', $vars);
    buildLayout('main.tpl', $vars);   
?>