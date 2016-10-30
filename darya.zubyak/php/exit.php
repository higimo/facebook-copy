<?php
    require_once("includes/common.inc.php");
    session_start();
    session_destroy();
    $vars = array(
        "user" => "", 
        "title" => "Войти на сайт", 
        "message" => "",
        "topMenu" => createMenu()
    );
    $vars['content'] = getView("login.html", $vars);
    buildLayout("main.html", $vars);
?>
