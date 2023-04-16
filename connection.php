<?php
// Database configuration
$servername = "database2.cr8t1xgjhw4n.eu-north-1.rds.amazonaws.com"; // Replace with your MySQL server name
$username = "admin"; // Replace with your MySQL username
$password = "bazadruga"; // Replace with your MySQL password
$dbname = "baza_druga"; // Replace with the name of your MySQL database

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
