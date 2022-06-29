<?php
/*########################################
create a database for storing data 
########################################*/

//Essential database login data
$servername = "";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database "submissionDB"
$sql = "CREATE DATABASE adveisorDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
} 
$conn->close();
?>
