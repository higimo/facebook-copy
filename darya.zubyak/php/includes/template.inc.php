<?php    
    function openSmarty()
    {
        $smarty = new Smarty();
        $smarty -> template_dir = TEMPLATES_DIR;
        $smarty -> compile_dir = TEMPLATES_COMPILED_DIR;
        $smarty->config_dir = TEMPLATE_CONFIGS_DIR;
        $smarty->cache_dir = TEMPLATE_CACHE_DIR;  
        return $smarty;
    }
    
    function getView( $tplName, $vars ) 
    {
        $smarty = openSmarty();
        foreach ($vars as $key => $value)
        {
            $smarty->assign($key, $value);
        }
        return $smarty -> fetch( TEMPLATE_DIR.$tplName );
    }
	
    function buildLayout( $tplName, $vars )
    {
        $smarty = openSmarty();
        foreach ($vars as $key => $value)
        {
            $smarty->assign($key, $value);
        }
        $smarty -> display( TEMPLATE_DIR.$tplName );
    }

    function createMenu()
    {
         $topMenu = array( 
            "/php/get_user_info.php" => "User Info",
            "/php/upload.php" => "Upload",
            "/php/set_of_files.php" => "Files",
            "/php/set_of_users.php" => "Users",
            "/php/slideshow.php" => "Slideshow",
            "/php/tag.php" => "Tag",
            "/php/exit.php" => "Exit"
            );
        return $topMenu;
    }
?>
