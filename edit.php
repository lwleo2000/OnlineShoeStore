<?php
session_start();
include("database.php");
if (isset($_POST["edit_faq"])) {
    $id = $_POST["id"];
    $category = $_POST["category"];
    $question = $_POST["question"];
    $answer = $_POST["answer"];
    $conn->query("UPDATE faq set category='$category', question='$question', answer='$answer' WHERE id='$id'");
}

if (isset($_POST["edit_contact"])) {
    $status = $_POST["edit_contact"];
    $id = $_POST["id"];
    $conn->query("UPDATE contact set status='$status' WHERE id='$id'");
}

if (isset($_POST["edit_product"])) {
    $model = $_POST["model"];
    $name = $_POST["name"];
    $category = $_POST["category"];
    $gender = $_POST["gender"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $year = $_POST["year"];
    $brand = $_POST["brand"];

    if (isset($_FILES['image'])) {
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        if ($file_size > 3145728) {
            $errors += 'File size must be less than 3 MB';
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "photo/product/.$file_name");
            $conn->query("UPDATE product set 'name'='$name', category='$category'," .
                " gender='$gender', description='$description', price='$price', discount='$discount'," .
                " year='$year', brand='$brand', image='photo/product/$file_name' WHERE model='$model'");
        } else {
            echo "<script> window.location.href='adminProdcuts.php'; 
           alert('$errors'); </script>";
        }
    } else {
        $conn->query("UPDATE product set name='$name', category='$category'," .
            "gender='$gender', description='$description', price='$price', discount='$discount'," .
            "year='$year', brand='$brand' WHERE model='$model'");
    }
}
unset($_POST);
header("location: " . $_SERVER["HTTP_REFERER"]);