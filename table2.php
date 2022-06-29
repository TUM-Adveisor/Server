<?php
/*########################################
create tables to store the data 
########################################*/

//Essential database login data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adveisordb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $sql = "CREATE TABLE settings (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    game_type VARCHAR(32) NOT NULL,
    game_config VARCHAR(1024) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }



$conn->close();
?>

