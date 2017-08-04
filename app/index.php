<?php
  $servername = "data";
  $username = "admin";
  $password = "test";
  $dbname = "database";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    echo 'Successfully connected to database!';
  }
