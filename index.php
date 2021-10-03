<!DOCTYPE html>
<html>

<head>
    <title>
        Sneakerz Freaks
    </title>
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="style.css">
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
    <div><?php include('sidebar.html');
            ?></div>
    <!-- Import Fixed Header -->
    <div><?php include('header.php');
            ?></div>

    <div class="content">
        <?php include('content.php');
        ?></div>

    <!-- Import Fixed Footer -->
    <div><?php include('footer.html');
            ?></div>
</body>

</html>