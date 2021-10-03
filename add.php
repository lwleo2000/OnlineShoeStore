<?php
include("database.php");
if (isset($_POST["add_faq"])) {
    $category = strtolower($_POST["category"]);
    $question = $_POST["question"];
    $answer = $_POST["answer"];
    $conn->query("INSERT INTO faq (category,question, answer) VALUES ('$category','$question','$answer')");
}

if (isset($_POST["add_product"])) {
    $model = $_POST["model"];
    $name = $_POST["name"];
    $category = $_POST["category"];
    $gender = $_POST["gender"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $year = $_POST["year"];
    $brand = $_POST["brand"];
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    if ($file_size > 3145728) {
        $errors += 'File size must be less than 3 MB';
    }

    if (empty($errors)) {
        move_uploaded_file($file_tmp, "photo/product/$file_name");
        $conn->query("INSERT INTO product VALUES ($model,$name,$category,$gender,$description,$price,$discount,$year,$brand,'photo/product/$file_name')");
    } else {
        echo "<script> window.location.href='adminProds.php'; 
           alert('$errors'); </script>";
    }
}
unset($_POST);
header("location: " . $_SERVER["HTTP_REFERER"]);