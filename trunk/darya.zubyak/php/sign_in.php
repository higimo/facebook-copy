<?php
    require_once( "includes/common.inc.php" );
    session_start();
    session_destroy();
    $vars = array( 
        "page_title" => "Персональные данные", 
        "message" => "", 
        "year" => setOfYears(), 
        "topMenu" => createMenu()
        );
    $vars['content'] = getView("form_of_survey.html", $vars);
    buildLayout("main.html", $vars);
?>
