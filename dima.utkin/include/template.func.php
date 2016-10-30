<?php
    function getTemplate( $TemplateName, $space )
    {
        $file = file( $TemplateName );  
        $off = count( $file );
        if ( $file )
        {
            for ( $i = 0; $i <= $off; $i++ )
            { 
                $result = $result.$space.$file[$i];
            }
            $result = $result."\n";
            return $result;
        }
    }

    function parseTemplate( $TemplateName, $vars, $space="" )
    {
        /*$smarty = new Smarty();
        $smarty -> template_dir = TEMPLATES_DIR;
        $smarty -> template_dir = TEMPLATES_COMPLETED_DIR; 
        $smarty -> assign($vars);
        return $smarty -> fetch($TemplateName);
        */
        
        $file = file( $TemplateName ); // Считываем весь файл в массив
        if ( $file )
        {
            for( $i = 0; $i < sizeof( $file ); $i++ )
            {
                foreach ( $vars as $key => $value ) 
                {
                    $file[$i] = str_replace ( "{%".$key."%}", $value,  $file[$i] );               
                }                                                   
            }
            $off = count( $file );
            for ( $i = 0; $i <= $off; $i++ )
            { 
                $result = $result.$space.$file[$i];
            }
            $result = $result."\n";
            return $result;
        }
        
    }
    
    function buildLayout( $maintemplate, $vars )    // Выводит страницу…
    {

        $title = ( isset( $vars['title'] ) ) ? $vars['title'] : "Странная страница";
        echo parseTemplate( "html/head.tpl", array( "title" => $title ) );
        echo getTemplate( "html/menu.tpl", "  " );
        
        echo parseTemplate( $maintemplate, $vars, "    " ); // Всё остальное грузим
        echo getTemplate( "html/foot.tpl", "" );
    }

?>