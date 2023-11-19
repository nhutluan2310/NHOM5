<?php session_start();
require 'Config/config.php';
if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'Layout/headerPage.php'; ?>

    <title>Lynder</title>

    <link rel="stylesheet" href="./Assets/css/style_home.css">
    <style>
        #card-container {
            position: relative;
            width: 400px;
            height: 500px;
            min-height: 30em;
            margin: 1%;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .card {
            position: absolute;
            width: 110%;
            height: 135%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            z-index: 100;
            transition: transform 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px 10px;
            /* Add margin between cards */
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-bottom: 2px solid #ddd;
        }

        .overlay {
            position: absolute;
            width: 100%;
            bottom: 0;
            left: 0;
            padding: 16px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            text-align: left;
        }

        .overlay h2,
        .overlay p {
            margin: 8px 0;
            font-size: 28px;
            color: #fff;
        }

        #buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 16px;
        }

        .overlay .button {
            padding: 8px;
            border: none;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
        }

        .overlay #like-button {
            color: darkcyan;
            font-size: 35px;
            outline: 3px solid darkcyan;

        }

        .overlay #dislike-button {
            font-size: 62px;
            color: red;
        }

        .circle {
            width: 60px;
            height: 60px;
            font-size: 62px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .active {
            color: palevioletred;
        }

        .sidebar {
            font-size: 22px;
        }

        #logo {
            font-size: 30px;
            color: #EC6EAD;
        }

        .content {
            width: 83%;
            border-top-right-radius: 10px;
        }

        .menu {
            width: 100%;
        }

        .sidebar1 {
            min-height: 50em;
        }

        .container-fluid {
            min-height: 50em;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col col-lg-3 col-md-4 col-xl-2 px-sm-2 px-0 bg-dark sidebar1">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">
                    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="position:fixed">
                        <li style="width:130%;"> <a href="<?php echo SITEURL . "home.php"; ?>" class="d-flex align-items-center justify-content-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="d-none d-sm-inline" id="logo" style="font-weight:bold;">Lynder</span>
                            </a> </li>
                        <hr class="sidebar-divider mt-2 mb-2" style="width: 190%;">
                        <li class="mt-4 nav-item "> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "home.php"; ?>"> <i class="fas fa-home"></i> <span>Home</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "search.php"; ?>"> <i class="fas fa-search"></i> <span>Find Matches</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" data-event-callback="lwPrepareUploadPlugIn" href="<?php echo SITEURL . "profile.php?user_id=" . $_SESSION['user_id']; ?>"> <i class="fas fa-user"></i> <span>My Profile</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" data-event-callback="lwPrepareUploadPlugIn" href="<?php echo SITEURL . "photo.php"; ?>"> <i class="far fa-images"></i> <span>My Photos</span> </a> </li>
                        <hr class="sidebar-divider mt-2 mb-2" style="width: 190%;">
                        <li class="nav-item active"> <a class="nav-link lw-ajax-link-action lw-action-with-url" active href="<?php echo SITEURL . "like.php?user_id=" . $user_id; ?>"> <i class="fas fa-fw fa-heart text-success"></i> <span>My Likes</span> </a> </li>
                        <li class="nav-item"> <a class="nav-link lw-ajax-link-action lw-action-with-url" href="<?php echo SITEURL . "block.php?user_id=" . $user_id; ?>"> <i class="fas fa-ban"></i> <span>Blocked Users</span> </a> </li>
                        <hr class="sidebar-divider mt-2 mb-2" style="width: 190%;">
                    </ul>
                </div>
            </div>
            <div class="content col col-lg-9 col-md-8 py-3">
                <?php include_once './Layout/menu.php' ?>
                <div class="clearfix"></div>
                <div class="content_body col col-lg-12 col-md-12 ">
                    <div class="container mt-100 mt-60">
                        <?php
                        if (isset($_GET['user_id'])) {
                            $user_id2 = $_GET['user_id'];
                            $query = "SELECT * FROM interaction Where swipee_id = '$user_id2'and status = '0'";
                            $result = mysqli_query($conn, $query);
                            $query2 = "SELECT * FROM users u JOIN location l ON u.location_id = l.location_id Where user_id='$user_id2' ";
                            $result2 = mysqli_query($conn, $query2);

                            $numRow = mysqli_num_rows($result);
                            if ($numRow == 0) {
                        ?>
                                <div class="row text-center">
                                    <div class="col-12 text-center">
                                        <div class="section-title">
                                            <h4 class="title mb-4">Sorry</h4>
                                            <p class="text-muted para-desc mx-auto mb-0">NO you like yet.</p>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <?php } else if ($numRow <> 0) {
                                echo '<div class="row text-center md-3 me-3 mb-3 card1">';
                                while ($rows = mysqli_fetch_array($result2)) {
                                ?>
                                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="team-style07">
                                            <div class="team-thumb mb-1-9">
                                                <div class="thumb"><img src="<?php if ($rows['image'] == null) echo SITEURL . "Assets/images/d-avatar.jpg";
                                                                                else echo SITEURL . "Assets/images/profile/" . $rows['image']; ?>" class="rounded-circle" alt="..."></div>
                                                <div class="team-social">
                                                </div>
                                            </div>
                                            <h3 class="h5 mb-1"><a href="<?php echo SITEURL . "profile.php?user_id=" . $user_id2; ?>"><?php echo $rows['fullname'] ?></a></h3>
                                            <p class="mb-0"><?php $timestamp = strtotime($rows['dob']);
                                                            $now = date("Y", time());
                                                            // Convert the timestamp to a formatted date
                                                            $age = ($now - date("Y", $timestamp));
                                                            echo $age; ?>, <?php if ($rows['gender'] == 0) echo "Male";
                                                                            else if ($rows['gender'] == 1) echo "Female";
                                                                            else echo "Sercet"; ?></p>
                                        </div>
                                    </div>
                            <?php }
                            }
                            ?>
                        <?php }  ?>
                    </div>
                </div>
            </div>
</body>

</html>