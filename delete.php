<?php
session_start();
include("database.php");
if (isset($_POST["delete_faq"])) {
    $id = $_POST["id"];
    $conn->query("DELETE from faq WHERE id='$id'");
}

if (isset($_POST["delete_product"])) {
    $model = $_POST["model"];
    $conn->query("DELETE from product WHERE model='$model'");
}
unset($_POST);
header("location: " . $_SERVER["HTTP_REFERER"]);