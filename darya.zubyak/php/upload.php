<?php
    require_once("includes/common.inc.php");
    userLogin();
    $vars = array( 
       "user" => $_SESSION['email'], 
       "title" => "Персональные данные", 
       "message" => "",
       "topMenu" => createMenu()
        );
   $vars["content"] = getView("form_of_upload.html", $vars);
   buildLayout("main.html", $vars); 
?>