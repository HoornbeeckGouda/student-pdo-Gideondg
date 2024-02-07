<?php
$servername = 'localhost';
$username = 'root';
$password = '';


try {
    $dbconn = new PDO("mysl:host=$servername;dbname=student", $username, $password);
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>