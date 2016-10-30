<?php
    //не логинит
    include "include/includeall.inc.php";

    $var = array(
        'title'     => "Sign up",
        'message'   => "",
        'username'  => "my Friend",
        'loginForm' => "",
        'unsee'     => ""
    );
    
    $mail = ( getLoginForm() ) ? strtolower( $_GET[mail] ) : "";
    $pass = ( getLoginForm() ) ? md5( $_GET[passworld] ) : "";
    
    if ( getLoginForm() )
    {
        $userInfo = findUser( $mail, $pass );
        recordToSession($userInfo);
    }
    
    $var[unsee] = ( isSetUser() ) ? getTemplate( TPL_PATH."unsee.tpl", "" ) : "";
    $var[username] = ( isSetUser() ) ? $_SESSION['fullname'] : "Anonymous";
    $var[loginForm] = ( notAuthorized() ) ? parseTemplate( TPL_PATH."login_form.tpl", $var, "  " ) : "";
    $var[message] = ( !isset($_GET[mail]) || findUser( $mail , $pass ) ) ? "" : "Не верный логин или пароль";

    logOut();
    
    buildLayout( TPL_PATH."login.tpl", $var );    
?>