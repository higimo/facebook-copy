<?php
    require_once("includes/common.inc.php");
    session_start();
    $id = $_SESSION["user_id"];
    userLogin();
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
        $vars = $user;
        $vars["user"] = $_SESSION['email'];
    }
    else
    {
        $user = getUserWithId( $id );
        $vars = $user;
        $vars["user"] = $_SESSION['email'];
    }
    $vars["topMenu"] = createMenu();
    $vars['content'] = getView("print_user_info.html", $vars);
    buildLayout("main.html", $vars);

?>