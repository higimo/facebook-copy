<?php
    header( "Content-type: text/html; charset=utf-8" ); // Из базы полученные значения надо конвертировать в utf-8 и можно убрать
    
    $rootPath = dirname(__FILE__). '/../';
    $rootPath = str_replace('\\', '/', $rootPath);
    $rootPath = preg_replace('|/[^/]+?/\.\./|', '/', $rootPath);
    //$rootPath = $rootPath."php/";  // Если у вас server2go
    
    define( "ROOT_PATH",  $rootPath );
    define( "TPL_PATH",   $rootPath."html/" );
    define( "DB_HOST",    "localhost" );
    define( "DB_USER",    "higimo" );
    define( "DB_PASS",    "vedun666" );
    define( "UPDIR",      ROOT_PATH."/upload/");
    define( "DB_NAME",    "site" );
    define( "COUNT",      20 ); // Сколько юзеров выводить в user_list
    define( "TEMPLATES_DIR" , ROOT_PATH."/templates/");
    define( "TEMPLATES_COMPLETED_DIR", ROOT_PATH."/templates_c/");
    
    unset( $rootPath );
    
    session_start();
    
    /* Smarty */
    
    //require_once('../libs/Smarty.class.php');
    
    //$smarty = new Smarty();
    
    //$smarty -> template_dir = ROOT_PATH."/templates/";
    //$smarty -> compile_dir  = ROOT_PATH."/templates_c/";
    //$smarty -> config_dir   = ROOT_PATH."/configs/";
    //$smarty -> cache_dir    = ROOT_PATH."/cache/";
    
      
?>