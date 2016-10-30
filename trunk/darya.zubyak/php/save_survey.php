<?php
    require_once("includes/common.inc.php");
    if (! getUser( $_POST["email"] ) )
    {
        // пользователя с такой элестронной почтой нет
        $message = "The data was uploaded successfully";
        $user = array( 
            "first_name" => $_POST["first_name"], 
            "last_name" => $_POST["last_name"], 
            "email" => $_POST["email"], 
            "password" => $_POST["password"], 
            "sex" => $_POST["sex"], 
            "birthday" => $_POST["year"].".".$_POST["month"].".".$_POST["day"]);
        saveUser($user);
    }
    else
    {
        // такой пользователь уже зарегистрирован 
        $message = "The user is already registered.";
    }
    $vars = array( "title" => "Персональные данные", 
        "message" => $message, 
        "year" => setOfYears(),
        "topMenu" => createMenu()
        );
    $vars['content'] = getView("form_of_survey.html", $vars);
    buildLayout("main.html", $vars); 
?>
