<?php
    function getTemplate( $templateName )
    {
        $file = file( $templateName );
        if ( $file )
        {
            return implode( $file );
        }
    }
    function parseTemplate( $templateName, $vars )
    {
        if( empty( $templateName ) || !file_exists( $templateName ) )
        {
            return false;
        }
        else
        {
            $file = file( $templateName );
            if ( $file )
            {
                for( $i = 0; $i < sizeof( $file ); $i++ )
                {
                    foreach( $vars as $key => $value )
                    {
                        $file[$i] = str_replace( '{%'.$key.'%}', $value,  $file[$i] );
                    }
                }
                return implode( $file );
            }
        }
    }
    function build( $vars )
    {
        $head = parseTemplate( 'head.tpl', $vars );
        $header = (isset( $_SESSION['user_id']) ? getTemplate( 'header.tpl') : getTemplate( 'header_not_register.tpl'));
        $form = $vars['FORM'];
        $vars = array( 'HEAD' => $head, 'HEADER' => $header, 'FORM' => $form );
        echo parseTemplate( 'index.tpl', $vars );
    }
?>