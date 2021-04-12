<?php
//Messager code
$file = basename(__FILE__, '.php');
require_once "logginglog.php";
$message = new logginglog();

if (isset($_POST['Login_submit'])) {
    require "Database.ref.php";

    $message->newInfoMessage($file, "User is logging into the application");

    $username = $_POST['user'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $message->newInfoMessage($file, "User has tried to log in with null data");
        header("Location: ../index.php?err=null");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE `username`=? AND `password`=?";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $message->newErrorMessage($file, "SQL INCORRECT OR DATABASE IS DOWN");
            header("Location: ../index.php?err=sql");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            $message->newDebugMessage($file, "Executing credital search among DB");
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["sessionID"] = $row["ID"];
                $_SESSION["sessionName"] = $row["username"];
                $message->newDebugMessage($file, "Starting a session for user " . $_SESSION["sessionID"]);
                header("Location: ../views/dashboard.php");
                exit();
            } else {
                $message->newInfoMessage($file, "A user try to log in with incorrect creditails");
                header("Location: ../index.php?err=nouser");
                exit();
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
} else {
    $message->newErrorMessage($file, "USER URL'ed THIS PAGE, REDIRECTING USER...");
    header("Location: ../index.php");
    exit();
}
