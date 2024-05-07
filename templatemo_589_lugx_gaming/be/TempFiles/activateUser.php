<?php
session_start();
require_once("common/dbconfig.php");

if (!isMissingArgs()){
     $id=$_POST["id"];
     $isActive=$_POST["activate"];
     if ($name=ActivateUser($id,$isActive)){
         header("location:../fe/pages/listUsers.php");
     }else{
         header("location:../fe/pages/listUsers.php?errorCode=1&errorDesc=db error!");
     }    
 }else{
     header("location:../index.php?errorCode=2&errorDesc=Server Error!");
 }

function isMissingArgs(){
     if (!isset($_POST["id"]))
         return 1;
     if (!isset($_POST["activate"]))
         return 1;
 }
 

function ActivateUser($id,$isActive){
   global $db;
   $users=array();
   $query="UPDATE tbl_users SET IS_ACTIVE=$isActive where ID=$id";
   $stmt=$db->query($query);
   if ($stmt->rowCount()>0){
        return 1;
   }else{
        return 0;
   }
}


?>