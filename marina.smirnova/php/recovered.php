<?php
    require_once( "includes/common.inc.php" );
    isSession();
    $email = $_GET['your_email'];
    $user = "";
    if ( empty( $email ) )
    {
        $user = getUserFromId();
    }
    else
    {
        $user = getUserFromEmail( $email ); 
    }
    $vars = array(
        'title' => "Recovered",
        'first_name' => $user[0]['first_name'],
        'last_name' => $user[0]['last_name'],
        'email' => $user[0]['email'],
        'reenter_email' => $user[0]['reemail'],
        'new_password' => $user[0]['password'],
        'sex' => $user[0]['sex'],
        'birthday' => $user[0]['birthday'],
        'topMenu' => createMenu(),
        'mail' => getUserEmail( $_SESSION['user_id'] )
    );
    $vars['content'] = getView('recovered.tpl', $vars);
    buildLayout('main.tpl', $vars);
?>
