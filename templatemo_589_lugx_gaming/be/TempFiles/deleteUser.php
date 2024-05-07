<?php
session_start();
require_once("dbconfig.php");

if (!isMissingArgs()){
    $id=$_POST["id"];
    if (DeleteUser($id)){
        header("location:../fe/pages/listUsers.php");
    }else{
        header("location:../listUsers.php?errorCode=1&errorDesc=Error");
    }    
}else{
    header("location:../index.php?errorCode=2&errorDesc=Missing Args!");
}

function isMissingArgs(){
    if (!isset($_POST["id"]))
        return 1;
}

function DeleteUser($id){
   global $db;
   
   $query="Delete FROM tbl_users where ID=$id";
   $stmt=$db->query($query);
   if ($stmt->rowCount()>0){
        return 1;
   }else{
        return 0;
   }
}


?>