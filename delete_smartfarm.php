<?php
include "connect.php";

// sql to delete a record
$sql = "DELETE FROM tbl_nano WHERE id=$_GET[id]";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("location: select_smartfarm.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>