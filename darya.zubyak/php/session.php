<?php
    require_once("includes/common.inc.php");
    session_start();
    if ( ( isset( $_POST["email"] ) ) && ( $_POST["email"] != "" ) && ( isset( $_POST["password"] ) ) && ( $_POST["password"] != "" ) )
    {
        $user = getUser( $_POST["email"] ); 
        if ( ($user) && ( MD5(dbEscape( $_POST["password"] )) == $user["password"]) )
        {
            $message = ""; 
            $_SESSION['user_id'] = $user["user_id"];
            $_SESSION['email'] = $user["email"];
        }
        else
        {
            $message = "There isn't the user or password isn't correct" ;
        } 
    }  
    else
    {
        $message = "There aren't some data";        
    }
    $userName =  ($message == "") ? $_SESSION['email']: "";
    $vars = array(
        "user" => $userName,
        "title" => "Привет", 
        "message" => $message,
        "topMenu" => createMenu()
        );
    $vars['content'] = getView("login.html", $vars);
    buildLayout("main.html", $vars);
?>
