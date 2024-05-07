<?php
class Controller {
    public function processContactForm($name, $surname, $email, $subject, $message) {
        // Here you would typically save the data to a database or send an email
        // For demonstration, we'll just return true
        return true;
    }
}
 function connect() {
    $host = '127.0.0.1';
    $db   = 'chef_system';
    $user = 'root'; // change to your database username
    $pass = '';     // change to your database password
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}
