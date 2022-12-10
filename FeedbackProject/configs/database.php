<?php
//Use PDO (PHP Data Object) library to connect to MySQL database
define('DATABASE_SERVER', 'localhost');
define('DATABASE_NAME', 'phpapp');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', '');

$connection = null;
try {
    $connection = new PDO(
        'mysql:host=' . DATABASE_SERVER . ';dbname=' . DATABASE_NAME,
        DATABASE_USER,
        DATABASE_PASSWORD
    );
    echo "Connected to database successfully <br/>";
} catch (PDOException $e) {
    $connection = null;
    echo "Connection failed: " . $e->getMessage() . "<br/>";
}
