<html>
<?php
session_start();
?>

<head>
    <title>
        Login Page
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <?php
    if (isset($_SESSION['member'])) {
        header("location: ./");
    }
    $_SESSION["user"] = "member"; ?>
    <div class="user login">
        <img src="photo/login_photo.jpg" width="450px" height="533px">
        <div class="user_login">
            <?php
            if (isset($_SESSION["error_msg"])) {
                echo $_SESSION["error_msg"];
                unset($_SESSION["error_msg"]);
            }
            ?>
            <h1>Login</h1>
            <form class="user_form" action="processLogin.php" method="post">
                <br><label><b>Username</b> </label>
                <br><input type="text" placeholder="Enter Username" name="username" required>
                <br><label><b>Password</b> </label>
                <br><input type="password" placeholder="Enter Password" name="password" required>
                <br> <input type="checkbox"> Remember me
                <a class="forgot" href="#">Forgot password? </a>
                <br><input type="submit" name="login" value="Login"><br>
                <div class="signup">
                    Not a member?<a class="signup" href="signup.html">Sign up now</a>
                </div>
                <input type="hidden" name="user" value="member">
            </form>
        </div>
    </div>
</body>

</html>