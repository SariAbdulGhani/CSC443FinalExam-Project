<?php
require_once("../common/dbconfig.php");
require_once("../models/AdminModel.php");



function isMissingArgsLogin(){
    if (!isset($_POST["username"]) || !isset($_POST["password"]))
        return 1;   
}

if (isset($_POST["action"])){
    switch ($_POST["action"]){
        case "LOGIN":
            if (!isMissingArgsLogin()){
                $un=$_POST["username"];
                $pass=$_POST["password"];
                Login($un,$pass);
            }
        break;
    }
}
?>