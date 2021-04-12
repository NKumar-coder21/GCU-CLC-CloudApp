<?php
//  <!--Created by Nathaniel Kumar @ GCU 2021 -->

//Messager code
$file = basename(__FILE__, '.php');
require_once "logginglog.php";
$message = new logginglog();


//logout the user
session_start();
$message->newInfoMessage($file, "User " . $_SESSION["sessionID"] . " is logging out from application.");
session_unset();
session_destroy();
header("Location: ../index.php");
exit();
