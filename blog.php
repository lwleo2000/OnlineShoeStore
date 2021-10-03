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

    <?php
    if (isset($_POST["blogID"])) {
        $blogID = $_POST["blogID"];
        echo $blogID;
    } else echo "error";
    ?>

    <!-- Contents -->
    <div class="content">

        <div class="content_blog">

            <div class="date">
                <?php
                $new_date = $conn->query("SELECT blog_date FROM blog where blog_ID='$blogID'");
                while ($row = $new_date->fetch_assoc()) {
                    echo $row["blog_date"];
                }
                ?>

            </div>

            <div class="title">
                <?php
                $new_title = $conn->query("SELECT title FROM blog where blog_ID='$blogID'");
                while ($row = $new_title->fetch_assoc()) {
                    echo $row["title"];
                }
                ?>


            </div>

            <div class="main_article">
                <div class="intro">
                    <p>
                        <?php

                        $new_intro = $conn->query("SELECT intro FROM blog where blog_ID='$blogID'");
                        while ($row = $new_intro->fetch_assoc()) {
                            echo $row["intro"];
                        }
                        ?>
                    </p>
                    <img src="<?php

                                $new_img = $conn->query("SELECT intro_img FROM blog_image where blog_ID='$blogID'");
                                while ($row = $new_img->fetch_assoc()) {
                                    echo $row["intro_img"];
                                }
                                ?>">
                </div>

                <div>
                    <p>
                        <?php

                        $new_main = $conn->query("SELECT main_content FROM blog where blog_ID='$blogID'");
                        while ($row = $new_main->fetch_assoc()) {
                            echo $row["main_content"];
                        }
                        ?>
                    </p>

                </div>

                <div>
                    <img src="<?php
                                $new_img = $conn->query("SELECT sub_img FROM blog_image where blog_ID='$blogID'");
                                while ($row = $new_img->fetch_assoc()) {
                                    echo $row["sub_img"];
                                }
                                ?>">
                    <p>
                        <?php
                        $new_sub = $conn->query("SELECT sub_content FROM blog where blog_ID='$blogID'");
                        while ($row = $new_sub->fetch_assoc()) {
                            echo $row["sub_content"];
                        }
                        ?>
                    </p>
                    <?php
                    $new_product = $conn->query("SELECT img FROM blog_image where blog_ID='$blogID'");
                    echo "<table>";
                    echo "<tr>";
                    while ($row = $new_product->fetch_assoc()) {; ?><img src="<?php echo $row["img"]; ?>"><br>
                    <?php echo "</span>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    ?>

                </div>

                <div>
                    <p>
                        <?php
                        $new_conclusion = $conn->query("SELECT conclusion FROM blog where blog_ID='$blogID'");
                        while ($row = $new_conclusion->fetch_assoc()) {
                            echo $row["conclusion"];
                        }
                        ?>
                    </p>
                </div>

            </div>
            <p>Videos:</p>
            <iframe class="youtube_frame" src="<?php
                                                $new_img = $conn->query("SELECT youtubeID FROM blog_image where blog_ID='$blogID'");
                                                while ($row = $new_img->fetch_assoc()) {
                                                    echo $row["youtubeID"];
                                                }
                                                ?>">
            </iframe>


            <div class="author">

                <aside>
                    <img src="<?php
                                $new_img = $conn->query("SELECT author_img FROM blog where blog_ID='$blogID'");
                                while ($row = $new_img->fetch_assoc()) {
                                    echo $row["author_img"];
                                }
                                ?>">
                </aside>

                <div class="author_info">
                    <p>
                        Author:
                        <?php
                        $new_author = $conn->query("SELECT author FROM blog where blog_ID='$blogID'");
                        while ($row = $new_author->fetch_assoc()) {
                            echo $row["author"];
                        }
                        ?></p>
                    <p>
                        Date:
                        <?php
                        $new_date = $conn->query("SELECT blog_date FROM blog where blog_ID='$blogID'");
                        while ($row = $new_date->fetch_assoc()) {
                            echo $row["blog_date"];
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Import Fixed Footer -->
    <?php include('footer.html');
    ?>

</body>

</html>