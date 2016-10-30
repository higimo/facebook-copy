<?php
    require_once( "includes/common.inc.php" );

    $year = getParam( FIRST_YEAR, LAST_YEAR, "Year" );
    $month = getParam( FIRST, LAST_MONTH, "Month" );
    $day = getParam( FIRST, LAST_DAY, "Day" );

    $vars = array(
        'title' => 'Sign In',
        'year' => $year,
        'month' => $month,
        'day' => $day,
        'topMenu' => createMenu(),
        'mail' => getUserEmail( $_SESSION['user_id'] ),
        'mail' => getUserEmail( $_SESSION['user_id'] )
    );

    if ( ( isset( $_GET['first_name'] ) ) && ( isset( $_GET['last_name'] ) ) && ( isset( $_GET['your_email'] ) ) &&
         ( isset( $_GET['reenter_email'] ) ) && ( isset( $_GET['new_password'] ) ) && ( isset( $_GET['sex'] ) ) &&
         ( isset( $_GET['month'] ) ) && ( isset( $_GET['day'] ) ) && ( isset( $_GET['year'] ) ) )
    {
        $user = array();
    
        $user['first_name'] = getUserParam( "first_name" );
        $user['last_name'] = getUserParam( "last_name" );
        $user['email'] = getUserParam( "your_email" );
        $user['reemail'] = getUserParam( "reenter_email" );
        $user['new_password'] = getUserParam( "new_password" );  
        $user['sex'] = getUserSexOrBirth( "sex", "Select sex:" );
        $month = getUserSexOrBirth( "month", "Month:" );
        $day = getUserSexOrBirth( "day", "Day:" );
        $year = getUserSexOrBirth( "year", "Year:" );       
        $user['birthday'] = $year . "-" . $month . "-" . $day;
        saveUser( $user ); 
    }

    $vars['content'] = getView('sign_in.tpl', $vars);
    buildLayout('main.tpl', $vars);
?>
