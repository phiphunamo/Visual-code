<?php
include "connect.php";
$zone = $_GET['zone']; //เก็บในตัวแปรก่อนเเล้วค่อยเอาตัวแปรไปใช้ใน values


$sql = "INSERT INTO tbl_nano (zone, board, temp, humi, dmy)
VALUES ('$zone', '$_GET[board]', '$_GET[temp]', '$_GET[humi]', now())";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>