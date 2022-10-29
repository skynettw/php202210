<?php
$servername = "localhost";
$username = "nkustadmin";
$password = "nkust@123!";
$dbname = "newsdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE videolist (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL);";

if ($conn->query($sql) === TRUE) {
  echo "Table roadnews created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
