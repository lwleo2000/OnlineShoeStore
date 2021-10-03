<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
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
div.cart_list {
    margin-left: 20%;
    margin-top: 5%;
}

div.cart_list .size_dropdown {
    font-size: 15px;
}

tr.line td {
    border-bottom: 1px solid grey;
}

div.summary {
    position: fixed;
    margin-top: -16%;
    margin-left: 40%;
    width: 400px;
    box-shadow: 0 0 5px 2px #0000003a;
}

div.summary button {
    background-color: black;
    color: white;
    width: 400px;
    height: 50px;
    border-radius: 10px;
}

div.summary button:hover {
    cursor: pointer;
    background-color: #333333;
}

.quantity_dropdown::-webkit-scrollbar {
    width: 4px;
    background-color: #999999;
}

.size_dropdown::-webkit-scrollbar {
    width: 4px;
    background-color: #999999;
}
</style>

<body onload="themeColor('<?php echo $gender ?>')">
    <?php include("database.php"); ?>
    <!-- Import Fixed Menu Sidebar -->
    <?php include('sidebar.html'); ?>
    <!-- Import Fixed Header -->
    <?php include('header.php'); ?>

    <div class="content">
        <div class="cart_list">
            <?php
            if (isset($_POST["remove"])) {
                $remove_sql = "DELETE from cartitem WHERE id=" . $_POST["delete_id"];
                $conn->query($remove_sql);
            }
            ?>
            <table>
                <?php
                $cartitem_sql = "SELECT * from cartitem, product WHERE cartitem.model=product.model and username='" . $_SESSION["username"] . "'";
                $cartitem = $conn->query($cartitem_sql);
                $total_price = 0;
                $id = 1;
                while ($row = $cartitem->fetch_assoc()) {
                    if (isset($_POST["size"])) {
                        $size_cart = $_POST["size"];
                        $counter = 1;
                        $quantity_sql = "SELECT quantity from productquantity WHERE model='" . $row["model"] . "' and " . "size='" . $_POST["size"] . "'";
                        $quantity_query = $conn->query($quantity_sql);
                        while ($quantity = $quantity_query->fetch_assoc()) {
                            $max_quantity = $quantity["quantity"];
                        }
                    }
                    $size_list_sql = "SELECT * from productquantity WHERE model='" . $row["model"] . "'";
                    $size_list = $conn->query($size_list_sql);
                ?><tr class="line">
                    <td>
                        <img style="height:300px; width:300px;" src=<?php echo $row["image"]; ?>>
                    </td>
                    <td style="padding-left: 30px;">
                        <?php
                            echo $row["name"] . "<br>";
                            echo $row["gender"] . "/" . $row["category"] . "<br><br>";
                            ?>
                        <form action="" method="post">
                            <label style="font-size:15px;" for="size">Size:</label>
                            <select onchange="this.form.submit()" name="size" class="size_dropdown"
                                style="width:60px; height:20px;" id="size" name="size">
                                <?php
                                    while ($size = $size_list->fetch_assoc()) {
                                    ?><option
                                    <?php if (isset($_POST["size"]) && $_POST["size"] == $size["size"]) echo "selected='selected'" ?>
                                    value="<?php echo $size["size"]; ?>"><?php echo $size["size"]; ?></option>
                                <?php
                                    }
                                    ?>
                                <input type="hidden" name="model" value="<?php echo $row["model"]; ?>">
                            </select>
                            <?php
                                if (isset($_POST["size"]) && $max_quantity != 0) {
                                ?>
                            <label style="font-size:15px;" for="quantity">Quantity:</label>
                            <select onchange="this.form.submit()" name="quantity" class="quantity_dropdown"
                                style="width:60px; height:20px;" id="quantity" name="quantity">
                                <?php
                                        while ($counter <= $max_quantity) {
                                        ?><option
                                    <?php if (isset($_POST["quantity"]) && $_POST["quantity"] == $counter) echo "selected='selected'" ?>
                                    value="<?php echo $counter; ?>"><?php echo $counter; ?></option>";
                                <?php $counter++ ?>;<?php
                                                            }
                                                                ?>
                            </select><?php
                                            } else if (isset($_POST["size"]) === false || $max_quantity == 0) {
                                                ?>
                            <form action="" method="post">
                                <label style="font-size:15px;" for="quantity">Quantity:</label>
                                <select class="quantity_dropdown" style="width:60px; height:20px;" id="quantity"
                                    name="quantity" disabled>
                                </select>
                            </form>
                            <?php }
                                ?>
                        </form>
                        <br><br>
                        <?php
                            if (isset($_POST["quantity"])) {
                                $price = $row["price"] * $_POST["quantity"];
                            } else {
                                $price = $row["price"];
                            }
                            ?>
                        <?php
                            echo "RM" . number_format($price, 2) . "<br><br>";
                            $total_price =  $total_price + $price;
                            ?>
                        <?php
                            $sql
                            ?>
                        <form action="" method="post">
                            <input type="submit" value="Remove" name="remove" id="remove">
                            <input type="hidden" value="<?php echo $id; ?>" name="delete_id">
                        </form>
                    </td>
                <tr><?php
                    }
                    $id++;
                        ?>
            </table>
            <div class="summary">
                <div style="text-align:center; font-weight:bold; font-size:20px">SUMMARY</div><br><br>
                <div style="margin-left:1%;">Subtotal</div>
                <div style="margin-top: -5%; margin-right:2%; text-align:right;">
                    <?php echo "RM" . number_format($total_price, 2); ?></div><br><br>
                <div style="margin-left:1%;">Estimated Delivery & Handling</div>
                <div style="margin-top: -5%; margin-right:2%; text-align:right;">RM0.00</div><br><br><br>
                <div
                    style="padding-top:20px; padding-bottom:20px; border-bottom: 1px solid black; border-top: 1px solid black; margin-left:1%;">
                    Total Price</div>
                <div style="margin-top: -10%; margin-right:2%; text-align:right;">
                    <?php echo "RM" . number_format($total_price, 2); ?></div><br><br>
                <button>PROCESS TO CHECKOUT</button>
            </div>
        </div>
    </div>
    <!-- Import Fixed Footer -->
    <?php include('footer.html');
    ?>
</body>

</html>