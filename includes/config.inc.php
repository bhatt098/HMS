<?php
  session_start();
  $db_host = "localhost";
$db_user = "root";
$db_password = "";
  $dbName = "hostel_management_system";
 // session_start();
  $conn=mysqli_connect($db_host, $db_user, $db_password, $dbName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
