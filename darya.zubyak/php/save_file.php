<?php
    require_once("includes/common.inc.php");
    $fileUploaded = false;
    $message = "";
    session_start();
    $id = $_SESSION["user_id"];
    userLogin();
    if ( isset($_FILES["my_file"]) )
    {
        $fileInfo = $_FILES["my_file"];
        $tmpPath = $fileInfo["tmp_name"];
        $realName = $fileInfo["name"];
        $savePath = UPLOAD_DIR."\\".$realName;
        if ( file_exists(UPLOAD_DIR) )
        {
            $fileUploaded = move_uploaded_file($tmpPath, $savePath);  
            saveFile($realName, $id);
            $message = ($fileUploaded)?"File was uploaded succesfully": "File was not uploaded";
        }
        else
        {
            $message = UPLOAD_DIR." has not found.";
        }
    }
    if ($message == "")
    {
        $message = "File was not uploaded";   
    }
    $vars = array( 
        "user" => $_SESSION['email'], 
        "title" => "Отправка файла", 
        "message" => $message,
        "topMenu" => createMenu()
        );
    $vars['content'] = getView("form_of_upload.html", $vars);
    buildLayout("main.html", $vars);
?>