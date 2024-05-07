<?php
require_once("../common/dbconfig.php");
require_once("../models/AdminModel.php");



function isMissingArgsSignUp(){
    if (!isset($_POST["username2"]) || !isset($_POST["password2"]) || !isset($_POST["first_name"]) || !isset($_POST["last_name"]) || !isset($_POST["check_password"]) )
        return 1;   
}

if (isset($_POST["action"])){
    switch ($_POST["action"]){
        case "SIGNUP":
            if (!isMissingArgsSignUp()){    
                $un=$_POST["username2"];
                $fname=$_POST["first_name"];
                $lname=$_POST["last_name"];
                $pass=$_POST["password2"];
                SignUp($un,$fname,$lname,$pass);
            }
        break;
    }
}
?>
