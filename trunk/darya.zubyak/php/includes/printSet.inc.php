<?php

function setOfYears()
{
    $s = "";
    for ($i=YEAR_MIN; $i<=YEAR_MAX; $i++) 
    {
        $s = $s." <option value=$i> $i </option>"; 
    } 
    return($s);
}

function setOfFiles($files)
{
    $files_list = array();
    for ($i=0; $i < count($files); $i+=1)
    {                       
        $file = $files[$i];
        $vars = array("file_name" => $file["title"], "vote" => $file["vote"], "numberId" => $file["file_id"]);
        array_push($files_list, $vars);
    }
    return( $files_list);
}
?>