<?php

function Login($un, $pass)
{
        
    /*
        This function is responsible for the login of the CMS manager, the admin.
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            
            global $db;
            $query = "SELECT id FROM Admins WHERE USERNAME='$un' AND PASSWORD='$pass'";
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
                echo "faile";//,FIRST_NAME,LAST_NAME 
            }
        } else {
            echo "Username or password not provided.";
        }
    }
}

function SignUp($un, $fname, $lname, $pass) {

    /*
        This function is responsible for Creating records for new Admins in the system.
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["username2"]) && isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["password2"])) {
            $username = $_POST["username2"];
            $firstName = $_POST["first_name"];
            $lastName = $_POST["last_name"];
            $password = $_POST["password2"];
            
            $dbhost = "127.0.0.1";
            $dbname = "chef_system";
            $dbuser = "root";
            $dbpassword = "";
            $db = null;
            
            try {
                $dsn = "mysql:host=$dbhost;dbname=$dbname;";
                $options = array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                );
                $db = new PDO($dsn, $dbuser, $dbpassword, $options);
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }

            if (!$db) {
                echo "Database connection error.";
                return;
            }

            try {
                $stmt = $db->prepare("SELECT ID FROM admins WHERE USERNAME = :username");
                $stmt->execute(array(':username' => $username));
                if ($stmt->rowCount() > 0) {
                    echo "usernameExists";
                    return;
                }
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $db->prepare("INSERT INTO admins (USERNAME, FULLNAME, password) VALUES (:username, :fullname, :password)");
                $stmt->execute(array(':username' => $username, ':fullname' => $firstName . ' ' . $lastName, ':password' => $hashedPassword));

                session_start();
                echo "success";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
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

function insertFormData($Platter, $Description, $Discount, $IsActive, $Price, $Category)
{
        
    /*
        This function is responsible for inserting the platter information into the database.
    */


    require("../common/dbconfig.php");

    $stmt = $db->prepare("INSERT INTO table_platters (Platter, Description, Discount, Is_Active, Price, Category) VALUES (:Platter, :Description, :Discount, :IsActive, :Price, :Category)");

    $stmt->bindParam(':Platter', $Platter);
    $stmt->bindParam(':Description', $Description);
    $stmt->bindParam(':Discount', $Discount);
    $stmt->bindParam(':IsActive', $IsActive);
    $stmt->bindParam(':Price', $Price);
    $stmt->bindParam(':Category', $Category);

    if ($stmt->execute()) {
        header("Location: ../../fe/pages/AddPlatter.php");
    } else {
        header("Location: ../../fe/pages/AddPlatter.php");
    }
}


function GetPlattersForAlter()
{
    /*
        This function is responsible for getting platters to be displayed in the table, so the admin can activate/deactivate/delete them.
    */

    
    require_once("../../be/common/dbconfig.php");
    $conn=$db;
        $platters = array();
        $query = "SELECT ID,Platter,Is_Active,category,price,discount FROM table_platters";
        $stmt = $db->query($query);
        if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $platter = new stdClass();
            $platter->id = $row["ID"];
            $platter->plattername = $row["Platter"];
            $platter->isActive = $row["Is_Active"];
            $platter->category = $row["category"];
            $platter->price = $row["price"];
            $platter->discount = $row["discount"];
            $platters[] = $platter;
        }
        return $platters;
    } else {
        return 0;
    }
}
function ActivateItem($id, $status){
    /*
        This function is simply responsible for activating a platter from the table of the admin.
    */

    require("../common/dbconfig.php");
    
    $query = "UPDATE table_platters SET Is_Active=:status WHERE ID=:id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':status', $status, PDO::PARAM_INT);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        header("Location: ../../fe/pages/AlterPlatter.php");
    } else {
        header("Location: ../../fe/pages/AlterPlatter.php");
    }
}


function DeactivateItem($id, $status){

    /*
        This function is simply responsible for deactivating a platter from the table of the admin.
    */
    require("../common/dbconfig.php");
    
    $query = "UPDATE table_platters SET Is_Active=:status WHERE ID=:id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':status', $status, PDO::PARAM_INT);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        header("Location: ../../fe/pages/AlterPlatter.php");
    } else {
        header("Location: ../../fe/pages/AlterPlatter.php");
    }
}
function DeleteItem($id){
    /*
        This function is simply responsible for deleting an platter from the table of the admin.
    */
    require("../common/dbconfig.php");
    
    $query = "DELETE FROM table_platters WHERE ID=:id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        header("Location: ../../fe/pages/AlterPlatter.php");
    } else {
        header("Location: ../../fe/pages/AlterPlatter.php");
    }
}

