<?php
   require_once("includes/common.inc.php");
   $smarty = new Smarty();
   session_start();
   userLogin(); 
   $images = array(
       "1" => "/img/3.png",
       "2" => "/img/8.png",
       "3" => "/img/5.png",
       "4" => "/img/2.png",
       "5" => "/img/4.png",
       "6" => "/img/1.png",
       "7" => "/img/6.png",
       "8" => "/img/7.png",
       "9" => "/img/white.png"
       );                         
   $vars = array(
       "title" => "Пятнашки",
       "user" => $_SESSION['email'],
       "topMenu" => createMenu(),
       "images" => $images
        );
   $vars['content'] = getView("tag.html", $vars);
   buildLayout("main.html", $vars); 
?>
