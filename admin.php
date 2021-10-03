<!DOCTYPE html>
<html>

<head>
    <title>
        Admin Login
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    session_start();
    ?>
    <div class="admin">
        <?php
        if (isset($_SESSION['admin'])) {
            header("location: adminDashboard.php");
        }
        ?>
        <h1>Administrator</h1>
        <?php
        if (isset($_SESSION["error_msg"])) {
            echo $_SESSION["error_msg"];
            unset($_SESSION["error_msg"]);
        }
        ?>
        <form action="processLogin.php" method="post">
            <label for="admin_name"><b>Username</b></label><br>
            <input type="text" name="admin_name" placeholder="Enter Username" required><br>
            <label for="admin_pass"><b>Password</b></label><br>
            <input type="password" name="admin_pass" placeholder="Enter Password" required><br>
            <input type="submit" name="login" value="Login">
            <input type="hidden" name="user" value="admin">
            <div class="back_home">
                <a href="./">Back to Website</a>
            </div>
        </form>
    </div>

</body>

</html>