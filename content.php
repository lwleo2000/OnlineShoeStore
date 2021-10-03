<style>
div .product_list::-webkit-scrollbar {
    height: 4px;
}

div .product_list::-webkit-scrollbar-track {
    border-radius: 10px;
    background: #f1f1f1;
}

div .product_list::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-color: #666666;
}

div .product_list::-webkit-scrollbar-thumb:hover {
    background-color: black;
}

div .product_list .btn:hover {
    background-color: white;
}

div .product_list .prev {
    background-color: white;
    color: black;
    font-size: 30px;
    position: -webkit-sticky;
    position: sticky;
    bottom: 50%;
    left: 0.3%;
    padding: 0px 10px;
    border-radius: 60%;
}

div .product_list .next {
    background-color: white;
    color: black;
    font-size: 30px;
    position: -webkit-sticky;
    position: sticky;
    left: 97.8%;
    bottom: 50%;
    padding: 0px 10px;
    border-radius: 60%;
}

div .product_list img:hover {
    opacity: 0.7;
}
</style>
<div class="container">
    <div class="slider">
        <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1" checked>
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
                <a href="#nk001">
                    <img src="photo/kobe.png" alt="zoom kobe 6">
                </a>
            </div>
            <div class="slide">
                <a href="#nk002">
                    <img src="photo/jordanwhite.png" alt="off white air jordan 1">
                </a>
            </div>
            <div class="slide">
                <a href="#ua001">
                    <img src="photo/curry6.png" alt="curry 6">
                </a>
            </div>
            <div class="slide">
                <a href="#ad001">
                    <img src="photo/nmdog.png" alt="adidas">
                </a>
            </div>
            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="slideshow-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="slideshow-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->
    </div>
    <!--image slider end-->
    <h2>FEATURED</h2>
    <a href="#nk003">
        <video class="jordan35mp4" autoplay muted loop>
            <source src="photo/jordan35.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </a>
    <a href="#pm001">
        <video class="pumaignitemp4" autoplay muted loop>
            <source src="photo/pumaignite.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </a>
    <ul class="sneakers">
        <li>Jordan XXXV</li>
        <li>Puma Ignite</li>
    </ul>
    <ul class="slogan">
        <li>It's gotta be the shoes</li>
        <li>Maximum energy return for every run</li>
    </ul>
    <ul class="button">
        <li><a href="#nk003"><button class="btn jordan35">Shop Now</button></a></li>
        <li><a href="#pm001"><button class="btn pumaignite">Shop Now</button></a></li>
    </ul>
    <h3 style="margin-left: 187px; margin-top: 250px; font-weight:bold; font-size:25px; text-align: center;
        margin-right:14%;">
        NEW ARRIVALS
    </h3><br>
    <div class="product_list" id="product_list" style="overflow-x:auto; text-align:left; position:relative;">
        <?php
    include("database.php");
    $new_product = $conn->query("SELECT * FROM product where year='2021'");
    echo "<table>";
    echo "<tr>";
    while ($row = $new_product->fetch_assoc()) {
      echo "<td>"; ?><a href="<?php echo "#" . $row["model"]; ?>"><img src="<?php echo $row["image"]; ?>" width="442"
                height="450"></a><br>
        <a href="<?php echo "#" . $row["model"]; ?>" style="text-decoration:none; color: black;">
            <div class="product_name" style="font-size:15px;">
                <?php echo $row["name"]; ?><br>
            </div>
            <div class="product_type" style="font-size:15px; opacity:0.6;">
                <?php echo $row["gender"] . "/" . $row["category"]; ?><br>
            </div>
            <div class="product_price" style="font-size:15px; font-weight:normal;">
                <?php echo "RM" . $row["price"];
        echo "</div>";
        echo "</a>";
        echo "</td>";
      }
      echo "</tr>";
      echo "</table>";
        ?>
                <button onclick="slide_left()" id="prev" type="button" class="btn prev">
                    < </button>
                        <button onclick="slide_right()" id="next" type="button" class="btn next">></button>
            </div>
    </div>

    <h3 style="margin-left: 187px; margin-top: 100px; font-weight:bold; font-size:25px; text-align: center;
        margin-right:14%;">
        Blogs
    </h3><br>
    <div class="main_db_blog content_blog" style="position: relative; bottom: 100px;">
        <div class="form_button" style="width: 30%;">
            <form action="blog.php" method="post">
                <input type="hidden" name="blogID" value='blog03'>
                <input type="image" name="blogID" src="photo/blog_image/aj1_ow_chicago_cover.jpg" class="form_img"
                    height="370px">
            </form>

            <div class="form_placeholder" style="padding-bottom: 0">
                <p>OFF WHITE x AIR JORDAN 1 CHICAGO</p>
            </div>
        </div>

        <div class="form_button" style="width: 30%;">
            <form action="blog.php" method="post">
                <input type="hidden" name="blogID" value='blog01'>
                <input type="image" name="blogID" src="photo/blog_image/gulfcover.jpg" class="form_img" height="370px">
            </form>

            <div class="form_placeholder" style="padding-bottom: 0">
                <p>NIKE SB DUNK LOW PRO GULF</p>
            </div>
        </div>

        <div class="form_button" style="width: 30%;">
            <form action="blog.php" method="post">
                <input type="hidden" name="blogID" value='blog02'>
                <input type="image" name="blogID" src="photo/blog_image/cactusafcover.jpg" class="form_img">
            </form>

            <div class="form_placeholder">
                <p>AIR FORCE 1 CACTUS JACK</p>
            </div>
        </div>
    </div>
</div>