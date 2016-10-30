<?php
    require_once( './include/common.inc.php' );
    $userInfo = getUserInfoId( $_SESSION['user_id'] );
    $fileUploded = false;
    if ( isset( $_FILES['get_file'] ) )
    {
        $fileInfo = $_FILES['get_file'];
        $tmpPath = $fileInfo['tmp_name'];
        $realName = $fileInfo['name'];
        $savePath = UPLOAD_DIR.'\\'.$realName; //очень большое имя файла, косяк
        $fileUploaded = move_uploaded_file( $tmpPath, $savePath );
    }
    if ( $fileUploaded )
    {
        accountingFiles( $userInfo['email'], $fileInfo['name'] );
        header( 'Location: /php/upload.php?error=ok' );
    }
    else
    {
        header( 'Location: /php/upload.php?error=error' );
    }
?>
                                                                