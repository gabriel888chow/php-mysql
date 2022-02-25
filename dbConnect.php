<?php
// connect to mysql "furniture_store" table
$dbConnection = mysqli_connect("localhost", "root", "", "furniture_store");

// check it is connect to mysql
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// echo "done";