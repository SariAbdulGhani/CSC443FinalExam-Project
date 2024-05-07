<?php
require_once("../common/dbconfig.php");
require_once("../models/userModel.php");



function IsSetUser(){
    if (isset($_SESSION['username']))
        return 1;   
}


if (isset($_POST["action"])){
    switch ($_POST["action"]){
        case "LOGOUT":
            if (!IsSetUser()){
                LogOut();
            }
        break;
    }
}
?>