<?php
function userLogin()
{
    session_start();
    if (! isset($_SESSION["user_id"]) )
    {
        $vars = array(
            "title" => "Войти на сайт", 
            "message" => "",
            "topMenu" => createMenu()
            );
        $vars['content'] = getView("login.html", $vars);
        buildLayout("main.html", $vars);
        exit();
    }                
}
?>