<?php


$host ="localhost";
$dbname = "task2and3";
$username ="root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // Uncomment for testing purposes
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
