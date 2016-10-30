<?php
    function saveUser( $user )
    {
        $query = 'INSERT INTO user SET first_name="'.dbEscape( $user['first_name'] ).'"';
        $query = $query.', last_name="'.dbEscape( $user['last_name'] ).'"';
        $query = $query.', email="'.dbEscape( $user['email'] ).'"';
        $query = $query.', password="'.dbEscape( $user['password'] ).'"';
        $query = $query.', sex="'.dbEscape( $user['sex'] ).'"';
        $query = $query.', birthday_month="'.dbEscape( $user['birthday_month'] ).'"';
        $query = $query.', birthday_day="'.dbEscape( $user['birthday_day'] ).'"';
        $query = $query.', birthday_year="'.dbEscape( $user['birthday_year'] ).'";';
        executeQuery( $query );
    }
    function getUserInfo( $email )
    {
        $query = 'SELECT * FROM user WHERE email="'.dbEscape( $email ).'";';
        $user = getQueryResults( $query );
        return $user[0];
    }
    function getUserInfoId( $user_id )
    {
        $query = 'SELECT * FROM user WHERE user_id="'.dbEscape( $user_id ).'";';
        $user = getQueryResults( $query );
        return $user[0];
    }
    function accountingFiles( $user_email, $file_name )
    {
        $query = 'INSERT INTO file SET file_name="'.dbEscape( $file_name ).'"';
        $query = $query.', user_email="'.dbEscape( $user_email ).'";';
        executeQuery( $query );
    }
    function usersList( $num_list )
    {
        $query = 'SElECT * FROM user LIMIT '.dbEscape( $num_list ).','.NUM_LIST.';';
        return getQueryResults( $query );
    }
    function numUsersList()
    {
        $query = 'SElECT * FROM user;';
        $user = getQueryResults( $query );
        return count( $user );
    }
    function numFileList()
    {
        $query = 'SELECT * FROM file;';
        $file = getQueryResults( $query );
        return count( $file );
    }
    function fileList()
    {
        $query = 'SELECT * FROM file;';
        return getQueryResults( $query );
    }
    function createDB()
    {
        $query = 'CREATE DATABASE '.DB_NAME.';';
        executeQuery( $query );
        $query = 'USE '.DB_NAME.';';
        executeQuery( $query );
        $query = 'CREATE TABLE user (';
        $query = $query.'user_id INT(11) UNSIGNED AUTO_INCREMENT,';
        $query = $query.'first_name VARCHAR(50) DEFAULT "",';
        $query = $query.'last_name VARCHAR(50) DEFAULT "",';
        $query = $query.'email VARCHAR(50) DEFAULT "",';
        $query = $query.'password VARCHAR(50) DEFAULT "",';
        $query = $query.'sex VARCHAR(6) DEFAULT "",';
        $query = $query.'birthday_month VARCHAR(9) DEFAULT "",';
        $query = $query.'birthday_day INT(2) DEFAULT NULL,';
        $query = $query.'birthday_year INT(4) DEFAULT NULL,';
        $query = $query.'PRIMARY KEY(user_id)';
        $query = $query.');';
        executeQuery( $query );
        $query = 'CREATE TABLE file (';
        $query = $query.'file_id INT(11) UNSIGNED AUTO_INCREMENT,';
        $query = $query.'file_name VARCHAR(50) DEFAULT "",';
        $query = $query.'user_email VARCHAR(50) DEFAULT "",';
        $query = $query.'PRIMARY KEY(file_id)';
        $query = $query.');'; 
        executeQuery( $query );
    }
    function checkUserLog()
    {
        $query = 'SELECT * FROM user;';
        return getQueryResults( $query );
    }
?>
