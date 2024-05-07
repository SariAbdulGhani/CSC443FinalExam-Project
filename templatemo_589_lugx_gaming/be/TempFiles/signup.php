<?php
session_start();
require_once("User.php");
require_once("dbconfig.php");


$user=new stdClass();
$user->username="john.doe";
$user->firstname="john";
$user->lastname="doe";
$user->password="pass";
$user->email="john.doe@csc.443";
$user->sex="m";
$user->language="en";
$users=array();

$users[]=$user;

$user=new User();
$user->username="johnny.doe";
$user->firstname="johnny";
$user->lastname="doe";
$user->password="pass";
$user->email="johnny.doe@csc.443";
$user->sex="m";
$user->language="en";

$users[]=$user;

if (!isMissingArgs(true)){
    $user=new stdClass();
    $user->username=$_POST["tfun"];
    $user->firstname=$_POST["tffn"];
    $user->lastname=$_POST["tfln"];
    $user->password=$_POST["tfpass"];
    $user->email=$_POST["tfemail"];
    $user->sex=$_POST["sex"];
    $user->language=$_POST["language"];

    if (signup($user,$db)){
        $_SESSION["name"]=$user->firstname." ".$user->lastname;
        header("location:../fe/pages/listUsers.php");
    }else{
        header("location:../fe/pages/signup.php?errorCode=3&errorDesc=Username already exists!");
    }    
}else{
    header("location:../fe/pages/signup.php?errorCode=2&errorDesc=Missing Args!");
}

function isMissingArgs($isNotEmpty=false){
    if (!isset($_POST["tfun"]) || ($_POST["tfun"]=="" && $isNotEmpty))
        return 1;
    if (!isset($_POST["tfpass"]) || ($_POST["tfpass"]=="" && $isNotEmpty))
        return 1;
    if (!isset($_POST["tffn"]) || ($_POST["tffn"]=="" && $isNotEmpty))
        return 1;
    if (!isset($_POST["tfln"]) || ($_POST["tfln"]=="" && $isNotEmpty) )
        return 1;
}

/**
 * adds a user to array users
 * @param $user is a dictionary with user attributes
 * returns bool
 */
function signup($user, $db){ 
    $query="INSERT INTO `tbl_users` (`USERNAME`,`FIRST_NAME`,`LAST_NAME`,`PASSWORD`) VALUES ('$user->username','$user->firstname','$user->lastname','$user->password')";
    $stmt=$db->query($query);
    if ($stmt->rowCount()>0)
        return 1;
    else
        return 0;
}


?>