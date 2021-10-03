<style>
    /*Position of filter in the webpage */
    div.filter {
        position: absolute;
        max-width: 14%;
        margin-top: 172px;
        margin-left: 20px;
        background-color: white;
    }

    /*Scrollbar of filter division */
    div.filter::-webkit-scrollbar {
        width: 7px;
    }

    div.filter::-webkit-scrollbar-track {
        border-radius: 10px;
        background: white;
    }

    div.filter::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: #666666;
    }

    div.filter::-webkit-scrollbar-thumb:hover {
        background-color: black;
    }

    /*Filter of gender accordion*/
    div.filter .gender {
        position: relative;
        background-color: #f2f2f2;
    }

    div.filter .gender .title {
        position: relative;
        font-weight: bold;
        font-size: 20px;
        padding: 15px 10px 15px 10px;
    }

    div.filter .gender .title:hover {
        cursor: pointer;
    }


    div.filter .gender .title::after {
        content: '\002B';
        position: absolute;
        right: 20px;
        transition: 0.2s;
    }

    div.filter .gender .title.clicked::after {
        content: '\2212';
        transform: rotate(180deg);
    }

    div.filter .gender .title+.option {
        height: 0px;
        transition: 0.5s;
        font-size: 18px;
        overflow: hidden;
    }

    div.filter .gender .title.clicked+.option {
        height: auto;
        padding: 15px 10px 20px 10px;

    }

    div.filter .gender .option label:hover {
        cursor: pointer;
        opacity: 0.6;
    }

    /*Filter of shoes type accordion*/
    div.filter .shoes_type {
        position: relative;
        margin-top: 20px;
        background-color: #f2f2f2;
    }

    div.filter .shoes_type .title {
        position: relative;
        font-weight: bold;
        font-size: 20px;
        padding: 15px 10px 15px 10px;
    }

    div.filter .shoes_type .title:hover {
        cursor: pointer;
    }

    div.filter .shoes_type .title::after {
        content: '\002B';
        position: absolute;
        right: 20px;
        transition: 0.2s;
    }

    div.filter .shoes_type .title.clicked::after {
        content: '\2212';
        transform: rotate(180deg);
    }

    div.filter .shoes_type .title+.option {
        height: 0px;
        overflow: hidden;
        transition: 0.5s;
        font-size: 18px;
    }

    div.filter .shoes_type .title.clicked+.option {
        height: auto;
        padding: 15px 10px 20px 10px;

    }

    div.filter .shoes_type .option label:hover {
        cursor: pointer;
        opacity: 0.6;
    }

    /*Filter of shoes size accordion*/
    div.filter .size {
        position: relative;
        margin-top: 20px;
        background-color: #f2f2f2;
    }

    div.filter .size .title {
        position: relative;
        font-weight: bold;
        font-size: 20px;
        padding: 15px 10px 15px 10px;
    }

    div.filter .size .title:hover {
        cursor: pointer;
    }

    div.filter .size .title::after {
        content: '\002B';
        position: absolute;
        right: 20px;
        transition: 0.2s;
    }

    div.filter .size .title.clicked::after {
        content: '\2212';
        transform: rotate(180deg);
    }

    div.filter .size .title+.option {
        height: 0px;
        overflow: hidden;
        transition: 0.5s;
        font-size: 18px;
    }

    div.filter .size .title.clicked+.option {
        height: auto;
        padding: 15px 10px 20px 10px;

    }

    div.filter .size input {
        display: none;
    }

    div.filter .size label {
        background-color: #f2f2f2;
        display: inline-block;
        background-color: #e6e6e6;
        color: black;
        margin-bottom: 10px;
        padding: 0px 10px 0px 10px;
        font-size: 20px;
    }

    div.filter .size label:hover {
        background-color: #000000;
        color: white;
        cursor: pointer;
    }

    div.filter .size .size_btn:checked+label {
        background-color: #000000;
        color: white;
    }


    /*Filter of brand accordion*/
    div.filter .brand {
        position: relative;
        background-color: #f2f2f2;
        margin-top: 20px;
    }

    div.filter .brand .title {
        position: relative;
        font-weight: bold;
        font-size: 20px;
        padding: 15px 10px 15px 10px;
    }

    div.filter .brand .title:hover {
        cursor: pointer;
    }


    div.filter .brand .title::after {
        content: '\002B';
        position: absolute;
        right: 20px;
        transition: 0.2s;
    }

    div.filter .brand .title.clicked::after {
        content: '\2212';
        transform: rotate(180deg);
    }

    div.filter .brand .title+.option {
        height: 0px;
        transition: 0.5s;
        font-size: 18px;
        overflow: hidden;
    }

    div.filter .brand .title.clicked+.option {
        height: auto;
        padding: 15px 10px 20px 10px;

    }

    div.filter .brand .option label:hover {
        cursor: pointer;
        opacity: 0.6;
    }

    /*Sort by */

    div.sortby {
        margin-top: 165px;
        margin-left: 20px;
        position: absolute;
        right: 60px;
        background-color: white;
        width: 12%;
    }

    div.sortby .title1 {
        position: relative;
        font-weight: bold;
        padding: 15px 10px 15px 10px;
    }

    div.sortby .title1:hover {
        cursor: pointer;
    }


    div.sortby .title1::after {
        content: '\002B';
        position: absolute;
        right: 20px;
        transition: 0.2s;
    }

    div.sortby .title1.clicked::after {
        content: '\2212';
        transform: rotate(180deg);
    }

    div.sortby .title1+.option {
        height: 0px;
        transition: 0.5s;
        font-size: 18px;
        overflow: hidden;
    }

    div.sortby .title1.clicked+.option {
        height: auto;
        padding: 15px 10px 20px 10px;

    }

    div.sortby input {
        display: none;
    }

    div.sortby .option label:hover {
        cursor: pointer;
        opacity: 0.5;
    }
