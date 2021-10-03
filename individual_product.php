<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
    <?php
    session_start();
    if (isset($_SESSION['gender'])) {
        $gender = $_SESSION['gender'];
    } else {
        $gender = "default";
    }
    ?>
    <script src="javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
div.product_page {
    margin-top: 50px;
    margin-left: 100px;
}

div.product_page .product_image {
    width: 700px;
    height: 700px;
}

div.product_page .product_description {
    position: inline-block;
    margin-left: 45%;
    margin-top: -41%;
    max-width: 700px;
}

div.product_page .size_list {
    max-width: 500px;
}

div.product_page .size_radio {
    display: none;
}

div.product_page .size_button {

    display: inline-block;
    background-color: #e6e6e6;
    color: black;
    margin-bottom: 10px;
    padding: 0px 10px 0px 10px;
    font-size: 30px;
}

div.product_page .size_button:hover {
    background-color: #000000;
    color: white;
    cursor: pointer;
}

div.product_page .size_radio:checked+.size_button {
    background-color: #000000;
    color: white;
}

.quantity_dropdown::-webkit-scrollbar {
    width: 4px;
    background-color: #999999;
}

div.product_description .add_cart {
    position: absolute;
    color: white;
    background-color: black;
    margin-left: 1%;
    height: 50px;
    width: 300px;
}

div.product_description .add_cart:hover {
    background-color: #333333;
    cursor: pointer;
}

div.product_detail {
    text-align: justify;
    font-weight: 700;
    font-size: 18px;
}

/*Review Accordions */
div.review_list {
    position: relative;
    background-color: white;
    border-top: solid 1px grey;
    border-bottom: solid 1px grey;
}

div.review_list .title2 {
    position: relative;
    font-weight: bold;
    font-size: 20px;
    padding: 15px 10px 15px 10px;
}

div.review_list .title2:hover {
    cursor: pointer;
}


div.review_list .title2::after {
    content: '\25BD';
    position: absolute;
    right: 20px;
    transition: 0.2s;
}

div.review_list .title2.clicked::after {
    content: '\25BC';
    transform: rotate(-180deg);
}

div.review_list .title2+.reviews {
    height: 0px;
    transition: 0.5s;
    font-size: 18px;
    overflow: hidden;
}

div.review_list .title2.clicked+.reviews {
    height: auto;
    padding: 15px 10px 20px 10px;

}

div.add_cart_popup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    height: auto;
    padding: 30px 20px;
    line-height: 1.5rem;
    border-radius: 5px;
    font-size: 16px;
    box-shadow: 0 0 5px 2px #0000003a;
    background-color: white;
    text-align: center;
    z-index: 20;
    font-size: 20px;
    font-weight: 600;
    visibility: hidden;
}

div.add_cart_popup button {
    background-color: black;
    color: white;
    font-size: 18px;
    height: 40px;
    width: 100px;
}

div.add_cart_popup button:hover {
    cursor: pointer;
}
</style>

