<?php
    require_once("includes/common.inc.php");
    userLogin();
    $vars = array( "user" => $_SESSION['email'], 
        "title" => "Список файлов", 
        "message" => "",
        "topMenu" => createMenu()
        );
    $vars['content'] = getView("print_set_of_files.html", $vars);
    buildLayout("main.html", $vars); 
?>
