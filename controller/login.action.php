<?php
if (isset($_POST['Login_submit'])) {
    require "Database.ref.php";

    $username = $_POST['user'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: ../index.php?err=null");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE `username`=? AND `password`=?";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?err=sql");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["sessionID"] = $row["ID"];
                $_SESSION["sessionName"] = $row["username"];
                header("Location: ../views/dashboard.php");
                exit();
            } else {
                header("Location: ../index.php?err=nouser");
                exit();
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
} else {
    header("Location: ../index.php");
    exit();
}
