<?php
//Messager code
$file = basename(__FILE__, '.php');
require_once "logginglog.php";
$message = new logginglog();

$message->newInfoMessage($file, "DB connection called");
//connect to the database
$servername = 127.0.0.1:52148;
$DBuser = "azure";
$DBpass = "6#vWHD_$";
$DBname = "localdb";
$success = mysqli_connect(
    $servername,
    $DBuser,
    $DBpass,
    $DBname
);
if (!$success) {
    $message->newErrorMessage($file, "DB connections has failed");
    die("Connection to DB failed: " . mysqli_connect_error());
} else {
    $message->newInfoMessage($file, "DB connections is sucessful");
    $connection = $success;
}
