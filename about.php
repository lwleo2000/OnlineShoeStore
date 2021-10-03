<!DOCTYPE html>
<html>

<head>
    <title>
        About Us
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

    <style>
    .content_about {
        font-family: Arial, Helvetica, sans-serif;
        text-align: left;
        margin-left: 15%;
        margin-right: 15%;
        padding-top: 3%;
        font-size: 25px;
        line-height: 1.5;
        text-align: justify;
        color: rgb(90, 90, 90);
    }

    .content_about h1 {
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
    }

    .about {
        margin-bottom: 30px;
    }

    .fa-envelope {
        background: #0072C6;
        color: white;
        cursor: pointer;
    }
    </style>
</head>

<body onload="themeColor('<?php echo $gender ?>')">
    <!-- Import Fixed Menu Sidebar -->
    <div><?php include('sidebar.html');
            ?></div>
    <!-- Import Fixed Header -->
    <div><?php include('header.php');
            ?></div>

    <!-- Contents -->
    <div class="content">
        <div class="content_about">
            <div class="about">

                <h1>About Us</h1>
                <hr>


                <p>
                    Sneakerz Freakz is a startup company that provides footwear retailing for customers within Malaysia.
                    As the pandemic hits, the retail industry suffers from a lack of customers. Thus, our company
                    provides online merchants and goods which allow customers to make purchases online without leaving
                    their house. Partnerships with brands that are in high demand among customers are established to
                    provide a large variety of products for our local customers. These partnerships also mean that
                    exclusive products are available in our store.
                    </br></br>
                    Our company aspires to be the number 1 footwear retailing store in Malaysia. We will continue to
                    establish trust towards our loyal customers and satisfy them however we could to achieve our
                    ultimate goal.
                    </br></br>
                    Stay tuned and keep looking forward to Sneakerz Freakz!
                </p>
            </div>

            <div id="contact">
                <h1>Contact Us</h1>
                <hr>

            </div>
            <?php
            include('iconBar.html');
            ?>

        </div>
    </div>

    <div class="popup">

        <div class=popup-content>
            <div id="close">+</div>

            <form action="processContact.php" id="popup-form" method="post">
                <h1>Message Us</h1>
                <hr style="margin-bottom: 20px;">

                <label for="email" style="font-weight: bold">Email</label>
                <input type="email" id="email" name="contact_email" class="inputBox">

                <label for="title" style="font-weight: bold">Title</label>
                <input type="text" id="title" name="contact_title" class="inputBox">

                <label for="message" style="font-weight: bold">Message</label>
                <textarea style=height:100px; id="message" name="contact_message" class="inputBox"></textarea>

                <button type="submit" id="send">Submit</button>
            </form>
        </div>
    </div>


    <script>
    document.getElementById("email_button").addEventListener("click", function() {
        document.querySelector(".popup").style.display = "flex";
    });
    document.getElementById("close").addEventListener("click", function() {
        document.querySelector(".popup").style.display = "none";
    });
    </script>

    <!-- Import Fixed Footer -->
    <div><?php include('footer.html');
            ?></div>
</body>

</html>