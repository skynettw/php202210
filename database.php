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
?>
