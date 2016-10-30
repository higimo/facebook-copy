<?php
   require_once("includes/common.inc.php");
   $smarty = new Smarty();
   session_start();
   userLogin();
   $files = getAllFile();
   $way = "/uploaded/".$files[0]["title"];                                                   
   $vars = array("title" => "Слайд-шоу", 
       "user" => $_SESSION['email'], 
       "way" => $way,
       "topMenu" => createMenu()
        );
   $vars['content'] = getView("slide.html", $vars);
   buildLayout("main.html", $vars); 
?>
