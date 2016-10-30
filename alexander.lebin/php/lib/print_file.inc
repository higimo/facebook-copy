<?php
    function print_file($nameFile)
    {
        $file = fopen('html/' . $nameFile . '.html','r');  
        while (! feof($file)) :
           print fgets($file);
        endwhile;
        fclose($file);
    }
?>