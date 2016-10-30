<?php
    require_once("../includes/common.inc.php"); 
    header("Content-type: text/plain; UTF-8");
    $fileId = $_POST["file_id"];
    $action = $_POST["action"];
    $number = resolveVote($fileId, $action);
    echo $number;    
?>
