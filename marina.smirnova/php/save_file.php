<?php
    require_once( "includes/common.inc.php" );
    $vars = array( 
        'title' => "Upload",
        'topMenu' => createMenu(),
        'mail' => getUserEmail( $_SESSION['user_id'] )
    );


    $fileUploaded = false;

    if ( isset( $_FILES['my_file'] ) );
    { 
        $fileInfo = $_FILES['my_file'];
        $tmpPath = $fileInfo['tmp_name'];
        $realName = $fileInfo['name'];
        $savePath = UPLOAD_DIR . "\\" . $realName;
        $fileUploaded = move_uploaded_file( $tmpPath, $savePath ); 
        $path_parts = pathinfo( $realName );
        $ext = $path_parts['extension'];
        if ($fileUploaded)
        {
            saveFile( $realName, $ext );
        }
    }
    $fileUploaded ? $vars['content'] = "File was uploaded" : $vars['content'] = "File was not uploaded";
    buildLayout('main.tpl', $vars);
?>