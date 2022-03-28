<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "teaapp";

    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
?>