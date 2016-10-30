<?php
    require_once("includes/common.inc.php");
    userLogin();
    if (isset($_GET["numb"]) && isset($_GET["ext"]) )     // данные пришли методом GET
    {
        $n = $_GET["numb"];
        $extension = ($_GET["ext"]) ? $_GET["ext"] : "";
    }
    else 
    {
        $n = 0;
        $extension = "";
        if ( isset( $_POST["extension"] ) && $_POST["extension"] != "" )
        {
            $extension = ($_POST["extension"]); 
        }   
    }
    session_start();
    $id = $_SESSION["user_id"];
    $files = getFileList($id, $extension);
    $files_list = array();
    for ( $i = $n; ( ($i <= $n + LIST_SIZE - 1) && ($i < count($files)) ); $i+=1 )
    {
        $numberOfVotes = getVotes($files[$i]["title"]);
        $files[$i]["vote"] = $numberOfVotes;
        array_push($files_list, $files[$i]);
    }
    $files_list = setOfFiles($files_list);  
    $next = ( $i >= count($files) )? "0" : $n + LIST_SIZE;
    $last = ($n <  LIST_SIZE)? "0" : $n - LIST_SIZE;
    $vars = array(
        "user" => $_SESSION['email'], 
        "title" => "Список файлов", 
        "files" => $files_list, 
        "next" => $next, 
        "last" => $last , 
        "start" => $n + 1, 
        "extension" => $extension,
        "topMenu" => createMenu()
    );
    $vars['content'] = getView("file_list.html", $vars);
    buildLayout("main.html", $vars);
?>
