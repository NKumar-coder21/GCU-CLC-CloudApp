<?php
//connect to the database
$servername = "localhost";
$DBuser = "root";
$DBpass = "root";
$DBname = "markets-management";
$port = "8889";
$DBsock = "/Applications/MAMP/tmp/mysql/mysql.sock";
$success = mysqli_connect(
    $servername,
    $DBuser,
    $DBpass,
    $DBname,
    $port,
    $DBsock
);
if (!$success) {
    die("Connection to DB failed: " . mysqli_connect_error());
} else {
    $connection = $success;
}
