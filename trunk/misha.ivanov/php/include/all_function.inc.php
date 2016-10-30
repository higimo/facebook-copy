<?php
    function getData( $userInfo )
    {
        $vars = array( 'NAME' => 'First Name', 'DATE' => $userInfo['first_name'] );
        $lists = $lists.parseTemplate( 'list.tpl', $vars );
        $vars = array( 'NAME' => 'Last Name', 'DATE' => $userInfo['last_name'] );
        $lists = $lists.parseTemplate( 'list.tpl', $vars );
        $vars = array( 'NAME' => 'Email', 'DATE' => $userInfo['email'] );
        $lists = $lists.parseTemplate( 'list.tpl', $vars );
        $vars = array( 'NAME' => 'Password', 'DATE' => $userInfo['password'] );
        $lists = $lists.parseTemplate( 'list.tpl', $vars );
        $vars = array( 'NAME' => 'Sex', 'DATE' => $userInfo['sex'] );
        $lists = $lists.parseTemplate( 'list.tpl', $vars );
        $vars = array( 'NAME' => 'Birthday', 'DATE' => $userInfo['birthday_day'].' '.$userInfo['birthday_month'].' '.$userInfo['birthday_year'] );
        $lists = $lists.parseTemplate( 'list.tpl', $vars );
        return $lists;
    }
    function makeLinks( $fileName, $list )
    {
        $vars = array( 'FILE' => $fileName );
        $list = $list.parseTemplate( 'list_of_files_link.tpl', $vars );
        return $list;
    }
    function ifOrGetPOST()
    {
        $file = fileList();
        for ( $i = 0; $i < numFileList(); $i++ )
        {
            if ( strtolower( $file[$i]['user_email'] ) == strtolower( $_POST['email'] ) )
            {
                if ( $_POST['file_extension'] == '' )
                {
                    $list = makeLinks( $file[$i]['file_name'], $list );
                }
                else
                {
                    $file_extension = strtok( $file[$i]['file_name'], '.' );
                    $file_extension = strtok( '.' );
                    if ( strtolower( $_POST['file_extension'] ) == strtolower( $file_extension ) )
                    {
                        $list = makeLinks( $file[$i]['file_name'], $list );
                    }
                }
            }
            else
            {
                if ( $_POST['email'] == '' )
                {
                    $file_extension = strtok( $file[$i]['file_name'], '.' );
                    $file_extension = strtok( '.' );
                    if ( strtolower( $_POST['file_extension'] ) == strtolower( $file_extension ) )
                    {
                        $list = makeLinks( $file[$i]['file_name'], $list );
                    }
                }
            }
        }
        return $list;
    }
    function allList()
    {
        $file = fileList();
        for ( $i = 0; $i < numFileList(); $i++ )
        {
            $list = makeLinks( $file[$i]['file_name'], $list );
        }
        return $list;
    }
    function ifPOST()
    {
        $post_empty = ( ( $_POST['email'] == '' ) && ( $_POST['file_extension'] == '' ) );
        $list = ( $post_empty ? allList() : ifOrGetPOST() );
        return $list;
    }
    function getList()
    {
        $list = ( isset( $_POST['email'] ) ? ifPOST() : allList() );
        return $list;
    }
    function error()
    {
        header( 'Location: /php/sign_in.php?comment=error' );
        exit;
    }
    function checkInput( $nameData )
    {
        if ( !isset( $nameData ) or ( $nameData == '' ) )
        {
            error();
        }
    }
    function checkSelect( $nameData )
    {
        if ( !isset( $nameData ) or ( $nameData == '-1' ) )
        {
            error();
        }
    }
    function isCopyEmail()
    {
        $copyEmail = getUserInfo( $_POST['email'] );
        if ( isset( $copyEmail ) and (( $_POST['email'] ) == ( $copyEmail['email'] )) )
        {
            header( 'Location: /php/sign_in.php?comment=email_copy' );
            exit;
        }
    }    
    function check()
    {
        checkInput( $_POST['first_name'] );
        checkInput( $_POST['last_name'] );
        checkInput( $_POST['email'] );
        if ( !filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) )
        {
            error();
        }
        if ( isset( $_POST['re-email'] ) and ( $_POST['re-email'] != $_POST['email'] ) )
        {
            error();
        }
        isCopyEmail();
        checkInput( $_POST['password'] );
        checkSelect( $_POST['sex'] );
        checkSelect( $_POST['birthday_month'] );
        checkSelect( $_POST['birthday_day'] );
        if ( ( $_POST['birthday_month'] == 'February' ) and ( 29 < $_POST['birthday_day'] ) )
        {
            error();
        }
        checkSelect( $_POST['birthday_year'] );
    }
    function getUser( $users )
    {
        for ( $i = 0; $i < count( $users ); $i++ )
        {
            $vars = array( 'EMAIL' => $users[$i]['email'], 'FIRST_NAME' => $users[$i]['first_name'], 'LAST_NAME' => $users[$i]['last_name'], 'USER_ID' => $users[$i]['user_id'] );
            $list = $list.parseTemplate( 'user_data.tpl', $vars );
        }
        return $list;
    }
    function checkValumeList()
    {
        $error = ( ( preg_match( "/^[0-9]+$/", $_GET['num_list'] ) ) ? FALSE : TRUE );
        $include_section = ( ( !$error ) and (( $_GET['num_list'] >= 0 ) and ( $_GET['num_list'] < numUsersList() )) );
        if ( !(isset( $_GET['num_list'] ) and $include_section ) )
        {
            header( 'Location: /php/users_list.php?num_list=0' );
            exit;
        }
    }
    function valumeList( &$back, &$next )
    {
        $back = ( ( $_GET['num_list'] - NUM_LIST < 0 ) ? 0 : $_GET['num_list'] - NUM_LIST );
        $next = ( ( $_GET['num_list'] + NUM_LIST < numUsersList() ) ? $_GET['num_list'] + NUM_LIST : $_GET['num_list'] );
    }
?>