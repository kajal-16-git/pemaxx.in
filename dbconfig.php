<?php
// Database connection details
$servername = "localhost";
$username = "pemaxx_mt5crmlive"; // Replace with your database username
$password = "maqie6g=_8L!"; // Replace with your database password
$dbname = "pemaxx_mt5crm_db"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>