<?php
$host = "localhost";
$dbname = "user_query"; 
$dbsusername = "root";
$dbpassword = "";

try {
  
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbsusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) { 
    die("Connection failed " . $e->getMessage());
}
?>

