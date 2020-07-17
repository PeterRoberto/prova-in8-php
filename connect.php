<?php

ob_start();
if(!isset($_SESSION)){
    session_start();
}

/* PREVENT DIRECT ACCESS */
if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])){
    header("Location: /");
    exit;
}

$username = "root";
$password = "";
$host = "localhost";
$dbname = "db-prova-in8";
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
try{
    $cms_connection = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
}
catch(PDOException $ex){
    die('Failed to connect to the database: ' . $ex->getMessage());
}
$cms_connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$cms_connection ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()){
    function undo_magic_quotes_gpc(&$array){
        foreach($array as &$value)
        {
            if(is_array($value)){
                undo_magic_quotes_gpc($value);
            }else{
                $value = stripslashes($value);
            }
        }
    }
    undo_magic_quotes_gpc($_POST);
    undo_magic_quotes_gpc($_GET);
    undo_magic_quotes_gpc($_COOKIE);
}