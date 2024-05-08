<?php

function GetPlats(){
    /*
        This function retrieves all platters from the database and it returns them as an array of StdClass representing each platter.
    */
    require_once("../../be/common/dbconfig2.php");
    $Plats = array();
    $query = "SELECT ID,PLATTER,DESCRIPTION,IS_ACTIVE,category,price,discount FROM table_platters";
    $stmt = $dbs->query($query);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Plat = new stdClass();
            $Plat->ID = $row["ID"];
            $Plat->PLATTER = $row["PLATTER"];
            $Plat->DESCRIPTION = $row["DESCRIPTION"];
            $Plat->price = $row["price"];
            $Plat->discount = $row["discount"];
            $Plat->IS_ACTIVE = $row["IS_ACTIVE"];
            $Plat->category = $row["category"];

            $Plats[] = $Plat;
        }
        return $Plats;
    } else {
        return 0;
    }
}

function Contact($un, $sun, $em, $sub, $mes) {
    /*
        This function inserts the message information of the user into the database.
    */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($un) && isset($sun) && isset($em) && isset($sub) && isset($mes)) {
            global $db;
            $query = "INSERT INTO Contact (username, surname, email, subject, message) VALUES ('$un', '$sun', '$em', '$sub', '$mes')";
            $stmt = $db->query($query);
            if ($stmt) {
                echo "success";
            } else {
                echo "fail";
            }
        } else {
            echo "Incomplete form data.";
        }
    }
}


function getPlat($id){
    
    /*
        This function retrieves a single platter to be displayed in the description platter page.
    */

    require_once("../../be/common/dbconfig2.php");
    
    $query = "SELECT ID,Platter,DESCRIPTION,Is_Active,category,price,discount FROM table_platters Where ID = $id";
    $stmt = $dbs->query($query);
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $platter = new stdClass();
        $platter->id = $row["ID"];
        $platter->plattername = $row["Platter"];
        $platter->isActive = $row["Is_Active"];
        $platter->category = $row["category"];
        $platter->description = $row["DESCRIPTION"];
        $platter->price = $row["price"];
        $platter->discount = $row["discount"];
        return $platter;
    }

}
     else {
      return 0;
}
}