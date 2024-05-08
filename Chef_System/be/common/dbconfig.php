<?php
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
/*We Used Two DBConfigs since in the first one we do a  regular $conn without a PDO object, and in the second one we did a connection
through the PDO object so we can use functions like: rowcount().
*/
?>