<?php

/*$user="root";
$pass="root";
$host="127.0.0.1";
$dbName="db_csc443_sp24";
$db=null;
try{
    $db=new PDO("mysql:host=$host;dbname=$dbName",$user,$pass);
}catch (Exception $ex){
    print "Error!: " . $ex->getMessage() . "<br/>";
    die();
} */

/*
$dbhost = "127.0.0.1";
$dbname = "chef_system";
$dbuser = "root";
$dbpassword = ""; 
$db = null;

try {
    $dsn = "mysql:host=$dbhost;dbname=$dbname";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $db = new PDO($dsn, $dbuser, $dbpassword, $options);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
} */

$dbhost = "127.0.0.1";
$dbname = "chef_system";
$dbuser = "root";
$dbpassword = ""; 
$dbport = "3307"; 
$db = null;

try {
    $dsn = "mysql:host=$dbhost;dbname=$dbname;port=$dbport;";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $db = new PDO($dsn, $dbuser, $dbpassword, $options);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>