</style>
<?php
$option = "";
if (isset($_POST["newest"])) {
    $option = "Newest";
} else if (isset($_POST["high2low"])) {
    $option = "High to low";
} else if (isset($_POST["low2high"])) {
    $option = "Low to high";
} else if (isset($_POST["featured"])) {
    $option = "Featured";
}
?>

<form name="filter_form" id="filter_form" action="shop.php" method="post">
    <div class="sortby">
        <div class="title1" id="title1">
            sort by<?php echo ":  " . $option; ?>
        </div>
        <div class="option">
            <input class="sort_btn" type="radio" onChange="this.form.submit()" id="featured" name="featured" value="featured">
            <label for="featured" id="afeatured" value="Featured">Featured</label><br>
            <input class="sort_btn" type="radio" onChange="this.form.submit()" id="newest" name="newest" value="newest">
            <label for="newest" onclick="showtitle1()" id="anewest" value="Newest">Newest</label><br>
            <input class="sort_btn" type="radio" onChange="this.form.submit()" id="high2low" name="high2low" value="high2low">
            <label for="high2low" onclick="showtitle1()" id="ahigh2low" value="Price: High to low">Price: High to low</label><br>
            <input class="sort_btn" type="radio" onChange="this.form.submit()" id="low2high" name="low2high" value="low2high">
            <label for="low2high" onclick="showtitle1()" id="alow2high" value="Price: Low to high">Price: Low to high</label><br>
        </div>
    </div>
    <div class="filter" id="filter">
        <div class="gender" id="gender">
            <div class="title">
                GENDER
            </div>
            <div class="option">
                <?php
                $filter = $conn->query("SELECT DISTINCT gender FROM product ORDER BY gender");
                while ($row = $filter->fetch_assoc()) {
                ?> <input type="checkbox" <?php if (isset($_POST[$row["gender"]])) echo "checked='checked'"; ?> onChange="this.form.submit()" id="<?php echo $row["gender"]; ?>" name="<?php echo $row["gender"]; ?>" value="<?php echo $row["gender"]; ?>">
                    <label for="<?php echo $row["gender"]; ?>"><?php echo $row["gender"]; ?></label><br>
                <?php } ?>
            </div>
        </div>
        <div class="shoes_type" id="shoes_type">
            <div class="title">
                CATEGORY
            </div>
            <div class="option">
                <?php
                $filter = $conn->query("SELECT DISTINCT category FROM product ORDER BY category");
                while ($row = $filter->fetch_assoc()) {
                ?> <input type="checkbox" <?php if (isset($_POST[$row["category"]])) echo "checked='checked'"; ?> onChange="this.form.submit()" id="<?php echo $row["category"]; ?>" name="<?php echo $row["category"]; ?>" value="<?php echo $row["category"]; ?>">
                    <label for="<?php echo $row["category"]; ?>"><?php echo $row["category"]; ?></label><br>
                <?php } ?>
            </div>
        </div>
        <div class="size" id="size">
            <div class="title">
                SIZE - UK
            </div>
            <div class="option">
                <?php
                $filter = $conn->query("SELECT DISTINCT size FROM productquantity ORDER BY size");
                while ($row = $filter->fetch_assoc()) {
                ?> <input class="size_btn" type="checkbox" <?php if (isset($_POST[str_replace('.', '_', $row["size"])])) echo "checked='checked'"; ?> onChange="this.form.submit()" id="<?php echo str_replace('.', '_', $row["size"]); ?>" name="<?php echo str_replace('.', '_', $row["size"]); ?>" value="<?php echo str_replace('.', '_', $row["size"]); ?>">
                    <label for="<?php echo str_replace('.', '_', $row["size"]); ?>"><?php echo rtrim($row["size"], ".0"); ?></label>
                <?php } ?>
            </div>
        </div>
        <div class="brand" id="brand">
            <div class="title">
                BRAND
            </div>
            <div class="option">
                <?php
                $filter = $conn->query("SELECT DISTINCT brand FROM product ORDER BY brand");
                while ($row = $filter->fetch_assoc()) {
                ?> <input type="checkbox" <?php if (isset($_POST[str_replace(' ', '', $row["brand"])])) echo "checked='checked'"; ?> onChange="this.form.submit()" id="<?php echo str_replace(' ', '', $row["brand"]); ?>" name="<?php echo str_replace(' ', '', $row["brand"]); ?>" value="<?php echo $row["brand"]; ?>">
                    <label for="<?php echo str_replace(' ', '', $row["brand"]); ?>"><?php echo $row["brand"]; ?></label><br>
                <?php } ?>
            </div>
        </div>
    </div>
</form>
</script>