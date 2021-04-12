<?php
//Messager code
$file = basename(__FILE__, '.php');
require_once "logginglog.php";
$message = new logginglog();

$message->newInfoMessage($file, "DB connection called");
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
    $message->newErrorMessage($file, "DB connections has failed");
    die("Connection to DB failed: " . mysqli_connect_error());
} else {
    $message->newInfoMessage($file, "DB connections is sucessful");
    $connection = $success;
}
