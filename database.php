<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "sneakerzfreaks");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}