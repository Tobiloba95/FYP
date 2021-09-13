<?php
$servername = "localhost";
$username = "root";
$password = "Tobi1234loba*";
$dbname = "e-clearance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>