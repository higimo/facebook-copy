<?php
    function dbConnect()
    {
        $link = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (!$link) 
        {
            printf("���������� ������������ � ���� ������. ��� ������: %s\n", mysqli_connect_error()); 
            exit; 
        } 
        return $link;
    }
?>