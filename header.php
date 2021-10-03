<div class="header">
    <div class="left circle_hover menu_icon">
        <a href="javascript:void(0)" onclick="openSidebar()"><img src="photo/menu.png" width=25% height=25%></a>
    </div>
    <div class="header_center img_hover">
        <a href="./"><img src="photo/logo.png" width=250px height=54px></a>
    </div>

    <div class="right">
        <?php if (isset($_SESSION['username'])) : ?>
        <a style="border-right: 2px solid white" href="#"><?php echo $_SESSION['name'] ?></a>
        <a href="logout.php">Log Out</a>
        <?php else : ?>
        <a style="border-right: 2px solid white" href="login">Login</a>
        <a href="signup">Sign Up</a>
        <?php endif ?>
    </div>

    <div class="right circle_hover">
        <a style="padding:20px 0px 0px 0px;" href="cart.php"><img src="photo/cart.png" width=50% height=50%></a>
    </div>
</div>
<div class="navbar">
    <nav>
        <ul>
            <li id="men">
                <form action="shop.php" method="post">
                    <input class="main_nav_filter" type="submit" value="Men">
                    <input type="hidden" name="men" value="men">
                </form>
                <ul class="sub-nav">
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Running">
                        <input type="hidden" name="men" value="men">
                        <input type="hidden" name="running" value="running">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Badminton">
                        <input type="hidden" name="men" value="men">
                        <input type="hidden" name="badminton" value="badminton">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Basketball">
                        <input type="hidden" name="men" value="men">
                        <input type="hidden" name="basketball" value="basketball">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Football">
                        <input type="hidden" name="men" value="men">
                        <input type="hidden" name="football" value="football">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Tennis">
                        <input type="hidden" name="men" value="men">
                        <input type="hidden" name="tennis" value="tennis">
                    </form>
                </ul>
            </li>
            <li id="women">
                <form action="shop.php" method="post">
                    <input class="main_nav_filter" type="submit" value="Women">
                    <input type="hidden" name="women" value="women">
                </form>
                <ul class="sub-nav">
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Running">
                        <input type="hidden" name="women" value="women">
                        <input type="hidden" name="running" value="running">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Badminton">
                        <input type="hidden" name="women" value="women">
                        <input type="hidden" name="badminton" value="badminton">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Basketball">
                        <input type="hidden" name="women" value="women">
                        <input type="hidden" name="basketball" value="basketball">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Football">
                        <input type="hidden" name="women" value="women">
                        <input type="hidden" name="football" value="football">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Tennis">
                        <input type="hidden" name="women" value="women">
                        <input type="hidden" name="tennis" value="tennis">
                    </form>
                </ul>
            </li>
            <li id="boys">
                <form action="shop.php" method="post">
                    <input class="main_nav_filter" type="submit" value="Boys">
                    <input type="hidden" name="boys" value="boys">
                </form>
                <ul class="sub-nav">
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Running">
                        <input type="hidden" name="boys" value="boys">
                        <input type="hidden" name="running" value="running">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Badminton">
                        <input type="hidden" name="boys" value="boys">
                        <input type="hidden" name="badminton" value="badminton">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Basketball">
                        <input type="hidden" name="boys" value="boys">
                        <input type="hidden" name="basketball" value="basketball">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Football">
                        <input type="hidden" name="boys" value="boys">
                        <input type="hidden" name="football" value="football">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Tennis">
                        <input type="hidden" name="boys" value="boys">
                        <input type="hidden" name="tennis" value="tennis">
                    </form>
                </ul>
            </li>
            <li id="girls">
                <form action="shop.php" method="post">
                    <input class="main_nav_filter" type="submit" value="Girls">
                    <input type="hidden" name="girls" value="girls">
                </form>
                <ul class="sub-nav">
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Running">
                        <input type="hidden" name="girls" value="girls">
                        <input type="hidden" name="running" value="running">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Badminton">
                        <input type="hidden" name="girls" value="girls">
                        <input type="hidden" name="badminton" value="badminton">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Basketball">
                        <input type="hidden" name="girls" value="girls">
                        <input type="hidden" name="basketball" value="basketball">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Football">
                        <input type="hidden" name="girls" value="girls">
                        <input type="hidden" name="football" value="football">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Tennis">
                        <input type="hidden" name="girls" value="girls">
                        <input type="hidden" name="tennis" value="tennis">
                    </form>
                </ul>
            </li>
            <li id="brands">BRANDS
                <ul class="sub-nav">
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Nike">
                        <input type="hidden" name="nike" value="nike">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Adidas">
                        <input type="hidden" name="adidas" value="adidas">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Puma">
                        <input type="hidden" name="puma" value="puma">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Skechers">
                        <input type="hidden" name="skechers" value="skechers">
                    </form>
                    <form action="shop.php" method="post">
                        <input class="nav_filter" type="submit" value="Under Armour">
                        <input type="hidden" name="underarmour" value="under armour">
                    </form>
                </ul>
            </li>
        </ul>
    </nav>
</div>

</html>