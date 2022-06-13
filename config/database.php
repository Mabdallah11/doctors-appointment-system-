<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "";

$conn = new mysqli($hostname, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";