<?php
    function getView( $tplName, $vars )
    {
        $smarty = new Smarty();

        $smarty->template_dir = TEMPLATE_DIR;
        $smarty->compile_dir  = TEMPLATE_COMPILED_DIR;

        foreach( $vars as $key => $value )
        {
            $smarty->assign( $key, $value );
        }

        return $smarty->fetch( $tplName );
    }
?>