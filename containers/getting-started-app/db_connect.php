<?php
$servername = "db"; 
$username = "EdisonT";
$password = "EDI123";
$dbname = "cloudsystemenDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

