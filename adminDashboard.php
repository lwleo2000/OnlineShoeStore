<?php
session_start();
include("adminAuth.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Admin Dashboard
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="admin">
        <h1>Admin Dashboard</h1>
        <div class="dashboard">
            <a href="adminProducts.php">Products</a>
            <a href="adminFaq.php">FAQ</a>
            <a href="adminContact.php">Contact Forms</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>

</html>