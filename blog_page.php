<!DOCTYPE html>
<html>

<head>
    <title>
        Blog
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="javascript.js"></script>
    <?php
    session_start();
    if (isset($_SESSION['gender'])) {
        $gender = $_SESSION['gender'];
    } else {
        $gender = "default";
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onload="themeColor('<?php echo $gender ?>')">
    <!-- Import Fixed Menu Sidebar -->
    <?php include('sidebar.html');
    ?>

    <!-- Import Fixed Header -->
    <?php include('header.php');
    ?>

    <!-- Import Database -->
    <?php include('database.php');
    ?>

    <!-- Contents -->
    <div class="content">

        <div class="content_blog">

            <div class="title">
                Blog
            </div>

            <hr>

            <div class="blog_form"></div>

            <h3 style="margin-top: 15px">Sneaker Releases</h3>

            <div class="form_button">
                <form action="blog.php" method="post">
                    <input type="hidden" name="blogID" value='blog03'>
                    <input type="image" name="blogID" src="photo/blog_image/aj1_ow_chicago_cover.jpg" class="form_img">
                </form>

                <div class="form_placeholder">
                    <p>OFF WHITE x AIR JORDAN 1 CHICAGO</p>
                </div>
            </div>

            <div class="form_button">
                <form action="blog.php" method="post">
                    <input type="hidden" name="blogID" value='blog01'>
                    <input type="image" name="blogID" src="photo/blog_image/gulfcover.jpg" class="form_img">
                </form>

                <div class="form_placeholder">
                    <p>NIKE SB DUNK LOW PRO GULF</p>
                </div>
            </div>

            <div class="form_button">
                <form action="blog.php" method="post">
                    <input type="hidden" name="blogID" value='blog02'>
                    <input type="image" name="blogID" src="photo/blog_image/cactusafcover.jpg" class="form_img">
                </form>

                <div class="form_placeholder">
                    <p>AIR FORCE 1 CACTUS JACK</p>
                </div>
            </div>

            <h3 style="margin-top: 40px">Guides</h3>
            <hr>

            <div class="form_button">
                <form action="blog.php" method="post">
                    <input type="hidden" name="blogID" value='blog04'>
                    <input type="image" name="blogID" src="photo/blog_image/lc_guide_cover.jpg" class="form_img">
                </form>

                <div class="form_placeholder">
                    <p>AIR JORDAN 1 LEGIT CHECK GUIDE</p>
                </div>
            </div>
        </div>


    </div>
    </div>
    <!-- Import Fixed Footer -->
    <?php include('footer.html');
    ?>


</body>

</html>