<?php
session_start();
$conn= mysqli_connect('localhost','root','','book_db');
$names= $_SESSION["name"];
$sql = "DELETE FROM book_form WHERE name = '$names'";
if (mysqli_query($conn, $sql)) {
    echo "Order successfully canceled";
  } 
  else {
    echo "Error deleting order";
  }
session_destroy();
?>