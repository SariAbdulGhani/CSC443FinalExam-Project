<?php
require_once("../common/dbconfig.php");
require_once("../models/AdminModel.php");
require_once("../models/UserModel.php");


function isMissingArgsSignUp(){
    if (!isset($_POST["username2"]) || !isset($_POST["password2"]) || !isset($_POST["first_name"]) || !isset($_POST["last_name"]) || !isset($_POST["check_password"]) )
        return 1;   
}
function IsSetUser(){
    if (isset($_SESSION['username']))
        return 1;   
}

function isMissingArgsLogin(){
    if (!isset($_POST["username"]) || !isset($_POST["password"]))
        return 1;   
}

function isMissingArgscontact(){
    if (!isset($_POST["name"]) || !isset($_POST["surname"]) || !isset($_POST["email"]) || !isset($_POST["subject"]) || !isset($_POST["message"]))
        return 1;   
}


if (isset($_POST["action"])){
    switch ($_POST["action"]){
        /*
            This part of the switch is responsible for transfering the login data to the model for log in.
        */
        case "LOGIN":
            if (!isMissingArgsLogin()){
                $un=$_POST["username"];
                $pass=$_POST["password"];
                Login($un,$pass);
            }
        break;
    /*
        This part of the switch is responsible for sending contact data to the model.
    */
        case "CONTACT":
            if (!isMissingArgscontact()){
                $un=$_POST["name"];
                $sun=$_POST["surname"];
                $em=$_POST["email"];
                $sub=$_POST["subject"];
                $mes=$_POST["message"];
                Contact($un,$sun,$em,$sub,$mes);
            }
    }
}


?>

