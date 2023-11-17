<!-- Navbar Section Starts Here -->
<section class="navbar_home col-lg-12 col-md-12">
    <div class="container_home">
        <div class="menu text-right col-md-6">
            <ul>
                <li>
                    <a href="<?php echo SITEURL . "home.php"; ?>"><i class="fas fa-home fa-fw" style="font-size: 25px; padding-top:20px;"></i></a>
                </li>
                <li>
                    <a href="<?php echo SITEURL . "users-chat.php"; ?>"><i class="fas fa-comment-dots" style="font-size: 30px; padding-top:23px;"></i></a>
                </li>
                <li>
                    <a href="<?php echo SITEURL; ?>"><i class="fas fa-bolt fa-fw mr-2" style="font-size: 25px; padding-top:23px;"></i></a>
                </li>
                <li>
                    <?php
                    if (isset($_SESSION['user-login'])) {
                        echo '<a href="' . SITEURL . 'profile.php?user_id='.$_SESSION['user_id'].'"style="font-size: 25px; padding-top:23px;">' . $_SESSION['user-login'] . '</a>';
                    } else {
                        echo '<a href="' . SITEURL . 'login-user.php">Login</a>';
                    }
                    ?>
                </li>
                <li>
                    <a href="<?php echo SITEURL . "Action/logout.php?logout_id=" . $_SESSION['user_id']; ?>" style="font-size: 23px; padding-top:23px;" class="logout">logout <i class="fas fa-door-open"></i></a>
                </li>
            </ul>

        </div>

        <div class="clearfix"></div>
    </div>
</section>
<!-- Navbar Section Ends Here -->