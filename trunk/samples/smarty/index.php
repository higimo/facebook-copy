<?php
    require_once( "include/common.inc.php" );

    $files = array(
        array( "name" => "file1", "path" => "file1.jpg"),
        array( "name" => "file2", "path" => "file2.jpg"),
        array( "name" => "file3", "path" => "file3.jpg")
    );

    $vars = array( "files" => $files );
    echo getView( "files_list.tpl", $vars );