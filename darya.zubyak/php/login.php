<?php
require_once("includes/common.inc.php");
$smarty = new Smarty();
session_start();
session_destroy();
$vars = array(
    "title" => "Войти на сайт", 
    "message" => "",
    "topMenu" => createMenu()
    );
$vars['content'] = getView("login.html", $vars);
buildLayout("main.html", $vars);

?>
