<?php
  session_start();
  $db_host = "remotemysql.com";
$db_user = "Kv8nryJmg9";
$db_password = "gJqBviHhZh";
  $dbName = "Kv8nryJmg9";
 // session_start();
  $conn=mysqli_connect($db_host, $db_user, $db_password, $dbName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
