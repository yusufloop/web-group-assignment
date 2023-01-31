<?php
include 'dblink.php';

// sql to delete a record
$sql = "DROP TABLE users_booking";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>