<?php
$host = 'localhost';
$dbname = 'auth_system';
$user = 'root'; 
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //used to configure the error handling behavior of the PDO (PHP Data Objects) database connection. If something goes wrong with a database query (like a syntax error in an SQL statement, or trying to access a non-existent table), PDO will throw an exception. This makes it easier to manage errors, log them, or display meaningful error messages to users.
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
