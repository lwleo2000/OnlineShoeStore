<?php
include("database.php");
if (isset($_POST["signup"])) {
    $username = $_POST['username'];
    $validate = $conn->query("SELECT * from member WHERE username='$username'");
    if (mysqli_num_rows($validate) != 0) {
        echo "<script> window.location.href='signup.html'; 
        alert('Username has been taken. Please try another username.');</script>";
        unset($_POST);
    } else {
        $password = $_POST['password'];
        $name = $_POST["name"];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $query = "INSERT INTO member VALUES ('$username', '$password', '$email', '$name', '$gender')";
    }
}
unset($_POST);
if ($conn->query($query)) {
    echo "<script> window.location.href='login.php'; 
    window.alert('Account has been successfully created.\\nYou can log in now.'); </script>";
}