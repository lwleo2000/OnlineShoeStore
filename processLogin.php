<?php
session_start();
include("database.php");
if ($_POST["user"] == "admin") {
    if (isset($_POST["login"])) {
        $admin_name = $_POST["admin_name"];
        $admin_pass = $_POST["admin_pass"];
    }

    $result = $conn->query("SELECT * from admin WHERE username='$admin_name' and password='$admin_pass'");
    if (mysqli_num_rows($result) != 0) {
        $_SESSION['admin'] =  $admin_name;
        header("location: adminDashboard.php");
    } else {
        echo "<script> window.location.href='login.html'; 
    alert('Account has been successfully created.\nYou can log in now.'); </script>";
        $_SESSION["error_msg"] = "<div class='login_error admin_frame'>
        <b class='error_msg'>Error!</b><br>Incorrect username or password.
        </div>";
        header("location: admin.php");
    }
    $result->free_result();
} else {
    header("location: ./");
}

if ($_POST["user"] == "member") {
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    }

    $result = $conn->query("SELECT * from member WHERE username='$username' and password='$password'");
    if (mysqli_num_rows($result) != 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] =  $row['username'];
        $_SESSION['gender'] =  $row['gender'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        header("location: ./");
    } else {
        $_SESSION["error_msg"] = "<div class='login_error user_frame'>
        <b class='error_msg'>Error!</b><br>Incorrect username or password.
        </div>";
        header("location: login.php");
    }
    $result->free_result();
}
