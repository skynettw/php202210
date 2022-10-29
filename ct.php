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
$sql = "CREATE TABLE roadnews (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
news VARCHAR(50) NOT NULL,
pdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table roadnews created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
