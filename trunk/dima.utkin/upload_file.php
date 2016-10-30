<?php
    include "include/includeall.inc.php";
    $var = array(
        'title' => "Upload file",
        'error' => ""
    );
    isLoggin();
    
    @mkdir( UPDIR ); //вдруг нет папки
    
    if ( isset( $_FILES['uploadfile'] ) )
    {
        $file = $_FILES['uploadfile'];
        $fileExtend = pathinfo( $file['name'] );
        $corrertFile = allowedExpan( $fileExtend[extension] ) && ( $file[size] > 1 );
        
        if ( $corrertFile )
        {
            $file['name'] = md5( $file['name'] ) . "." . $fileExtend[extension];
            $uploadfile = UPDIR.basename( $file['name'] );
            
            if ( copy( $file['tmp_name'], $uploadfile ) )
            {
                $var["error"] = "File successfully uploaded to the server";
                writeFiles( $_SESSION['userMail'], $file['name'] );
            }
            else 
            { 
                $var["error"] =  "Dzhigurda stole the file…"; 
                exit;
            }
        }
        else
        {
            $var["error"] =  "FAIL or ERROR"; 
        }
    }
    
    buildLayout( TPL_PATH."upload_form.tpl", $var );
?>