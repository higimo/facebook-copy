<?php
    function getNewSmarty()
    {
        $smarty = new Smarty();
        $smarty -> template_dir = TEMPLATES_DIR;
        $smarty -> compile_dir = TEMPLATES_COMPILED_DIR;
        return $smarty;
    }
    function getView( $tplName, $vars ) 
    {
        $smarty = getNewSmarty();
        foreach ($vars as $key => $value)
        {
            $smarty->assign($key, $value);
        }
        return $smarty -> fetch( $tplName );
    }
	
    function buildLayout( $tplName, $vars )
    {
        $smarty = getNewSmarty();
        foreach ($vars as $key => $value)
        {
            $smarty->assign($key, $value);
        }
        $smarty -> display( $tplName );
    }

    function createMenu ( )
    {
        if ( !empty($_SESSION['user_id']) )
        {
            $topMenu = array( 
                'recovered.php' => "Get User Info",
                'upload.php' => "Upload",
                'list_up_files.php' => "Files",
                'users_list.php' => "Users List",
                'barley_break.php' => "Barley",
                'exit.php' => "Exit", 
            );
        } 
        else
        {
            $topMenu = array( 
                'survey_table.php' => "Sign Up",
                'log_in.php' => "Log In"                                 
            );
        }
        return $topMenu;
    }
?>