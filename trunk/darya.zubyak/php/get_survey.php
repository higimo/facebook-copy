<?php
    require_once("includes/common.inc.php");
    if ( (isset($_POST["email"]) && $_POST["email"] != "") or (isset( $_GET["user_id"] ) ) )
    {
        {
            if ( isset( $_GET["user_id"] ) )
            {
                $user = getUserWithId($_GET["user_id"]); 
            }
            else
            {
                $user = getUser($_POST["email"]);
            }
            if ( $user )
            {
                buildLayout( "print_user_info.html", $user );
            }
            else
            {
                $vars = array( "title" => "Персональные данные", "message" => "The user is not register");
            } 
        }
    }  
    else
    {
         $vars = array( "title" => "Персональные данные", "message" => "Enter the email");     
    }
    $vars["topMenu"] = createMenu();
    $vars['content'] = getView("form_of_email.html", $vars);
    buildLayout("main.html", $vars);         
?>
 