<body onload="themeColor('<?php echo $gender ?>')">
    <?php include("database.php"); ?>
    <!-- Import Fixed Menu Sidebar -->
    <?php include('sidebar.html'); ?>
    <!-- Import Fixed Header -->
    <?php include('header.php'); ?>

    <?php
    if (isset($_POST["product_image"])) {
        $product = " WHERE model='" . $_POST["product_image"] . "'";
    } else if (isset($_POST["product_name"])) {
        $product = " WHERE model='" . $_POST["product_name"] . "'";
    } else if (isset($_POST["product_type"])) {
        $product = " WHERE model='" . $_POST["product_type"] . "'";
    } else if (isset($_POST["product_price"])) {
        $product = " WHERE model='" . $_POST["product_price"] . "'";
    } else if (isset($_POST["model"])) {
        $product = " WHERE model='" . $_POST["model"] . "'";
    }

    $sql = "SELECT * from product" . $product;
    $product_desc = $conn->query($sql);
    $size_sql = "SELECT * from productquantity" . $product;
    $size_list = $conn->query($size_sql);
    ?>
    <div class="content">
        <div class="product_page">
            <?php
            while ($model = $product_desc->fetch_assoc()) {
            ?> <img class="product_image" src="<?php echo $model["image"] ?>">
            <div class="product_description">
                <span
                    style="font-size: 20px; text-transform: capitalize;"><?php echo $model["gender"] . "/" . $model["category"]; ?></span><br>
                <span style="font-weight:800;; font-size:30px;"><?php echo $model["name"]; ?></span><br><br>
                <?php
                    if ($model["discount"] !== 0.00) {
                        $discount = $model["discount"] * 100;
                        $discount = $discount . "%"; ?>
                <span style="font-size:20px; color:green;"><?php echo $discount; ?></span><br><br><?php
                                                                                                        }
                                                                                                            ?>
                <?php
                    if ($model["discount"] != 0.00) {
                        $price = $model["price"] - ($model["price"] * $model["discount"]);
                    ?> <span
                    style="font-weight:bold; font-size:30px; text-decoration:line-through; opacity:0.8;"><?php echo "RM" . $model["price"]; ?></span>
                <span
                    style="font-size:30px; font-weight:bold;"><?php echo "RM" . number_format("$price", 2); ?></span><br><br><?php
                                                                                                                                } else if ($model["discount"] == 0) {
                                                                                                                                    $price = $model["price"];
                                                                                                                                    ?><span
                    style="font-size:30px; font-weight:bold;"><?php echo "RM" . $model["price"]; ?></span><br><br><?php
                                                                                                                                }
                                                                                                                            ?>
                <form action="" method="post">
                    <div class="size_list">
                        <?php
                            while ($size = $size_list->fetch_assoc()) {
                            ?><input class="size_radio" type="radio"
                            <?php if (isset($_POST["size"]) and $_POST["size"] == $size["size"]) echo "checked='checked'"; ?>
                            name="size" id="<?php echo $size["size"]; ?>" value="<?php echo $size["size"]; ?>"
                            onChange="this.form.submit()">
                        <label class="size_button"
                            for="<?php echo $size["size"]; ?>"><?php echo $size["size"]; ?></label>
                        <?php } ?>
                    </div>
                    <input type="hidden" name="model" value="<?php echo $model["model"]; ?>">
                </form>
                <br><br>
                <?php
                    $size_cart = "";
                    if (isset($_POST["size"])) {
                        $size_cart = $_POST["size"];
                        $counter = 1;
                        $quantity_sql = "SELECT quantity from productquantity WHERE model='" . $_POST["model"] . "' and " . "size='" . $_POST["size"] . "'";
                        $quantity_query = $conn->query($quantity_sql);
                        while ($quantity = $quantity_query->fetch_assoc()) {
                            $max_quantity = $quantity["quantity"];
                        }
                    }
                    if (isset($_POST["size"]) && $max_quantity != 0) {
                    ?>
                <form action="" method="post">

                    <label style="font-size:25px; font-weight:700" for="quantity">Quantity:</label>
                    <select name="quantity_cart" class="quantity_dropdown" style="width:50px; height:50px;"
                        id="quantity" name="quantity">
                        <?php
                                while ($counter <= $max_quantity) {
                                    echo '<option value="' . $counter . '">' . $counter . "</option>";
                                    $counter++;
                                }
                                ?>
                    </select>
                    <input class="add_cart" type="submit" name="add_bag" id="add_bag" value="ADD TO BAG"
                        onclick="AddCartPopup();">
                    <input type="hidden" name="model" value="<?php echo $model["model"]; ?>">
                    <input type="hidden" name="size_cart" value="<?php echo $_POST["size"]; ?>">
                </form>
                <?php } else if (isset($_POST["size"]) === false || $max_quantity == 0) {
                    ?>
                <form action="" method="post">
                    <label style="font-size:25px; font-weight:700" for="quantity">Quantity:</label>
                    <select class="quantity_dropdown" style="width:50px; height:50px;" id="quantity" name="quantity"
                        disabled>
                    </select>
                    <input class="add_cart" type="submit" name="add_bag" id="add_bag" value="ADD TO BAG">
                    <input type="hidden" name="model" value="<?php echo $model["model"]; ?>">
                </form>
                <?php }
                    ?>
                <?php
                    $quantity_cart = "";
                    $is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
                    if (isset($_POST["quantity_cart"])) {
                        $add_cartitem_sql = "INSERT INTO cartitem (model, quantity, size, username) VALUES ('" . $model["model"] . "' , '" . $_POST["quantity_cart"] . "'" . ",'" . $_POST["size_cart"] . "'" . ",'" . $_SESSION["username"] . "')";
                        if ($conn->query($add_cartitem_sql)) {
                    ?><div class="add_cart_popup">
                    <span>Item added!</span><br><br>
                    <button onclick="CloseAddCartPopup()">confirm</button>
                </div><?php
                                }
                            }
                                    ?>
                <br><br>
                <span style="font-weight:bold; font-size:25px;">Product Description</span><br><br>
                <?php
                    echo '<div class="product_detail">';
                    echo $model["description"];
                    echo "</div>"
                    ?>
                <br>
                <div class="review_list">
                    <div class="title2">
                        REVIEWS
                    </div>
                    <div class="reviews">
                        <?php
                            $query = "SELECT * FROM review " . "WHERE model='" . $model["model"] . "'" . " order by name";
                            $review = $conn->query($query);
                            while ($row = $review->fetch_assoc()) {
                                echo $row["name"] . "  ";
                                $stars = $row["rating"];
                                for ($i = 1; $i <= $stars; $i++) {
                                    echo '<span style="color:#ea3b50; font-size:25px;">&starf;</span>';
                                }
                                for ($i = 1; $i <= 5 - $stars; $i++) {
                                    echo '<span style="color:grey; font-size:25px;">&star;</span>';
                                }
                                echo "<br>";
                                echo '<div style="text-align: justify;">' . $row["review"] . '</div>';
                                echo "<br><br>";
                            }
                            ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div id="overlay"></div>
    <?php include('footer.html'); ?>
</body>

</html>