<!DOCTYPE html>
<html>

<head>
    <title>
        Sport Shoes
    </title>
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

<body onload="themeColor('<?php echo $gender ?>')">
    <button onclick="topFunction()" id="myBtn" title="Go to top">&#8679;</button>
    <?php
    //Filter the products
    $filtered = "SELECT *, round(price*(1-discount),2) as discount_price,GROUP_CONCAT(productquantity.size separator ',')FROM `product` , productquantity WHERE productquantity.model=product.model group by product.model";
    if (isset($_POST["boys"]) and strpos($filtered, "and (gender=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (gender='" . $_POST["boys"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["boys"]) and strpos($filtered, "and (gender=") !== false) {
        $position = strpos($filtered, "gender=");
        $replacement = "gender='" . $_POST["boys"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["girls"]) and strpos($filtered, "and (gender=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (gender='" . $_POST["girls"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["girls"]) and strpos($filtered, "and (gender=") !== false) {
        $position = strpos($filtered, "gender=");
        $replacement = "gender='" . $_POST["girls"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["men"]) and strpos($filtered, "and (gender=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (gender='" . $_POST["men"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["men"]) and strpos($filtered, "and (gender=") !== false) {
        $position = strpos($filtered, "gender=");
        $replacement = "gender='" . $_POST["men"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["women"]) and strpos($filtered, "and (gender=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (gender='" . $_POST["women"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["women"]) and strpos($filtered, "and (gender=") !== false) {
        $position = strpos($filtered, "gender=");
        $replacement = "gender='" . $_POST["women"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["badminton"]) and strpos($filtered, "and (category=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (category='" . $_POST["badminton"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["badminton"]) and strpos($filtered, "and (category=") !== false) {
        $position = strpos($filtered, "category=");
        $replacement = "category='" . $_POST["badminton"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["basketball"]) and strpos($filtered, "and (category=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (category='" . $_POST["basketball"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["basketball"]) and strpos($filtered, "and (category=") !== false) {
        $position = strpos($filtered, "category=");
        $replacement = "category='" . $_POST["basketball"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["football"]) and strpos($filtered, "and (category=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (category='" . $_POST["football"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["football"]) and strpos($filtered, "and (category=") !== false) {
        $position = strpos($filtered, "category=");
        $replacement = "category='" . $_POST["football"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["running"]) and strpos($filtered, "and (category=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (category='" . $_POST["running"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["running"]) and strpos($filtered, "and (category=") !== false) {
        $position = strpos($filtered, "category=");
        $replacement = "category='" . $_POST["running"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["tennis"]) and strpos($filtered, "and (category=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (category='" . $_POST["tennis"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["tennis"]) and strpos($filtered, "and (category=") !== false) {
        $position = strpos($filtered, "category=");
        $replacement = "category='" . $_POST["tennis"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["1_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["1_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["1_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["1_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["2_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["2_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["2_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["2_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["2_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["2_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["2_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["2_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["3_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["3_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["3_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["3_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["3_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["3_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["3_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["3_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["4_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["4_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["4_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["4_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["4_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["4_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["4_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["4_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["5_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["5_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["5_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["5_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["5_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["5_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["5_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["5_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["6_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["6_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["6_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["6_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["6_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["6_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["6_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["6_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["7_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["7_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["7_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["7_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["7_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["7_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["7_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["7_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["8_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["8_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["8_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["8_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["8_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["8_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["8_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["8_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["9_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["9_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["9_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["9_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["9_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["9_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["9_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["9_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["10_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["10_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["10_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["10_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["10_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["10_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["10_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["10_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["11_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["11_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["11_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["11_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["11_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["11_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["11_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["11_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["12_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["12_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["12_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["12_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["12_5"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["12_5"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["12_5"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["12_5"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["13_0"]) and strpos($filtered, "and (size=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (size='" . $_POST["13_0"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["13_0"]) and strpos($filtered, "and (size=") !== false) {
        $position = strpos($filtered, "size=");
        $replacement = "size='" . $_POST["13_0"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["adidas"]) and strpos($filtered, "and (brand=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (brand='" . $_POST["adidas"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["adidas"]) and strpos($filtered, "and (brand=") !== false) {
        $position = strpos($filtered, "brand=");
        $replacement = "brand='" . $_POST["adidas"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["li-ning"]) and strpos($filtered, "and (brand=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (brand='" . $_POST["li-ning"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["li-ning"]) and strpos($filtered, "and (brand=") !== false) {
        $position = strpos($filtered, "brand=");
        $replacement = "brand='" . $_POST["li-ning"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["nike"]) and strpos($filtered, "and (brand=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (brand='" . $_POST["nike"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["nike"]) and strpos($filtered, "and (brand=") !== false) {
        $position = strpos($filtered, "brand=");
        $replacement = "brand='" . $_POST["nike"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["puma"]) and strpos($filtered, "and (brand=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (brand='" . $_POST["puma"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["puma"]) and strpos($filtered, "and (brand=") !== false) {
        $position = strpos($filtered, "brand=");
        $replacement = "brand='" . $_POST["puma"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["skechers"]) and strpos($filtered, "and (brand=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (brand='" . $_POST["skechers"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["skechers"]) and strpos($filtered, "and (brand=") !== false) {
        $position = strpos($filtered, "brand=");
        $replacement = "brand='" . $_POST["skechers"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    if (isset($_POST["underarmour"]) and strpos($filtered, "and (brand=") === false) {
        $position = strpos($filtered, "group by");
        $replacement = "and (brand='" . $_POST["underarmour"] . "')";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    } else if (isset($_POST["underarmour"]) and strpos($filtered, "and (brand=") !== false) {
        $position = strpos($filtered, "brand=");
        $replacement = "brand='" . $_POST["underarmour"] . "'or ";
        $filtered = substr_replace($filtered, $replacement, $position, 0);
    }
    //Sort the products
    if (isset($_POST["newest"])) {
        $filtered = $filtered . " order by year";
    } else if (isset($_POST["high2low"])) {
        $filtered = $filtered . " order by discount_price DESC";
    } else if (isset($_POST["low2high"])) {
        $filtered = $filtered . " order by discount_price";
    } else if (isset($_POST["featured"])) {
        $filtered = $filtered;
    }
    ?>

    <?php include("database.php"); ?>
    <!-- Import Fixed Menu Sidebar -->
    <?php include('sidebar.html'); ?>
    <!-- Import Fixed Header -->
    <?php include('header.php'); ?>
    <?php include('filter.php'); ?>
    <div class="content">
        <div class="allproducts">
            <span style="font-size: 40px; font-style: italic; font-weight: bold;">SALE SHOES</span>
            <?php
            $all_products = $conn->query($filtered);
            $products = array();
            $i = 0;
            $count = 0;
            while ($result = $all_products->fetch_assoc()) {
                $products[$i] = $result;
                $i++;
            }
            $row = ceil($i / 3);
            ?>
            <table>
                <?php
                for ($i = 0; $i < $row; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 3; $j++) {
                        if ($count < count($products)) {

                            echo "<td>"; ?><form action="individual_product.php" method="post">
                    <input class="product_image" type="image" name="product_image"
                        src="<?php echo $products[$count]["image"]; ?>"
                        value="<?php echo $products[$count]["model"]; ?>"><br>
                    <div class="product_name" style="font-size:15px; font-weight: bold;">
                        <label for="product_name"><?php echo $products[$count]["name"]; ?></label><br>
                        <input type="hidden" name="product_name" value="<?php echo $products[$count]["model"]; ?>">
                    </div>
                    <div class="product_type" style="font-size:15px; opacity:0.6;">
                        <label
                            for="product_type"><?php echo $products[$count]["gender"] . "/" . $products[$count]["category"]; ?></label><br>
                        <input type="hidden" name="product_type" value="<?php echo $products[$count]["model"]; ?>">
                    </div>
                    <div class="product_price" style="font-size:15px; font-weight:normal;">
                        <?php
                                    if ($products[$count]["discount"] != 0.00) {
                                        $price = $products[$count]["price"] - ($products[$count]["price"] * $products[$count]["discount"]);
                                    ?> <label
                            style="text-decoration:line-through; opacity:0.8;"><?php echo "RM" . $products[$count]["price"]; ?></label>
                        <input type="hidden" name="product_price" value="<?php echo $products[$count]["model"]; ?>">
                        <label><?php echo "RM" . number_format("$price", 2); ?></label><?php
                                                                                                } else if ($products[$count]["discount"] == 0) {
                                                                                                    $price = $products[$count]["price"];
                                                                                                    ?><label><?php echo "RM" . $products[$count]["price"]; ?></label><?php
                                                                                                    }
                                                                                                        ?>
                        <?php
                            echo "<br><br><br>";
                            echo "</div>";
                            echo "</td>";
                            echo "</form>";
                            $count++;
                        }
                    }
                    echo "</tr>";
                }
                        ?>
            </table>
        </div>
    </div>
    <!-- Import Fixed Footer -->
    <?php include('footer.html'); ?>
    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
            if (!mybutton.classList.contains("btnEntrance")) {
                mybutton.classList.remove("btnExit");
                mybutton.classList.add("btnEntrance");
                mybutton.style.display = "block";
            }
        } else {
            if (mybutton.classList.contains("btnEntrance")) {
                mybutton.classList.remove("btnEntrance");
                mybutton.classList.add("btnExit");
                setTimeout(function() {
                    mybutton.style.display = "none";
                }, 250);
            }
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    //Filter Accordions
    window.addEventListener("DOMContentLoaded", function() {
        var expand = document.getElementsByClassName("title");
        for (var i = 0; i < expand.length; i++) {
            expand[i].classList.add("clicked");
            expand[i].addEventListener("click", function() {
                this.classList.toggle("clicked");
            })
        }
    })
    </script>
</body>

</html>