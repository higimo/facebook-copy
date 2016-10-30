<?php
    require_once( "includes/common.inc.php" );

    $counter = $_POST["counter"];
    $idFile = $_POST["id_file"];

    echo getCurRating( $counter, $idFile );	
?>