<?php	
    require_once( "includes/common.inc.php" );
    $vars = array( 
        'title' => "Log In",
        'mail' => getUser(),
        'topMenu' => createMenu()
         );

    $email = isset( $_GET["your_email"] ) ? $_GET["your_email"] : "";
    $password = isset( $_GET["password"] ) ? $_GET["password"] : "";
	
    if ( ( empty( $email ) ) || ( empty( $password ) ) )
    {
        $vars['content'] = "You didn't entry data!";
    }
    else
    {
        $user = "SELECT user_id FROM user WHERE email = '" . $email . "' AND password = '" . md5($password) . "'";
        $user_id = getQueryResults( $user );
        if ( !empty( $user_id[0] ) )
        {		
            $_SESSION['user_id'] = $user_id[0]['user_id'];
            $name = GetName();
            $vars['content'] = "Hello, " . $name . "!";
        }
        else 
        {
            $vars['content'] = "Maybe you enter uncorrect email or password! Please try again or go to Sign up!";	
        }
    }
    buildLayout('main.tpl', $vars);
?>