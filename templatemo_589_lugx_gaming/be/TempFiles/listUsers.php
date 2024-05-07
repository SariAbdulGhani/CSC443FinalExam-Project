<?php
session_start();
require_once("common/dbconfig.php");

function GetUsers(){
   global $db;
   $users=array();
   $query="SELECT ID,USERNAME,FIRST_NAME,LAST_NAME,IS_ACTIVE FROM tbl_users";
   $stmt=$db->query($query);
   if ($stmt->rowCount()>0){
        while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            $user=new stdClass();
            $user->id=$row["ID"];
            $user->username=$row["USERNAME"];
            $user->name=$row["FIRST_NAME"]." ".$row["LAST_NAME"];
            $user->isActive=$row["IS_ACTIVE"];
            $users[]=$user;
        }
        return $users;
   }else{
        return 0;
   }
}


?>