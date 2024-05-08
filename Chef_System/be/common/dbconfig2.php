<?php
$user="root";
$pass ="";
$host="127.0.0.1";
$dbName="chef_system";
try{
    $dbs=new PDO("mysql:host=$host;dbname=$dbName",$user,$pass);
}catch (Exception $ex){
    print "Error!: " . $ex->getMessage() . "<br/>";
   die();
}
/*We Used Two DBConfigs since in the first one we do a  regular $conn without a PDO object, and in the second one we did a connection
through the PDO object so we can use functions like: rowcount().
*/
?>
