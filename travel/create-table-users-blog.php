<?php
include 'dblink.php';
include 'navbar.php';
include 'links.php';

// sql to create table
$sql = "CREATE TABLE users_blog (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
placename VARCHAR(255),
image LONGBLOB,
descriptions VARCHAR(1000),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table users_booking created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>