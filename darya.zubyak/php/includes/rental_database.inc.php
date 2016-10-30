<?php
function resolveVote($fileId, $action)
{
    $query = "SELECT * FROM file WHERE file_id='".$fileId."';";
    $files =  getQueryResults( $query ); 
    $file = $files[0];
    $number = false;
    if ($action == "true")
    {
        if ($file["operation"] != "plus")
        {         
            $query = "UPDATE file SET operation='plus', vote='".dbEscape( $file["vote"]+1 )."' WHERE file_id='".dbEscape( $fileId )."';";
            executeQuery( $query );
            $number = $file["vote"]+1;
        }
    }
    if ($action == "false")
    {
        if ($file["operation"] != "minus")
        {   
            $query = "UPDATE file SET operation='minus', vote='".dbEscape( $file["vote"]-1 )."' WHERE file_id='".dbEscape( $fileId )."';";
            executeQuery( $query );
            $number = $file["vote"]-1;
        }
    }
    return $number;
}
function getUser($email)
{
    $query = "SELECT * FROM user WHERE email='".$email."';";
    $users = getQueryResults( $query );   
    return $users[0];
}

function getUserWithId($user_id)
{
    $query = "SELECT * FROM user WHERE user_id='".$user_id."';";
    $users = getQueryResults( $query );   
    return $users[0];
}

function getUserList()
{
    $query = "SELECT user_id, first_name, last_name, email FROM user;";
    $users = getQueryResults( $query );   
    return $users;
}

function getFileList($user_id, $extension)
{
    if ($user_id != "" && $extension != "")
    {
        $query = "SELECT * FROM file WHERE user_id='".$user_id."'AND extension='".$extension."';";
    }
    if ($user_id == "" && $extension != "")
    {
        $query = "SELECT * FROM file WHERE extension='".$extension."';";
    }
    if  ($user_id != "" && $extension == "")
    {
        $query = "SELECT * FROM file WHERE user_id='".$user_id."';";  
    }
    $fales = getQueryResults( $query );
    return $fales;
}

function getAllFile()
{
    $query = "SELECT * FROM file;";  
    $files = getQueryResults( $query );
    return $files;
} 
 

function getVotes($title) 
{
    $query = "SELECT vote FROM file WHERE title='".$title."';";
    $array_votes = getQueryResults( $query );
    $votes = $array_votes[0];
    return $votes["vote"];
}

function saveUser($user)
{
    $query = "INSERT INTO user SET first_name='" . dbEscape( $user["first_name"] ) . "', last_name='" . dbEscape( $user["last_name"]) . "',";
    $query = $query."birthday='" . dbEscape( $user["birthday"] ) . "',";
    $password = MD5( dbEscape( $user["password"] ) );
    $query = $query."password='".$password."',";
    $query = $query."email='" . dbEscape( $user["email"] ) . "',";
    $query = $query."sex='" . dbEscape( $user["sex"] ) . "';";
    executeQuery( $query );
}

function saveFile($title, $user)
{
    $extension = getExtension($title);
    $query = "INSERT INTO file SET user_id='" . dbEscape( $user ) . "', title='" . dbEscape( $title ) . "', extension='" . dbEscape( $extension ) . "';";
    executeQuery( $query );
}

function getUserId($email)
{
    $query = "SELECT user_id FROM user WHERE email='".$email."';";
    $users = getQueryResults( $query ); 
    $user = $users[0];
    return $user["user_id"];

}

dbConnect();
?>