<?php

include('database.php');

$contact_email = $_POST["contact_email"];
$contact_title = $_POST["contact_title"];
$contact_message = $_POST["contact_message"];

$sql = "INSERT INTO contact (email, title, content) VALUES('$contact_email', '$contact_title', '$contact_message')";

if ($conn->query($sql) === TRUE) {
    header("Location: about.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}