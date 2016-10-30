<?php
    include "template.func.php";
    include "setting.inc.php";
    include "dbase.func.php";    

    function paging($sumPages)
    {
        for ( $i = 0; $i < $sumPages; $i++ )
        {
            $next['next'] = $i * COUNT;
            if ($i == 0)
            {
                $page = parseTemplate( "html/paging.tpl", $next, "" );
            }
            else
            {
                $page = $page.parseTemplate( "html/paging.tpl", $next, "        " );
            }
        }
        return $page;
    }

    
    function isVar( $var )
    {
        if ( !$var == "" )
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    
    function isLoggin()
    {
        if (!isset($_SESSION[userMail]))
        {
            header('Location: login.php');
        }
    }
    
    function verificateForm()
    {
        $formComplet = isset( $_GET['first']) && ( isset ( $_GET['last'] ) ) && ( isset( $_GET['mail'] ) ) && ( isset( $_GET['remail'] ) ) &&
                    ( isset( $_GET['day'] ) ) && ( isset( $_GET['month'] ) ) && ( isset( $_GET['year'] ) ) && ( isset( $_GET['sex'] ) );
        
        $emptyField = isVar( $_GET['first']) && ( isVar( $_GET['last'] ) ) && ( isVar( $_GET['mail'] ) ) && ( isVar( $_GET['remail'] ) ) &&
                    ( isVar( $_GET['day'] ) ) && ( isVar( $_GET['month'] ) ) && ( isVar( $_GET['year'] ) ) && ( isVar( $_GET['sex'] ) );
        
        
        if ( $formComplet )
        {
            if ( $emptyField )
            {
                $user = array(
                        "mail"      => $_GET['mail'],
                        "remail"      => $_GET['remail'],
                        "firstname" => $_GET['first'],
                        "lastname"  => $_GET['last'],
                        "bday"      => $_GET['year']."-".$_GET['month']."-".$_GET['day'],
                        "pass"      => $_GET['passworld'],
                        "sex"       => $_GET['sex']
                );
            }
        }
        return $user;
    }
    
    function getLoginForm()
    {
        $login = ( isset( $_GET['mail'] ) ) && ( isset( $_GET['passworld'] ) );
        $login = $login && ( $_GET['mail'] !== "" ) && ( $_GET['passworld'] !== "" );
        return $login;
    }

    function notAuthorized()
    {
        return ( !isset( $_SESSION[userMail] ) && ( !findUser( $mail , $pass ) ) ) ? TRUE: FALSE;
    }
    
    function isSetUser()
    {
        return ( isset($_SESSION[userMail]) || ( findUser( $mail, $pass ) ) ) ? TRUE : FALSE;
    }

    function allowedExpan( $extend )
    {
        return $extend == "gif" || $extend == "png" || $extend == "jpg";
    }
    
    function storyUserInSession( $user )
    {
        $_SESSION[userMail] = ( isVar( $user[mail] ) ) ?$user[mail] : "";
        $_SESSION[fullname] = ( isVar( $user[firstname] ) && isVar( $user[lastname] ) ) ? $user[firstname]." ".$user[lastname] : "";
    }
    
    function logOut()
    {
        if ( isset( $_GET['unsee'] ) && ( $_GET['unsee'] == "true") )
        {
            unset( $_SESSION['userMail'] );
            unset( $_SESSION['fullname'] );
            header('Location: login.php');
        }
    }
    
    function recordToSession($user)
    {
        $_SESSION[userMail] = $user[mail];
        $_SESSION[fullname] = $user[firstname]." ".$user[lastname];
    }
?>