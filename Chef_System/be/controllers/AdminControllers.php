<?php
require_once('../models/AdminModel.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if ($_POST["activate"]==0) { // Responsible for activating a Platter by sending the data to the model.
        $id = $_POST["id"];
        $activate = $_POST["activate"];
        ActivateItem($id, $activate);
    } else if ($_POST["activate"]== 1) {// Responsible for deactivating a Platter by sending the data to the model.
        $id = $_POST["id"];
        $activate = $_POST["activate"];
        DeactivateItem($id, $activate);
    }else if ($_POST["activate"]== 2) { // Responsible for deleting a Platter by sending the data to the model.
        $id = $_POST["id"];
        DeleteItem($id);
    }else if ($_POST["activate"]==3){ // Responsible for sending the sign up data to the model.
            $un=$_POST["username2"];
            $fname=$_POST["first_name"];
            $lname=$_POST["last_name"];
            $pass=$_POST["password2"];
            SignUp($un,$fname,$lname,$pass);
    }else{  // Responsible for adding the platter by sending the data to the model.

    require_once('../models/AdminModel.php');

    $Platter = $_POST["Platter"];
    $Description = $_POST["Description"];
    $Discount= $_POST["Discount"];
    $IsActive = $_POST["IsActive"];
    $Price = $_POST["Price"];
    $Category = $_POST["Category"];

    if(insertFormData($Platter,$Description,$Discount,$IsActive,$Price,$Category) === 1){
        header("Location: ../../fe/pages/AddPlatter.php");

    }
    else{
        
        header("Location: ../../fe/pages/AddPlatter.php?errorCode=1&Error in insertion into database");
    }
}
}