<?php

function Login($un, $pass)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            global $db;
            $query = "SELECT ID,FIRST_NAME,LAST_NAME FROM tbl_users WHERE USERNAME='$un' AND PASSWORD='$pass' AND IS_ACTIVE=1";
            $stmt = $db->query($query);
            $row = 0;
            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
            $result = $row;
            if ($result !== 0) {
                session_start();
                $_SESSION['username'] = $un;
                echo "success";
            } else {
                echo "faile";
            }
        } else {
            echo "Username or password not provided.";
        }
    }
}

function SignUp($un, $fname, $lname, $pass) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["username2"]) && isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["password2"])) {
            $username = $_POST["username2"];
            $firstName = $_POST["first_name"];
            $lastName = $_POST["last_name"];
            $password = $_POST["password2"];

            global $db;

            $query = "SELECT ID FROM tbl_users WHERE USERNAME='$un'";
            $stmt = $db->query($query);
            if ($stmt->rowCount() > 0) {
                echo "usernameExists";
                return;
            }

            $query = "SELECT ID FROM tbl_users WHERE PASSWORD='$pass'";
            $stmt = $db->query($query);
            if ($stmt->rowCount() > 0) {
                echo "already exists password";
                return;
            }

            // Insert new user into database
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO tbl_users (USERNAME, FIRST_NAME, LAST_NAME, PASSWORD, IS_ACTIVE) VALUES ('$username', '$firstName', '$lastName', '$hashedPassword', 1)";
            $stmt = $db->query($query);
            if ($stmt) {
                session_start();
                $_SESSION['username'] = $username;
                echo "success";
            } else {
                echo "faile";
            }
        } else {
            echo "Incomplete form data.";
        }
    }
}

function LogOut(){
    session_start();
    if (isset($_SESSION['username'])){
        unset($_SESSION['username']);
    }
    session_destroy();
}


function GetPlats()
{
    global $db;
    $Plats = array();


    $query = "SELECT ID,PLATTER,DESCRIPTION,IS_ACTIVE,category	 FROM table_platters";
    $stmt = $db->query($query);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Plat = new stdClass();
            $Plat->ID = $row["ID"];
            $Plat->PLATTER = $row["PLATTER"];
            $Plat->DESCRIPTION = $row["DESCRIPTION"];
            $Plat->IS_ACTIVE = $row["IS_ACTIVE"];
            $Plat->category = $row["category"];

            $Plats[] = $Plat;
        }
        return $Plats;
    } else {
        return 0;
    }
}