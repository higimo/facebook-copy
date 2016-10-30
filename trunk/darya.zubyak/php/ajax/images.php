<?php
    require_once("../includes/common.inc.php");
    header("Content-type: text/plain; UTF-8");
    $file = $_POST["file"];
    $files = getAllFile();
    $way = "";
    $k = 0;
    for( $i = 0; $i < sizeof ($files); $i++ ) 
    {
        if ("/uploaded/".$files[$i]["title"] == $file )
        {
            if ($_POST["operation"] == "next")
            {
                $k = ($i == sizeof ($files) -1 )? 0: $i + 1;
            }
            else
            {
                $k = ($i == 0)? sizeof($files)-1: $i - 1;
            }
            $way = "/uploaded/".$files[$k]["title"];
        }                                                   
    }
    echo($way);    
?>
