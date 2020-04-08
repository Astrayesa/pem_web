<?php
$dbhost = "localhost";
$dbname = "note";
$dbuser = "asep";
$dbpass = "password";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass);
if(!$connection){
    die("Database connection failed!".msqli_error($connection));
} else {
    $select_db = mysqli_select_db($connection, $dbname);
    if(!$select_db){
        die("Database connection failed!".msqli_error($select_db));
    }else{
//        echo "Welcome to main server database";
    }
}
?>