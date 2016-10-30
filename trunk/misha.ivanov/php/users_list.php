<?php
    require_once( './include/common.inc.php' );
    checkLogin();
    checkValumeList();
    $users = usersList( $_GET['num_list'] );
    $list = getUser( $users );  
    valumeList( $back, $next ); 
    $vars = array( 'LIST' => $list, 'BACK' => $back, 'NEXT' => $next );
    $form = parseTemplate( 'users_list.tpl', $vars );    
    $vars = array( 'TITLE' => 'Form', 'FORM' => $form );
    build( $vars );
?>
