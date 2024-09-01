<?php
$host = 'localhost'; 
$dbname = 'contact_form';
$user = 'root'; 
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); 

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set the PDO error mode to exception

} catch (PDOException $e) {
    echo ('Database connection failed : ' . $e->getMessage());
}
?>
