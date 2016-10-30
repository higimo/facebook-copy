<?php
    require_once( './include/common.inc.php' );
    checkLogin();
    $list = getList();
    $vars = array('LIST' => $list);
    $lists = parseTemplate( 'list_of_files.tpl', $vars );
    $vars = array( 'TITLE' => 'Send Data', 'FORM' => $lists );
    build( $vars );
?>
