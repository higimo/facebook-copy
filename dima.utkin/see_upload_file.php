<?php
    include "include/includeall.inc.php";    

    $var = array('title' => "Look upload",
                 'href'  => "",
                 'user'  => ""
    );

    isLoggin();
    
    if ( ( isset( $_GET['mail'] ) )  or ( isset( $_GET['exten'] ) ) )
    {
        $getFiles = getAllFiles();
        for( $i = 0; $i < count( $getFiles ); $i++)
        {
            $fileExten = pathinfo( $getFiles[$i]['file'] );
            if ( $_GET['mail'] == $getFiles[$i]['mail'] && ( $_GET['exten'] === $fileExten['extension'] ) ) // мыло и расширение
            {
                $fileList[$i]['file'] = $getFiles[$i]['file'];
            }
            else if ( $_GET['mail'] == $getFiles[$i]['mail'] && ( !isVar( $_GET['exten'] ) ) ) // мыло, но без расширения
            {
                $fileList[$i]['file'] = $getFiles[$i]['file'];
            }
            else if ( $_GET['exten'] === $fileExten['extension'] ) // расширение
            {
                $fileList[$i]['file'] = $getFiles[$i]['file'];
            }
            else
            {
                $fileList[$i]['file'] = "";
            }
            
            if ($fileList[$i]['file'] !== "")
            {
                $var['href'] = $var['href'].parseTemplate( TPL_PATH."file.tpl", $fileList[$i], ""); 
            }
        }
        
    }
    
    buildLayout( TPL_PATH."look_upload.tpl", $var );
?>