<?php
function getExtension($fileName) 
{
    $s = substr($fileName, strrpos($fileName, '.') + 1);
    return $s;
}

?>