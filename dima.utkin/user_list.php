<?php
    include "include/includeall.inc.php";
    
    $var = array(
        'title'  => "Get user",
        'user'   => "",
        'paging' => ""
    );
    
    isLoggin();
    
    $allUser = getAllUserList();
    $paging = (!isset($_GET['page'])) ? 0 : $_GET['page'];
    $countNext = $paging + COUNT;
    $countNow = ($countNext > count( $allUser )) ? $countNow - ($countNow - count( $allUser)) : $paging + COUNT;
    $sumPages = count( $allUser ) / COUNT; //for paging
    
    // выводим страницу
    $var['user'] = "\n";
    for ($i = $paging; $i < $countNow; $i++) // 0-19; 20-39; 40-59;
    {
        $var['user'] = $var['user'].parseTemplate( TPL_PATH."user_list_table.tpl", $allUser[$i], "          " );
    }
    $var['user'] = $var['user']."        ";
    
    // Пейджинг делаем
    paging($sumPages);
    
    $var['paging'] = paging($sumPages);
    $var['paging'] = $var['paging']."      ";

    buildLayout( TPL_PATH."user_list.tpl", $var );
?>