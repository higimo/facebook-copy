<?php
    function dbConnect()
    {
        $link = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (!$link) 
        {
            printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
            exit; 
        } 
        return $link;
    }
?>