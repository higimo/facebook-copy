<?php
    include "include/includeall.inc.php";
    $var = array(
        'title' => "Get user",
        'getuser' => ""
    );
    
    isLoggin();
    
    if ( ( isset($_GET['email'] ) ) and ( isVar( $_GET['email'] ) ) )
    {
        $mail = strtolower( $_GET['email'] );
        $getUser = getUser( $mail );
        if ( isset( $getUser ) )
        {
            $space = "      ";
            $var['getuser'] = "\n";
            $var['getuser'] = $var["getuser"].parseTemplate( TPL_PATH."get_user.tpl", $getUser, $space."  " ).$space;
        }
        else
        {
            $var['getuser'] = "Такого юзера нет";
        }
    }
    
    buildLayout( TPL_PATH."get_user_form.tpl", $var );
?>