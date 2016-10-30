<?php
    require_once( './include/common.inc.php' );
    checkUser();
    header( 'Location: /php/login.php?comment=error' );
?>