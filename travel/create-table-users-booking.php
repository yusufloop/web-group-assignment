<?php
include 'dblink.php';
include 'navbar.php';
include 'links.php';

// sql to create table
$sql = "CREATE TABLE users_booking (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
destination VARCHAR(255),
room VARCHAR(50),
adult INT(10),
children INT(10),
checkin_date VARCHAR(255),
checkout_date VARCHAR(255),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table users_booking created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>