<?php
    include "include/includeall.inc.php";

    $var = array(
        'title'   => "Sign up",
        'message' => ""
    );

    $user = verificateForm();

    if ( isset( $user ) ) //все введено, или не по умолчанию
    {
        if ( $user['mail'] !== $user['remail'] )
        {
            $var['message'] = $var['message']."Not the same email";
        }
        else if( strlen($user[pass]) < 3 )
        {
            $var['message'] = $var['message']."Short PASS!!!";
        }
        else if ( !getUser( $user['mail'] ) )
        {
            saveUser( $user );
            $var['message'] = $var['message']."You are register";
            $_SESSION['userMail'] = $user['mail'];
        }
        else
        {
            $var['message'] = $var['message']."You are register later";
        }
    }
    buildLayout( TPL_PATH."sign_in_form.tpl", $var );    
?>