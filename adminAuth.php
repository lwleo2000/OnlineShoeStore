<?php
if (!isset($_SESSION['admin'])) {
    header("location: admin.php");
    exit();
}