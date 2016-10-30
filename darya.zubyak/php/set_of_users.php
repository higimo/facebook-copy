<?php
    require_once("includes/common.inc.php");
    $users = getUserList();
    session_start;
    userLogin();
    if (isset($_GET["numb"]))
    {  
        $n = $_GET["numb"];
    }
    else
    {
        $n = 0;
    }
    $user_list = array();
    for ( $i = $n; ( ($i <= $n + LIST_SIZE - 1) && ($i < count($users)) ); $i+=1 )
    {
        array_push($user_list, $users[$i]);
    } 
    $next = ( $i >= count($users) )? "0" : $n + LIST_SIZE;
    $last = ($n <=  LIST_SIZE)? "0" : $n - LIST_SIZE;
    $vars = array(
        "user" => $_SESSION['email'], 
        "title" => "Список пользователей", 
        "users" => $user_list, 
        "next" => $next, 
        "last" => $last , 
        "start" => $n + 1,
        "topMenu" => createMenu()
        );
    $vars['content'] = getView("user_list.html", $vars);
    buildLayout("main.html", $vars); 
?>
